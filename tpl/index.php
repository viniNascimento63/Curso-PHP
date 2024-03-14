<?php
require_once('vendor/autoload.php');

// namespace
use Rain\Tpl;

// config
$config = array(
    "tpl_dir"       => "templates/", // pasta para templates
    "cache_dir"     => "cache/", // pasta cache
    "debug"         => false, // set to false to improve the speed
);

Tpl::configure($config);

// Add PathReplace plugin (necessary to load the CSS with path replace)
// Tpl::registerPlugin( new Tpl\Plugin\PathReplace() );

// create the Tpl object
$tpl = new Tpl;

// assign a variable
$tpl->assign("name", "Obi Wan Kenoby");

// assign a variable
$tpl->assign('php_version', PHP_VERSION);

// assign an array
$tpl->assign("week", array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"));

// draw the template
$tpl->draw("index"); // Já é esperado extensão html, logo não precisa escrever ".html"
