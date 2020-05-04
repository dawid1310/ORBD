<?php
$app = [];
$app['config'] = require 'config.php';
require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/Queries.php';
require 'core/Kolo.php';
require 'core/Trojkat.php';
require 'core/Kwadrat.php';
require 'core/Prostokat.php';
require 'core/Pieciokat.php';
require 'core/Szesciokat.php';
$app['database'] = new Queries(
    Connection::make($app['config']['database'])
);