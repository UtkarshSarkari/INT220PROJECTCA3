<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    
    <?php
    //we are connecting php to phpmyadmin mySQL
    $s="localhost";
    $u="root";
    $p="";
    $d="utkarshDB";
 
    //establishing connection using object oriented method
    $connect=new mysqli($s,$u,$p,$d); //object method
    if($connect) echo "connection successfull<br>";
    else echo "error!<br>";
    

    $uname=$_REQUEST['username'];
    $email=$_REQUEST['email'];
    

    echo "Data recieved<br>";
    echo "USERNAME= ",$uname,"<br>EMAIL= ",$email;

    $prepare_query=$connect->prepare("INSERT INTO users (uname,email) VALUES (?,?)");
    $prepare_query->bind_param("ss",$uname,$email);

    if($prepare_query->execute()) echo "<br>USER data registered SUCCESFULLY<br><br>Click on Home button to redirect to login page <br><br> ";
    else echo "<br>UNSUCCESSFULL REGISTRATION!!!";

   ?>

   
   <a href="login.php"><button>HOME</button></a>
</body>
</html>