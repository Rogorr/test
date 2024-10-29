<?php

use yii\db\Migration;

/**
 * Class m241029_080745_alter_table_migcategory
 */
class m241029_080745_alter_table_migcategory extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('migcategory', 'title', $this->string()->notNull());
        $this->alterColumn('migcategory', 'alias', $this->string()->notNull());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m241029_080745_alter_table_migcategory cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241029_080745_alter_table_migcategory cannot be reverted.\n";

        return false;
    }
    */
}
