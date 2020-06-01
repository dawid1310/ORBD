<?php
$typ = $app['database']->selectAll('sys.typ');
require 'views/select.view.php';
$radio = $_POST['select'];
echo $radio;
