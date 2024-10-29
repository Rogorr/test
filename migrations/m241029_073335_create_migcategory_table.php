<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%migcategory}}`.
 */
class m241029_073335_create_migcategory_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%migcategory}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'alias' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%migcategory}}');
    }
}
