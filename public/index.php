<?php


//require 'config\config.php';
/*define('DIRECTORY_SEPERATOR','/')
//define('ROOT', 'ec'.DIRECTORY_SEPERATOR);
//define('APP','app'.DIRECTORY_SEPERATOR);
define('VIEW','view'.DIRECTORY_SEPERATOR);
define('MODEL', 'model'.DIRECTORY_SEPERATOR);
define('DATA',dirname(__DIR__).DIRECTORY_SEPERATOR.'data'.DIRECTORY_SEPERATOR);
define('COMMON',dirname(__DIR__).DIRECTORY_SEPERATOR.'common'.DIRECTORY_SEPERATOR);
define('CONTROLLER',dirname(__DIR__).DIRECTORY_SEPERATOR.'controller'.DIRECTORY_SEPERATOR);
$modules=[ROOT,APP,COMMON,CONTROLLER,DATA,VIEW,MODEL];

set_include_path(get_include_path().PATH_SEPARATOR.implode(PATH_SEPARATOR, modules));
//implode returns the string of an elements of an array
spl_autoload('spl_autoload',false);
*/

//include_once("../common/controller.php");
include("../vendor/autoload.php");
include '../common/super_controller.php';
include("../common/Routes.php");
new Routes();
//$controller = new Controller();
//$controller->invoke();
?>