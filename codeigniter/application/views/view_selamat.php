
<!-- File ini adalah view yang akan ditampilkan melalui controller Selamat -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara membuat Heading dengan helper HTML</title>
</head>
<body>
<!-- Fungsi - fungsi dibawah ini berfungsi untuk membuat tag heading berdasarkan nomor yang diberikan -->
<!-- Apabila 1 maka yang dibuat adalah h1, apabila 2 maka h2, dan seterusnya -->
    <?php echo heading("Cara membuat heading menggunakan helper html", 1)?>
    <?php echo heading("Cara membuat heading menggunakan helper html", 2)?>
    <?php echo heading("Cara membuat heading menggunakan helper html", 3)?>
    <?php echo heading("Cara membuat heading menggunakan helper html", 4)?>
    <?php echo heading("Cara membuat heading menggunakan helper html", 5)?>
    <?php echo heading("Cara membuat heading menggunakan helper html", 6)?>    
</body>
</html>