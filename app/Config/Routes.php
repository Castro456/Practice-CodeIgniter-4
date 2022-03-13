<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Login::index');
// $routes->get('/login', 'Home::index');
$routes->get('/get-data', 'LoginController::getData');
$routes->get('/model', 'LoginController::model_data');
// $routes->get('/list-users', 'LoginController::model_list');
// $routes->get('/list-users', 'LoginController::model_list');

$routes->get('/logout', 'Login::logout');
// $routes->get('/validate', 'Login::auth');

$routes->get('/sam', 'Login::sam');
$routes->get('/Login/validate_email', 'Login::validate_email');


$routes->get('/dashboard', 'DashboardController::index');

$routes->match(['get', 'post'], '/save-form', 'SaveForm::save_form');
$routes->match(['get', 'post'], '/my-file', 'FileUpload::file_upload');

$routes->get('/custom-helper', 'CustomHelper::load_helper');

$routes->get('/list-users', 'ListUsers::list_users');
// $routes->get('/set_session', 'Login::set_session');
// $routes->get('/validate', 'Login::auth');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
