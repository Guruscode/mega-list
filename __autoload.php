<?php
/**
* Simple Autoload file to get all needed files in the lib folder
* File should follow the naming convention,
* [name].lib.php
*
* @author Richard isaac <Olurichardisaac@gmail.com>
* @copyright RichardIsaac
* @license GNU GENERAL PUBLIC LICENSE Version 3
*/


spl_autoload_register(function ($class_name) {
    include 'lib/' .$class_name . '.lib.php';
});
