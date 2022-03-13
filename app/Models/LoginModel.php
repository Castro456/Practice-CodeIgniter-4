<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{

    /**
     * 
     * CodeIgniter Query Builder
     * 
     */

    public function __construct()
    {
        $db = \Config\Database::connect();
        $this->builder = $db->table('users_table'); // Loads the table
    }



    public function check_email($email)
    {
        $data = $this->builder->select('email');
        $data = $data->where('email',$email);
        $query = $data->get()->getRowArray(); //gets the single row of data in an array.
        if ($query)
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    public function get_user_password($email)
    {
        $data = $this->builder->select('pass_word');
        $data = $data->where('email',$email);
        $query = $data->get()->getRowArray();
        return $query['pass_word'];
    }


    public function check_password($db_password,$password)
    {
        
        $login = false;

        if (password_verify($password,$db_password))
        {
            $login = true;
            return $login;
        }

        else 
        {
            return $login;
        }

    }


    public function get_user_details($email)
    {
        $data = $this->builder->select('id, firstname, lastname, phone, dob, age');
        $data = $data->where('email',$email);
        $query = $data->get()->getRowArray();
        return $query;
    }
}