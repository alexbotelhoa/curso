<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 20/12/2019
 * Time: 13:53
 */

require_once ("vendor/autoload.php");

use Rain\Tpl;

// config
$config = array(
    "tpl_dir"       => "templates/",
    "cache_dir"     => "cache/"
);

Tpl::configure( $config );

// Add PathReplace plugin (necessary to load the CSS with path replace)
Tpl::registerPlugin( new Tpl\Plugin\PathReplace() );

// create the Tpl object
$tpl = new Tpl;

// assign a variable
$tpl->assign( "name", "Curso de PHP 7" );
$tpl->assign("version", PHP_VERSION);

// assign an array
#$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );

// draw the template
$tpl->draw( "index" );


