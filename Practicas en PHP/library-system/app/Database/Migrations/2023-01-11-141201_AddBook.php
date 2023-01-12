<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBook extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type'          => 'VARCHAR',
                'constraint'    => '250',
                'unsigned'       => true,
            ],
            'edition' => [
                'type'          => 'TEXT',
                'null'          => true,
            ],
            'author_id' => [
                'type'          => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
            ],
            'created_at' => [
                'type'          => 'VARCHAR',
                'constraint'    => 250,
                'null'          => true,
            ],
            'updated_at' => [
                'type' => 'VARCHAR',
                'constraint'    => 250,
                'null'          => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('author_id', 'authors', 'id', 'CASCADE');
        $this->forge->createTable('books');
    }

    public function down()
    {
        $this->forge->dropTable('books');
    }
}
