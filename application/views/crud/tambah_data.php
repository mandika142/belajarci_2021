<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Menambah Data</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h2>Input Data Manusia</h2>
	<form action="<?php base_url(); ?>action_tambah_data" method="post">
		<input type="text" name="nim" placeholder="Masukan NIP"><br>
		<input type="text" name="nama" placeholder="Masukan NAMA"><br>
		<input type="text" name="jk" placeholder="Masukan JENIS KELAMIN"><br>
		<input type="text" name="umur" placeholder="Masukan UMUR"><br><br>
		<input type="submit" value="save" >
	</form>
</body>
</html>