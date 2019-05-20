
/**
 * Created by PhpStorm.
 * User: Xinpeng Wu
 * STUDENT ID:12714287
 * Date: 2018/5/13
 * Time: 4:27
 */
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<body>
<?php session_start();
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
}

?>

    <table width="600"  border="1">
        <tr>
            <td width="96">PRODUCT ID</td>
            <td width="158">PRODUCT NAME</td>
            <td width="154">QUANTITY</td>
            <td width="150">PRICE OF THIS ITEM</td>
            <td width="177">TOTAL COST OF THIS PRODUCT </td>
            <td width="180">CHECK BOX</td>
        </tr>
        <?php
          $sum=0;
          foreach ($_SESSION['products'] as $val){
          echo "<tr>";
          print "<td >{$val['id']}</td>";
          print "<td>{$val['name']}</td>";
          print "<td>{$val['quantity']}</td>";
          print "<td class='price'>{$val['price']}</td>";
          print "<td class='single_price'>".($val["price"]*$val["quantity"])."</td>";
          print  "<td class='checkbox'><input type='checkbox' ></td>";
          echo  "</tr>";
          $sum+=($val["price"]*$val["quantity"]);
          }
         ?>
        <tr>
            <th>
                <p class="sum" id="sum">SUM:<?php print $sum?></p><br>
            </th>
            <th>
            <a href="clearAllSelections.php">CLEAR</a>
            </th>
            <th>
                <a href="CHECKOUT.php" class="checkout">CHECKOUT</a>
            </th>
        </tr>
    </table>

</body>
</html>