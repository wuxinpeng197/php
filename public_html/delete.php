
/**
 * Created by PhpStorm.
 * User: WuXinpeng
 * Date: 2018/5/11
 * Time: 14:51
 */
<?php
session_start();
ob_start();
$pid=$_GET["pid"];
$arr=$_SESSION["mycar"];
foreach($arr as$key=>$proId)
{
    if($key==$pid)
    {
        unset($arr[$key]);
    }
}
$_SESSION["mycar"]=$arr;
ob_clean();
header("location:cart.inc");
?>