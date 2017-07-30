<html>
<?php include('Head.php'); ?>
<body>
<?php
$arr = array("N8WM"=>"0083a5d723f5cf62e38eec0572f76663d91b497f", "mccuttom"=>"179e13144ca36db904f242d1520275d62f79cfc7", "rmccutchen"=>"7271b2084652d5ff3078beb6b9eda57813f462b7");
echo ($arr[htmlspecialchars($_POST['myusername'])] == sha1(htmlspecialchars($_POST['mypassword'])))?"<h1><center>Welcome, ".htmlspecialchars($_POST['myusername'])."</center></h1>":"<h1><center>Invalid Login</center></h1>";
?>
</body>
</html>