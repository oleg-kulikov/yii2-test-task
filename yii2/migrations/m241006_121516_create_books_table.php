<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%books}}`.
 */
class m241006_121516_create_books_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%books}}', [
            'id' => $this->primaryKey()->unsigned(),
            'name' => $this->string(128)->notNull()->unique(),
            'issuedAt' => 'YEAR NOT NULL',
            'description' => $this->text()->notNull(),
            'isbn' => $this->string(17)->notNull(),
            'imagePath' => $this->string(128)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%books}}');
    }
}
