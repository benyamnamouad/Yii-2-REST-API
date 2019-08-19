<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user_allownace`.
 */
class m180718_074746_create_user_allownace_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {$tableOptions = 'CHARACTER SET utf8 COLLATE
utf8_general_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%user_allowance}}', [
            'user_id' => $this->primaryKey(),
            'allowed_number_requests' => $this->integer(10)
                ->notNull(),
            'last_check_time' => $this->integer(10)
                ->notNull()
        ], $tableOptions);
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user_allownace');
    }
}
