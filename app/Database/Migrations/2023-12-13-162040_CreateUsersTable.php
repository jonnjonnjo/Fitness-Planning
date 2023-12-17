<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\RawSql;
use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
 
    public function up()
    {
        $forge = \Config\Database::forge();
        $forge->createDatabase('fitness-plan-',true);
        $this->forge->addField([
            "id" => [
                "type" => "INT",
                "constraint" => 11,
                "unsigned" => true,
                "notNull" => true,
                "auto_increment" => true,
            ],
            "firstname" => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "notNull" => true,
            ],
            "lastname" => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "notNull" => true,
            ],
            "email" => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "notNull" => true,
            ],
            "password" => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "notNull" => true,
            ],
            "created_at" => [
                'type' => 'TIMESTAMP',
                'null' => false,
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
                'default' => null,
                'on_update' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'height' => [
                'type' => 'INT',
                'default' => null,
            ],
            'weight' => [
                'type' => 'INT',
                'default' => null,
            ],
            'age' => [
                'type' => 'INT',
                'default' => null,
            ]
        ]);

        // height VARCHAR(255),
        // weight VARCHAR(255),
        // age INT,

        $this->forge->addPrimaryKey("id");
        $this->forge->createTable('users', true);
    }

    public function down()
    {
        //$this->forge->dropTable('users');
    }
}
