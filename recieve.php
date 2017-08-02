<?php
require('Head.php');
require('Variables.php');
$count = arr_search(htmlspecialchars($_POST['myusername']), $users['username']);
if ($count != -1 && $users['encrypted_password'][$count] == sha1(htmlspecialchars($_POST['password']))) {
    $_SESSION['username'] = $users['username'][$count];
    $_SESSION['first_name'] = $users['first_name'][$count];
    $_SESSION['last_name'] = $users['last_name'][$count];
    $_SESSION['family_name'] = $users['family_name'][$count];
    echo '<meta http-equiv="refresh" content="1; URL=./Homepage.php">';
}
else {
    echo '<meta http-equiv="refresh" content="1; URL=./Login.php">';
    setcookie('inval', 1, time() + 3600);
}

function arr_search($needle, $haystack) {
    for ($i = 0; $i < count($haystack); $i ++) {
        if (strcmp(strtolower($needle), strtolower($haystack[$i])) == 0) {
            return $i;
        }
    }
    return -1;
}
?>
<center><h1><code>Error:</code> There was an error while logging in</h1></center>