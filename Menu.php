<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

       
        <link rel="stylesheet" href="css/style.css" />
		<script type="text/javascript" src="js/LoadFile.js"></script>  
        <title>Menu</title>

        <!--animate-->
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.0/animate.min.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <!--jquery-->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>  
        <!--waypoints-->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js"></script>
        <script src="js/waypoints.js" type="text/javascript"></script>
        <!--fonts-->
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine"><!--pizza-->
        <link href="https://fonts.googleapis.com/css?family=Timmana" rel="stylesheet">
        <!--css-->
        <link rel="stylesheet" type="text/css" href="css/style_menu.css"/>	

    </head>
    <body> 
            <!--  HEADER SECTION -->
            <?php include 'header.php';?>
            <!--Remaining section-->
    
            <!-- Continue Coding here -->
        <div class="inner-wrapper">
            <img src="image/icon/Pizza.png" class="os-animation" data-os-animation="flash" data-os-animation-delay=".3s">
            <div class="clearfix"></div>
            <div class="center">  
                    <!--       PEPPERONI           -->
                <section class="section1 os-animation item" data-os-animation="bounceInLeft" data-os-animation-delay=".3s">
                    <button class="add-to-cartAnimate" src ="image/Pic/smallset.png" data-name="Pepperoni" data-price="5.99" type="button">Add to cart</button>					
                    <img src="image/Pic/Pepperoni.png" class="pizza">
                    <img src="image/label/labe.png" class="label">
                        <p>Pepperoni $5.99</p>

                </section>
                <!--       SUPRREME           -->
                <section class="section1 os-animation item" data-os-animation="bounceInDown" data-os-animation-delay=".3s">
                    <button class="add-to-cartAnimate" src ="image/Pic/Supreme.png" data-name="Supreme" data-price="5.99" type="button">Add to cart</button>
                    <img src="image/Pic/Supreme.png" class="pizza">
                    <img src="image/label/labe.png" class="label">
                    <p>Supreme $5.99</p>

                </section>
                    <!--       Customize           -->
                <section class="section1 os-animation item" data-os-animation="bounceInRight" data-os-animation-delay=".3s">
                    <button class="add-to-cartAnimate" src ="image/Pic/www.newyorkvinnyspizza.com.png" data-name="Customize" data-price="5.99" type="button">Add to cart</button>		
                    <img src="image/Pic/www.newyorkvinnyspizza.com.png" class="pizza">
                    <img src="image/label/labe.png" class="label">
                    <p>Customize $5.99</p>
                </section>
            </div>

            <div class="clearfix"></div>
            <!-- SNACK -->
            <img src="image/icon/SNACK.png" class="os-animation" data-os-animation="rollIn" data-os-animation-delay=".3s">
            <div class="center">
                
                <!-- Baffalo wing -->
                <section class="section1 os-animation item" data-os-animation="fadeInUp" data-os-animation-delay=".3s">		
                    <button class="add-to-cartAnimate" src ="image/Pic/wings_hot1.png" data-name="Baffalo wing" data-price="3.99" type="button">Add to cart</button>
                    <img src="image/Pic/wings_hot1.png" class="pizza">
                    <img src="image/label/labe.png" class="label">
                        <p>Baffalo wing $3.99</p>
                </section>

                <!-- Bread -->
                <section class="section1 os-animation item" data-os-animation="fadeInUp" data-os-animation-delay=".5s">		
                    <button class="add-to-cartAnimate" src ="image/Pic/garlic_bread.png" data-name="Bread" data-price="2.00" type="button">Add to cart</button>
                    <img src="image/Pic/garlic_bread.png" class="pizza">
                    <img src="image/label/labe.png" class="label">
                    <p>Bread $2.00</p>
                </section>

                <!-- French fries -->
                <section class="section1 os-animation item" data-os-animation="fadeInUp" data-os-animation-delay=".7s">		
                    <button class="add-to-cartAnimate" src ="image/Pic/french-fries.png" data-name="French Fries" data-price="3.00" type="button">Add to cart</button>
                    <img src="image/Pic/french-fries.png" class="pizza">
                    <img src="image/label/labe.png" class="label">
                    <p>French Fries $3.00<p>
                </section>	
                </div>

                <!-- DRINK -->
            <div class="clearfix"></div>
            <img src="image/icon/DRINK.png" class="os-animation" data-os-animation="fadeInRight" data-os-animation-delay=".3s">
            <div class="center">

                <!-- PEPCI -->
                <section class="section1 os-animation item" data-os-animation="zoomInLeft" data-os-animation-delay=".3s">		
                <button class="add-to-cartAnimate" src ="image/Pic/Pepci1.png" data-name="Pepci" data-price="1.50" type="button">Add to cart</button>
                    <img src="image/Pic/Pepci1.png" class="pizza">
                    <img src="image/label/labe.png" class="label">
                    <p>Pepci $1.50<p>
                </section>

                <!-- COKE -->
                <section class="section1 os-animation item" data-os-animation="jackInTheBox" data-os-animation-delay=".5s">		
                <button class="add-to-cartAnimate" src ="image/Pic/Coke.png" data-name="Coke" data-price="1.50" type="button">Add to cart</button>
                    <img src="image/Pic/Coke.png" class="pizza">
                    <img src="image/label/labe.png" class="label">
                    <p>Coke $1.50<p>
                </section>

                <!-- SPRITE -->
                <section class="section1 os-animation item" data-os-animation="bounceInRight" data-os-animation-delay=".7s">		
                <button class="add-to-cartAnimate" src ="image/Pic/sprite1.png" data-name="SpriteCoke" data-price="1.50" type="button">Add to cart</button>
                    <img src="image/Pic/sprite1.png" class="pizza">
                    <img src="image/label/labe.png" class="label">
                    <p>Sprite $1.50<p>
                </section>
            </div>
        </div>


        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>
        <script  src="js/CartFunction.js"></script>
        <script  src="js/CartAni.js"></script>
    </body>
</html>
