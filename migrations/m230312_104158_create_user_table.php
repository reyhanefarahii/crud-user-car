<?php
use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m230312_104158_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
            $this->createTable('users', [
                'id' => $this->primaryKey(),
                'name' => $this->string(),
                'family' => $this->string(),
                'national_code' => $this->string(10)->unique(),
            ]);
     
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users');
    }
}
