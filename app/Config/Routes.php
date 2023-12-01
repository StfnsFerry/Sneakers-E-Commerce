<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\AdminController;

use App\Controllers\PenjualController;

use App\Controllers\Pembeli;


/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index'); 
$routes->get('/home', 'Home::index');
$routes->get('/newarrival', 'Home::newarrival');   
$routes->get('/shop', 'Home::shop');   
$routes->get('/collection', 'Home::collection');
   



$routes->get('/admin', [AdminController::class, 'index'], ['filter' => 'role:admin']);
$routes->get('/admin/index', [AdminController::class, 'index'], ['filter' => 'role:admin']);
$routes->get('/admin/toko', [AdminController::class, 'toko'], ['filter' => 'role:admin']);
$routes->get('/admin/transaksi', [AdminController::class, 'transaksi'], ['filter' => 'role:admin']);
$routes->get('/admin/pengembalian', [AdminController::class, 'pengembalian'], ['filter' => 'role:admin']);


$routes->get('/penjual', [PenjualController::class, 'index'], ['filter' => 'role:seller']);
$routes->get('/penjual/pesanan', [PenjualController::class, 'pesanan'], ['filter' => 'role:seller']);
$routes->get('/penjual/produk', [PenjualController::class, 'produk'], ['filter' => 'role:seller']);
$routes->get('/penjual/transaksi', [PenjualController::class, 'transaksi'], ['filter' => 'role:seller']);
$routes->post('/penjual/create', [PenjualController::class, 'create'], ['filter' => 'role:seller']);
$routes->put('/penjual/(:any)', [PenjualController::class, 'update'], ['filter' => 'role:seller']);
$routes->delete('/penjual/(:any)', [PenjualController::class, 'destroy'], ['filter' => 'role:seller']);

$routes->get('/user', [Pembeli::class, 'index'], ['filter' => 'role:user']);
$routes->get('/user/keranjang', [Pembeli::class, 'keranjang'], ['filter' => 'role:user']);
$routes->get('/user/pembelian', [Pembeli::class, 'pemesanan'], ['filter' => 'role:user']);
$routes->get('/user/pengembalian', [Pembeli::class, 'pengembalian'], ['filter' => 'role:user']);
$routes->get('/user/profile', [Pembeli::class, 'profile'], ['filter' => 'role:user']);
$routes->get('/user/editprofile', [Pembeli::class, 'edit_profile'], ['filter' => 'role:user']);
$routes->put('/user/profile', [Pembeli::class, 'profile'], ['filter' => 'role:user']);
