<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['firstname', 'lastname', 'email', 'password', 'updated_at'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    protected function beforeInsert(array $data)
    {
        $data = $this->passwordHash($data);
        return $data;
    }

    protected function beforeUpdate(array $data)
    {
        $data = $this->passwordHash($data);
 
        return $data;
    }

    protected function passwordHash(array $data)
    {
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }
        return $data;
    }

    public function getUserAttribute($userId){
        $builder = $this->db->table('users');
        $builder->select('height,weight,age');
        $builder->where('id', $userId);
        $query = $builder->get();

        if ($query->getNumRows() > 0) {
            return $query->getRow(0); 
        } else {
            return false; 
        }
    }

    public function updateUserAttribute($userId,$data){
        $builder = $this->db->table('users');
        $array = [
            'firstname'   => $data['firstname'],
            'lastname'=>$data['lastname'],
            'height'=>$data['height'],
            'weight'=>$data['weight'],
            'age'=>$data['age']
        ];
        $builder->set($array);
        $builder->where('id',$userId);
        $builder->update();
    
    }




}

