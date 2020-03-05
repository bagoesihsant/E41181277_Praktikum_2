<!-- File ini adalah file yang akan ditampilkan melalui controller model_belajar.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
	<h1>Mengenal Model Pada Codeigniter | MalasNgoding.com</h1>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
		</tr>
		<!-- Berikut ini adalah fungsi yang digunakan untuk melakukan
			 looping / perulangan untuk mengambil data yang dikirim oleh
			 controller.
		 -->
		<?php foreach($user as $u){ ?>
		<tr>
		<!-- Berikut ini adalah cara untuk menampilkan data yang dikirim oleh controller. -->
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->pekerjaan ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>