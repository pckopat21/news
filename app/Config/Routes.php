<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers\Admin');
$routes->setDefaultController('Dashboard');
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
$routes->get('/', 'Dashboard::index',["filter" => "adminfilter"]);
$routes->get('/personel', 'Personel::index',["filter" => "adminfilter"]);
$routes->get('/personel/(:alpha)/(:num)', 'Personel/$1/$2::index',["filter" => "adminfilter"]);
$routes->get('/personeller', 'Personeller::index',["filter" => "adminfilter"]);
$routes->get('/personel_listesi', 'personel_listesi::index',["filter" => "adminfilter"]);
$routes->get('/personel_listesi/(:alpha)/(:num)', 'personel_listesi/$1/$2::index',["filter" => "adminfilter"]);
$routes->get('/izin', 'izin::index',["filter" => "adminfilter"]);
$routes->get('/ayar', 'ayar::index',["filter" => "adminfilter"]);
$routes->get('/ayar/(:alpha)/(:num)', 'ayar/$1/$2::index',["filter" => "adminfilter"]);
$routes->get('/izin_kullanim', 'izin_kullanim::index',["filter" => "adminfilter"]);
$routes->get('/izin_tanim', 'izin_tanim::index',["filter" => "adminfilter"]);
$routes->get('/unvan_tanim', 'unvan_tanim::index',["filter" => "adminfilter"]);
$routes->get('/kullanici_tanim', 'kullanici_tanim::index',["filter" => "adminfilter"]);
$routes->get('/gorevyeri_tanim', 'gorevyeri_tanim::index',["filter" => "adminfilter"]);
$routes->get('/dashboard', 'Dashboard::index',["filter" => "adminfilter"]);
$routes->get('yazdir/(:alpha)/(:num)', 'Yazdir::Yazdir/$1/$2',["filter" => "adminfilter"]);
//$routes->add('personel_listesi/(:num)', 'Personel_listesi::index/$1');
//$routes->add('personel_listesi/(:num)', 'Personel_listesi::filtered/$1');

$routes->group("admin", function ($routes){///admini siliyoruz çünkü başlık admin zaten
    $routes->get('login', 'Admin::login',["filter"=>"exadminfilter"]);//bu satırı sonradan ekledim login işlemlerinin yönlendirme kısmı
    $routes->post('login_form', 'Admin::login_form');//bu satırı sonradan ekledim login işlemleri post edilen kısmı
    $routes->get('logout', 'Admin::logout');
});

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
