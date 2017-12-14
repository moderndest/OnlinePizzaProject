<!--
         Online Pizza 
         Filename: saveOrder.php
      
         Author: Chatsuda Rattarasan   
         Date:  DEC 6 2017

         This part is not finish due to the time limit.
        -->
<?php
include ('Connectdb.php');



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