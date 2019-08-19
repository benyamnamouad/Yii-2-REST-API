<?php

use yii\db\Migration;

/**
 * Class m180704_161835_init
 */
class m180704_161835_init extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}',[
           'id'=>$this->primaryKey()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180704_161835_init cannot be reverted.\n";

        return false;
    }
    */
}
