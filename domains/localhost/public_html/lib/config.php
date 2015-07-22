<?php
/**
 * Created by PhpStorm.
 * User: oneFORall
 * Date: 21.05.2015
 * Time: 12:02
 */
if(!defined("PATH_SEPARATOR"))
define("PATH_SEPARATOR", getenv("COMSPEC")? ";" : ":");
ini_set("include_path", ini_get("include_path").PATH_SEPARATOR.dirname(__FILE__));
?>