<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCountry extends Migration
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
                'type' => 'VARCHAR',
                'constraint'    => 250,
            ],
            'iso' => [
                'type'          => 'VARCHAR',
                'constraint'    => 250,
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
        $this->forge->createTable('countries');
    }

    public function down()
    {
        $this->forge->dropTable('countries');
    }
}
