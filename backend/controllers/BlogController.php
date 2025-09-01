<?php

namespace backend\controllers;

use common\models\Blog;
use backend\models\BlogSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\web\Response;
use yii\helpers\Url;
use yii\helpers\FileHelper;
use Yii;

/**
 * BlogController implements the CRUD actions for Blog model.
 */
class BlogController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::class,
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Blog models.
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BlogSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Blog model.
     * @param int $id
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Blog model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Blog();

        if ($this->request->isPost) {
            $transaction = Yii::$app->db->beginTransaction();
            try {
                if ($model->load($this->request->post())) {
                    $model->imageFile = UploadedFile::getInstance($model, 'imageFile');

                    if ($model->upload() && $model->save(false)) {
                        $transaction->commit();
                        Yii::$app->session->setFlash('success', 'Blog post created successfully.');
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                }
            } catch (\Exception $e) {
                $transaction->rollBack();
                Yii::$app->session->setFlash('error', 'Failed to create blog post. An error occurred.');
                Yii::error($e->getMessage(), __METHOD__);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Blog model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldImage = $model->image_cover;

        if ($this->request->isPost) {
            $transaction = Yii::$app->db->beginTransaction();
            try {
                if ($model->load($this->request->post())) {
                    $model->imageFile = UploadedFile::getInstance($model, 'imageFile');

                    if ($model->imageFile) {
                        $imagePath = Yii::getAlias('@backend/web') . $oldImage;
                        if (file_exists($imagePath) && !is_dir($imagePath)) {
                            FileHelper::unlink($imagePath);
                        }
                        if ($model->upload() && $model->save(false)) {
                            $transaction->commit();
                            Yii::$app->session->setFlash('success', 'Blog post updated successfully.');
                            return $this->redirect(['view', 'id' => $model->id]);
                        }
                    } else {
                        $model->image_cover = $oldImage;
                        if ($model->save(false)) {
                            $transaction->commit();
                            Yii::$app->session->setFlash('success', 'Blog post updated successfully.');
                            return $this->redirect(['view', 'id' => $model->id]);
                        }
                    }
                }
            } catch (\Exception $e) {
                $transaction->rollBack();
                Yii::$app->session->setFlash('error', 'Failed to update blog post. An error occurred.');
                Yii::error($e->getMessage(), __METHOD__);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Blog model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $imagePath = Yii::getAlias('@backend/web') . $model->image_cover;

        if (file_exists($imagePath) && !is_dir($imagePath)) {
            FileHelper::unlink($imagePath);
        }
        $model->delete();

        Yii::$app->session->setFlash('success', 'Blog post deleted successfully.');
        return $this->redirect(['index']);
    }

    /**
     * Handles image uploads from the CKEditor.
     * @return array
     */
    public function actionUploadImage()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $uploadedFile = UploadedFile::getInstanceByName('upload');

        if ($uploadedFile) {
            $path = Yii::getAlias('@backend/web/uploads/blog_content/');
            if (!is_dir($path)) {
                FileHelper::createDirectory($path);
            }
            $imageName = uniqid() . '.' . $uploadedFile->extension;
            if ($uploadedFile->saveAs($path . $imageName)) {
                $url = Url::to('@web/uploads/blog_content/' . $imageName, true);
                return [
                    'uploaded' => 1,
                    'fileName' => $imageName,
                    'url' => $url,
                ];
            }
        }
        return ['uploaded' => 0, 'error' => ['message' => 'Upload failed.']];
    }

    /**
     * Finds the Blog model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id
     * @return Blog the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Blog::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
