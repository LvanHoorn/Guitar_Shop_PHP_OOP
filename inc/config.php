<?php

if(!isset($_SESSION))
  {
    session_start();
  }

// (constant) site domain name with http
  defined("SITE_URL")
    || define("SITE_URL", "http://".$_SERVER['SERVER_NAME']);

// Directory seperator (/)
  defined("DS")
    || define("DS", DIRECTORY_SEPARATOR);

// Root path (to the site)
  defined("ROOT_PATH")
    || define("ROOT_PATH", realpath(dirname(__FILE__) . DS."..".DS));

//  Classes Folder
  defined("CLASSES_DIR")
    || define("CLASSES_DIR", "classes");

// Pages Directory
  defined("PAGES_DIR")
    || define("PAGES_DIR", "pages");

//  Modules Folder
  defined("MOD_DIR")
    || define("MOD_DIR", "mod");

//  Inc Folder
  defined("INC_DIR")
    || define("INC_DIR", "inc");

// Template Folder
  defined("TEMPLATE_DIR")
    || define("TEMPLATE_DIR", "template");

// Emails Path
  defined("EMAILS_PATH")
    || define("EMAILS_PATH", ROOT_PATH.DS."emails");

// Catalogue images path
  defined("CATALOGUE_PATH")
    || define("CATALOGUE_PATH", ROOT_PATH.DS."media".DS."catalogue");

// Add all above directories to the INCLUDE Path
  set_include_path(implode(PATH_SEPARATOR, array(
    realpath(ROOT_PATH.DS.CLASSES_DIR),
    realpath(ROOT_PATH.DS.PAGES_DIR),
    realpath(ROOT_PATH.DS.MOD_DIR),
    realpath(ROOT_PATH.DS.INC_DIR),
    realpath(ROOT_PATH.DS.TEMPLATE_DIR),
    get_include_path()
  )));

 ?>
