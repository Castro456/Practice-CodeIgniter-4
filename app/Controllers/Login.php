<?php

namespace App\Controllers;
use App\Models\LoginModel;

/**
 * 
 * This class contains the methods for login page
 * 
 */
class Login extends BaseController
{

    private $email;
    private $password;
    private $user_details;
    private $loginModel;

    public function __construct()
    {
        $this->db = \Config\Database::connect(); // To load the database file
    }


    public function index()
    {
        if (session('user_validated') == true) {
            return redirect()->to('/dashboard'); // /dashboard is a named route
        }

        else {
            echo view('includes/header');
            echo view('login/login_view');
        }
    }


    public function auth()
    {
        $rules = [ // Checks for the form validation rules
            'email' => 'required|valid_email',
            'password' => 'required'
        ];

        $messages = [ // Custom message is displayed if the form fields does not meet up to the rules.
            "email" => [
                "required" => "Provide your email address",
                "valid_email" => "Provide a valid email address"
            ],
            "password" => [
                "required" => "Provide your password"
            ]
            ];

        if (! $this->validate($rules,$messages)) { // If the validation is false it takes the custom message and display it in the view.
            echo view('login/login_view',[
                'validation' => $this->validator,
            ]);
        } 

        else {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $check_email = $email;
            $this->loginModel = new LoginModel(); // Creating instance of an object for LoginModel
            $data = $this->loginModel->check_email($check_email);
            
            if ($data == false) {
                $error['msg'] =  "Email or Password is Incorrect1";
                echo view('login/login_view',$error);          
            }

            else {
                $user_password = $this->loginModel->get_user_password($email);

                $check_password = $this->loginModel->check_password($user_password,$password);

                if ($check_password == true) {
                    $this->user_details = $this->loginModel->get_user_details($email);
                    
                    $this->set_session();
                    
                    return redirect()->to('/dashboard');
                }
                else {
                    $error['msg'] =  "Email or Password is Incorrect";
                    echo view('login/login_view',$error);
                }
            }
        } 
    }


    public function set_session()
    {
        $data = array(
            "user_id" => $this->user_details['id'],
            "user_firstname" => $this->user_details['firstname'],
            "user_lastname" => $this->user_details['lastname'],
            "user_validated" => true
        );
        session()->set($data); // To set the session
    }


    public function logout()
    {
        session()->destroy();
        return redirect()->to('/'); 
    }


}
