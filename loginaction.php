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

        $connect=new mysqli($s,$u,$p,$d);
        if($connect) echo "<br><br><br>";
        else echo "error!<br>";

        $uname=$_REQUEST['username'];
        $email=$_REQUEST['email'];
        

        $my_query="SELECT uname, email FROM users WHERE uname='$uname' AND email='$email'";
        $result=$connect->query($my_query);

        if($result->num_rows > 0)
        {
            echo $result->num_rows." user(s) found!<br><br>";
            header("Location: ./index.php");
        }
        else
        {
            echo "NO USER FOUND IN THE TABLE <br> CLICK ON HOME TO SIGN UP <br> <br>";
        }

    ?>

<a href="./signup.php"><button>HOME</button></a>
</body>
</html>