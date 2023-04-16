<?php

use yii\db\Migration;

/**
 * Class m230416_104836_cars
 */
class m230416_104836_cars extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
            $this->createTable('cars', [
                'id' => $this->primaryKey(),
                'name' => $this->string(),
                'color' => $this->string(),
            ]);
     
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('cars');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230416_104836_cars cannot be reverted.\n";

        return false;
    }
    */
}
