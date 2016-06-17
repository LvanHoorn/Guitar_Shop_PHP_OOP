<?php
require_once('inc/config.php');

function __autoload($class_name)
{
  $class = explode("_", $class_name);
  $path = implode("/", $class).".php";
  require_once($path);

};
 ?>
