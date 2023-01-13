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
                'constraint'    => 250,
            ],
            'edition' => [
                'type'          => 'TEXT',
                'null'          => true,
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
        $this->forge->createTable('books');
    }

    public function down()
    {
        $this->forge->dropTable('books');
    }
}
