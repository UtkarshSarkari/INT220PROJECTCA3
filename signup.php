<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
    <div class="container">
        <div class="signup">
            <form action="register_user_db.php" method="post">
                <span id="sign">Sign Up</span>
                <input type="text" placeholder="Enter Your Name" name="username" required>
                <input type="email" placeholder="Enter Your Email" name="email" required>
                <input id="submit" type="submit"> 
            </form>
        </div>
    </div>
</body>
</html>