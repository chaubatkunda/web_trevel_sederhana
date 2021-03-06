<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';

$route['tetangKami']    = 'about';
$route['destinasi']     = 'wisata';
$route['kontak']        = 'kontak';
// !Auth
$route['auth']     = 'auth';
$route['logout']   = 'auth/logout';
$route['daftar']   = 'auth/daftar';

// !BackEnd
$route['admin']         = 'backend/admin';
$route['user']          = 'backend/user';
$route['profil']        = 'backend/user/profile';
$route['gantiPassword'] = 'backend/user/gantipass';

// !Paket Wisata
$route['admin/tempat_wisata']           = 'backend/wisata';
$route['admin/create_wisata']           = 'backend/wisata/add';
$route['admin/edit.wisata/(:num)']      = 'backend/wisata/edit/$1';
$route['admin/hapus.wisata/(:num)']     = 'backend/wisata/delete/$1';

$route['admin/kategori_wisata']         = 'backend/wisata/kategori';
$route['admin/add.kategori']            = 'backend/wisata/addkategori';
$route['admin/edit.kategori/(:num)']          = 'backend/wisata/editkategori/$1';
$route['admin/hapus.katwisata/(:num)']        = 'backend/wisata/delete_kategori/$1';

$route['admin/wisatawan']           = 'backend/wisatawan';
$route['admin/wisatawan/create']    = 'backend/wisatawan/create';
$route['admin/wisatawan/edit/(:num)']    = 'backend/wisatawan/edit/$1';
$route['admin/wisatawan/hapus/(:num)']    = 'backend/wisatawan/delete/$1';

$route['admin/transaksi']           = 'backend/transaksi';
$route['admin/konfirmasi/(:any)']   = 'backend/transaksi/konfirmasi/$1';
$route['admin/simpan_konfirmasi']   = 'backend/transaksi/simpan';

$route['admin/info']   = 'backend/info';
$route['admin/info/create']   = 'backend/info/create';
$route['admin/info/edit/(:num)']   = 'backend/info/edit/$1';
$route['admin/info/hapus/(:num)']   = 'backend/info/delete/$1';

// !User Tempat Wisata
$route['kategori.wisata']       =  'backend/booking';
// $route['tempat.wisata']         =  'backend/user/booking';
$route['paket.wisata/(:num)']   =  'backend/booking/paket/$1';
$route['booking/(:num)']        =  'backend/booking/booking_wisata/$1';
$route['konfirmasi']            =  'backend/booking/konfirmasi';

$route['transaksi']             =  'backend/booking/transaksi';

$route['pesan/(:num)']          =  'backend/booking/pesan/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
