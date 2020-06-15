<?php

$router->get('' , 'controllers/index.php');
$router->get('home' , 'controllers/index.php');

$router->get('add', 'controllers/add.php');
$router->post('add', 'controllers/add.php');
$router->get('select', 'controllers/select.php');
$router->post('select', 'controllers/select.php');
$router->post('display', 'controllers/display.php');
$router->get('sfm', 'controllers/selectForModyfication.php');
$router->get('delete', 'controllers/delete.php');
$router->post('delete', 'controllers/delete.php');
$router->get('modify', 'controllers/modify.php');
$router->post('modify', 'controllers/modify.php');
$router->post('applyModyfication', 'controllers/applyModyfication.php');

$router->get('addOBJ', 'controllers/addOBJ.php');
$router->post('addOBJ', 'controllers/addOBJ.php');
$router->get('selectOBJ', 'controllers/selectOBJ.php');
$router->post('selectOBJ', 'controllers/selectOBJ.php');
$router->post('displayOBJ', 'controllers/displayOBJ.php');
$router->get('deleteOBJ', 'controllers/deleteOBJ.php');
$router->post('deleteOBJ', 'controllers/deleteOBJ.php');
$router->get('modifyOBJ', 'controllers/modifyOBJ.php');
$router->post('modifyOBJ', 'controllers/modifyOBJ.php');
$router->post('applyModyficationOBJ', 'controllers/applyModyficationOBJ.php');
$router->get('sfmOBJ', 'controllers/selectForModyficationOBJ.php');