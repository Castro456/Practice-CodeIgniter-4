<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users_table';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';

    protected $allowedFields = ['firstname', 'lastname', 'email', 'pass_word', 'phone', 'dob', 'age'];
}