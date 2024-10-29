<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%category}}`
 */
class m241029_103638_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'excerpt' => $this->string()->notNull(),
            'content' => $this->text()->notNull(),
            'img' => $this->string()->defaultValue(null),
            'created_at' => $this->datetime()->notNull(),
            'keywords' => $this->string()->defaultValue(null),
            'description' => $this->string()->defaultValue(null),
        ]);

        // creates index for column `category_id`
        $this->createIndex(
            '{{%idx-post-category_id}}',
            '{{%post}}',
            'category_id'
        );

        // add foreign key for table `{{%category}}`
        $this->addForeignKey(
            '{{%fk-post-category_id}}',
            '{{%post}}',
            'category_id',
            '{{%category}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%category}}`
        $this->dropForeignKey(
            '{{%fk-post-category_id}}',
            '{{%post}}'
        );

        // drops index for column `category_id`
        $this->dropIndex(
            '{{%idx-post-category_id}}',
            '{{%post}}'
        );

        $this->dropTable('{{%post}}');
    }
}
