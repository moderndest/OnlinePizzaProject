<?php
include ('Connectdb.php');
// echo ($_POST['email']);
// echo '    ';
// echo ($_POST['pswSigup']);


// header("Content-Type: application/json; charset=UTF-8");
// $obj = json_decode($_POST["shippingCart"], false);

// $conn = new mysqli("name", "src", "price", "count");
// $result = $conn->query("SELECT name FROM ".$obj->table." LIMIT ".$obj->limit);
// $outp = array();
// $outp = $result->fetch_all(MYSQLI_ASSOC);

// echo json_encode($outp);





echo($_POST['shoppingCart']);


$result = $dbh->prepare("SELECT * FROM Product WHERE ProductName='$user'");
$result->execute();
$count = $result->rowCount();









    $sql = "SELECT * FROM runningNo WHERE Name = 'R'";
    $result =$dbh->prepare($sql);
    $result->execute();
    unset($data);
    $i=0;
    $data = array();


   
    foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $prefix=$row["Name"];
        $number=$row["MAX"];
        print_r($row);
        //echo a row
        //is working
        }
    echo ($prefix);
    echo ($number);
    $number=sprintf("%03d",++$number);
    echo ($number);
    $txtIDNo=$prefix.$number;

    $dbh->query("INSERT INTO Orders (USERID,Username, Password) VALUES ('$txtIDNo', '$user', '$pass')");
    echo $sql_header;
    
    //UPDATE RUNNING NUMBER
    $sql = "SELECT * FROM runningNo WHERE Name = 'U'";
    $result = $dbh->prepare($sql);
    $result->execute();
    unset($data);
    $i=0;
    $data = array();
    foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $prefix=$row["Name"];
        $number=$row["MAX"];
        print_r($row);
        }
    echo ($number);
    $number++;
    echo ($number);

    $dbh->query("UPDATE runningNo SET MAX = '{$number}' WHERE Name= 'U'");	

// if session is not started






// if(isset($_POST['shippingInfo']) && isset($_POST['billingInfo'])&& isset($_POST['shippingCart'])){
//     $cart = $_POST['shippingCart'];
//     $shippingInfo = $_POST['shippingInfo'];
//     $bill = $_POST['billingInfo'];



    
    



//     echo($_POST[$cart]);

//     echo($_POST[$shippingInfo]);
//     echo($_POST[$bill]);

// }



// session_name('shippingInfo');
// print_r($_SESSION);
// $_SESSION["firstname"] = "Peter";

// $_SESSION["lastname"] = "Parker";

// Accessing session data






// $this->load->library("shippingInfo");

// $username = $this->nativeshippingInfo->get( 'Fname' );

// echo ($username);
// store our current session
// $my_sess = $_SESSION;

// // Loading the first session.
// session_name('shippingInfo');
// session_start();
// // Now we have first session variables available in $_SESSION
// $_FIRST_SESSION = $_SESSION;
// // End current session.
// session_write_close();
// // Just to make sure nothing remains in the session.
// unset($_SESSION);
// // Now set the second session name.
// session_name('billingInfo');
// // Check and see if the second session name has a session id.
// if (isset($_COOKIE['billingInfo']))
//     // There's already a session id for this name.
//     session_id($_COOKIE['billingInfo']);
// else
//     // We need to generate a new session id as this is the first time.
//     session_id(sha1(mt_rand()));
// session_start();
// $_SECOND_SESSION = $_SESSION;

// echo ($_SECOND_SESSION);





// $message = "it work";
// echo "<script type='text/javascript'>alert('$number');</script>";

// if(isset($_POST['email']) && isset($_POST['pswSigup'])){
// 	$user = $_POST['email'];
// 	$pass = $_POST['pswSigup'];
//     echo ($user);
//         $result = $dbh->prepare("SELECT * FROM USER WHERE Username='$user'");
//         $result->execute();
//         $count = $result->rowCount();

// 		if($count > 0 ) { //check if there is already an entry for that username
//             echo "Username already exists!";
// 		}else{
//             $sql = "SELECT * FROM runningNo WHERE Name = 'U'";
//             $result =$dbh->prepare($sql);
//             $result->execute();
//             unset($data);
//             $i=0;
//             $data = array();

           
//             foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $row) {
//                 $prefix=$row["Name"];
//                 $number=$row["MAX"];
//                 print_r($row);
//                 //echo a row
//                 //is working
//                 }
//             echo ($prefix);
//             echo ($number);
//             $number=sprintf("%03d",++$number);
//             echo ($number);
//             $txtIDNo=$prefix.$number;

//             $dbh->query("INSERT INTO USER (USERID,Username, Password) VALUES ('$txtIDNo', '$user', '$pass')");
//             echo $sql_header;
            
//             //UPDATE RUNNING NUMBER
//             $sql = "SELECT * FROM runningNo WHERE Name = 'U'";
//             $result = $dbh->prepare($sql);
//             $result->execute();
//             unset($data);
//             $i=0;
//             $data = array();
//             foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $row) {
//                 $prefix=$row["Name"];
//                 $number=$row["MAX"];
//                 print_r($row);
//                 }
//             echo ($number);
//             $number++;
//             echo ($number);

//             $dbh->query("UPDATE runningNo SET MAX = '{$number}' WHERE Name= 'U'");	
// 			header("location:../index.php");
// 		}
// 	}

//header("location:index.php");
?>