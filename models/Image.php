<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "image".
 *
 * @property int $img_id
 * @property resource $img
 */
class Image extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['img'], 'required'],
            [['img'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'img_id' => 'Img ID',
            'img' => 'Img',
        ];
    }
}
