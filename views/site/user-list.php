<?php

use app\models\User;
use yii\data\ActiveDataProvider;

$query = User::find()->where(['status' => 1]);

$provider = new ActiveDataProvider([
    'query' => $query,
    'pagination' => [
        'pageSize' => 10,
    ],
    'sort' => [
        'defaultOrder' => [
            'created_at' => SORT_DESC,
            'title' => SORT_ASC, 
        ]
    ],
]);

// returns an array of Post objects
$posts = $provider->getModels();

?>