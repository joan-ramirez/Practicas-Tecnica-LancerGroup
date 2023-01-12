<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAuthor extends Migration
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
            'name' => [
                'type'          => 'VARCHAR',
                'constraint'    => '100',
            ],
            'surname' => [
                'type'          => 'VARCHAR',
                'constraint'    => '100',
            ],
            'country_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true
            ],
            'created_at' => [
                'type' => 'VARCHAR',
                'constraint'    => 250,
                'null'          => true,
            ],
            'updated_at' => [
                'type' => 'VARCHAR',
                'constraint'    => 250,
                'null'          => true,
            ],
            'deleted_at' => [
                'type' => 'VARCHAR',
                'constraint'    => 250,
                'null'          => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('country_id', 'countries', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('authors');
    }

    public function down()
    {
        $this->forge->dropTable('authors');
    }
}
