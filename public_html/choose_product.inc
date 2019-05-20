<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<body>
<table width="250" border="1">

    <tr>     <th>product_id</th>
        <th>product_name</th>
        <th>unit_price</th>
        <th>unit_quantity</th>
        <th>in_stock</th>
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
    $query_string = "select * from products";
    $result=mysqli_query($connection,$query_string);
    $num_rows=mysqli_num_rows($result);
    echo "Displaying the results using associative array";

    //using associative array
    // mysqli_fetch_assoc: This function will return a row as an associative array where the column names will be the keys storing corresponding value.
    if ($num_rows > 0 ) {
        print "<table border='0'>";
        while ( $a_row = mysqli_fetch_assoc($result) ) {
            print "<tr>\n";
            print "<td>$a_row[product_id]</td>";
            print "<td>$a_row[product_name]</td>";
            print "<td>$a_row[product_price]</td>";

            print "</tr>";
        }

        print "</table>";
    }
    mysqli_close($connection);
    ?>
</table>
<form action="add.php" method="get" >quantity:<input type="number" name="quantity"  id="quantity1" ><br>
    <br>
    <br>
    <a href="add.php?id=<?php echo $row['product_id']?>&name=<?php echo $row['product_name']?>&price=<?php echo $row['product_price']?>" onclick="check_stock(quantity.value)">add to the cart</a>
</form>

<script type="text/javascript">
    function check_stock(str2){
        if (str2 > <?php echo $row['in_stock'];?> || str2<0){
            str2.value=<?php echo $row['in_stock'];?>;
            alert("this is not valid number, please enter valid number");
        }
    }
</script>
</body>
</html>

