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
    $sql1       = "SELECT * from visi_misi where id = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $visi        = $r1['visi'];
    $misi       = $r1['misi'];

    if ($id == '') {
        $error = "Data tidak ditemukan";
    }
}
if (isset($_POST['simpan'])) { //untuk create
    $visi        = $_POST['visi'];
    $misi       = $_POST['misi'];

    if ($visi && $misi ) {
        if ($op == 'edit') { //untuk update
            $sql1       = "UPDATE visi_misi set visi = '$visi',misi='$misi' where id = '$id'";
            $q1         = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data Visi Misi berhasil diupdate";
            } else {
                $error  = "Data gagal diupdate";
            }
        } else { //untuk insert
            $sql1   = "INSERT into visi_misi (visi,misi) values ('$visi','$misi')";
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
                Visi / Misi
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
                            <label for="visi" class="block uppercase tracking-wide text-gray-700 text-lg font-bold mb-2">Visi</label>
                            </div>
                            <div class="col-sm-10">
                            <textarea id="" name="visi" id="visi" cols="30" rows="10"><?php echo $visi ?></textarea>
                            </div>                
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="w-full md:w-1/2 px-7 py-4 mt-96">
                        <div>
                        <label for="misi" class="block uppercase tracking-wide mt-21 text-gray-700 text-lg font-bold mb-2">Misi</label>
                        </div>
                        <div class="col-sm-10">
                           
                            <textarea id="" name="misi" id="misi" cols="30" rows="10"><?php echo $misi ?></textarea>
                        </div>
                    </div>
                    <br>
                    

                    <br>
                    
                    
                    
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-blue mt-9 text-white bg-blue-500 hover:bg-blue-800  font-bold py-1 px-4 left-5 rounded-full hover:text-blue-700 cursor-pointer hover:border-2 border-blue-500 border-2 hover:border-blue-600" />
                    </div>
                </form>
            </div>
        </div>

        <!-- untuk mengeluarkan data -->
        <div class="my-auto pl-96 block bg-slate-50">
            <div class="card font-sans font-bold py-4">
                Data Visi Misi
            </div>
            <div class="card-body ">
                
                 ]
                    <?php
                        $sql2   = "SELECT * from visi_misi order by id desc";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id         = $r2['id'];
                            $visi        = $r2['visi'];
                            $misi       = $r2['misi'];
                        ?>
                            
                                <p></textarea><?php echo $visi ?></p>
                                <p></textarea><?php echo $misi ?></p>
                                <td class="border px-9 py-2">
                                    <a href="VisiMisi.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-blue bg-blue-500 hover:bg-blue-900 text-white font-bold py-1 px-4 rounded-full">Edit</button></a>
                                    <a href="VisiMisi.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-red ml-3  bg-red-600 focus:ring-2 hover:bg-red-900 text-white font-bold py-1 px-4 rounded-full">Hapus</button></a>            
                                </td>
                            
                        <?php
                        }
                        ?>
                   
           
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
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>

        
        <script>

            jQuery(document).ready(function(){

                $('#summernote').summernote({
                    placeholder: '',
                    height: 240,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false,                 // set focus to editable area after initializing summernote
                    toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        // ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
        //['fontname', ['fontname']],
       // ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'hr']],
        //['view', ['fullscreen', 'codeview']],
        ['help', ['help']]
      ],
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
