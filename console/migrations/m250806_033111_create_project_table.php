<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%project}}`.
 */
class m250806_033111_create_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%project}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'tech_stack' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'start_date' => $this->integer()->notNull(),
            'end_date' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%project}}');
    }
}
