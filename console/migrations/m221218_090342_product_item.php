<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m221218_090342_product_item
 */
class m221218_090342_product_item extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product_item', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->null(),
            'vendor_code' => $this->string('255')->null(),
            'name' => $this->string('255')->notNull(),
            'barcode' => $this->string('255')->null(),
            'price' => $this->integer(),
            'new_price' => $this->integer(),
            'count' => $this->integer(),
        ]);

        $this->addForeignKey(
            'fk-product_item-category_id',
            'product_item',
            'category_id',
            'product_category',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product_item');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221218_090342_product_item cannot be reverted.\n";

        return false;
    }
    */
}
