<?php
function OpenCon()
{
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'websitenet';
$conn = new mysqli($server, $username, $password, $database) or exit("Connect failed: %s\n".$conn->error);

return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }

// mysqli_connect("{$host}", "{$username}", "{$password}") or exit(mysqli_error());
// mysqli_select_db("{$db_name}") or exit(mysqli_error());

// <?php
// 	$server = "localhost";
// 	$username = "root";
// 	$password = "";
// 	$database = "login";

// 	$konek = mysqli_connect($server,$username,$password);
// 	if($konek){
// 		$pilih = mysqli_select_db($database);
// 	}else{
// 		echo mysqli_error();
// 	}

// $pilih = mysqli_select_db($konek, $database);

// $konek = mysqli_connect($server, $username, $password);
//     if ($konek) {
//         $pilih = mysqli_select_db($konek, $database);
//     }
    // else {
    //     echo mysqli_error();
    // }
