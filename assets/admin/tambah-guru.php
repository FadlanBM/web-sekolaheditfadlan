<?php
session_start();
$active = 'master';
require_once '../../koneksi.php';
if (strlen($_SESSION['login']) == 0) {
	header('location:index.php');
} else {

	if (isset($_POST['Submit'])) {
		$nip = mysqli_real_escape_string($connection, $_POST['nip']);
		$nama = mysqli_real_escape_string($connection, $_POST['nama']);
		$pendidikan = mysqli_real_escape_string($connection, $_POST['pendidikan']);
		$mata_pelajaran = mysqli_real_escape_string($connection, $_POST['mata_pelajaran']);
		$kelamin = mysqli_real_escape_string($connection, $_POST['kelamin']);
		$hp = mysqli_real_escape_string($connection, $_POST['hp']);
		$tangal_lahir = mysqli_real_escape_string($connection, $_POST['tangal_lahir']);
		$tempat_lahir = mysqli_real_escape_string($connection, $_POST['tempat_lahir']);
		$alamat = mysqli_real_escape_string($connection, $_POST['alamat']);
		$filename = $_FILES['gambar']['name'];

		// CEK DATA TIDAK BOLEH KOSONG
		// JIKA SEMUANYA TIDAK KOSONG
		$filetmpname = $_FILES['gambar']['tmp_name'];

		// FOLDER DIMANA GAMBAR AKAN DI SIMPAN
		$folder = 'image/';
		// GAMBAR DI SIMPAN KE DALAM FOLDER
		move_uploaded_file($filetmpname, $folder . $filename);

		// MEMASUKAN DATA DATA + NAMA GAMBAR KE DALAM DATABASE
		$result = mysqli_query($connection, "INSERT INTO users(nip,nama,pendidikan,mata_pelajaran,kelamin,hp,tangal_lahir,tempat_lahir,alamat,gambar) VALUES('$nip','$nama', '$pendidikan','$mata_pelajaran','$kelamin', '$hp','$tangal_lahir','$tempat_lahir','$alamat', '$filename')");

		if ($result) {
			echo "
    <script>
        alert('Berhasil Tambah Data Guru');
        document.location='data-guru';    
    </script>";
		} else {
			echo "
    <script>
        alert('GagalTambah Data Guru');
        document.location='data-guru';    
    </script>";
		}
	}

?>
	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Tambah Data Guru</title>
		<link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
		<!-- App css -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/core.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/components.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
		<script src="assets/js/modernizr.min.js"></script>
	</head>

	<body class="fixed-left">
		<!-- Begin page -->
		<div id="wrapper">

			<!-- Top Bar Start -->
			<?php include('includes/topheader.php'); ?>
			<!-- Top Bar End -->


			<!-- ========== Left Sidebar Start ========== -->
			<?php include('includes/leftsidebar.php'); ?>
			<!-- Left Sidebar End -->
			<div class="content-page">
				<!-- Start content -->

				<div class="content">
					<div class="container">
						<div class="container mt-3">
							<div class="row">
								<div class="col">
									<div class="card shadow">
										<div class="card-header">
											<div class="clearfix">
												<div class="float-left">
													Form Data Guru
												</div>
											</div>
										</div>
										<div class="card-body">
											<form method="post" name="form1" enctype="multipart/form-data">
												<div class="form-group">
													<label for="nama">Nama</label>
													<input type="text" class="form-control" id="nama" placeholder="Nama lengkap" autocomplete="off" required="required" name="nama">
												</div>
												<div class="form-group">
													<label for="nip">NIP</label>
													<input type="number" class="form-control" id="nip" placeholder="Nip" autocomplete="off" required="required" name="nip">
												</div>
												<div class="col">
													<div class="form-group">
														<label for="mata_pelajaran">Pendidkan</label>
														<input type="text" class="form-control" id="pendidikan" placeholder="Pendidikan Terakhir" autocomplete="off" required="required" name="pendidikan">
													</div>
												</div>
												<div class="col">
													<div class="form-group">
														<label for="mata_pelajaran">Mengajar</label>
														<input type="text" class="form-control" id="mata_pelajaran" placeholder="Mengajar Pelajaran" autocomplete="off" required="required" name="mata_pelajaran">
													</div>
												</div>
												<div class="col">
													<div class="form-group">
														<label for="jenis_kelamin">Jenis Kelamin</label>
														<select name="kelamin" id="kelamin" class="form-control">
															<option value=""></option>
															<option value="Laki Laki">Laki Laki</option>
															<option value="Perempuan">Perempuan</option>
														</select>
													</div>
												</div>
												<div class="col">
													<div class="form-group">
														<label for="no_hp">No HP</label>
														<input type="text" class="form-control" id="hp" placeholder="no hp" autocomplete="off" required="required" name="hp">
													</div>
												</div>
												<div class="col">
													<div class="form-group">
														<label for="tempat_lahir">Tempat Lahir</label>
														<input type="text" class="form-control" id="tempat_lahir" placeholder="tempat lahir" autocomplete="off" required="required" name="tempat_lahir">
													</div>
												</div>
												<div class="col">
													<div class="form-group">
														<label for="tanggal_lahir">Tanggal Lahir</label>
														<input type="date" class="form-control" id="tangal_lahir" placeholder="tanggal_lahir" autocomplete="off" required="required" name="tangal_lahir">
													</div>
												</div>
												<div class="row">
													<div class="col">
														<div class="form-group">
															<label for="foto">Foto</label>
															<input type="file" class="form-control-file" id="gambar" autocomplete="off" required="required" name="gambar">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="alamat">Alamat</label>
													<textarea name="alamat" id="alamat" cols="30" rows="3" required="required" class="form-control"></textarea>
												</div>
												<div class="form-group">
													<button type="submit" class="btn btn-sm btn-primary" name="Submit" value="Add">Tambah</button>
													<button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')">Batal</button>
													<a href="data-guru.php" class="btn btn-sm btn-secondary">Kembali</a>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="../../resources/js/jquery.js"></script>
		<script src="../../resources/js/bootstrap.min.js"></script>
	</body>

	</html>
<?php } ?>