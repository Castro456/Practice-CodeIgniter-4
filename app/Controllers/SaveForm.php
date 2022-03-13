<?php

namespace App\Controllers;
use App\Models\UserModel;

/**
 * 
 * This class contains to take form data values and store it in database.
 * 
 */
class SaveForm extends BaseController
{
    public function save_form()
    {
        if ($this->request->getMethod() == 'post') {
           $form_data = $this->request->getVar(); // Gets the value form the view page while submitting.
           $userModel = new UserModel();
           $data = array(
               "firstname" => $form_data['firstname'],
               "lastname" => $form_data['lastname'],
               "email" => $form_data['email'],
               "pass_word" => $form_data['pass_word'],
               "phone" => $form_data['phone'],
               "dob" => $form_data['dob'],
               "age" => $form_data['age']
           );
        //    print_r($form_data); 
            $session = session();

            if($userModel->insert($form_data)) { // Inserting user data into database.
                $session->setflashdata('success','Data inserted Successfully');
                // setflashdata only remains at first run and then disappears. Useful in displaying error/messages in the view
            }
            else {
                $session->setflashdata('error','Data is insert Unsuccessful');
                //  echo "<h1> Please Try Again! </h1>";
            }
        }
        return view('site/save_form');
    }
}