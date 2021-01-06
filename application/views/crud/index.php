<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tabel Data Diri Kita</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<a href="<?php echo base_url(); ?>crud/add">TAMBAH DATA</a><br><br>
	<table>
		<tr>
			<th>nim</th>
			<th>nama</th>
			<th>jk</th>
			<th>umur</th>
			<th>options</th>
		</tr>
		<?php foreach ($tbl_datadiri->result_array() as $key): ?>
			<tr>
				<td><?php echo $key['nim'] ?></td>
				<td><?php echo $key['nama'] ?></td>
				<td><?php echo $key['jk'] ?></td>
				<td><?php echo $key['umur'] ?></td>
				<td>
					<a href="<?php echo base_url(); ?>crud/delete/<?php echo $key['nim'] ?>" >delete</a>||
					<a href="<?php echo base_url(); ?>crud/update/<?php echo $key['nim'] ?>">Edit</a></td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>