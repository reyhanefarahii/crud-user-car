<?php
namespace app\models;
use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

class Cars_Users extends ActiveRecord{
    public static function tableName()
    {
        return 'cars_users';
    }

    public function rules()
    {
        return [
            [['cars_id', 'users_id'], 'required'],
         ];
    }
}
