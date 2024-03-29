<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

 /* --------------------------------------------------------------------
    (:any)      Coincidirá con cualquier carácter que pasemos a través de la URL.
    (:segment)  Igual que el anterior excluyendo el /.
    (:num)      Match con cualquier entero.
    (:alpha)    Match con cualquier carácter del alfabeto.
    (:alphanum) Match con cualquier carácter del alfabeto o número.
    (:hash)
 -------------------------------------------------------------------- */


// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Login::index');
$routes->get('/login', 'Login::index');
$routes->post('/logearse', 'Login::verificar');
$routes->get('/application', 'Application::index');

$routes->post('/accesos', 'Application::accesos');
$routes->post('/getroles', 'Application::getroles');
$routes->post('/asignarol', 'Application::asignarol');
$routes->post('/setpass', 'Application::setpass');
$routes->add('/cerrarsesion', 'Application::salir');
$routes->add('/testing', 'Application::testing');

// * -------------------------------------------------------------------
$routes->post('/inscribir', 'Torneo::inscribir');
$routes->post('/ins', 'Torneo::instorneo');
$routes->add('/inscribirme', 'Login::ainscribir');



$routes->post('/folders', 'FolderController::index');

$routes->post('/folders/(:num)/files', 'FolderController::files/$1');

$routes->post('/folders/show-files', 'FolderController::show_files');

$routes->post('/folders/create', 'FolderController::create');

$routes->post('/folders/delete-file', 'FolderController::delete_file');

$routes->post('/folders/upload-file', 'FolderController::upload_file');

$routes->post('/folders/change-file-permission', 'FolderController::change_file_permission');



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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
