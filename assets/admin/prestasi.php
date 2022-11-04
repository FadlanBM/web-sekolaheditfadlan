<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "tkj";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}
$hasil        = "";
$tingkat        = "";
$tgl        = "";
$jenis        = "";
$nama      = "";
$kelas      = "";
$sukses     = "";
$error      = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
if($op == 'delete'){
    $id         = $_GET['id'];
    $sql1       = "DELETE from prestasi where id = '$id'";
    $q1         = mysqli_query($koneksi,$sql1);
    if($q1){
        $sukses = "Berhasil hapus data";
    }else{
        $error  = "Gagal melakukan delete data";
    }
}
if ($op == 'edit') {
    $id         = $_GET['id'];
    $sql1       = "SELECT * from prestasi where id = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $nama        = $r1['nama'];
    $kelas       = $r1['kelas'];
    $jenis   = $r1['jenis'];
    $hasil   = $r1['hasil'];
    $tingkat   = $r1['tingkat'];
    $tgl   = $r1['tgl'];

    if ($nama == '') {
        $error = "Data tidak ditemukan";
    }
}
if (isset($_POST['simpan'])) { //untuk create
    $nama        = $_POST['nama'];
    $kelas       = $_POST['kelas'];
    $jenis   = $_POST['jenis'];
    $hasil   = $_POST['hasil'];
    $tingkat   = $_POST['tingkat'];
    $tgl   = $_POST['tgl'];

    if ($nama && $jenis &&  $kelas && $tgl && $tingkat && $hasil) {
        if ($op == 'edit') { //untuk update
            $sql1       = "UPDATE prestasi set nama = '$nama',kelas='$kelas',tingkat='$tingkat',tgl='$tgl',hasil='$hasil' where id = '$id'";
            $q1         = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data siswa berhasil diupdate";
            } else {
                $error  = "Data gagal diupdate";
            }
        } else { //untuk insert
            $sql1   = "INSERT into prestasi (nama,hasil,kelas,tgl,tingkat,jenis) values ('$nama','$hasil','$kelas','$tgl','$tingkat','$jenis')";
            $q1     = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses     = "Berhasil memasukkan data baru";
            } else {
                $error      = "Gagal memasukkan data";
            }
        }
    } else {
        $error = "Silakan masukkan semua data";
    }
}
?>

<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title>Tambah Berita</title>

        

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />


    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
           <?php include('includes/topheader.php');?>
            <!-- ========== Left Sidebar Start ========== -->
             <?php include('includes/leftsidebar.php');?>
            <!-- Left Sidebar End -->

            <div class="">
        <!-- untuk memasukkan data -->
        <div class="pl-96 mt-48 ">
            <div class="font-bold" id="te">
                Tambah / Edit Data Siswa
            </div>
            <div class="content-center ml-28">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                    header("refresh:5;url=admin.php");//5 : detik
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                  
                }
                ?>
                <form action="" method="POST">
                    <div class="w-full md:w-1/2 px-3 py-9">
                            <div class="">
                            <label for="nama" class="block uppercase tracking-wide text-gray-700 text-lg font-bold mb-2">Nama</label>
                            </div>
                            <div class="col-sm-10">
                            <input type="text" class="bg-gray-50 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-500 hover:placeholder:text-slate-500"  id="nama" name="nama" placeholder="Masukkan Nama...." value="<?php echo $nama ?>">   
                            </div>                
                    </div>
                    <br>
                    <div class="w-full md:w-1/2 px-3 py-4">
                        <div>
                        <label for="jenis" class="block uppercase tracking-wide text-gray-700 text-lg font-bold mb-2">Jenis</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="bg-gray-50 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-500" id="jenis" name="jenis" value="<?php echo $jenis ?>">
                        </div>
                    </div>
                    <br>
                    <div class="w-full md:w-1/2 px-3 py-4">
                        <div>
                        <label for="tgl" class="block uppercase tracking-wide text-gray-700 text-lg font-bold mb-2">Tanggal</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="date" class="bg-gray-50 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-500" id="tgl" name="tgl" value="<?php echo $tgl ?>">
                        </div>
                    </div>

                    <br>
                    <div class="w-full md:w-1/2 px-3 py-4">
                        <label for="hasil" class="block uppercase tracking-wide text-gray-700 text-lg font-bold mb-2">Hasil</label>
                        <div class="col-sm-10">
                            <select class="bg-slate-500 text-slate-100 py-3 px-6 rounded-full" name="hasil" id="hasil">
                                <option class="bg-black" value="">- Pilih Hasil -</option>
                                <option value="1" <?php if ($hasil == "1") echo "selected" ?>> 1</option>
                                <option value="2" <?php if ($hasil == "2") echo "selected" ?>> 2</option>
                                <option value="3" <?php if ($hasil == "1") echo "selected" ?>> 3</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="w-full md:w-1/2 px-3 py-4">
                        <label for="tingkat" class="block uppercase tracking-wide text-gray-700 text-lg font-bold mb-2">Tingkat</label>
                        <div class="col-sm-10">
                            <select class="bg-slate-500 text-slate-100 py-3 px-6 rounded-full" name="tingkat" id="tingkat">
                                <option class="bg-black" value="">- Pilih Tingkat -</option>
                                <option value="nasional" <?php if ($tingkat == "nasional") echo "selected" ?>>Nasional</option>
                                <option value="provinsi" <?php if ($tingkat == "provinsi") echo "selected" ?>>Provinsi</option>
                                <option value="kabupaten" <?php if ($tingkat == "kabupaten") echo "selected" ?>>Kabupaten</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="w-full md:w-1/2 px-3 py-4">
                        <label for="kelas" class="block uppercase tracking-wide text-gray-700 text-lg font-bold mb-2">Kelas</label>
                        <div class="col-sm-10">
                            <select class="bg-slate-500 text-slate-100 py-3 px-6 rounded-full" name="kelas" id="kelas">
                                <option class="bg-black" value="">- Pilih Kelas -</option>
                                <option value="X TKJ 1" <?php if ($kelas == "X TKJ 1") echo "selected" ?>>X TKJ 1</option>
                                <option value="X TKJ 2" <?php if ($kelas == "X TKJ 2") echo "selected" ?>>X TKJ 2</option>
                                <option value="XI TKJ 1" <?php if ($kelas == "XI TKJ 1") echo "selected" ?>>XI TKJ 1</option>
                                <option value="XI TKJ 2" <?php if ($kelas == "XI TKJ 2") echo "selected" ?>>XI TKJ 2</option>
                                <option value="XII TKJ 1" <?php if ($kelas == "XII TKJ 1") echo "selected" ?>>XII TKJ 1</option>
                                <option value="XII TKJ 2" <?php if ($kelas == "XII TKJ 2") echo "selected" ?>>XII TKJ 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-blue mt-3 bg-blue-500 hover:bg-white  font-bold py-1 px-4 left-5 rounded-full hover:text-blue-700 cursor-pointer hover:border-2 border-blue-500 border-2 hover:border-blue-600" />
                    </div>
                </form>
            </div>
        </div>

        <!-- untuk mengeluarkan data -->
        <div class="my-auto pl-96 block bg-slate-50">
            <div class="card font-sans font-bold py-4">
                Data Siswa
            </div>
            <div class="card-body ">
                <table class="table-fixed">
                    <thead>
                        <tr >
                            <th class="px-4 py-2">No</th>
                            <th class="px-4 py-2">Nama</th>
                            <th class="px-4 py-2">Kelas</th>
                            <th class=" py-2 px-7">Jenis Prestasi</th>
                            
                            <th class="px-4 py-2">Hasil</th>
                            <th class="px-4 py-2">Tingkat</th>
                            <th class="px-4 py-2">Tanggal</th>
                            <th class="px-9 py-2">Edit/Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql2   = "SELECT * from prestasi order by id desc";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id         = $r2['id'];
                            $hasil        = $r2['hasil'];
                            $nama       = $r2['nama'];
                            $tingkat       = $r2['tingkat'];
                            $jenis       = $r2['jenis'];
                            $tgl       = $r2['tgl'];
                            $kelas   = $r2['kelas'];

                        ?>
                            <tr class="">
                                <th class="border px-9 py-2"><?php echo $urut++ ?></th>
                                <td class="border px-9 py-2"><?php echo $nama ?></td>
                                <td class="border px-9 py-2"><?php echo $kelas ?></td>
                                <td class="border px-9 py-2"><?php echo $jenis ?></td>
                                <td class="border px-9 py-2"><?php echo $hasil ?></td>
                                <td class="border px-9 py-2"><?php echo $tingkat ?></td>
                                <td class="border px-9 py-2"><?php echo $tgl ?></td>
                                <td class="border px-9 py-2">
                                    <a href="prestasi.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-blue bg-blue-500 hover:bg-blue-900 text-white font-bold py-1 px-4 rounded-full">Edit</button></a>
                                    <a href="prestasi.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-red ml-3  bg-red-600 focus:ring-2 hover:bg-red-900 text-white font-bold py-1 px-4 rounded-full">Hapus</button></a>            
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>


           

           <?php include('includes/footer.php');?>



       
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../../plugins/switchery/switchery.min.js"></script>

        
        <script>

            jQuery(document).ready(function(){

                $('.summernote').summernote({
                    height: 240,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
                // Select2
                $(".select2").select2();

                $(".select2-limiting").select2({
                    maximumSelectionLength: 2
                });
            });
        </script>

    </body>
</html>
