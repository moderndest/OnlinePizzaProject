<!DOCTYPE html>
 <!--
         Online Pizza 
         Filename: header.html
      
         Author: Chatsuda Rattarasan   
         Date: DEC 6 2017
        -->

<!--  HEADER SECTION -->
<script type="text/javascript">
    $(function(){
    $("#LogIn").load("LogIn.html"); 
  });
</script>
<header>
        
        <div id="header-inner">
            <img id="img_header" src="image/Pic/HeaderIcon.png">
        
            <div id="header-nav">
                <nav>
                    <a href="#" id="menu-icon"></a>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="Menu.php"> Menu</a></li>
                        <li><a href="Combo.php">Combo</a></li>
                        <li><a href="MyOrder.php">My Order</a></li>
                        <li><a href="AboutUs.php">About Us</a></li>
                    </ul>
                </nav>
            </div>
            <a class="cartButton" href="cart.php">
                <!-- <span class="cart">0</span> -->
                    <img class="cart" src="image/Button/cart.png">
                    <span  id="totalItems"><script>
                         document.getElementById("totalItems").innerHTML = sessionStorage.getItem("totalItems");
                    </script>
                    </span>
             </a>
            <!--  Login Start   -->    
            <?php include ('Login/Login.php');?>
             <!--  END Login   --> 
        </div>
        
    </header>
    <!--  END HEADER SECTION -->