<?php

namespace codexten\yii\modules\chat\migrations;

use bubasuma\simplechat\migrations\Migration;

/**
 * Class m151121_105453_message_table
 *
 * @since 1.0
 */
class m151121_105453_message_table extends Migration
{
    public function getTableOptions()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        return $tableOptions;
    }

    public function up()
    {
        $this->createTable('{{%chat_message}}', [
            'id' => $this->bigPrimaryKey()->unsigned(),
            'sender_id' => $this->integer()->notNull(),
            'receiver_id' => $this->integer()->notNull(),
            'text' => $this->string(1020)->notNull(),
            'is_new' => $this->boolean()->defaultValue(true),
            'is_deleted_by_sender' => $this->boolean()->defaultValue(false),
            'is_deleted_by_receiver' => $this->boolean()->defaultValue(false),
            'created_at' => $this->integer(),
        ], $this->tableOptions);
        $tableName = $this->db->getSchema()->getRawTableName('{{%chat_message}}');
        $this->addForeignKey(
            "fk-$tableName-sender_id",
            '{{%chat_message}}',
            'sender_id',
            '{{%user}}',
            'id',
            'NO ACTION',
            'CASCADE'
        );
        $this->addForeignKey(
            "fk-$tableName-receiver_id",
            '{{%chat_message}}',
            'receiver_id',
            '{{%user}}',
            'id',
            'NO ACTION',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropTable('{{%chat_message}}');
    }
}
