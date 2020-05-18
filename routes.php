<?php

$router->get('' , 'controllers/index.php');
$router->get('home' , 'controllers/index.php');
$router->post('addKolo', 'controllers/addKolo.php');
$router->post('addKwadrat', 'controllers/addKwadrat.php');
$router->post('addProstokat', 'controllers/addProstokat.php');
$router->post('addTrojkat', 'controllers/addTrojkat.php');
$router->post('addPieciokat', 'controllers/addPieciokat.php');
$router->post('addSzesciokat', 'controllers/addSzesciokat.php');

$router->get('add', 'controllers/add.php');
$router->post('add', 'controllers/add.php');

$router->get('select', 'controllers/select.php');
$router->get('delete', 'controllers/delete.php');
$router->post('delete', 'controllers/delete.php');