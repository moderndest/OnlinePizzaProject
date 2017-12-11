<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <script src="js/loginPopup.js"></script>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/cart.css" />
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
		<form id="shopping-cart" action="cart.html" method="post">
            <ul id="shopping-cart-actions">
				<li>
					<input type="submit" name="update" id="update-cart" class="btn" value="Update Cart" />
				</li>
				<li>
					<input type="submit" name="delete" id="empty-cart" class="btn" value="Empty Cart" />
				</li>
				<li>
					<a href="javascript:history.go(-1)" class="btn">Continue Shopping</a>
				</li>
				<li>
					<a href="checkout.php" class="btn">Go To Checkout</a>
				</li>
			</ul>
			<table class="shopping-cart">
			  <thead>
				<tr id="show-cart">
                    <th scope="col">Item</th>
                    <th scope="col"></th>
                    <th scope="col">Price</th>
					<th scope="col">Qty</th>
					<th scope="col">Delete</th>
				</tr>
			  </thead>
			  <tbody>
			  
			  </tbody>
			</table>
			<p id="sub-total">
				<strong>Sub Total</strong>: <span id="stotal"></span>
			</p>
			
		</form>
	</div>
	
	



    </body>
</html>