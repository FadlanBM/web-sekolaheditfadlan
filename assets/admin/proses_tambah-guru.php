<?php 

if(!isset($_POST['tambah'])) header('Location: tambah.php');

require_once '../../koneksi.php';
$nama = mysqli_escape_string($connection, $_POST['nama']);
$nip = mysqli_escape_string($connection, $_POST['nip']);
$jenis_kelamin = mysqli_escape_string($connection, $_POST['jenis_kelamin']);
$no_hp = mysqli_escape_string($connection, $_POST['no_hp']);
$tempat_lahir = mysqli_escape_string($connection, $_POST['tempat_lahir']);
$tanggal_lahir = mysqli_escape_string($connection, $_POST['tanggal_lahir']);
$mata_pelajaran = mysqli_escape_string($connection, $_POST['mata_pelajaran']);
$alamat = mysqli_escape_string($connection, $_POST['alamat']);

// persiapan upload foto
$ekstensi = $_FILES['foto']['name'];
$ekstensi = pathinfo($ekstensi, PATHINFO_EXTENSION);

$nama_foto = strtolower($nama);
$nama_foto = str_replace(' ', '-', $nama_foto) . '.' . $ekstensi;

$asal = $_FILES['foto']['tmp_name'];
$tujuan = './../../';

if($_FILES['foto']['error'] == 0){
	if($_FILES['foto']['size'] < 1000000){
		if (file_exists($tujuan . $nama_foto)) unlink($tujuan . $nama_foto);

		$query = mysqli_query($connection, "INSERT INTO tbl_guru (nama, nip, jenis_kelamin, no_hp, tempat_lahir, tanggal_lahir, mata_pelajaran, alamat, foto) VALUES('$nama', $nip, '$jenis_kelamin', '$no_hp', '$tempat_lahir', '$tanggal_lahir', '$mata_pelajaran', '$alamat', '$nama_foto')") or die(mysqli_error($connection));
		move_uploaded_file($asal, $tujuan . $nama_foto) or die('gagal upload foto');
		if($query){
			$_SESSION['sukses'] = 'Data Berhasil Ditambahkan!';
			header('Location: data-guru');
		} else {
			$_SESSION['gagal'] = 'Data Gagal Ditambahkan!';
			header('Location: data-guru');
		}
	} else {
		$_SESSION['gagal'] = 'ukuran gambar tidak boleh lebih dari 1000kb!';
		header('Location: data-guru');
	}
}
