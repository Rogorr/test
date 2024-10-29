<?php

use yii\db\Migration;

/**
 * Class m241029_081438_alter_table_migpost
 */
class m241029_081438_alter_table_migpost extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('migpost', 'created_at', $this-> integer()->notNull()->defaultValue(time()));
        $this->update('migpost', ['created_at' => time()], ['created_at' => null]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m241029_081438_alter_table_migpost cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241029_081438_alter_table_migpost cannot be reverted.\n";

        return false;
    }
    */
}
