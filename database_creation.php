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
        //connecting to database
        $server="localhost";
        $username="root";
        $email="";
        $dbname="";
        $connect=new mysqli($server,$username,$email,$dbname);
        if($connect){
            echo "Database connected to this PHP";
        }else echo "Database connection FAILED!!!";

        $createDB="CREATE DATABASE utkarshDB";
        if($connect->query($createDB)) echo "Database created<br>";
        else echo "Database creation FAILED!!!";


        ?>
</body>