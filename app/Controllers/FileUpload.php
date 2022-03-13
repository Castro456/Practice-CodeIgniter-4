<?php

namespace App\Controllers;

/**
 * 
 * This class is contains file upload method
 * 
 */
class FileUpload extends BaseController
{
    public function file_upload()
    {
        if ($this->request->getMethod() == "post") { // This file_upload method is used for both get and post request, for each request each process is done so post method check is necessary.
            $session = session();
            $files = $this->request->getFile('file'); // CI build-in function 'getFile()' gets the file form html form name.
            // print_r($files);
            $valid_file_types = array("image/png", "image/jpeg", "image/jpg"); // Only allowed formats 
            $file_type = $files->getClientMimeType();
            if (in_array($file_type, $valid_file_types)) {
                $name = $files->getName(); // CI built-in function to get the name of the file.
                if ($files->move('public/images', $name)) { // Then moves that file to Asset side folder public/images.
                    // echo "<h1>File Uploaded</h1>";
                    $session->setFlashdata("success","File Uploaded");
                }
                else {
                    // echo "<h1>File Upload Unsuccessful</h1>";
                    $session->setFlashdata("error","File Upload Unsuccessful");
                }
            }
            else {
                // echo "<h1>Upload only Image files</h1>";
                $session->setFlashdata("error","Upload only Image files");
            }

            return redirect()->to(site_url('my-file'));

            // echo $files->getSize('mb'); // 1.23
            // echo $files->getExtension(); // jpg
            // echo $files->getType(); // image/jpg
        }
        return view('files/file_upload');
    }
}