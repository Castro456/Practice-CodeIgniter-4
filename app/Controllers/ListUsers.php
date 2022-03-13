<?php

namespace App\Controllers;
use App\Models\ListUserModel;
/**
 * 
 * This class contains method to list all users.
 */
class ListUsers extends BaseController
{
    public function list_users()
    {
        $ListUser = new ListUserModel();
        echo view('includes/header');
        echo view('list/list_view',array(
            'users' => $ListUser->paginate(5), // paginate is a CI built-in function, in here paginate(5) will load only five rows of data in page, the remaining will be displayed in next page
            'pager' => $ListUser->pager // This pager fn provides the paging option to the page. Provides 1..2..3.... and so on numbers, by clicking on that can view next set of tasks.

            //And there is a line to add in app/pager.php file
            // 'full_pagination' => 'template/full_pagination',
        ));
    }
}