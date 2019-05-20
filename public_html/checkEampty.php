<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<body>
<table width="250" border="1">

    <tr>     <th width="100">product_id</th>
        <th width="100">product_name</th>
        <th width="100">unit_price</th>
        <th width="100">unit_quantity</th>
        <th width="100">in_stock</th>
    </tr>

    <?php
    /**
     * Created by PhpStorm.
     * User: WuXinpeng
     * Date: 2018/5/9
     * Time: 10:20
     */
    $q = $_GET["q"];
    $connection = mysqli_connect('rerun', 'potiro', 'pcXZb(kL', 'poti');
    $query_string = "select * from products where (product_id=$q)";
    $result=mysqli_query($connection,$query_string);
    $num_rows=mysqli_num_rows($result);
    echo "WELCOME TO UTS ONLINE SHOP";
?>


</table>

 <?php if ($num_rows > 0 ) {

        while ( $a_row = mysqli_fetch_assoc($result) ) {
        print "<tr><form action=\"add.php\" method=\"get\" >";
            echo "<input type='text'  name='id' value='{$a_row['product_id']}'>";
            echo "<input type='text' name='name' value='{$a_row['product_name']}'>";
            echo "<input type='text' name='price' value='{$a_row['unit_price']}'>";
            echo "<input type='text' name='unit_quantity' value='{$a_row['unit_quantity']}'>";
            echo "<input type='text' value='{$a_row['in_stock']}'>";
            print "</tr>";

        }
    }
    print "<tr>";
         echo "<br> quantity:<input type='number' name='quantity'  id='quantity1'  class='quantity' min='0' max='50'><br>";
 print "</tr>";
 print "<tr>";
     echo "<input type='submit' value='add to cart' class='add_to'>";
 print "</tr>";
 print "</form>";
    ?>
<script type="text/javascript">
</script>
</body>
</html>

