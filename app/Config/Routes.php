<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\AdminController;
use App\Controllers\PenjualController;
use App\Controllers\Pembeli;
use Myth\Auth\Config\Auth as AuthConfig;
use Config\Auth;


/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index'); 
$routes->get('/home', 'Home::index');
$routes->get('/newarrival', 'Home::newarrival');   
$routes->get('/shop', 'Home::shop');   
$routes->get('/collection', 'Home::collection');
$routes->get('/detail-produk/(:any)', 'Home::detailProduk/$1');
$routes->get('/checkout/(:any)', 'Home::checkoutProduk/$1');
   
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

$routes->get('/user', [Pembeli::class, 'user'], ['filter' => 'role:user']);
$routes->get('/user/keranjang', [Pembeli::class, 'keranjang'], ['filter' => 'role:user']);
$routes->get('/user/pembelian', [Pembeli::class, 'pemesanan'], ['filter' => 'role:user']);
$routes->get('/user/pengembalian', [Pembeli::class, 'pengembalian'], ['filter' => 'role:user']);
$routes->get('/user/profile', [Pembeli::class, 'profile'], ['filter' => 'role:user']);



// Myth:Auth routes file.
$routes->group('', ['namespace' => '\App\Controllers'], static function ($routes) {
    // Load the reserved routes from Auth.php
    $config         = config(AuthConfig::class);
    $reservedRoutes = $config->reservedRoutes;

    // Login/out
    $routes->get($reservedRoutes['login'], 'AuthController::login', ['as' => $reservedRoutes['login']]);
    $routes->post($reservedRoutes['login'], 'AuthController::attemptLogin');
    $routes->get($reservedRoutes['logout'], 'AuthController::logout');

    // Registration
    $routes->get($reservedRoutes['register'], 'AuthController::register', ['as' => $reservedRoutes['register']]);
    $routes->post($reservedRoutes['register'], 'AuthController::attemptRegister');
    $routes->get($reservedRoutes['registerSeller'], 'AuthController::registerSeller', ['as' => $reservedRoutes['registerSeller']]);
    $routes->post($reservedRoutes['registerSeller'], 'AuthController::saveSeller');

    // Activation
    $routes->get($reservedRoutes['activate-account'], 'AuthController::activateAccount', ['as' => $reservedRoutes['activate-account']]);
    $routes->get($reservedRoutes['resend-activate-account'], 'AuthController::resendActivateAccount', ['as' => $reservedRoutes['resend-activate-account']]);

    // Forgot/Resets
    $routes->get($reservedRoutes['forgot'], 'AuthController::forgotPassword', ['as' => $reservedRoutes['forgot']]);
    $routes->post($reservedRoutes['forgot'], 'AuthController::attemptForgot');
    $routes->get($reservedRoutes['reset-password'], 'AuthController::resetPassword', ['as' => $reservedRoutes['reset-password']]);
    $routes->post($reservedRoutes['reset-password'], 'AuthController::attemptReset');
});