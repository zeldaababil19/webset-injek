<?php

session_start();

include '../db.inc.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
$connect = mysqli_connect('localhost', 'root', '', 'websitenet');
$sql = "SELECT username,password,role FROM users WHERE username='{$username}' AND password='{$password}'";
$qry = mysqli_query($connect, $sql) or exit(mysqli_error());
$rows = mysqli_num_rows($qry);
$login = mysqli_fetch_array($qry);

if (1 == $rows) {
    $_SESSION['admin'] = 1;
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $login['role'];
}

header('Location:index.php');
