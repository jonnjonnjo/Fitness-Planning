<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data =[
            "firstname" => "jonn@gmail.com",
            "lastname" => "jonn@gmail.com",
            "email" => "jonn@gmail.com",
            "password"=> password_hash("jonn@gmail.com",PASSWORD_DEFAULT)
        ];

        $this->db->table("users")->insert($data);
    }
}
