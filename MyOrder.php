
<!DOCTYPE html>
<!--
         Online Pizza 
         Filename: MyOrder.php 
      
         Author: Da Lee & Dexuan Li
         Date:  DEC 6 2017
        -->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">  
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/Checkout.css" />
        <link rel="stylesheet" href="css/cart.css" />
        <link rel="stylesheet" href="css/PaymentStyle.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>  
		<script type="text/javascript" src="js/LoadFile.js"></script>   
        <title>My Order</title>

        <style>
        #ordertext {
            font-size: 100%;
            margin: 2%;
            color: #f3a816;
            text-align: left;
            text-align: center;
            margin-left: 10%;
        }
        .container2 {
            height: 100%;
            width: 80%;
            min-width: 100px;
                margin-left: 10%;
            margin-right: 10%;
        }
        </style>

    </head>
    <body> 
            <!--  HEADER SECTION -->
            <?php include 'header.php';?>
            <!-- <div id="header"></div> -->
            <!--Remaining section-->
            <!-- Continue Coding here -->


        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
        <script  src="js/CartFunction.js"></script> 
        <script >onlinePizzaCart.displayCarttotal();</script>

        <div class="clearfix"></div>

        <!-- <The form of searching order number, having action with CheckorderNum.php""> -->

        <!-- <form action="CheckOrderNum.php" method="POST"> -->
        <form action="WhereIsMyPizza.php" method="POST">
        <div class="myorderContent">
             <label><font color="f3a816">Please input order number<br></font></label>
            <!-- <img src""> -->
            <input class"orderInput" type="text" placeholder="Your order number" name="OrderNo" required style="width:auto;">            
            <button class="loginButton" type="submit"  style="width:auto;">Enter</button>
        </div>
        </form>
        <div class="clearfix"></div>
    </body>
</html>
