
/**
 * Created by PhpStorm.
 * User: WuXinpeng
 * Date: 2018/5/11
 * Time: 23:36
 */
<?php

$to = $_POST["email"];
$subject = "Your order confirmation";
$message = "Your order is being processed.thank you for shopping in our grocery";

mail($to,$subject,$message);
echo "Mail Sent.Please check it.";

?>