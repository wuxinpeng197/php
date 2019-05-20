
/**
 * Created by PhpStorm.
 * User: WuXinpeng
 * Date: 2018/4/22
 * Time: 21:40
 */

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<body>
<?php
session_start();
$arr1=$_SESSION["checkout"];
?>
<?php
$name=$_GET["name"];
$price=$_GET["single_price"];
$arr1[$name]=array("name"=>$name,"single_price"=>$price);
?>
<?php
foreach($arr as $a)
{
?>
<table width="250">
<tr>
    <td>product name</td>
    <td>single item purchase item cost</td>
</tr>
    <tr>
        <td ><?php echo $a["name"]?></td>
        <td ><?php echo $a["single_price"]?></td>
    </tr>
    <tr>
        <td> TOTAL PURCHASE COST:<?php $sum+=$price;echo $sum?></td>
    </tr>
</table>
    <?php
}
?>
<style type="text/css">
    .form {width:100px;
    }
</style>
<script type="text/javascript">
    function validate_form() {
        if (has_blanks()) {
            alert("one or more compulsory\nfields is blank");
            return false;
        }
        if (validateForm()){
            alert("This is not an e-mail address");
            return false;
        }
        function validateForm() {
            var x=document.forms["form"]["email"].value;
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {

                return true;
            }
        }


        function has_blanks() {
            var compulsory_fields = new Array("name", "address", "state", "country", "email");
            for (var i = 0; i < compulsory_fields.length; i++) {
                var form_field = document.getElementById(compulsory_fields[i]);
                if (form_field.value === "")
                    return true;
            }
            return false;
        }
    }

</script>
<form method="post" id="form" onsubmit="return validate_form()" action="mail.php" name="form">
    <table >
        <tr><td class="form">Name: <span style="color: red">*</span> </td><td>
                <input type="text" id="name" name="name" class="given">
            </td></tr>
        <tr><td class="form">Address: <span style="color: red">*</span> </td><td>
                <input type="text" id="address" name="address" class="given">
            </td></tr>
        <tr><td class="form">State: <span style="color: red">*</span> </td><td>
                <input type="text" id="state" class="given" name="state">
            </td></tr>
        <tr><td class="form">Country: <span style="color: red">*</span> </td><td>
                <input type="text" id="country" class="given" name="country">
            </td></tr>
        <tr ><td class="form" >Email Address:<span style="color: red">*</span> </td><td>
                <input type="text" id="e-mail" class="given" name="email" >
            </td></tr>
        <tr align="center"><td colspan="2"><input type="submit" value="Purchase"></td> </tr>
    </table>

</form>

</body>
</html>
