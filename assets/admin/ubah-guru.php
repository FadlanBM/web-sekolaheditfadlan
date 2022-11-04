<?php
session_start();
require_once '.././../koneksi.php';
if (strlen($_SESSION['login']) == 0) {
	header('location:index.php');
} else {
	if (isset($_POST['update'])) {

		// AMBIL ID DATA
		$id = mysqli_real_escape_string($connection, $_POST['id']);

		// AMBIL NAMA FILE FOTO SEBELUMNYA
		$data = mysqli_query($connection, "SELECT gambar FROM users WHERE id='$id'");
		$dataImage = mysqli_fetch_assoc($data);
		$oldImage = $dataImage['gambar'];

		// AMBIL DATA DATA DIDALAM INPUT
		$nip = mysqli_real_escape_string($connection, $_POST['nip']);
		$nama = mysqli_real_escape_string($connection, $_POST['nama']);
		$pendidikan = mysqli_real_escape_string($connection, $_POST['pendidikan']);
		$mata_pelajaran = mysqli_real_escape_string($connection, $_POST['mata_pelajaran']);
		$kelamin = mysqli_real_escape_string($connection, $_POST['kelamin']);
		$hp = mysqli_real_escape_string($connection, $_POST['hp']);
		$tangal_lahir = mysqli_real_escape_string($connection, $_POST['tangal_lahir']);
		$tempat_lahir = mysqli_real_escape_string($connection, $_POST['tempat_lahir']);
		$alamat = mysqli_real_escape_string($connection, $_POST['alamat']);
		$filename = $_FILES['newImage']['name'];

		// JIKA FOTO DI GANTI
		if (!empty($filename)) {
			$filetmpname = $_FILES['newImage']['tmp_name'];
			$folder = "image/";

			// GAMBAR LAMA DI DELETE
			unlink($folder . $oldImage) or die("GAGAL");

			// GAMBAR BARU DI MASUKAN KE FOLDER
			move_uploaded_file($filetmpname, $folder . $filename);

			// NAMA FILE FOTO + DATA YANG DI GANTIBARU DIMASUKAN
			$result = mysqli_query($connection, "UPDATE users SET nip='$nip',nama='$nama',pendidikan='$pendidikan',mata_pelajaran='$mata_pelajaran',kelamin='$kelamin',hp='$hp',tangal_lahir='$tangal_lahir',tempat_lahir='$tempat_lahir',alamat='$alamat',gambar='$filename' WHERE id=$id");
		}

		// MEMASUKAN DATA YANG DI UPDATE KECUALI GAMBAR
		$result = mysqli_query($connection, "UPDATE users SET nip='$nip',nama='$nama',pendidikan='$pendidikan',mata_pelajaran='$mata_pelajaran',kelamin='$kelamin',hp='$hp',tangal_lahir='$tangal_lahir',tempat_lahir='$tempat_lahir',alamat='$alamat' WHERE id=$id");

		if ($result) {
			echo "
    <script>
        alert('EDIT DATA BERHASIL');
        document.location='data-guru.php';    
    </script>";
		} else {
			echo "
    <script>
        alert('EDIT DATA GAGAL');
        document.location='data-guru.php';    
    </script>";
		}
	}
?>
	<?php

	// AMBIL ID DARI URL
	$id = $_GET['id'];

	// AMBIL DATA BERDASARKAN ID
	$result = mysqli_query($connection, "SELECT * FROM users WHERE id=$id");

	while ($res = mysqli_fetch_array($result)) {
		$nipid = $res['nip'];
		$nameid = $res['nama'];
		$penid = $res['pendidikan'];
		$mata_pelajaranid = $res['mata_pelajaran'];
		$kelaminid = $res['kelamin'];
		$phoneid = $res['hp'];
		$tangal_lahirid = $res['tangal_lahir'];
		$tempat_lahirid = $res['tempat_lahir'];
		$alamatid = $res['alamat'];
		$image = $res['gambar'];
	}
	?>
	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Ubah Guru</title>
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
													Ubah Guru
												</div>
												<div class="float-right">
													<a href="data-guru">Kembali</a>
												</div>
											</div>
										</div>
										<div class="card-body">
											<form method="post" name="form1" enctype="multipart/form-data">
												<div class="form-group">
													<label for="nama">Nama</label>
													<input type="text" class="form-control" id="nama" value="<?php echo $nameid ?>" placeholder="Nama lengkap" autocomplete="off" required="required" name="nama">
												</div>
												<div class="form-group">
													<label for="nip">NIP</label>
													<input type="number" class="form-control" id="nip" value="<?php echo $nipid ?>" placeholder="Nip" autocomplete="off" required="required" name="nip">
												</div>
												<div class="col">
													<div class="form-group">
														<label for="mata_pelajaran">Pendidkan</label>
														<input type="text" class="form-control" id="pendidikan" value="<?php echo $penid ?>" placeholder="Pendidikan Terakhir" autocomplete="off" required="required" name="pendidikan">
													</div>
												</div>
												<div class="col">
													<div class="form-group">
														<label for="mata_pelajaran">Mengajar</label>
														<input type="text" class="form-control" id="mata_pelajaran" value="<?php echo $mata_pelajaranid ?>" placeholder="Mengajar Pelajaran" autocomplete="off" required="required" name="mata_pelajaran">
													</div>
												</div>
												<div class="col">
													<div class="form-group">
														<label for="jenis_kelamin">Jenis Kelamin</label>
														<select name="kelamin" id="kelamin" class="form-control">
															<option value="<?php echo $kelaminid ?>"><?php echo $kelaminid ?></option>
															<option value="Laki Laki">Laki Laki</option>
															<option value="Perempuan">Perempuan</option>
														</select>
													</div>
												</div>
												<div class="col">
													<div class="form-group">
														<label for="no_hp">No HP</label>
														<input type="text" class="form-control" value="<?php echo $phoneid ?>" id="hp" placeholder="no hp" autocomplete="off" required="required" name="hp">
													</div>
												</div>
												<div class="col">
													<div class="form-group">
														<label for="tempat_lahir">Tempat Lahir</label>
														<input type="text" class="form-control" id="tempat_lahir" value="<?php echo $tempat_lahirid ?>" placeholder="tempat lahir" autocomplete="off" required="required" name="tempat_lahir">
													</div>
												</div>
												<div class="col">
													<div class="form-group">
														<label for="tanggal_lahir">Tanggal Lahir</label>
														<input type="date" class="form-control" id="tangal_lahir" value="<?php echo $tangal_lahirid ?>" placeholder="tanggal_lahir" autocomplete="off" required="required" name="tangal_lahir">
													</div>
												</div>
												<div class="row">
													<div class="col">
														<div class="form-group">
															<label for="foto">Foto</label>
															<br>
															<img style="margin-bottom: 10px;" width="80" src="image/<?php echo $image ?>">
															<input type="file" class="form-control-file" autocomplete="off" name="newImage">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="alamat">Alamat</label>
													<textarea name="alamat" id="alamat" cols="30" rows="3" value="" required="required" class="form-control"><?php echo $alamatid ?></textarea>
												</div>
												<div class="form-group">
													<input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
													<button type="submit" class="btn btn-primary" name="update" value="Update">Simpan</button>
													<button type="reset" class="btn btn-danger">Clear</button>
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
		<script src="../../resources/ckeditor/ckeditor.js"></script>
		<script src="../../resources/datatables/datatables.min.js"></script>
		<script src="../../resources/datatables/datatable.js"></script>
	</body>

	</html>
<?php } ?>