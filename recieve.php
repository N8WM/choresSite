<html>
<?php include('Head.php'); ?>
<body>
<?php
include('Variables.php');
echo ($arr[htmlspecialchars($_POST['myusername'])] == sha1(htmlspecialchars($_POST['mypassword'])))?"<h1><center>Welcome, ".htmlspecialchars($_POST['myusername'])."</center></h1>":"<h1><center>Invalid Login</center></h1>";
?>
</body>
</html>