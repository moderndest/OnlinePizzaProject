<?php


include ('../Connectdb.php');
// echo ($_POST['uname']);
// echo '    ';
// echo ($_POST['psw']);

//get all the names and values that have been posted.
$username = $_POST['uname'];
$password = $_POST['psw'];


// protect from mysql injection
$username = stripslashes($username);
$password = stripslashes($password);  


$query = "SELECT * FROM USER WHERE Username='$username' and Password='$password'";

$result = $dbh->prepare($query);
$result->execute();

print("Return number of rows that were deleted:\n");
$count = $result->rowCount();
print("Deleted $count rows.\n");

if($count== 1){
  $message = "it work";
  echo "<script type='text/javascript'>alert('$message');</script>";
  $seconds = 5 + time();
  setcookie(loggedin, date("F jS - g:i a"), $seconds);
  $message = "Sign in success";
  echo "<script type='text/javascript'>alert('$message');</script>";
  header("location:../index.php");
}else{
  echo 'Incorrect Username or Password';
  echo "<script type='text/javascript'>alert('$message');</script>";

}

?>