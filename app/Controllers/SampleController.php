<?php

namespace App\Controllers;

use App\Models\UserModel;

/**
 * 
 * This class contains so of the sample works between model and controller
 * 
 */
class SampleController extends BaseController
{

    public function __construct()
    {
        $this->db = \Config\Database::connect(); //Database connection in .env file
    }

    public function model_data()
    {
        $userModel = new UserModel();
        $user_id = 7;
        $users = $userModel->find($user_id); // find and return the row where id=7. This will only return the allowed fields in the model.
        echo "<pre>";
        print_r($users);
    }

    public function model_list()
    {
        $userModel = new UserModel();
        $users = $userModel->list_users();
        echo "<pre>";
        print_r($users);
    }

    public function getData()
    {
        $data = $this->db->table("users_table");
        $data = $data->select("email");
        // $data = $data->where("id",7);
        $builder = $data->get()->getResultArray();
        echo "<pre>";
        print_r($builder);
    }


    public function index()
    {
        return view('welcome_message');
    }
}
