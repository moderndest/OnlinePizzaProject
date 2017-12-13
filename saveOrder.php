<!--
         Online Pizza 
         Filename: index.php
      
         Author: Chatsuda Rattarasan   
         Date:  DEC 6 2017
        -->
<?php
include ('Connectdb.php');



// $Objarray =json_decode($_POST['json']);

// echo $Objarray->name;

// foreach($Objarray as $row){
    
//             echo "cart: ".$row->name . "\n";
//  }

// foreach($Objarray as $obj){

//         echo "cart: ".$obj->name . "      Billing:".$obj->billinInfo[1] ."\n";
// }


// function jsonString2Obj($str){
//     return json_decode(stripslashes($str));
// }






// foreach ($shoppingCart as $shoppingCart) {

//     // ...
//   }

//  foreach()
// $result = $dbh->prepare("SELECT * FROM Product WHERE ProductName='$user'");
// $result->execute();
// $count = $result->rowCount();

// $variable->data->user_nicename

// foreach ($shoppingCartdata->shoppingCart as $shoppingCart) {
//     $productname =$row['name'];
//     $price=$row['price'];
//     $productcount= $row['count'];
//     //echo a row
//     //is working
//     }


///////////// Find the ProductNO //////////////////////////////////////

// $sql = "SELECT * FROM Product WHERE Name = '$productname'";
// $result =$dbh->prepare($sql);
// $result->execute();
// unset($data);
// $i=0;
// $data = array();
// foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $row) {
//     $productNo=$row["ProductNo"];
//     $price=$row["Price"];
//     print_r($row);
//     //echo a row
//     //is working
//     }



///////////// Save order to  ORDER database //////////////////////////////////////


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
    // $dbh->query("INSERT INTO USER (USERID,Username, Password) VALUES ('$txtIDNo', '$user', '$pass')");
    
    $dbh->query("INSERT INTO Orders (OrderNo,ClientID,ProductID,Quantity,Total) VALUES ('$txtIDNo', 'G002','P001','5.99','888')");
    $dbh->query("INSERT INTO Orders (OrderNo,ClientID,ProductID,Quantity,Total) VALUES ('$txtIDNo', 'G002','P002','5.99','888')");
    $dbh->query("INSERT INTO Orders (OrderNo,ClientID,ProductID,Quantity,Total) VALUES ('$txtIDNo', 'G002','P10','9.99','888')");
    
    //echo $sql_header;

    
    //UPDATE RUNNING NUMBER
    $sql = "SELECT * FROM runningNo WHERE Name = 'R'";
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

    $dbh->query("UPDATE runningNo SET MAX = '{$number}' WHERE Name= 'R'");	



?>