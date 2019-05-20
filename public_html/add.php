 <?php

    /**
     * Created by PhpStorm.
     * User: WuXinpeng
     * Date: 2018/5/9
     * Time: 10:20
     */
 session_start();
 $id=$_GET["id"];
 $quantity=$_GET["quantity"];
$connection = mysqli_connect('rerun', 'potiro', 'pcXZb(kL', 'poti');
$query_string = "select * from products where product_id={$_GET["id"]}";
$result=mysqli_query($connection,$query_string);
$shop=mysqli_fetch_assoc($result);
$shop=array("quantity"=>$quantity,"id"=>$shop['product_id'],"name"=>$shop['product_name'],"price"=>$shop['unit_price']);
//var_dump($shop);
 if (isset($_SESSION['products'][$shop['id']])){
     $_SESSION['products'][$shop['quantity']]+=$_SESSION['products'][$shop['quantity']];
 }
else{
     $_SESSION['products'][$shop['id']]=$shop;
} header("refresh:2;url=homepage1.php");



