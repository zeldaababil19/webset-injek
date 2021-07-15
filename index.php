<html>
<head>
	<title>Vulnerable WebApps</title>
	<link rel="stylesheet" href="asset/css/bootstrap.min.css" crossorigin="anonymous">
	<script src="asset/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#ddd;">
<style>
.ujang{
	margin-top:10%;
}
.batas-negara{
	padding:30px;
}

</style>
<style>
.tabel-okeh{
	background:#fff;
}
.hamidz{
	background: #fff;
	padding: 30px;
}
.jarak{
	padding-top: 10px;
}
.content{
	color:#828282;
}
.content img {
    margin-right: 10px;
}
</style>
<table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
<tr>
<td style="padding-bottom: 20px; padding-top: 30px; font-size: 15px;"><strong><a href="guestbook.php">Sign Guestbook</a> | <a href="viewguestbook.php">View Guestbook</a> | <a href="findguestbook.php">Find in Guestbook</a></strong></td>
</tr>
</table>
<?php
include 'db.inc.php';
$connect = mysqli_connect('localhost', 'root', '', 'websitenet');
$query = mysqli_query($connect, 'select * from content');
$ambil = mysqli_fetch_array($query);
?>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" style="background-color:#fff;">
<tr>
	<td>
		<div class="hamidz">
		<h2 style="font-size: 1rem; font-weight: bold;"><?php echo $ambil['title']; ?></h2>
		<div class="content">
		<?php echo $ambil['body']; ?>
		</div>
		</div>
	</td>
</tr>
<!-- <tr>
<th><?php echo $ambil['title']; ?></th>
</tr>
<tr>
<td>
<?php echo $ambil['body']; ?>
</td>
</tr> -->
</table>

<p align="center"><a href="index.php">Home</a> | <a href="about.php?file=README.md">About</a></p>
</body>
</html>
