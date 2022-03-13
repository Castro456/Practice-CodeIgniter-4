<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
    public function index()
    {
        if (session('user_validated') == true) {
            echo view('includes/header'); //loads the header file which has the asset file links
            echo view('dashboard/home');
        }

        else {
            return redirect()->to('/');
        }
    }
}