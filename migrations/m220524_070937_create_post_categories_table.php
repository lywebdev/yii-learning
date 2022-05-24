<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post_categories}}`.
 */
class m220524_070937_create_post_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post_categories}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'description' => $this->text()->null()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%post_categories}}');
    }
}
