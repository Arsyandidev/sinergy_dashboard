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
$routes->setDefaultController('AuthController');
// $routes->setDefaultMethod('login');
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
$routes->match(['get', 'post'], 'login', 'AuthController::index', ["filter" => "noauth"]);
// Admin routes
$routes->group("staff", ["filter" => "auth"], function ($routes) {
    //operasional
    $routes->get("/", "Staff\StaffController::index");
    $routes->get('/operasional', 'Staff\OperasionalController::index');
    $routes->post('/operasional/store', 'Staff\OperasionalController::store');
    $routes->get('operasional/show/(:num)', 'Staff\OperasionalController::show/$1');
    $routes->get('operasional/edit/(:num)', 'Staff\OperasionalController::edit/$1');
    $routes->put('operaisonal/update/(:num)', 'Staff\OperasionalController::update/$1');
    $routes->delete('operasional/delete/(:num)', 'Staff\OperasionalController::delete/$1');

    // gudang
    $routes->get('/gudang/permintaanBarang', 'Gudang::permintaanBarang');
    $routes->get('gudang/ubah/(:num)', 'Gudang::ubah/$1');
    $routes->get('gudang/detail/(:num)', 'Gudang::detail/$1');
    $routes->delete('gudang/hapus/(:num)', 'Gudang::hapus/$1');
    $routes->match(['post'],'/gudang/tambah/', 'Gudang::tambah');
    $routes->get('/gudang/detail/(:num)', 'Gudang::detail/$1');
    $routes->get('/gudang', 'Gudang::index');
});
// Editor routes
$routes->group("manager", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "Manager\ManagerController::index");
    $routes->get('/operasional', 'Manager\OperasionalController::index');
    $routes->get('/operasional/verifikasi/(:num)', 'Manager\OperasionalController::verifikasi/$1');
});
// Finance routes
$routes->group("finance", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "Finance\FinanceController::index");
    $routes->get('/operasional', 'Finance\FinanceController::index');
    $routes->get('/operasional/verifikasi/(:num)', 'Finance\OperasionalController::verifikasi/$1');
});
// Gudang
$routes->group('gudang', ['filter' => 'auth'], function ($routes) {
    $routes->get('/gudang/kelolaInventaris', 'Gudang\Gudang::kelolaInventaris');
    $routes->get('/gudang', 'Gudang\Gudang::index');
});
$routes->get('logout', 'AuthController::logout');
// $routes->get('/', 'Home::index');


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
