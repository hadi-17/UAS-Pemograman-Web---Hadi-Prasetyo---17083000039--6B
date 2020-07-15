<?php 
session_start();
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pendaftaran KKN Online | Administrator</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>
<body>

				<!---header-->
				<header>
					<h1><a href="beranda.php">Admin</a></h1>
					<ul>
						<li><a href="beranda.php">Beranda</a></li>
						<li><a href="data-peserta.php">Data Peserta</a></li>
						<li><a href="keluar.php">Log Out</a></li>
					</ul>
				</header>

			<!-- content -->
			<section class="content">
				<h2>BERANDA</h2>
				<div class="box">
					<h3><?php echo $_SESSION['nama'] ?>, Selamat datang di pendaftaran kkn online</h3>
				</div>
			</section>

</body>
</html>