<?php

use yii\grid\GridView;
use yii\helpers\Html;
?>
 
<style>
table th,td{
    padding: 10px;
    border: 1px solid black;
}
</style>
 
<?= Html::a('Create', ['student/create'], ['class' => 'btn btn-success']); ?>
 
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        'id',
        [
            'attribute' => 'name',
            'value' => function ($users) {
                return $users->name;
            },
            'label' => 'Name'
        ],
        'family',
        'national_code',
    ],
]) ?>

