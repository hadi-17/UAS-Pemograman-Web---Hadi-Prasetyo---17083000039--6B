<?php 
session_start();
	include 'koneksi.php';

	$peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran
		WHERE id_pendaftaran = '".$_GET['id']."' ");

	$p = mysqli_fetch_object($peserta);
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
				<h2>Detail Peserta</h2>
				<div class="box">

					<table class="table-data" border="0">
		<tr>
			<td>Kode Pendaftaran</td>
			<td>:</td>
			<td><?php echo $p->id_pendaftaran ?></td>
		</tr>
		<tr>
			<td>Tahun Ajaran</td>
			<td>:</td>
			<td><?php echo $p->th_ajaran ?></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo $p->Nama ?></td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td><?php echo $p->Jurusan ?></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><?php echo $p->Fakultas ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><?php echo $p->almt_diMalang ?></td>
		</tr>
		<tr>
			<td>Tanggal Daftar</td>
			<td>:</td>
			<td><?php echo $p->tgl_daftar ?></td>
		</tr>
	</table>

				</div>
			</section>

</body>
</html>