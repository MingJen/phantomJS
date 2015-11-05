<?php
/** @var Composer\Autoload\ClassLoader $loader */
$loader = require __DIR__ . '/../vendor/autoload.php';
$loader->addPsr4('Google\\', __DIR__ . '/Google/');
ini_set('display_errors',1);
error_reporting(E_ALL);