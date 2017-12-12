<!DOCTYPE html>
<!-- 
    Online Pizza 
    Filename: Combo.php

    Author: Chatsuda Rattarasan   
    Date:  DEC 11 2017 -->
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

                 <!-- COMBO SET -->
                <section class="one-third item">
  
                    <button class="add-to-cartAnimate" src ="image/Pic/smallset.png" data-name="Small Set" data-price="9.99" type="button">Add to cart</button>
                    <img class="combo" src="image/Pic/smallset.png" alt="smalleset">
                    <img class="label" src="image/label/labe.png" >
                    <p>Small Set $9.99</p>
                    
                    <div class="clearfix"></div>
                
                </section>

                <!-- PARTY SET -->
                <section class="one-third item">
                    <button class="add-to-cartAnimate" src ="image/Pic/partyset.png" data-name="Party Set" data-price="12.99" type="button">Add to cart</button>
                    <img class="combo" src="image/Pic/partyset.png" alt="partyset">                   
                    <img class="label" src="image/label/labe.png" > 
                    <p>Party Set $12.99</p>
                </section>

                <!-- FAMILY SET -->
                <section class="one-third item">
                    <button class="add-to-cartAnimate" data-name="Family Set" data-price="14.99" src = "image/Pic/FamSet.png" type="button">Add to cart</button>      
                    <img class="combo" src ="image/Pic/FamSet.png" alt="famset">
                    <img class="label" src="image/label/labe.png">
                    <p>Family Set $14.99</p>
                            
                </section>
            </div>


       
            <!-- Continue Coding here -->
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

        <script  src="js/CartFunction.js"></script>
        <script  src="js/CartAni.js"></script>
        
                
    </body>
</html>