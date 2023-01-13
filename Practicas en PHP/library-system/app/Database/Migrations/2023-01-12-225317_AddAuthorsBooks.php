<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAuthorsBooks extends Migration
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
            'author_id' => [
                'type'          => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
            ],
            'book_id' => [
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

        $this->forge->createTable('authors__books');
    }

    public function down()
    {
        $this->forge->dropTable('authors__books');
    }
}
