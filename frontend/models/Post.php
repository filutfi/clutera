<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "wp_posts".
 *
 * @property string $ID
 * @property string $post_author
 * @property string $post_date
 * @property string $post_content
 * @property string $post_title
 * @property string $short_desc
 * @property string $post_status
 * @property string $comment_status
 * @property string $post_modified
 * @property string $link
 * @property string $comment_count
 * @property integer $id_kat
 * @property string $gambar
 * @property string $posisi
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wp_posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_author', 'comment_count', 'id_kat'], 'integer'],
            [['post_date', 'post_modified'], 'safe'],
            [['post_content', 'post_title', 'short_desc', 'id_kat', 'gambar', 'posisi'], 'required'],
            [['post_content', 'post_title'], 'string'],
            [['short_desc'], 'string', 'max' => 500],
            [['post_status', 'comment_status'], 'string', 'max' => 20],
            [['link'], 'string', 'max' => 255],
            [['gambar'], 'string', 'max' => 200],
            [['posisi'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'post_author' => 'Post Author',
            'post_date' => 'Post Date',
            'post_content' => 'Post Content',
            'post_title' => 'Post Title',
            'short_desc' => 'Short Desc',
            'post_status' => 'Post Status',
            'comment_status' => 'Comment Status',
            'post_modified' => 'Post Modified',
            'link' => 'Link',
            'comment_count' => 'Comment Count',
            'id_kat' => 'Id Kat',
            'gambar' => 'Gambar',
            'posisi' => 'Posisi',
        ];
    }
}
