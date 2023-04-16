<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cars_users}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%cars}}`
 * - `{{%users}}`
 */
class m230416_133556_create_junction_table_for_cars_and_users_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cars_users}}', [
            'cars_id' => $this->integer(),
            'users_id' => $this->integer(),
            'created_at' => $this->dateTime(),
            'PRIMARY KEY(cars_id, users_id)',
        ]);

        // creates index for column `cars_id`
        $this->createIndex(
            '{{%idx-cars_users-cars_id}}',
            '{{%cars_users}}',
            'cars_id'
        );

        // add foreign key for table `{{%cars}}`
        $this->addForeignKey(
            '{{%fk-cars_users-cars_id}}',
            '{{%cars_users}}',
            'cars_id',
            '{{%cars}}',
            'id',
            'CASCADE'
        );

        // creates index for column `users_id`
        $this->createIndex(
            '{{%idx-cars_users-users_id}}',
            '{{%cars_users}}',
            'users_id'
        );

        // add foreign key for table `{{%users}}`
        $this->addForeignKey(
            '{{%fk-cars_users-users_id}}',
            '{{%cars_users}}',
            'users_id',
            '{{%users}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%cars}}`
        $this->dropForeignKey(
            '{{%fk-cars_users-cars_id}}',
            '{{%cars_users}}'
        );

        // drops index for column `cars_id`
        $this->dropIndex(
            '{{%idx-cars_users-cars_id}}',
            '{{%cars_users}}'
        );

        // drops foreign key for table `{{%users}}`
        $this->dropForeignKey(
            '{{%fk-cars_users-users_id}}',
            '{{%cars_users}}'
        );

        // drops index for column `users_id`
        $this->dropIndex(
            '{{%idx-cars_users-users_id}}',
            '{{%cars_users}}'
        );

        $this->dropTable('{{%cars_users}}');
    }
}
