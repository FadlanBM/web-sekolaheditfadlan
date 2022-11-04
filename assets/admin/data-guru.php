<?php
session_start();
require_once '.././../koneksi.php';
if (strlen($_SESSION['login']) == 0) {
	header('location:index.php');
} else {

?>
	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Data Guru</title>
		<link rel="stylesheet" href="../../resources/datatables/datatables.min.css">
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
													Daftar Guru
												</div>
												<div class="float-right">
													<a href="tambah-guru.php" class="btn btn-primary">Tambah</a>
												</div>
											</div>
										</div>

										<div class="card-body">
											<table id="table_id" class="dataTable table table-bordered">
												<thead>
													<tr>
														<th>No NIP</th>
														<th width="50px">Foto</th>
														<th>Nama</th>
														<th>No HP</th>
														<th>Mata Pelajaran</th>
														<th>Alamat</th>
														<th>Aksi</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$no = 0;
													$tampil = mysqli_query($connection, "SELECT * FROM users ORDER BY nip ASC");
													while ($res = mysqli_fetch_array($tampil)) :
														$no++;
													?>
														<tr>
															<td><?= $res['nip'] ?></td>
															<td><img src="image/<?= $res['gambar'] ?>" alt="" width="100%" class="img-thumbnail"></td>
															<td><a href="detail.php?id=<?= $row['id'] ?>"><?= $res['nama'] ?></a></td>
															<td><?= $res['hp'] ?></td>
															<td><?= $res['mata_pelajaran'] ?></td>
															<td><?= $res['alamat'] ?></td>
															<td>
																<a href=<?php echo "\"ubah-guru.php?id=$res[id]\" onClick=\"return confirm('Kamu yakin akan edit ini?')\" " ?> style="text-decoration: none; margin-right: 10px;">
																	<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil " viewBox="0 0 16 16">
																		<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
																	</svg>
																</a>
																<a href=<?php echo "\"hapus-guru.php?id=$res[id]\" onClick=\"return confirm('Kamu yakin untuk delete ini?')\"" ?> style="text-decoration: none;">
																	<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
																		<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
																		<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
																	</svg>
																</a>
															</td>
														</tr>
													<?php endwhile; ?>
												</tbody>
											</table>
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
		<script src="../../resources/datatables/datatables.min.js"></script>
		<script src="../../resources/datatables/datatable.js"></script>
	</body>

	</html>
<?php } ?>