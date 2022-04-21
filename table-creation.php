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
    $server="localhost";
    $username="root";
    $password="";
    $dbname="utkarshDB";

    //establishing connection //procesural method
    $connect=mysqli_connect($server,$username,$email,$dbname);    //$obj=new mysqli($s,$u,$p); //object method
    if($connect){
        echo "connection successfull<br>";
    }else{
        echo "error!<br>";
    }

    $create_table="CREATE TABLE users(uname VARCHAR(30),email VARCHAR(30));";
    
    if($connect->query($create_table)) echo "Table created";
    else "Table creation FAILED!!!";

    ?>
</body>
</html>