<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Welcome\Welcome::index');

//route auth
$routes->get('/register', 'Auth\Register::index');
$routes->post('/register/process', 'Auth\Register');
$routes->get('/login', 'Auth\Auth::index');
$routes->post('/login/process', 'Auth\Auth::process');

$routes->match(['get', 'post'], '/register', 'Auth\Register::process');
$routes->match(['get', 'post'], '/login', 'Auth\Auth::process');

//route home
$routes->get('/home/guru', 'Home\Guru::index');
$routes->get('/home/siswa', 'Home\Siswa::index');
$routes->get('/home/orangtua', 'Home\OrangTua::index');

//route admin
$routes->get('/admin', 'Admin\Admin::index');
$routes->get('/admin/registration', 'Admin\Registration::index');
$routes->get('/admin/student', 'Admin\Student::index');
$routes->get('/admin/teacher', 'Admin\Teacher::index');
$routes->get('/admin/parents', 'Admin\Parents::index');

//route status
$routes->get('/status/guru', 'Status\Guru::index');
$routes->get('/status/siswa', 'Status\Siswa::index');
$routes->get('/status/orangtua', 'Status\OrangTua::index');

//route learning progress
$routes->get('/progress/guru', 'Progress\Guru::index');
$routes->get('/progress/siswa', 'Progress\Siswa::index');
$routes->get('/progress/orangtua', 'Progress\OrangTua::index');

//route try out
$routes->get('/tryout/siswa', 'TryOut\TryOut::index');
$routes->get('/tryout/guru', 'TryOut\TryOutGuru::index');

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
