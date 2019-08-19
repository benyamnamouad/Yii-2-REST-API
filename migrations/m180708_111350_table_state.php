<?php

use yii\db\Migration;

/**
 * Class m180708_111350_table_state
 */
class m180708_111350_table_state extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('state',[
           'id' => $this->primaryKey(),
            'state' => $this->string(),
            'timestamp' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('state');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180708_111350_table_state cannot be reverted.\n";

        return false;
    }
    */
}
