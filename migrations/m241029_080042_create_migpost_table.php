<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%migpost}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%migcategory}}`
 */
class m241029_080042_create_migpost_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%migpost}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'excerpt' => $this->string()->notNull(),
            'content' => $this->text()->notNull(),
            'img' => $this->string()->defaultValue(Null),
            'created_at' => $this->datetime()->notNull(),
            'keywords' => $this->string()->defaultValue(null),
            'description' => $this->string()->defaultValue(null),
        ]);

        // creates index for column `category_id`
        $this->createIndex(
            '{{%idx-migpost-category_id}}',
            '{{%migpost}}',
            'category_id'
        );

        // add foreign key for table `{{%migcategory}}`
        $this->addForeignKey(
            '{{%fk-migpost-category_id}}',
            '{{%migpost}}',
            'category_id',
            '{{%migcategory}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%migcategory}}`
        $this->dropForeignKey(
            '{{%fk-migpost-category_id}}',
            '{{%migpost}}'
        );

        // drops index for column `category_id`
        $this->dropIndex(
            '{{%idx-migpost-category_id}}',
            '{{%migpost}}'
        );

        $this->dropTable('{{%migpost}}');
    }
}
