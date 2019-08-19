<?php

use yii\db\Migration;

/**
 * Class m180704_162529_init2
 */
class m180704_162529_init2 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%project}}',[
            'id'=>$this->primaryKey()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180704_162529_init2 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180704_162529_init2 cannot be reverted.\n";

        return false;
    }
    */
}
