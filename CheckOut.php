<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <script src="js/loginPopup.js"></script>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/Checkout.css" />
        <link rel="stylesheet" href="css/cart.css" />
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>  
        <script type="text/javascript" src="js/LoadFile.js"></script>
        <!-- <script type="text/javascript" src="js/Checkout.js"></script> -->
        <title>Cart</title>
    </head>
    <body> 
            <!--  HEADER SECTION -->
        <header>
            <div id="header-inner">
                <img id="img_header" src="image/Pic/HeaderIcon.png">
            </div> 
        </header>
        <div class="clearfix"></div> 

        <ul>
			<li>
                <button onclick="window.location.href='Menu.php'" id="backbtn" class="btnC">Back</a>
            </i>
        </ul>

        <!-- ///////////// TAB START HERE///////////////// -->
        <div id="inner-wrapper">
            <div class="clearfix"></div> 
            <button class="tablink" onclick="openPage('Shipping', this, 'orange')"id="defaultOpen">Shipping Address</button>
            <button class="tablink" id="Bill" onclick="openPage('Billing', this, 'orange')">Billing Address</button>
            <button class="tablink" id="Pay"onclick="openPage('Payment', this, 'orange')">Payment</button>
            <button class="tablink" id="Re" onclick="openPage('OrderR', this, 'orange')">Order Review</button>


            <!-- ///////////// SHIPPING TAB START HERE///////////////// -->
            <div id="Shipping" class="tabcontent">
            
                <!-- FirstName -->

                <div class="block">
                    <label class="left"><b>Firstname</b></label>
                    <input class="ShippingInfo" type="text" placeholder="First name" name="firstname" required>
                </div>

                <!-- Last Name -->
                <div class="block">
                    <label class="left"><b>Lastname</b></label>
                    <input class="ShippingInfo" type="text" placeholder="Last name" name="lastname" required>
                </div>
                <br>
                <div class="clearfix2"></div>

                <!-- Email -->
                <div class="block">
                <label class="left"><b>Email</b></label>
                <input class="ShippingInfo" type="text" placeholder="Email" name="email" required>
                </div>
                <div class="clearfix2"></div>

                <!-- Address -->
                <div class="block">
                <label class="left"><b>Address</b></label>
                <input class="ShippingInfo" id="AddLine1" type="text" placeholder="Address Line1" name="addline1" required>
                <input class="ShippingInfo" id="AddLine2" type="text" placeholder="Address Line2" name="addline2" required>
                </div>

                <div class="clearfix2"></div>
                <!-- Country -->
                <div class="block">
                    <label class="left"><b>Country</b></label>
                    <select>
                        <option value="US">United States</option>
                    </select>
                </div>

                <!-- City -->
                <div class="block">
                    <labelclass="left"><b>City</b></label>
                    <select>
                        <option class="ShippingInfo" value="MA">MA</option>
                    </select>
                </div>

                <div class="clearfix2"></div>
                <!-- ZipCode -->
                <div class="block">
                <label class="left"><b>Zip/Postal Code</b></label>
                <input class="ShippingInfo" type="text" placeholder="Zip/Postal Code" name="zipcode" required>
                </div>

                <!-- state  -->
                <div class="block">
                <label class="left"><b>State</b></label>
                <input class="ShippingInfo" type="text" placeholder="state" name="state" required>
                </div>

                <div class="clearfix2"></div>
                <!-- Telephone  -->
                <div class="block">
                <label class="left"><b>Telephone</b></label>
                <input class="ShippingInfo" type="text" placeholder="xxx-xxxx-xxxx" name="tel" required>
                </div>

                <div class="clearfix2"></div>
                <button  class="btnC" onclick="openPage('Billing','Bill','orange')" >Continue</button>

            </div>


             <!-- ///////////// Billing TAB START HERE///////////////// -->
            <div id="Billing" class="tabcontent">
                <!-- FirstName -->

                <div class="block">
                    <label class="left"><b>Firstname</b></label>
                    <input class="ShippingInfo" type="text" placeholder="First name" name="firstname" required>
                </div>

                    <!-- Last Name -->
                <div class="block">
                    <label class="left"><b>Lastname</b></label>
                    <input class="ShippingInfo" type="text" placeholder="Last name" name="lastname" required>
                </div>
                <br>
                <div class="clearfix2"></div>

                    <!-- Email -->
                <div class="block">
                <label class="left"><b>Email</b></label>
                <input class="ShippingInfo" type="text" placeholder="Email" name="email" required>
                </div>
                <div class="clearfix2"></div>

                <!-- Address -->
                <div class="block">
                <label class="left"><b>Address</b></label>
                <input class="ShippingInfo" id="AddLine1" type="text" placeholder="Address Line1" name="addline1" required>
                <input class="ShippingInfo" id="AddLine2" type="text" placeholder="Address Line2" name="addline2" required>
                </div>

                <div class="clearfix2"></div>
                <!-- Country -->
                <div class="block">
                    <label class="left"><b>Country</b></label>
                    <select>
                        <option value="US">United States</option>
                    </select>
                </div>

                <!-- City -->
                <div class="block">
                    <labelclass="left"><b>City</b></label>
                    <select>
                        <option class="ShippingInfo" value="MA">MA</option>
                    </select>
                </div>

                <div class="clearfix2"></div>
                <!-- ZipCode -->
                <div class="block">
                <label class="left"><b>Zip/Postal Code</b></label>
                <input class="ShippingInfo" type="text" placeholder="Zip/Postal Code" name="zipcode" required>
                </div>

                <!-- state  -->
                <div class="block">
                <label class="left"><b>State</b></label>
                <input class="ShippingInfo" type="text" placeholder="state" name="state" required>
                </div>

                <div class="clearfix2"></div>
                <!-- Telephone  -->
                <div class="block">
                <label class="left"><b>Telephone</b></label>
                <input class="ShippingInfo" type="text" placeholder="xxx-xxxx-xxxx" name="tel" required>
                </div>

                <div class="clearfix2"></div>
                <button  class="btnC" onclick="openPage('Payment','Pay','orange')" >Continue</button>

            </div>


             <!-- ///////////// Payment TAB START HERE///////////////// -->
            <div id="Payment" class="tabcontent">
            <h3>Contact</h3>
            

            <button  class="btnC" onclick="openPage('OrderR','Re','orange')" >Continue</button>
            </div>



            <!-- /////////////ORDER REVIEW TAB START HERE///////////////// -->
            <div id="OrderR" class="tabcontent">
                <form id="shopping-cart" action="" method="post">
                    <div class="clearfix"></div>
                    <table class="shopping-cart">
                    <thead>
                        <tr>
                            <th scope="col">Item</th>
                            <th scope="col"></th>
                            <th scope="col">Price</th>
                            <th scope="col">Qty</th>
                            <th scope="col">total</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                            
                    <tbody id="tbody">
                            <tr></tr>
                    </tbody>
                    </table>
                    <div class="clearfix"></div>
                    <p id="sub-total">
                        <strong>Sub Total : $ <span id="total-cart"></span></strong> 
                    </p>
                
                </form>
            
                <div class="clearfix"></div>
                <div class="clearfix"></div>
                <div class="clearfix"></div>

                <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
                <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
                <script  src="js/CartFunction.js"></script> 
                <script  src="js/CartAni.js"></script>
            
        
            </div>
            <!-- /////////////ORDER REVIEW TAB  END//////////////// -->



            
            



        </div>


        <script type="text/javascript" src="js/Checkout.js"></script>
    </body>
</html>