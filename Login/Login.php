<!DOCTYPE html>
 <!--
         Online Pizza 
         Filename: Login.html
      
         Author: Chatsuda Rattarasan   
         Date: DEC 6 2017
        -->

<!--  HEADER SECTION --> 
<?php
// * ----------- Choose Product -------------------------*/



// if($ProductCode!= NULL)
// {
// 	include 'Connectdb.php';
//        $sql="SELECT * FROM product WHERE ProductCode = '".$ProductCode. "' ";
// 	   $result=mysql_query($sql);
// 	   while($r=mysql_fetch_assoc($result))
// 	   {
// 		   $ProductCode=$r['ProductCode'];
// 		   $ProductName=$r['ProductName'];
// 		   $UnitPrice=$r['UnitPrice'];
// 	   }
// 	   mysql_close($conn);
// }
// if($EditProductCode!= NULL)
// {
// 	include 'Connectdb.php';
//        $sql="SELECT * FROM product WHERE ProductCode = '".$EditProductCode. "' ";
// 	   $result=mysql_query($sql);
// 	   while($r=mysql_fetch_assoc($result))
// 	   {

// 		   $EditProductCode=$r['ProductCode'];
// 		   $EditProductName=$r['ProductName'];
// 		   $EditUnitPrice=$r['UnitPrice'];
// 	   }
// 	   mysql_close($conn);
// }
?>
  	


<button  class ="LoginButtonH" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
    <img src="image/Button/user_Icon.png">
</button>


<div id="id01" class="modal">
  
  <form class="modal-content animate"  >
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="image/icon/user.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
    <form method="POST">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label><b>Password</b></label>
        <input type="password" id="myInput" placeholder="Enter Password" name="psw" required>
        <br>
        <input type="checkbox" onclick="myFunction()">Show Password
        <br>
        <input type="checkbox" checked="checked"> Remember me
        
        <button class="loginButton" type="submit" formaction="Login/CheckLogin.php" formmethod="POST">Login</button>
        <div class="clearfix"></div>
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </form>
        <div class="container">
            
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
        
        <p> OR </p>

        <!-- SignUp Strat Here -->

        <!-- Button to open the modal -->
        <button class="SignUpButton1" onclick="document.getElementById('id02').style.display='block'">Sign Up</button>

        <!-- The Modal (contains the Sign Up form) -->
        <div id="id02" class="SignUpmodal">
            <span onclick="document.getElementById('id02').style.display='none'" class="SignUpclose" title="Close Modal">&times;</span>
            <form class="SignUpmodal-content animate" method="POST">
                <div class="container">
                    <label><b>Email</b></label>
                    <input class="SignUpInput"type="text" placeholder="Enter Email" name="email" required>

                    <label><b>Password</b></label>
                    <input class="SignUpInput"type="password" placeholder="Enter Password" name="pswSigup" required>

                    <label><b>Repeat Password</b></label>
                    <input class="SignUpInput"type="password" placeholder="Repeat Password" name="psw-repeat" required>
                    <input class="SignUpInput"type="checkbox" checked="checked"> Remember me
                    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                    <div class="SignUpclearfix">
                        <button  type="button" onclick="document.getElementById('id02').style.display='none'" class="SignUpcancelbtn">Cancel</button>
                        <button  type="submit" class="signupbtn"formaction="SignUp/SignUp.php" formmethod="POST">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- END SignUp -->

        
    </div>
  </form>
</div>
 <!--  END Login   --> 