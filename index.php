<!DOCTYPE html>
        <!--
         Online Pizza 
         Filename: index.php 
      
         Author: Chatsuda Rattarasan & Ya-Hsuan Lin   
         Date:  DEC 6 2017
        -->

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <link rel="stylesheet" href="css/style.css" >
        <script src="js/loginPopup.js"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
        <script type="text/javascript" src="js/LoadFile.js"></script>
        <script  src="js/CartFunction.js"></script> 
		

        <title>Online Pizza </title>
    </head>
    <body> 
        <!--  HEADER SECTION -->
        <?php include 'header.php';?>
        <!-- <div id="header"></div> -->
        
        <!--  END HEADER SECTION -->

        <div class="clearfix"></div>
        <div id="inner-wrapper">
            <section class="one-third">
                <a href="Menu.php"> <img src="image/icon/Menu_Icon.png"></a>
            </section>

            <section class="one-third">
                <a href="Combo.php"><img src="image/icon/Combo_Icon.png"></a>
            </section>

            <section class="one-third">
                <a href="WhereIsMyPizza.php"><img src="image/icon/Where_is_my Pizza_Icon.png"></a>
            </section>
        </div>
        

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
        <script  src="js/CartFunction.js"></script> 
        <script >onlinePizzaCart.displayCarttotal();</script>
    </body>

</html>