<?php

$routes->get('admin','\Modules\Admin\Controllers\Admin::index');
$routes->get('admin/content','\Modules\Admin\Controllers\Content::index');
$routes->get('admin/content/(:segment)','\Modules\Admin\Controllers\Content::index/$1');
$routes->get('admin/content/(:segment)/(:any)','\Modules\Admin\Controllers\Content::index/$1/$2');
// $routes->get('admin/content/view/(:segment)','\Modules\Admin\Controllers\Content::view/$1');
