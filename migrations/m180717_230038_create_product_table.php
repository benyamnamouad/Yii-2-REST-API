<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m180717_230038_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
       /*  $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE
utf8_general_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(64)->notNull(),
            'price' => $this->integer(20)->notNull(),
        ], $tableOptions);
        $this->batchInsert('{{%product}}', ['id',
            'name','price'], [
            [1, 'Blender Philips HR2100/00', 7900],
            [2, "Moulin À Fruit Glacée HF114,
",
                8400],
            [3, 'JATA - Aspirateur AP999 ', 11500],
            [4, 'JATA Blendeur En Verre 1,7L ', 7350],
            [5, 'Nespresso Cafetière Nespresso - Taupe YY1540FD', 16100],
            [6, 'Panasonic - Mélangeur-Broyeur', 9600],
            [7, 'Panasonic - Aspirateur 1900w', 16500],
            [8, 'Condor Pétrin Mono-Fontion - Rouge', 17400],

        ]);*/


        $this->createTable('product', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product');
    }
}
