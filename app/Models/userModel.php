<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['name', 'email'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_ at';

    // Validation
    protected $validationRules      = [
        'name' => 'required|alpha_numeric_space|min_length[3]',
        'email' => 'required|valid_email|is_unique[users.email]'
    ];
    protected $validationMessages   = [
        'email' =>[
            'is_unique' => 'Lo sentimos, tu correo ya esta siendo usado por otro usuario'
        ]
    ];
    protected $skipValidation     = false;
    
}