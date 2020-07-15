<?php 
	include 'koneksi.php';

	if (isset($_POST['submit'])){
		
		//ambil 1 id terbesar di kolom id_pendaftaran, lalu ambil 5 karakter dari sebelah kanan
		$getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5))AS id FROM tb_pendaftaran");
		$d = mysqli_fetch_object($getMaxId);
		$generateId = 'P'.date('Y').sprintf("%05s", $d->id + 1);
		
		//proses  input
		$tgl_daftar = date('Y-m-d');
		$th_ajaran = $_POST['th_ajaran'];
		$Jurusan = $_POST['Jurusan'];
		$fk = $_POST['fk'];
		$nim = $_POST['nim'];
		$nm_lengkap = $_POST['nm_lengkap'];
		$tmpt_lahir = $_POST['tmpt_lahir'];
		$tgl_lhr = date('Y-m-d', strtotime($_POST['tgl_lhr']));
		$JK = $_POST['JK'];
		$agama = $_POST['agama'];
		$no_telp = $_POST['no_telp'];
		$alamat = $_POST['alamat'];
		$almt_orgtua = $_POST['almt_orgtua'];
		$no_telpnorgtua = $_POST['no_telpnorgtua'];
		$insert = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES ('$generateId', '$tgl_daftar', '$th_ajaran', '$Jurusan', '$fk','$nim', '$nm_lengkap', '$tmpt_lahir', '$tgl_lhr', '$JK', '$agama','$no_telp', '$alamat','$almt_orgtua', '$no_telpnorgtua'
			)");
		if ($insert) {
			echo '<script>window.location="berhasil.php?id='.$generateId.'"</script>';
		}else{
			echo 'huft'.mysqli_error($conn);
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pendaftaran KKN Online</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>
<body>

	<!-- box form -->
	<section class="box-formulir">

		<h2>Form Pendaftaran KKN Online</h2>
	
		<!-- Form -->
		<form action="" method="post">
			
			<div class="box">
				<table border="0" class="table-form">
					<tr>
						<td>Tahun Ajaran</td>
						<td>:</td>
						<td>
							<input type="text" name="th_ajaran" class="input-control" value="2020/2021" readonly>
						</td>
					</tr>
					<tr>
						<td>Jurusan</td>
						<td>:</td>
						<td>
							<select class="input-control" name="Jurusan">
			 				<option value="">---PILIH---</option>
			 				<option value="Hukum">Hukum</option>
			 				<option value="Administrasi Publik">Administrasi Publik</option>
			 				<option value="Administrasi Bisnis">Administrasi Bisnis</option>
			 				<option value="Sistem Informasi">Sistem Informasi</option>
			 				<option value="Psikologi">Psikologi</option>
			 				<option value="Teknik Industri">Teknik Industri</option>
			 				<option value="Arsitektur">Arsitektur</option>
			 				<option value="Teknik Sipil">Teknik Sipil</option>
			 				<option value="Manajemen">Manajemen</option>
			 				<option value="Perbankan dan keuangan">Perbankan dan keuangan</option>
			 				<option value="Keuangan">Keuangan</option>
			 				<option value="Teknik Mesin">Teknik Mesin</option>
			 			</select> 
						</td>
					</tr>
					<tr>
						<td>Fakultas</td>
						<td>:</td>
						<td>
						<select class="input-control" name="fk">
						<option value="">---PILIH---</option>
						<option value="Hukum">Fakultas Hukum</option>
						<option value="Fisip">Fakultas Ilmu Sosisal dan Ilmu Politik</option>
						<option value="FTI">Fakultas Teknologi Informasi</option>
						<option value="FEB">Fakultas Ekonomi dan Bisnis</option>
						<option value="Teknik">Fakultas Teknik</option>
						<option value="Psikologi">Fakultas Psikologi</option>
						</td>
						</select>
					</tr>
				</table>
			</div>
			<!-- Data diri pendaftar -->
			<h3>Data Diri Mahasiswa</h3>
			<div class="box">
				<table border="0" class="table-form">
					<tr>
						<td>NIM</td>
						<td>:</td>
						<td>
							<input type="text" name="nim" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Nama lengkap</td>
						<td>:</td>
						<td>
							<input type="text" name="nm_lengkap" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Tempat Lahir</td>
						<td>:</td>
						<td>
							<input type="text" name="tmpt_lahir" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Tanggal lahir</td>
						<td>:</td>
						<td>
							<input type="date" name="tgl_lhr" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Jenis kelamin</td>
						<td>:</td>
						<td>
							<input type="radio" name="JK" class="input-control" value="Laki - laki"> Laki -laki &nbsp;&nbsp;&nbsp;
							<input type="radio" name="JK" class="input-control" value="Perempuan"> Perempuan
						</td>
					</tr>
					<tr>
						<td>Agama</td>
						<td>:</td>
						<td>
						<select class="input-control" name="agama">
						<option value="">---PILIH---</option>
						<option value="Islam">Islam</option>
						<option value="Kristen">Kristen</option>
						<option value="Katolik">Katolik</option>
						<option value="Hindhu">Hindhu</option>
						<option value="Budha">Budha</option>
						<option value="Lainya">Lainya</option>
						</td>
						</select>
					</tr>
					<tr>
						<td>No Telp</td>
						<td>:</td>
						<td>
							<input type="text" name="no_telp" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Alamat Di Malang</td>
						<td>:</td>
						<td>
							<textarea class="input-control" name="alamat"></textarea>
						</td>
					</tr>
					<tr>
						<td>Alamat Orang Tua</td>
						<td>:</td>
						<td>
							<textarea class="input-control" name="almt_orgtua"></textarea>
						</td>
					</tr>
					<tr>
						<td>No Telp orang tua</td>
						<td>:</td>
						<td>
							<input type="text" name="no_telpnorgtua" class="input-control">
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<input type="submit" name="submit" class="btn-submit" value="Daftar Sekarang">
						</td>
					</tr>
				</table>
			</div>
		</form>

	</section>

</body>
</html>