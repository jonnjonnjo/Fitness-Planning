<?php

namespace App\Database\Migrations;
use CodeIgniter\Database\RawSql;
use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" =>[
                "type" =>"INT",
                "constraint"=>11,
                "unsigned"=>true,
                "notNull"=>true,
                "auto_increment"=>true,
            ],
            "firstname"=>[
                "type"=>"VARCHAR",
                "constraint"=>255,
                "notNull"=>true,
            ],
            "lastname"=>[
                "type"=>"VARCHAR",
                "constraint"=>255,
                "notNull"=>true,
            ],
            "email"=>[
                "type"=>"VARCHAR",
                "constraint"=>255,
                "notNull"=>true,
            ],
            "password"=>[
                "type"=>"VARCHAR",
                "constraint"=>255,
                "notNull"=>true,
            ],
            "created_at"=>[
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
        ]);

        $this->forge->addPrimaryKey("id");
        $this->forge->createTable('users');
    }

    public function down()
    {
        //$this->forge->dropTable('users');
    }
}
