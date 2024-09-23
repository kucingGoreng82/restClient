<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('ktp','Ktp::index');
$routes->get('ktm','ktmm::index');

$routes->get('input','PesanController::input');
$routes->get('proses','PesanController::proses');

$routes->get('/loginMahasiswa', 'LoginMahasiswa::input');
$routes->post('/proses', 'ProsesData::proses');

$routes->get('/asisten', 'AsistenController::index');

$routes->get('todolist', 'TodolistController::index');
$routes->post('todolist/simpan', 'TodolistController::simpanKegiatan');
$routes->get('todolist/selesai/(:segment)','TodolistController::selesaiKegiatan');
$routes->get('todolist/hapus/(:segment)','TodolistController::hapusKegiatan');