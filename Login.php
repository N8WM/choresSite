<?php
require_once('ConnectDB.php');
?>
<html>
    <head>
        <title>MyChores</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body class="container">
    <center>
        <form action="recieve.php" method=POST name="sendUser">
        <h1>MyChores Log in</h1>
        <?php
        if (isset($_COOKIE['inval'])) {
            setcookie('inval', 1, time() - 3600);
            ?>
            <div class="alert alert-danger alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <center><strong>Invalid Login!</strong> Username and password do not match</center>
            </div>
            <?php
        }
        ?>
        <h3>
        <br>
        Username:&nbsp;<input type="text" name="myusername" placeholder="username">
        <br><br>
        Password:&nbsp;<input type="password" name="mypassword" placeholder="password">
        <br><br><br>
        <input type="submit" class="btn btn-warning btn-lg" value="Login">
        </h3>
        </form>
        <h5>
        <br>
        Don't have a user?
        <br>
        <a href='./NewUser.php'>Create one!</a>
        </h5>
    </center>
    </body>
</html>