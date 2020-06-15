<?php
$typ = $app['database']->selectAll('sys.typ');
require 'views/selectForModyfication.view.php';