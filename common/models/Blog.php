<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "blog".
 */
class Blog extends ActiveRecord
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::class,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg'],
        ];
    }
    public function getAuthorName()
    {
        return 'John Doe';  // Return a hardcoded name, or fetch from related User model if you have one
    }

    public function getCommentsCount()
    {
        return 35;  // Example, you can fetch the actual count from the comments table
    }


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Blog Title',
            'description' => 'Description',
            'image_cover' => 'Image Cover',
            'imageFile' => 'Upload Blog Cover Image',
        ];
    }

    /**
     * Saves the uploaded image file.
     * @return bool whether the file was uploaded successfully
     */
    // In common/models/Blog.php

    public function upload()
    {
        if ($this->validate()) {
            // Use the frontend accessible path
            $imageName = uniqid(true) . '.' . $this->imageFile->extension;
            $imagePath = Yii::getAlias('@frontend/web/uploads/blog_covers/') . $imageName;

            if ($this->imageFile->saveAs($imagePath)) {
                // Save the relative URL for the frontend to access the image
                $this->image_cover = '/uploads/blog_covers/' . $imageName;
                return true;
            } else {
                return false;
            }
        }
        return false;
    }
}
