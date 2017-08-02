<?php
require('Variables.php');
require('Head.php');
if (!isset($_SESSION['username'])) {
    echo '<meta http-equiv="refresh" content="0; URL=./Login.php">';
}