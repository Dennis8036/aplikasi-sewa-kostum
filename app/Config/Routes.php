<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->add('/Home/dashboard','Home::dashboard');
$routes->add('/Home/dashboardcustomer','Home::dashboardcustomer');
$routes->add('/Home/kostum','Home::kostum');
$routes->add('/Home/tambahkostum','Home::tambahkostum');
$routes->add('/Home/aksi_t_kostum','Home::aksi_t_kostum');
$routes->add('/Home/hapus_kostum/(:num)','Home::hapus_kostum/$1');	
$routes->add('/Home/hapus_lelang/(:num)','Home::hapus_lelang/$1');	
$routes->add('/Home/e_kostum/(:num)','Home::e_kostum/$1');
$routes->add('/Home/aksi_e_kostum','Home::aksi_e_kostum');
$routes->add('/Home/login','Home::login');
$routes->add('/Home/aksi_login','Home::aksi_login');
$routes->add('/Home/lelang','Home::lelang');
$routes->add('/Home/tambahlelang','Home::tambahlelang');
$routes->add('/Home/aksi_t_lelang','Home::aksi_t_lelang');
$routes->add('/Home/e_lelang/(:num)','Home::e_lelang/$1');
$routes->add('/Home/aksi_e_lelang','Home::aksi_e_lelang');

$routes->add('/Home/admin','Home::admin');
$routes->add('/Home/tambahadmin','Home::tambahadmin');
$routes->add('/Home/aksi_t_admin','Home::aksi_t_admin');
$routes->add('/Home/hapus_admin/(:num)','Home::hapus_admin/$1');
$routes->add('/Home/e_admin/(:num)','Home::e_admin/$1');
$routes->add('/Home/aksi_e_admin','Home::aksi_e_admin');

$routes->add('/Home/petugas','Home::petugas');
$routes->add('/Home/tambahpetugas','Home::tambahpetugas');
$routes->add('/Home/aksi_t_petugas','Home::aksi_t_petugas');
$routes->add('/Home/hapus_petugas/(:num)','Home::hapus_petugas/$1');
$routes->add('/Home/e_petugas/(:num)','Home::e_petugas/$1');
$routes->add('/Home/aksi_e_petugas','Home::aksi_e_petugas');

$routes->add('/Home/sewa','Home::sewa');
$routes->add('/Home/tambahsewa','Home::tambahsewa');
$routes->add('/Home/aksi_t_sewa','Home::aksi_t_sewa');
$routes->add('/Home/hapus_sewa/(:num)','Home::hapus_sewa/$1');
$routes->add('/Home/e_sewa/(:num)','Home::e_sewa/$1');
$routes->add('/Home/aksi_e_sewa','Home::aksi_e_sewa');

$routes->add('/Home/customer','Home::customer');
$routes->add('/Home/tambahcustomer','Home::tambahcustomer');
$routes->add('/Home/aksi_t_customer','Home::aksi_t_customer');
$routes->add('/Home/hapus_customer/(:num)','Home::hapus_customer/$1');
$routes->add('/Home/e_customer/(:num)','Home::e_customer/$1');
$routes->add('/Home/aksi_e_customer','Home::aksi_e_customer');
$routes->add('/Home/history','Home::history');
$routes->add('/Home/pdf','Home::pdf');
$routes->add('/Home/pdfkostum','Home::pdfkostum');
$routes->add('/Home/aksi_excel','Home::aksi_excel');

$routes->add('/Home/excel','Home::excel');
$routes->add('/home/excel/(:num)','Home::excel/$1');

$routes->add('/Home/excellelang','Home::excellelang');
$routes->add('/home/excellelang/(:num)','Home::excellelang/$1');

$routes->add('/Home/Bid/(:num)','Home::Bid/$1');
$routes->add('/Home/aksi_penawaran','Home::aksi_penawaran');
// $routes->add('/Home/print','Home::print');

