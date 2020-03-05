
<!-- File ini adalah view yang akan ditampilkan oleh controller model_belajar -->

<!DOCTYPE html>
<html>
<head>
	<title>Membuat form validation dengan Codeigniter | MalasNgoding.com</title>
</head>
<body>
	<h1>Membuat Form Validation dengan CodeIgniter</h1>
	<!-- Fungsi ini berfungsi untuk menambilkan pesan error dari validasi yang gagal -->
	<?php echo validation_errors(); ?>
	<!-- Fungsi ini berfungsi untuk membuat tag form yang berisi action dan method -->
	<?php echo form_open('model_belajar/cek_input'); ?>
		<label>Nama</label><br/>
		<input type="text" name="nama"><br/>
		<label>Email</label><br/>
		<input type="text" name="email"><br/>
		<label>Konfirmasi Email</label><br/>
		<input type="text" name="konfir_email"><br/>
		<input type="submit" value="Simpan">
	</form>
</body>
</html>