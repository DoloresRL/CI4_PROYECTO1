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
$routes->get('/', 'Home::index');
$routes->get('hola-mundo', 'HolaMundo::index');
$routes->get('hola-mundo2', 'HolaMundo::desdeSubCarpeta');
$routes->get('insertar-ejemplo', 'Users::insert');
$routes->get('modificar-ejemplo', 'Users::update');
$routes->get('modificar-ejemplo', 'Users::updateWhere');
$routes->get('save-ejemplo', 'Users::save');
$routes->get('eliminar-ejemplo', 'Users::delete');
$routes->get('purge-ejemplo', 'Users::purgeDeletedRecords');
$routes->get('insertarEjemploInvalido', 'Users::insertUserInvalid');
$routes->get('obtenerRegistroEjemplo', 'Users::obtenerRegistro');
$routes->get('formulario', 'Users::formulario');
$routes->get('listarUsuarios', 'Users::listar');
$routes->post('guardarUsuario', 'Users::guardar');
$routes->get('editarUsuario', 'Users::editar');
$routes->get('eliminarUsuario', 'Users::eliminar');
$routes->get('imagenManipulacion', 'Users::imagenManipulacion');



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
