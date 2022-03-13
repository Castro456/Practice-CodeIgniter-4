<?php

namespace App\Models;

use CodeIgniter\Model;

class ListUserModel extends Model
{
    /**
     * CodeIgniter Model
     * Drawback is each time all the allowed fields gets selected.
     */
    protected $table      = 'users_table';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';

    protected $allowedFields = ['firstname', 'lastname', 'email', 'dob', 'age'];
}