
<?php
require('PageTop.php');
?>
<body>
    <center>
        <h1>Welcome, <?php $_SESSION['first_name']; ?></h1>
        <form name="Logout" action="LogOut.php">
        <input type="button" class="btn btn-danger btn-lg" value="Log Out">
        </form>
    </center>
</body>