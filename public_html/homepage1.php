<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<style type="text/css" >
    .parent{
        border: 1px solid;
        width:1150px;
    }
    .BottomRightHand{
        float:right;
        width:1000px;
        background-color: gold;
        height: 600px;
        z-index: 2;
    }
    .LeftHand{
        background-color: skyblue;
        background: url("52674a2f4701a155f9aa4090fd28f598.jpg");//src:http://it.chedushi.com/news/208802
        float:left;
        width:150px;
        z-index: 1;
        position: fixed;
        box-sizing: border-box;
        cursor: pointer;
        text-align: center;
        font-size: 40px;
        height: 1000px;
    }
    .TopRightHand{
        background-color: aquamarine;
        float: right;
        width: 1000px;
        height: 400px;
        z-index: 2;
    }
    #sad{
        margin: 0;padding: 0;z-index: 30;
        height: 1000px;
        font-size: 250px;
    }
    #sad li{
        margin: 0;padding: 0;list-style: none;float: left;font: bold 11px arial;}
    #sad li a{
        display: block;margin: 0 1px 0 0;padding: 4px 10px;width: 60px;background: ;
        color: white;text-align: center;text-decoration: none;
    }
    #sad li a:hover{
        background: aliceblue;
    }
    #sad div{
        position: absolute;visibility: hidden;margin: 0;padding: 0;background: antiquewhite;border: 1px solid #ffffff;
    }
    #sad div a{
        position: relative;
        display: block;
        margin: 0;
        padding: 5px 10px;
        width: auto;
        white-space: nowrap;
        text-align: left;
        text-decoration: none;
        background: blueviolet;
        color: cornflowerblue;
        font: 11px arial;
    }
    #sad div a:hover{
        background: aliceblue;
        color: #ffffff;
    }


    .fl{
        float: left;
    }
    .fr {
        float: right;
    }
    table {
        border-collapse: collapse;
        border-spacing: 0;
        border: 0;
        text-align: center;
        width: 937px;
    }
    th, td {
        border: 1px solid #CADEFF;
    }
    th {
        background: #e2f2ff;
        border-top: 3px solid #a7cbff;
        height: 30px;
    }
    td {
        padding: 10px;
        color: #444;
    }
    tbody tr:hover {
        background: RGB(238,246,255);
    }
    .checkbox {
        width: 60px;
    }
    .goods {
        width: 300px;
    }
    .goods span {
        width: 180px;
        margin-top: 20px;
        text-align: left;
        float: left;
    }
    .price {
        width: 130px;
    }
    .count {
        width: 90px;
    }
    .count .add, .count input, .count .reduce {
        float: left;
        margin-right: -1px;
        position: relative;
        z-index: 0;
    }
    .count .add, .count .reduce {
        height: 23px;
        width: 17px;
        border: 1px solid #e5e5e5;
        background: #f0f0f0;
        text-align: center;
        line-height: 23px;
        color: #444;
    }
    .count .add:hover, .count .reduce:hover {
        color: #f50;
        z-index: 3;
        border-color: #f60;
        cursor: pointer;
    }
    .count input {
        width: 50px;
        height: 15px;
        line-height: 15px;
        border: 1px solid #aaa;
        color: #343434;
        text-align: center;
        padding: 4px 0;
        background-color: #fff;
        z-index: 2;
    }
    .subtotal {
        width: 150px;
        color: red;
        font-weight: bold;
    }
    .operation {
        width: 80px;
    }
    .operation span:hover, a:hover {
        cursor: pointer;
        color: red;
        text-decoration: underline;
    }
    img {
        width: 100px;
        height: 80px;
        /*border: 1px solid #ccc;*/
        margin-right: 10px;
        float: left;
    }

    .foot {
        width: 935px;
        margin-top: 10px;
        color: #666;
        height: 48px;
        border: 1px solid #c8c8c8;
        background-color: #eaeaea;
        background-image:linear-gradient(RGB(241,241,241),RGB(226,226,226));
        position: relative;
        z-index: 8;
    }
    .foot div, .foot a {
        line-height: 48px;
        height: 48px;
    }
    .foot .select-all {
        width: 100px;
        height: 48px;
        line-height: 48px;
        padding-left: 5px;
        color: #666;
    }
    .foot .closing {
        border-left: 1px solid #c8c8c8;
        width: 100px;
        text-align: center;
        color: #000;
        font-weight: bold;
        background: RGB(238,238,238);
        cursor: pointer;
    }
    .foot .total{
        margin: 0 20px;
        cursor: pointer;
    }
    .foot  #priceTotal, .foot #selectedTotal {
        color: red;
        font-family: "Microsoft Yahei";
        font-weight: bold;
    }
    .foot .selected {
        cursor: pointer;
    }
    .foot .selected .arrow {
        position: relative;
        top:-3px;
        margin-left: 3px;
    }
    .foot .selected .down {
        position: relative;
        top:3px;
        display: none;
    }
    .show .selected .down {
        display: inline;
    }
    .show .selected .up {
        display: none;
    }
    .foot .selected:hover .arrow {
        color: red;
    }
    .foot .selected-view {
        width: 935px;
        border: 1px solid #c8c8c8;
        position: absolute;
        height: auto;
        background: #ffffff;
        z-index: 9;
        bottom: 48px;
        left: -1px;
        display:none;
    }
    .show .selected-view {
        display: block;
    }
    .foot .selected-view div{
        height: auto;
    }
    .foot .selected-view .arrow {
        font-size: 16px;
        line-height: 100%;
        color:#c8c8c8;
        position: absolute;
        right: 330px;
        bottom: -9px;
    }
    .foot .selected-view .arrow span {
        color: #ffffff;
        position: absolute;
        left: 0px;
        bottom: 1px;
    }
    #selectedViewList {
        padding: 20px;
        margin-bottom: -20px;
    }
    #selectedViewList div{
        display: inline-block;
        position: relative;
        width: 100px;
        height: 80px;
        border: 1px solid #ccc;
        margin: 10px;
    }
    #selectedViewList div span {
        display: none;
        color: #ffffff;
        font-size: 12px;
        position: absolute;
        top: 0px;
        right: 0px;
        width: 60px;
        height: 18px;
        line-height: 18px;
        text-align: center;
        background: RGBA(0,0,0,.5);
        cursor: pointer;
    }
    #selectedViewList div:hover span {
        display: block;
    }



</style>
<meta charset="UTF-8">
<head> <script type="text/javascript">
        function  showPic(image_id) {
            var source=image_id;
            var placeholder=document.getElementById("images");
            switch (source) {
                case("1000"):
                    placeholder.src = "fishfinger.jpg";//http://www.ooopic.com/sucaixiazai/
                    break;
                case("1001"):
                    placeholder.src = "fishfinger.jpg";//http://www.ooopic.com/sucaixiazai/
                    break;
                case("1003"):
                    placeholder.src = "shelled prawn.jpg";//http://www.rensheng2.com/620000/613555.shtml
                    break;
                case("1004"):
                    placeholder.src = "tub ice cream.jpg";//http://hebei.news.163.com/14/0724/14/A1U71E5K0279068A.html
                    break;
                case("1005"):
                    placeholder.src = "tub ice cream.jpg";//http://hebei.news.163.com/14/0724/14/A1U71E5K0279068A.htm
                    break;
                case("1002"):
                    placeholder.src = "Hamburg patties.jpg";//www.austoyou.com/index.php?product-1101-31@%7C14387566751-index.html
                    break;
                case("2002"):
                    placeholder.src = "soap.jpg";//www.ioffer.com/i/622300677
                    break;
                case("2000"):
                    placeholder.src = "panadol pack.jpg";//www.shaogood.com/shaogood/ebay/381676409306.html
                    break;
                case("2001"):
                    placeholder.src = "panadol-bottle.jpg";//www.ymatou.com/product/09d3df5251ff49d2bdfdc744e7ed9dc6.html?ad_recmd_brd=prd_detail
                    break;
                case("2005"):
                    placeholder.src = "washingpowder.jpg";//www.ymatou.com/product/09d3df5251ff49d2bdfdc744e7ed9dc6.html?ad_recmd_brd=prd_detail
                    break;
                case("2003"):
                    placeholder.src = "garbage-bag.jpg";//www.frbiz.com/j94661002-cheap-garbage-bag.html
                    bleach:https://image.baidu.com/search/detail?ct=503316480&z=0&ipn=d&word=laundry%20bleach&step_word=&hs=2&pn=3&spn=0&di=405162283141&pi=0&rn=1&tn=baiduimagedetail&is=0%2C0&istype=2&ie=utf-8&oe=utf-8&in=&cl=2&lm=-1&st=-1&cs=8080981%2C2358789398&os=2183387087%2C2100604659&simid=0%2C0&adpicid=0&lpn=0&ln=1987&fr=&fmq=1522936011787_R&fm=result&ic=0&s=undefined&se=&sme=&tab=0&width=&height=&face=undefined&ist=&jit=&cg=&bdtype=15&oriquery=&objurl=http%3A%2F%2Fwww.123healthshop.co.uk%2Fproduct_images%2Fz%2F270%2FBD6__16498.jpg&fromurl=ippr_z2C%24qAzdH3FAzdH3F
                    break;
                case("2004"):
                    placeholder.src = "garbage-bag.jpg";//www.mafengwo.cn/i/3268363.html
                    break;
                case("2006"):
                    placeholder.src = "laundrybleach.jpg";//www.mafengwo.cn/i/3268363.html
                    break;
                case("4003"):
                    placeholder.src = "smallcoffee.jpg";//www.zcool.com.cn/work/ZNDI2NTcxMg==.html
                    break;
                case("4004"):
                    placeholder.src = "largecoffee.jpg";//www.mafengwo.cn/i/3268363.html
                    break;
                case("4000"):
                    placeholder.src = "teabag.jpg";//http://www.rensheng2.com/620000/613555.shtml
                    break;
                case("4001"):
                    placeholder.src = "teabag.jpg";//www.mafengwo.cn/i/3268363.html
                    break;
                case("4002"):
                    placeholder.src = "teabag.jpg";//www.zcool.com.cn/work/ZNDI2NTcxMg==.html
                    break;
                case("4005"):
                    placeholder.src = "chocolatebar.jpg";//www.ioffer.com/i/622300677
                    break;
                case("3000"):
                    placeholder.src = "cheese.jpg";//http://www.rensheng2.com/620000/613555.shtml
                    break;
                case("3001"):
                    placeholder.src = "cheese.jpg";//http://www.rensheng2.com/620000/613555.shtml
                    break;
                case("3002"):
                    placeholder.src = "steak.jpg";//www.austoyou.com/index.php?product-1101-31@%7C14387566751-index.html
                    break;
                case("3003"):
                    placeholder.src = "orange.jpg";//www.mafengwo.cn/i/3268363.html
                    break;
                case("3004"):
                    placeholder.src = "banana.jpg";//http://www.rensheng2.com/620000/613555.shtml
                    break;
                case("3005"):
                    placeholder.src = "peaches.jpg";//www.austoyou.com/index.php?product-1101-31@%7C14387566751-index.html
                    break;
                case("3006"):
                    placeholder.src = "grapes.jpg";//www.mafengwo.cn/i/3268363.html
                    break;
                case("3007"):
                    placeholder.src = "apples.jpg";//http://www.rensheng2.com/620000/613555.shtml
                    break;
                case("5000"):
                    placeholder.src = "dogfood.jpg";//www.makepolo.com/products/DARLING-dry-dog-food-p68402055.html
                    break;
                case("5001"):
                    placeholder.src = "dogfood.jpg";//www.makepolo.com/products/DARLING-dry-dog-food-p68402055.html
                    break;
                case("5002"):
                    placeholder.src = "birdfood.jpg";//www.petguys.com/-071859515110.html?productid=-071859515110&channelid=LSCA2
                    break;
                case("5003"):
                    placeholder.src = "catfood.jpg";//www.shaogood.com/shaogood/ebay/381676409306.html
                    break;
                case("5004"):
                    placeholder.src = "fishfood.jpg";//www.everychina.com/p-z51e0b0f-91131779-turtle_food_fish_food.html
                    break;
            }

        }

    </script>

</head>
<title>HomePage</title>
<body>
<div class="parent">
    <div class="LeftHand">
        <ul id="sad">
            <li><a href="#" onmouseover="m_open('m1')" onmouseout="close_time()" class="menu">Frozen Food</a>
                <div id="m1" onmouseover="cancel_time" onmouseout="close_time">
                    <a id="1000" onmouseover="showPic(this.id)" href="checkEampty.php?q=1000" class="choose">Fish Fingers(large) </a>
                    <a id="1001" onmouseover="showPic(this.id)"  href="checkEampty.php?q=1001" class="choose">Fish Finger</a>
                    <a id="1003" onmouseover="showPic(this.id)"  href="checkEampty.php?q=1003" class="choose">Shelled Prawns</a>
                    <a id="1004" onmouseover="showPic(this.id)"  href="checkEampty.php?q=1004" class="choose">Tub Ice Cream 1 litre</a>
                    <a id="1005" onmouseover="showPic(this.id)" href="checkEampty.php?q=1005" class="choose" >Tub Ice Cream 2 litre</a>
                    <a id="1002" onmouseover="showPic(this.id)"  href="checkEampty.php?q=1002" class="choose" >Hamburger Patties</a>
                </div>
            </li>
            <li><a href="#" onmouseover="m_open('m2')" onmouseout="close_time()" class="menu">Home Health</a>
                <div id="m2" onmouseover="cancel_time" onmouseout="close_time">
                    <a id="2002" onmouseover="showPic(this.id)" href="checkEampty.php?q=2002" class="choose">Bath Soap</a>
                    <a id="2001" onmouseover="showPic(this.id)" href="checkEampty.php?q=2001" class="choose" >Panadol(pack)</a>
                    <a id="2000" onmouseover="showPic(this.id)" href="checkEampty.php?q=2000" class="choose" >Panadol(bottle)</a>
                    <a id="2005" onmouseover="showPic(this.id)" href="checkEampty.php?q=2005" class="choose" >Washing Powder</a>
                    <a id="2003" onmouseover="showPic(this.id)" href="checkEampty.php?q=2003" class="choose">Garbage Bags(small)</a>
                    <a id="2004" onmouseover="showPic(this.id)" href="checkEampty.php?q=2004" class="choose">Garbage Bags(large)</a>
                    <a id="2006" onmouseover="showPic(this.id)" href="checkEampty.php?q=2006" class="choose">Laundry</a>
                </div>
            </li>
            <li><a href="#" onmouseover="m_open('m3')" onmouseout="close_time()" class="menu">Beverage</a>
                <div id="m3" onmouseover="cancel_time" onmouseout="close_time">
                    <a id="4003" onmouseover="showPic(this.id)" href="checkEampty.php?q=4003" class="choose">Coffee(200)</a>
                    <a id="4004" onmouseover="showPic(this.id)" href="checkEampty.php?q=4004" class="choose">Coffee(500)</a>
                    <a id="4000" onmouseover="showPic(this.id)" href="checkEampty.php?q=4000" class="choose">Earl Grey Tea Bags(25)</a>
                    <a id="4001" onmouseover="showPic(this.id)" href="checkEampty.php?q=4001" class="choose">Earl Grey Tea Bags(100)</a>
                    <a id="4002" onmouseover="showPic(this.id)" href="checkEampty.php?q=4002" class="choose">Earl Grey Tea Bags(200)</a>
                    <a id="4005" onmouseover="showPic(this.id)" href="checkEampty.php?q=4005" class="choose">Chocolate Bar</a>
                </div>
            </li>
            <li><a href="#" onmouseover="m_open('m4')" onmouseout="close_time()" class="menu">Fresh Food</a>
                <div id="m4" onmouseover="cancel_time" onmouseout="close_time">
                    <a id="3000" onmouseover="showPic(this.id)" href="checkEampty.php?q=3000" class="choose">Cheddar Cheese(500)</a>
                    <a id="3001" onmouseover="showPic(this.id)" href="checkEampty.php?q=3001" class="choose">Cheddar Cheese(1000)</a>
                    <a id="3002" onmouseover="showPic(this.id)" href="checkEampty.php?q=3002" class="choose">T'bone Steak</a>
                    <a id="3003" onmouseover="showPic(this.id)" href="checkEampty.php?q=3003" class="choose">Oranges</a>
                    <a id="3004" onmouseover="showPic(this.id)" href="checkEampty.php?q=3004" class="choose">Bananas</a>
                    <a id="3005" onmouseover="showPic(this.id)" href="checkEampty.php?q=3005" class="choose">Peaches</a>
                    <a id="3006" onmouseover="showPic(this.id)" href="checkEampty.php?q=3006" class="choose">Grapes</a>
                    <a id="3007" onmouseover="showPic(this.id)" href="checkEampty.php?q=3007" class="choose">Apples</a>
                </div>
            </li>
            <li><a href="#" onmouseover="m_open('m5')" onmouseout="close_time()" class="menu">Pet Food</a>
                <div id="m5" onmouseover="cancel_time" onmouseout="close_time">
                    <a id="5000" onmouseover="showPic(this.id)" href="checkEampty.php?q=5000" class="choose">Dry Dog Food(5)</a>
                    <a id="5001" onmouseover="showPic(this.id)" href="checkEampty.php?q=5001" class="choose">Dry Dog Food(1)</a>
                    <a id="5002" onmouseover="showPic(this.id)" href="checkEampty.php?q=5002" class="choose">Bird Food</a>
                    <a id="5003" onmouseover="showPic(this.id)" href="checkEampty.php?q=5003" class="choose">Cat Food</a>
                    <a id="5004" onmouseover="showPic(this.id)" href="checkEampty.php?q=5004" class="choose">Fish Food</a>
                </div>
            </li>
        </ul>
    </div>
    <div class="TopRightHand" name="TopRightHand" id="TopRight">
        <p>Welcome to UTS online grocery.
            If you purchase any items,please click on 'add to the cart'.And please wait for the moment,because the browser needs the refreshing time.
            </p>
        <ul class="product_gallery">
            <li>

                <img id="images" src="#" alt="my image">
                <div class="product_information">

                </div>
                <div class="product_description" id="txtHint1">

                </div>
            </li>
        </ul>
    </div>
    <div class="BottomRightHand" align="center" id="txtHint2">
  <?php include "show.inc";?>
       </div>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("a.choose").click(function (event) {
                event.preventDefault();
                $("#txtHint1").load($(this).attr('href'));
            })
        })

        $(document).ready(function () {
            $("a.checkout").click(function (event) {
                event.preventDefault();
                $("#TopRight").load($(this).attr('href'));
            })
        })
        function checkbox(obj) {
            var items=document.getElementsByName()

        }

        var timeout = 10000;
        var close_timer = 0;
        var d_menu_item = 0;
        function m_open(id) {
            cancel_time();
            if(d_menu_item) d_menu_item.style.visibility = 'hidden';
            d_menu_item = document.getElementById(id);
            d_menu_item.style.visibility = 'visible';
        }
        function m_close() {
            if (d_menu_item) d_menu_item.style.visibility = 'hidden';
        }
        function close_time() {
            close_timer=window.setTimeout(m_close,timeout);
        }
        function cancel_time() {
            if (close_timer){
                window.clearTimeout(close_timer);
                close_timer=null;
            }
        }
        document.onclick = m_close;



    </script>
</body>
</html>