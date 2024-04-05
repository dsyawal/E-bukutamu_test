<!DOCTYPE html>
<html lang="en">    

    <?php
                include "koneksi.php";
                if(isset($_POST ['proses']))
                {
                    $tgl = date('Y-m-d');
                    $nama =$_POST ['nama'];
                    $alamat =$_POST ['alamat'];
                    $nohp =$_POST ['nohp'];
                    $keperluan =$_POST ['keperluan'];
                    $bertemu =$_POST ['bertemu'];

                    $tampil = mysqli_query($koneksi, "INSERT INTO tb_bukutamu VALUES ('', '$tgl','$nama','$alamat','$nohp','$keperluan','$bertemu')"); 
                  
                    if($tampil){
                        echo"<script>alert('Simpan Data Sukses!');
                        document.location='?'</script>";
                    } else {
                        echo"<script>alert('Simpan Data Gagal!');
                        document.location='?'</script>";
                    }
                }        
    ?>
    <?php
        session_start();
        if (
            empty($_SESSION['username'])
            or empty($_SESSION['password'])
        ){
            echo "<script>
                alert (' Maaf, untuk ke menu ini anda perlu login terlebih dahulu !');
                document.location='index.php';
            </script>";
        }

    ?>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BNN KABUPATEN BANYUMAS</title>
        <link rel="icon" href="asset/img/logobuku.png" type="image/x-icon">
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Custom styles for this page -->
        <link href="asset/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"/>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="asset/css/styles.css" rel="stylesheet" /> 
    </head>
    
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <img class="navbar-brand" src="asset/img/logobnn1.png" height="75" width="75">
                    <br></br>
                <a class="navbar-brand" href="#page-top" >BNN KABUPATEN BANYUMAS</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-info text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#buku tamu">Buku Tamu</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#Tabel">Tabel</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="rekap.php">Rekap</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-info text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Logo-->
                <img class="masthead-heading text-uppercase mb-0" src="asset/img/logobuku.png" height="170" width="200">
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">BUKU TAMU </h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-secondary">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Silahkan Isi Dengan Benar!</p>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="buku tamu">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-2"> Isi Buku Tamu</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
             <!-- Input data Pengunjung-->
             <form class="user" method = "POST" action="">
                            <div class="form-group">
                                <input type="text" class="form-control
                                form-control-user" name="nama" placeholder="Nama" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="text" class="form-control
                                form-control-user" name="alamat" placeholder= " Alamat Instansi"  required>
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="text" class="form-control
                                form-control-user" name="nohp" placeholder="No.Handphone" required>
                            </div>
                            <br>
                            <div>
                                <select name="keperluan" required>
                                    <?php
                                         include('koneksi.php');
                                         $keperluan = mysqli_query($koneksi,"select * from tb_perlu");
                                         while($c= mysqli_fetch_array($keperluan)){     
                                    ?>
                                    <option><?php echo $c['keperluan']?>
                                    <?php }?>

                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="text" class="form-control
                                form-control-user" name="bertemu" placeholder="Bertemu Dengan" required>
                            </div>
                            <br>
                                <button type="submit" name="proses"  class="btn btn-primary btn-user btn-block"> Simpan Data </button>
                            <br>
                            </form>
        </section>
        <!-- Contact Section-->
        <div class="card shadow ">
            <div class="card-body bg-info">
                <section class="page-section bg-gradien-info" id="Tabel">
                    <div class="container " >
                        <!-- Contact Section Heading-->
                        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">DAFTAR PENGUNJUNG</h2>
                        <h4 class="page-section-heading text-center text-small text-secondary mb-0 mt-2"> <?=date('d-m-Y')?> </h4>
                        <!-- Icon Divider-->
                        <div class="divider-custom">
                            <div class="divider-custom-line"></div>
                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                            <div class="divider-custom-line"></div>
                        </div>
                        
                        <?php
                                        //deklarasi tanggal

                                        //deklarasi tanggal sekarang
                                        $tgl_sekarang = date('Y-m-d');
                                        
                                        //deklarasi tanggal kemarin 
                                        //$kemarin = date('Y-m-d', strtotime('-1 day',strtotime(date('Y-m-d'))));

                                        //mendapatkan 6 hari sebelum sekarang
                                        $seminggu = date('Y-m-d h:i:s',strtotime('-1 week +1 day',strtotime($tgl_sekarang)));
                                        
                                        //deklarasi 1 bulan
                                        $bulan = date('m');

                                        //deklarasi 1 tahun
                                        $total = date('Y');


                                        $sekarang = date('Y-m-d h:i:s');
                                        // persiapan query tampilan statistik
                                        $tgl_sekarang = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(*) FROM tb_bukutamu where tanggal like '%$tgl_sekarang%'"));
                                        $seminggu = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(*) FROM tb_bukutamu where tanggal between'$seminggu' and '$sekarang' "));
                                        $bulan = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(*) FROM tb_bukutamu where month(tanggal) ='$bulan'"));
                                        $total = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(*) FROM tb_bukutamu where year(tanggal) ='$total'"));

                                    ?>

                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        Hari Ini</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $tgl_sekarang[0]?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-file fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                        MINGGU INI</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $seminggu[0]?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-file fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-warning shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                        Bulan Ini </div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $bulan[0]?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-file fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <!-- Earnings (Monthly) Card Example -->
                                 <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                        Total</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total[0]?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-file fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    
                       
                                <!-- DataTales Example -->
                            <div class="card shadow mb-5">
                                <div class="card-body">
                                <div class="table-responsive ">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Hari/Tanggal</th>
                                                <th>Nama </th>
                                                <th>Alamat/Instansi</th>
                                                <th>No.Handphone</th>
                                                <th>Keperluan</th>
                                                <th>Bertemu dengan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $tgl = date('Y-m-d');
                                                $tampil = mysqli_query($koneksi, " SELECT * FROM tb_bukutamu where tanggal like '%$tgl%' order by id desc");
                                                $no = 1;
                                                while($data = mysqli_fetch_array($tampil)){
                                            ?>
                                            <tr>
                                                <td><?= $data['id']?></td>
                                                <td><?= $data['tanggal']?></td>
                                                <td><?= $data['nama']?></td>
                                                <td><?= $data['alamat_instansi']?></td>
                                                <td><?= $data['no_hp']?></td>
                                                <td><?= $data['keperluan']?></td>
                                                <td><?= $data['bertemu']?></td>
                                            </tr>
                                                    <?php }?>
                                        </tbody>
                                    </table>
                                    </div>
                                <div>
                            </div>                           
                        </div>
                    </div>
                </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container d-flex align-items-center flex-column">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">ALAMAT KANTOR</h4>
                        <a class="lead mb-0"  href="https://maps.app.goo.gl/1kBE4oGiBtQ2MHMJ8" >
                        Jl. Ragasemangsang Gg. II No.46, Purwokerto,
                        Sokanegara, Kec. Purwokerto Tim., Kabupaten Banyumas, Jawa Tengah 53115
                         <br />
                        </a>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">SOSIAL MEDIA</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/bnnkabupaten.banyumas.7?mibextid=gik2fB"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/infobnn_kabupaten_banyumas?igsh=eXY2cWZnM3Vvcmc0"><i class="fab fa-fw fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://wa.me/+6281327190019"><i class="fab fa-fw fa-whatsapp"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">TENTANG</h4>
                        <p class="lead mb-0">
                            Buku Tamu Digital Berbasis Website<br> 
                            Ini di buat dalam Rangka Tertib <br>
                            Administrasi BNN Kab.Banyumas <br>
                            Tahun 2024.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <a class="container" href="https://www.instagram.com/wis_uda2025?igsh=dzJzOXpna2swNzl4"><small>Copyright &copy; WIS_UDA2025</small></a>
        </div>

         <!-- Bootstrap core JavaScript-->
            <script src="asset/vendor/jquery/jquery.min.js"></script>
            <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="asset/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="asset/js/sb-admin-2.min.js"></script>
            <!-- Page level plugins -->
            <script src="asset/vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="asset/vendor/datatables/dataTables.bootstrap4.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="asset/js/demo/datatables-demo.js"></script>
             <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
            <!-- Core theme JS-->
        <script src="asset/js/fiks/scripts.js"></script>
    </body>
</html>
