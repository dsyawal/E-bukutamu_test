<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" href="asset/img/logobuku.png" type="image/x-icon">
            <?php include "pemanis/header.php";?>
            <div class="row">
                <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">REKAP DATA PENGUNJUNG [ <?=date('d-m-Y')?> ]</h6>
                    
                </div>
    </head>
    <body>
                    <div class="card-body">
                        <Form method="POST" action="" class="text-center">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label> Dari Tanggal</label>
                                        <input class="form-control" type="date" name="tanggal1" value="<?= isset($_POST['tanggal1']) ?
                                        $_POST['tanggal1']: date('Y-m-d') ?>"required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label> Sampai Tanggal</label>
                                        <input class="form-control" type="date" name="tanggal2" value="<?= isset($_POST['tanggal2']) ?
                                        $_POST['tanggal2']: date('Y-m-d') ?>"required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-2">
                                    <button class=" btn btn-primary form-control" name="btampil"><i class="fa fa-search"></i> Tampilkan</button>

                                </div>
                                <div class="col-md-2">
                                <a href="halaman.php" class=" btn btn-secondary form-control" name="bkembali"><i class="fa fa-backward"></i> Kembali</a>
                                </div>
                            </div>
                        </form>
                        <?php
                            if(isset($_POST['btampil'])):
                        ?>
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
                                                    <tfoot>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Hari/Tanggal</th>
                                                            <th>Nama </th>
                                                            <th>Alamat/Instansi</th>
                                                            <th>No.Handphone</th>
                                                            <th>Keperluan</th>
                                                            <th>Bertemu dengan</th>
                                                            
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                    <?php
                                                        $tgl1 = $_POST['tanggal1'];
                                                        $tgl2 = $_POST['tanggal2'];
                                                        $tampil = mysqli_query($koneksi, " SELECT * FROM tb_bukutamu where 
                                                        tanggal between '$tgl1' and '$tgl2' order by id ASC");
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

                                                <center>
                                                    <form method ="POST" action="exportexcel.php">
                                                        <div class="col-md-4 mt-2">
                                                        <input type="hidden" name="tanggala" value="<?=@$_POST
                                                        ['tanggal1']?>">
                                                        <input type="hidden" name="tanggalb" value="<?=@$_POST
                                                        ['tanggal2']?>">

                                                        <button class="btn btn-success form-control" name="bexport"><i class="fa fa-download"></i> Export Data Excel</button>
                                                        </div>
                                                    </form>
                                                </center>
                                            </div>
                            </div>
                        </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
    </body>
    <foot>
        <?php include "pemanis/footer.php" ?>
    </foot>
</html>