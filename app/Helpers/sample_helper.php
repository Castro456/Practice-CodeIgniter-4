<?php

if (!function_exists("print_custom_helper")) { // Check if the function exists.
    function print_custom_helper($message)
    {
        echo "<h1>$message</h1>";
    }
}