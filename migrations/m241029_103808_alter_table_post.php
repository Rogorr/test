<?php

use yii\db\Migration;

/**
 * Class m241029_103808_alter_table_post
 */
class m241029_103808_alter_table_post extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('post', 'created_at', $this->integer()->notNull()->defaultValue(time()));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m241029_103808_alter_table_post cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241029_103808_alter_table_post cannot be reverted.\n";

        return false;
    }
    */
}
