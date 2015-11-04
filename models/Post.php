<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property string $title
 * @property integer $create_at
 * @property integer $update_at
 * @property integer $user_id
 * @property integer $reply_at
 * @property integer $last_reply_id
 * @property resource $content
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_at', 'update_at', 'user_id', 'reply_at', 'last_reply_id'], 'integer'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'user_id' => 'User ID',
            'reply_at' => 'Reply At',
            'last_reply_id' => 'Last Reply ID',
            'content' => 'Content',
        ];
    }
}
