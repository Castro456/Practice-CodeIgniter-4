<?php

namespace App\Controllers;

/**
 * 
 * Have to load this file in the helper : sample
 * Here sample is the helper file name : sample_helper (_helper is important)
 * 
 */
class CustomHelper extends BaseController
{
    public function load_helper()
    {
        print_custom_helper("Hello form Custom Helper");
    }
}