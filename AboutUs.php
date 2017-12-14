<!DOCTYPE html>
<!--
        Online Pizza 
        Filename: header.php
     
        Author:Ya-Hsuan Lin    
        Date: DEC 6 2017
       -->

<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie-edge"> 
       <script src="js/loginPopup.js"></script>
       <link rel="stylesheet" href="css/style.css" />
       <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
       <script src="js/StaffPopup.js"></script>    
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>  
        <script type="text/javascript" language="javascript" src="js/LoadFile.js"></script>  
        <link rel="stylesheet" href="css/aboutusStyle.css" />

       <title>ABOUT US</title>
   </head>
   <body> 
           <!--  HEADER SECTION -->
           <?php include 'header.php';?>

           <!--  ABOUTUS SECTION -->
        
           <div class="clearfix"></div>
    <div id="inner-wrapper">
           <div class="ourfamily">
               <p>Our Family</p>
   
           <div id="inner-icon">
                   <img src="image/Pic/ceo.png">            
                   <img src="image/Pic/cto.png">
                   <img src="image/Pic/cfo.png">
                   <img src="image/Pic/coo.png">
                   <img src="image/Pic/manager.png">
                   <img src="image/Pic/humanresource.png">
           </div>
           </div>
         <!--  Middle SECTION -->
          <div class="inner-text" style="max-width: 400px;">
               <h4>What makes us an Inetnational Pizaa?</h4>
               <p>We started it in a broom closet.</p>
               <P>So instead of chopping vegetables with machines, we chop them by hand every day.</P>
               <p>Instead of investing in gimmicks, we invest in fresh ingredients.</p>
               <p>And we pile them high on our fresh, never-frozen original dough.</p>
          </div>
               
           <!--  CS SECTION -->
            <div class="social">
               <p>Social Responsibility</p>
            <div id="sr-icon">
                   <img src="image/Pic/CS-icon.png">
           </div> 
           
            </div>

    </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
        <script  src="js/CartFunction.js"></script> 
        <script >onlinePizzaCart.displayCarttotal();</script>

   </body>
</html>
