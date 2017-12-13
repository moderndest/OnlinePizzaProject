<?php
include ('../Connectdb.php');
echo ($_POST['email']);
echo '    ';
echo ($_POST['pswSigup']);

//get all the names and values that have been posted.


// $message = "it work";
// echo "<script type='text/javascript'>alert('$number');</script>";

if(isset($_POST['email']) && isset($_POST['pswSigup'])){
	$user = $_POST['email'];
	$pass = $_POST['pswSigup'];
    echo ($user);
        $result = $dbh->prepare("SELECT * FROM USER WHERE Username='$user'");
        $result->execute();
        $count = $result->rowCount();
		if($count > 0 ) { //check if there is already an entry for that username
            echo "Username already exists!";
		}else{
            $sql = "SELECT * FROM runningNo WHERE Name = 'U'";
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

            $dbh->query("INSERT INTO USER (USERID,Username, Password) VALUES ('$txtIDNo', '$user', '$pass')");
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
            $message = "Sigup Success";
            echo "<script type='text/javascript'>alert('$message');</script>";
			header("location:../index.php");
		}
	}
?>