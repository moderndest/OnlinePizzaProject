<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">  
        <link rel="stylesheet" href="css/style.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>  
		<script type="text/javascript" src="js/LoadFile.js"></script>   
        <title>My Order</title>
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
        <form method="POST">
        <div class="myorderContent">
            <img src"">
            <input class"orderInput" type="text" required>
            <button class"orderbutton" type="submit" formaction="SignUp/SignUp.php" formmethod="POST"> Enter </button>
        </div>
        </form>
        
    </body>
</html>