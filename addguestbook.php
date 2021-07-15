<?php

include 'db.inc.php';

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$datetime = $_POST['date'];
$captcha = $_POST['captcha'];
$captcha2 = $_POST['captcha2'];

if ($captcha == $captcha2) {
    $connect = mysqli_connect('localhost', 'root', '', 'websitenet');
    $sql = "INSERT INTO guestbook(name, email, comment, datetime) VALUES('{$name}', '{$email}', '{$comment}', '{$datetime}')";
    $result = mysqli_query($connect, $sql) or exit(mysqli_error());
}

if ($result) {
    header('Location:guestbook.php?x=SUCCESS');
} else {
    header('Location:guestbook.php?x=ERROR');
}
mysqli_close();
