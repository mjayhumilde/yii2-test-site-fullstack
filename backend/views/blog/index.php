<?php

use common\models\Blog;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\BlogSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Blogs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Blog'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'title',
            [
                'attribute' => 'description',
                'format' => 'html',
                'value' => function ($model) {
                    // Truncate the description for a cleaner display in the grid
                    return \yii\helpers\StringHelper::truncateWords($model->description, 20);
                },
            ],
            // [
            //     'attribute' => 'image_cover',
            //     'format' => 'html',
            //     'value' => function ($model) {
            //         return Html::img($model->image_cover, ['style' => 'width: 100px;']);
            //     },
            // ],
            'created_at:datetime',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Blog $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>
</div>