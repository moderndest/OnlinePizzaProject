<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <script src="js/loginPopup.js"></script>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/cart.css" />
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>  
		<script type="text/javascript" src="js/LoadFile.js"></script>
        <title>Cart</title>
    </head>
    <body> 
            <!--  HEADER SECTION -->
        <header>
            <div id="header-inner">
                <img id="img_header" src="image/Pic/HeaderIcon.png">
            </div>     
    
        </header>
            
            <!--Remaining section-->
            <!-- Continue Coding here -->
    
	<div id="content">
		<h1>Your Shopping Cart</h1>
		<form id="shopping-cart" action="" method="post">
            <ul id="shopping-cart-actions">
				<li>
                <button id="clear-cart" class="btn"> Empty Cart</buttion>
					<!-- <button class="btn" id="clear-cart">Empty Cart</button> -->
				</li>
				<li>
                <!-- href="javascript:history.go(-1)" -->
					<a href="Combo.php" class="btn">Continue Shopping</a>
				</li>
				<li>
					<a href="CheckOut.php" class="btn">Go To Checkout</a>
				</li>
			</ul>
			<table class="shopping-cart">
			  <thead>
				<tr>
                    <th scope="col">Item</th>
                    <th scope="col"></th>
                    <th scope="col">Qty</th>
                    <th scope="col">Price</th>
                    <th scope="col">Delete</th>
                </tr>
              </thead>
              
			  <tbody>
			        <tr></tr>
			  </tbody>
			</table>
			<p id="sub-total">
				<strong>Sub Total : $</strong> <span id="total-cart"></span>
			</p>
			
		</form>
	</div>
    

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
        <script  src="js/CartFunction.js"></script> 
        <script  src="js/CartAni.js"></script>
        



    </body>
</html>