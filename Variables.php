<?php
$conn = $_SESSION['conn'];
$query = mysqli_query('SELECT * FROM user');
$users = mysqli_fetch_array($conn, $query);