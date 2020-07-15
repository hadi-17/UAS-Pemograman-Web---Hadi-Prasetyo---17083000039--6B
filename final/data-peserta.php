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
				<h2>Data Peserta</h2>
				<div class="box">
					<table class="table" border="1">
						<thead>
							<tr>
								<th>No</th>
								<th>Id Pendaftaran</th>
								<th>Nim</th>
								<th>Nama</th>
								<th>jurusan</th>
								<th>fakultas</th>
								<th>jenis kelamin</th>
								<th>agama</th>
								<th>No telp / Wa</th>
								<th>Alamat di Malang</th>
								<th>Alamat orang tua</th>
								<th>no tlp orang tua</th>
								<th>aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							$list_peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran");
							while ($row = mysqli_fetch_array($list_peserta)){
							?>
							<tr>
								<td><?php echo $no++  ?></td>
								<td><?php echo $row['id_pendaftaran'] ?></td>
								<td><?php echo $row['NIM'] ?></td>
								<td><?php echo $row['Nama'] ?></td>
								<td><?php echo $row['Jurusan'] ?></td>
								<td><?php echo $row['Fakultas'] ?></td>
								<td><?php echo $row['jk'] ?></td>
								<td><?php echo $row['agama'] ?></td>
								<td><?php echo $row['no_telp/wa'] ?></td>
								<td><?php echo $row['almt_diMalang'] ?></td>
								<td><?php echo $row['Almt_orangtua'] ?></td>
								<td><?php echo $row['NoTelp_orangtua'] ?></td>
								<td>
									<a href="detail-peserta.php?id=<?php echo $row['id_pendaftaran'] ?>">Detail</a> ||
									<a href="hapus-peserta.php?id=<?php echo $row['id_pendaftaran'] ?>"
										onclick="return confirm('Yakin?')">Hapus</a>
								</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</section>

</body>
</html>