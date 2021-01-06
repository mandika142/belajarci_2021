<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Menambah Data</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h2>Edit Data Manusia</h2>
	<?php foreach ($tbl_datadiri->result() as $key): ?>
		<form action="<?php base_url(''); ?>action_update/<?php echo $key->nim ?>" method="post">
			<input type="text" name="nim" value="<?php echo $key->nim ?>"><br>
			<input type="text" name="nama" value="<?php echo $key->nama ?>"><br>
			<input type="text" name="jk" value="<?php echo $key->jk ?>"><br>
			<input type="text" name="umur" value="<?php echo $key->umur ?>"><br><br>
			<input type="submit" value="update" >
		</form>
	<?php endforeach ?>
</body>
</html>