<?php
use yii\helpers\Html;
?>
 
<style>
table th,td{
    padding: 10px;
    border: 1px solid black;
}

</style>
 
<?= Html::a('Create', ['student/create'], ['class' => 'btn btn-success']); ?>
 
<table>
    <tr>
        <th>name</th>
        <th>family</th>
        <th>national code</th>
    </tr>
    <?php foreach($model as $field){ ?>
    <tr>
        <td><?= $field->name; ?></td>
        <td><?= $field->family; ?></td>
        <td><?= $field->national_code; ?></td>
        <td><?= Html::a("Edit", ['users/edit', 'id' => $field->id]); ?> | <?= Html::a("Delete", ['users/delete', 'id' => $field->id]); ?></td>
    </tr>
    <?php } ?>
</table>

