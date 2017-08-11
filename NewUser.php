<?php include('Head.php'); ?>
<body style="text-align: center;">
    <h1>MyChores New User</h1>
    <form action="NewUserDB.php" name="new_user" method="post">
        <br>
        <h3>First Name: <input type="text" name="first_name"></h3>
        <br>
        <h3>Last Name: <input type="text" name="last_name"></h3>
        <br>
        <h3>Username: <input type="text" name="username"></h3>
        <br>
        <h3>Password: <input type="text" name="password1"></h3>
        <br>
        <h3>Retype Password: <input type="text" name="password2"></h3>
        <br>
        <h3><input type="checkbox" name="existing_family" class="form-control"> I am joining an existing family <a href="#" class="glyphicon glyphicon-info-sign" data-toggle="tooltip" title="Families are used for example to assign chores"></a></h3>
        <br>
        <h3>Family Name (optional): <input type="text" name="first_name"></h3>
        <br>
    </form>
</body>