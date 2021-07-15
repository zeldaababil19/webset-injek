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
</style>
<table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
<tr>
<td style="padding-bottom: 20px; padding-top: 30px; font-size: 15px;"><strong><a href="guestbook.php">Sign Guestbook</a> | View Guestbook | <a href="findguestbook.php">Find in Guestbook</a></strong></td>
</tr>
</table>
<?php
    include 'db.inc.php';
    $connect = mysqli_connect('localhost', 'root', '', 'websitenet');
    $query = mysqli_query($connect, 'select * from guestbook');
    // $ambil = mysqli_fetch_assoc($query);
        while ($ambil = mysqli_fetch_assoc($query)) { ?>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td>
<div class="hamidz">
<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td style="color:#828282;">ID</td>
<td style="color:#828282;">:</td>
<td style="color:#828282;"><?php echo $ambil['id']; ?></td>
</tr>
<tr>
<td width="117" style="color:#828282;">Name</td>
<td width="14" style="color:#828282;">:</td>
<td width="357" style="color:#828282;"><?php echo $ambil['name']; ?></td>
</tr>
<tr>
<td style="color:#828282;">Email</td>
<td style="color:#828282;">:</td>
<td style="color:#828282;"><?php echo $ambil['email']; ?></td>
</tr>
<tr>
<td valign="top" style="color:#828282;">Comment</td>
<td valign="top" style="color:#828282;">:</td>
<td style="color:#828282;"><?php echo $ambil['comment']; ?></td>
</tr>
<tr>
<td valign="top" style="color:#828282;">Date/Time </td>
<td valign="top" style="color:#828282;">:</td>
<td style="color:#828282;"><?php echo $ambil['datetime']; ?></td>
</tr>
</table>
</div>

</td>
</tr>
</table>
<?php } ?>
<p align="center"><a href="index.php">Home</a> | <a href="about.php?file=README.md">About</a></p>
</body>
</html>
