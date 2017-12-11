<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">    
        <script src="js/loginPopup.js"></script>
        <link rel="stylesheet" href="css/style.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script> 
        <!-- <script  src="js/addtocart.js"></script>  -->
        
        <script type="text/javascript" src="js/LoadFile.js"></script>   
        <link rel="stylesheet" href="css/ComboStyle.css"/>
        <title>Combo</title>
    </head>
    <body> 
            <!--  HEADER SECTION -->
            <!-- <div id="header"></div> -->
            <?php include 'header.php';?>
            
            <!--Remaining section-->
            <img id="Comboheader" src="image/icon/ComboSet.png">

            <div class="clearfix"></div>
             <div id="inner-wrapper">
                <section class="one-third item">
                    <div class="set-wrapper">
                        <form class="add-to-cart" action="" >
                            
                            <!-- <button class="add-to-cart"  type="submit" formaction="SignUp/SignUp.php" formmethod="POST">Add to cart</button> -->
                            <button class="add-to-cartAnimate" data-name="Small Set" data-price="9.99" type="button">Add to cart</button>
                            <div class ="smallsetPic">
                                <img id ="itemselect1" src="image/Pic/smallset.png" alt="smalleset">
                            </div>
                            <div class="label-wrapper">
                                <img  src="image/label/labe.png" >
                            </div>
                            <div class="text-wrapper">
                                <p>Small Set</p>
                            </div>
                            <div class="clearfix"></div>

                            
                        </form>
                    </div>
                </section>

                <section class="one-third item">
                    <div class="set-wrapper">
                        <form class="add-to-cart" action="" >
                            <button class="add-to-cartAnimate" data-name="Party Set" data-price="12.99" type="button">Add to cart</button>
                    
                            <div class="Partypic-wrapper">   
                                <img id ="itemselect2" src="image/Pic/partyset.png" alt="partyset">
                            </div>
                            <div class="Partylabel-wrapper">                       
                                <img src="image/label/labe.png" > 
                            </div> 
                            <div class="Partytext-wrapper">               
                                <p>Party Set</p>
                            </div>
                        </form>
                    </div>
                </section>

                <section class="one-third item">
                    <div class="set-wrapper">
                    <form class="add-to-cart" action="" >
                        <button class="add-to-cartAnimate" data-name="Family Set" data-price="14.99" type="button">Add to cart</button>
                            <div class="fampic-wrapper ">
                                <img id ="itemselect3" src="image/Pic/FamSet.png" alt="famset">
                                <div >
                            </div>
                            <div class="famlabel-wrapper">
                                <img src="image/label/labe.png">
                            </div>
                            <div class="famtext-wrapper">
                                <p>Family Set</p>
                            </div>
                    </form>
                    </div>
                </section>
            </div>


        <div class="clearfix"></div>
        <div>
            <ul id="show-cart">
                <li></i>
            </ul>
            <div>Total Cart:$<span id="total-cart"></span> </div>
        </div>
        <button id="clear-cart"> clear cart</buttion>
            <!-- Continue Coding here -->
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

        <script  src="js/CartFunction.js"></script>
        <script  src="js/CartAni.js"></script>
        
                
    </body>
</html>