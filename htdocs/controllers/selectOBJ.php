<?php
$typ = $app['database']->selectAll('sys.typ');
require 'views/selectOBJ.view.php';
$radio = $_POST['select'];
echo $radio;
