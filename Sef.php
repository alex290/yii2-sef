<?php

namespace alex290\sef;

use Yii;

/**
 * This is the model class for table "sef".
 *
 * @property integer $id
 * @property string $link
 * @property string $link_sef
 */
class Sef extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sef';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['link_sef'], 'required'],
            [['link', 'link_sef'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'link' => 'Link',
            'link_sef' => 'Link Sef',
        ];
    }
}
