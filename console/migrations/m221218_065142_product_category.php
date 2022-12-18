<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m221218_065142_product_category
 */
class m221218_065142_product_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product_category', [
            'id' => $this->primaryKey(),
            'name' => $this->string('255')->notNull(),
            'status' => $this->tinyInteger(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product_category');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221218_065142_product_category cannot be reverted.\n";

        return false;
    }
    */
}
