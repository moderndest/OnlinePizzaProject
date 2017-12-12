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
        <link rel="stylesheet" href="css/PaymentStyle.css" />
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>  
        <script type="text/javascript" src="js/LoadFile.js"></script>
        <script type="text/javascript" src="js/Checkout.js"></script>

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
                <button onclick="window.location.href='Menu.php'" id="backbtn" class="btnC">Continue Shopping</a>
            </i>
        </ul>

        <!-- ///////////// TAB START HERE///////////////// -->
        <div id="inner-wrapper">
            <div class="clearfix"></div> 
            <button class="tablink"  onclick="openPage('Shipping','defaultOpen', 'orange')"id="defaultOpen">Shipping Address</button>
            <button class="tablink" id="Bill" onclick="openPage('Billing','Bill', 'orange')">Billing Address</button>
            <button class="tablink" id="Pay"onclick="openPage('Payment', 'Pay', 'orange')">Payment</button>
            <button class="tablink" id="Re" onclick="openPage('OrderR', 'Re', 'orange')">Order Review</button>


            <!-- ///////////// SHIPPING TAB START HERE///////////////// -->
            <div id="Shipping" class="tabcontent">
            
                <form class"form">
                    <!-- FirstName -->

                    <div class="block">
                        <label class="left"><b>Firstname</b></label>
                        <input class="ShippingInfo fname" type="text" placeholder="First name" name="firstname" required>
                    </div>

                    <!-- Last Name -->
                    <div class="block">
                        <label class="left"><b>Lastname</b></label>
                        <input class="ShippingInfo lname" type="text" placeholder="Last name" name="lastname" required>
                    </div>
                    <br>
                    <div class="clearfix2"></div>

                    <!-- Email -->
                    <div class="block">
                    <label class="left"><b>Email</b></label>
                    <input class="ShippingInfo email" type="text" placeholder="Email" name="email" required>
                    </div>
                    <div class="clearfix2"></div>

                    <!-- Address -->
                    <div class="block">
                    <label class="left"><b>Address</b></label>
                    <input class="ShippingInfo AddLine1"  type="text" placeholder="Address Line1" name="addline1" required>
                    <input class="ShippingInfo AddLine2"  type="text" placeholder="Address Line2" name="addline2" required>
                    </div>

                    <div class="clearfix2"></div>
                    <!-- Country -->
                    <div class="block">
                        <label class="left"><b>Country</b></label>
                        <select>
                            <option class="country" value="US">United States</option>
                        </select>
                    </div>

                    <!-- City -->
                    <div class="block">
                        <labelclass="left"><b>State</b></label>
                        <select>
                            <option class="ShippingInfo state" value="MA">MA</option>
                        </select>
                    </div>

                    <div class="clearfix2"></div>
                    <!-- ZipCode -->
                    <div class="block">
                    <label class="left"><b>Zip/Postal Code</b></label>
                    <input class="ShippingInfo zip" type="text" placeholder="Zip/Postal Code" name="zipcode" required>
                    </div>

                    <!-- state  -->
                    <div class="block">
                    <label class="left"><b>City</b></label>
                    <input class="ShippingInfo city" type="text" placeholder="city" name="city" required>
                    </div>

                    <div class="clearfix2"></div>
                    <!-- Telephone  -->
                    <div class="block">
                    <label class="left"><b>Telephone</b></label>
                    <input class="ShippingInfo tel" type="text" placeholder="xxx-xxxx-xxxx" name="tel" required>
                    </div>

                    <div class="clearfix2"></div>
                    <!-- <button  class="btnC"  >Next</button> -->
                    <button  class="btnC btnS" onclick="openPage('Billing','Bill','orange')" type="button" >Next</button>
                </form>
            </div>


             <!-- ///////////// Billing TAB START HERE///////////////// -->
            <div id="Billing" class="tabcontent">
            <form class"form">
                    <!-- FirstName -->

                    <div class="block">
                        <label class="left"><b>Firstname</b></label>
                        <input class="ShippingInfo fname" type="text" placeholder="First name" name="firstname" required>
                    </div>

                    <!-- Last Name -->
                    <div class="block">
                        <label class="left"><b>Lastname</b></label>
                        <input class="ShippingInfo lname" type="text" placeholder="Last name" name="lastname" required>
                    </div>
                    <br>
                    <div class="clearfix2"></div>

                    <!-- Email -->
                    <div class="block">
                    <label class="left"><b>Email</b></label>
                    <input class="ShippingInfo email" type="text" placeholder="Email" name="email" required>
                    </div>
                    <div class="clearfix2"></div>

                    <!-- Address -->
                    <div class="block">
                    <label class="left"><b>Address</b></label>
                    <input class="ShippingInfo AddLine1"  type="text" placeholder="Address Line1" name="addline1" required>
                    <input class="ShippingInfo AddLine2"  type="text" placeholder="Address Line2" name="addline2" required>
                    </div>

                    <div class="clearfix2"></div>
                    <!-- Country -->
                    <div class="block">
                        <label class="left"><b>Country</b></label>
                        <select>
                            <option class="country" value="US">United States</option>
                        </select>
                    </div>

                    <!-- City -->
                    <div class="block">
                        <labelclass="left"><b>State</b></label>
                        <select>
                            <option class="ShippingInfo state" value="MA">MA</option>
                        </select>
                    </div>

                    <div class="clearfix2"></div>
                    <!-- ZipCode -->
                    <div class="block">
                    <label class="left"><b>Zip/Postal Code</b></label>
                    <input class="ShippingInfo zip" type="text" placeholder="Zip/Postal Code" name="zipcode" required>
                    </div>

                    <!-- state  -->
                    <div class="block">
                    <label class="left"><b>City</b></label>
                    <input class="ShippingInfo city" type="text" placeholder="city" name="city" required>
                    </div>

                    <div class="clearfix2"></div>
                    <!-- Telephone  -->
                    <div class="block">
                    <label class="left"><b>Telephone</b></label>
                    <input class="ShippingInfo tel" type="text" placeholder="xxx-xxxx-xxxx" name="tel" required>
                    </div>
                    
                <div class="clearfix2"></div>
                <button  class="btnC btnB" type="button">Next</button>

            </div>


             <!-- ///////////// Payment TAB START HERE///////////////// -->
            <div id="Payment" class="tabcontent">
            <div class="container">
                <div class="row">
                <!-- You can make it whatever width you want. I'm making it full width
                on <= small devices and 4/12 page width on >= medium devices -->
                    <div class="col-xs-12 col-md-4">


                <!-- CREDIT CARD FORM STARTS HERE -->
                <div class="panel panel-default credit-card-box">

                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                    <h3 class="panel-title display-td" >Payment Details</h3>
                    <div class="display-td" >                            
                        <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                    </div>
                    </div>                    
                </div>
                <div class="panel-body">
                    <form role="form" id="payment-form">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">CARD NUMBER</label>

                                    <div class="input-group">
                                        <input type="tel" class="form-control" name="cardNumber" placeholder="Valid Card Number"
                                        autocomplete="cc-number" required autofocus />
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-xs-7 col-md-7">
                        <div class="form-group">
                          <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                            <input type="tel" class="form-control" name="cardExpiry" placeholder="MM / YY"
                            autocomplete="cc-exp" required />
                        </div>
                    </div>
                    <div class="col-xs-5 col-md-5 pull-right">
                        <div class="form-group">
                            <label for="cardCVC">CV CODE</label>
                            <input type="tel" class="form-control"name="cardCVC" placeholder="CVC"
                            autocomplete="cc-csc" required/>
                    </div>
                </div>
            </div>
                <div class="row">
                <div class="col-xs-12">
                <div class="form-group">
                <label for="couponCode">COUPON CODE</label>
                <input type="text" class="form-control" name="couponCode" />
                </div>
                </div>                        
                </div>
                <div class="row">
                <div class="col-xs-12">
                <button class="btn btn-success btn-lg btn-block" type="submit">Start Subscription</button>
                </div>
                </div>
                <div class="row" style="display:none;">
                <div class="col-xs-12">
                <p class="payment-errors"></p>
                </div>
                </div>
                </form>
                </div>
                </div>            
                <!-- CREDIT CARD FORM ENDS HERE -->


                </div>            



                </div>
                </div>

                    <!-- If you're using Stripe for payments -->
                <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
                            

                <button  class="btnC btnR" type="button" >Next</button>
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
                    <div class="clearfix"></div>
                    <p id="sub-total">
                        <strong>Shipping fee : $<span>2</span></strong> 
                    </p>
                    <div class="clearfix"></div>
                    <p id="sub-total">
                        <strong>Tax : $<span>0</span></strong> 
                    </p>
                    <div class="clearfix"></div>
                    <p id="sub-total">
                        <strong>grandTotal : $<span id="grandTotal"></span></strong> 
                    </p>

                    <div class="clearfix"></div>

                    <button  class="btnC btnP" formaction="saveOrder.php" formmethod="POST">Place Order</button>
                        
                </form>
            
                
                <div class="clearfix"></div>
                <div class="clearfix"></div>

               
        
            </div>
            <!-- /////////////ORDER REVIEW TAB  END//////////////// -->



            
            



        </div>

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
                <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
                <script  src="js/CartFunction.js"></script> 
                <script  src="js/CartAni.js"></script>
                
                <script type="text/javascript" src="js/Checkout.js"></script>
        
    </body>
</html>