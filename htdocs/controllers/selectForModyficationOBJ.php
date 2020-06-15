<?php
$typ = $app['database']->selectAll('sys.typ');
require 'views/selectForModificationOBJ.view.php';