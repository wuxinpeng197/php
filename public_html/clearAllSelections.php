<?php
/**
 * Created by PhpStorm.
 * User: WuXinpeng
 * Date: 2018/5/11
 * Time: 22:28
 */
session_start();
unset($_SESSION["products"]);
header("Location:homepage1.php");


include "db_settings.inc";
?>