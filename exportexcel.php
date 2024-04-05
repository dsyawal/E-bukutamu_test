<?php include "koneksi.php";

//persiapan untuk excel
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Export Excel Data Buku Tamu.xls");
header("Pragma: no-cache");
header("Expires:0");
?>

<table border="1">
    <thead>
        <tr>
            <th colpans="6">Rekap Data Buku Tamu</th>
        </tr>
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
                    $tgl1 = $_POST['tanggala'];
                    $tgl2 = $_POST['tanggalb'];
                    $tampil = mysqli_query($koneksi, " SELECT * FROM tb_bukutamu where 
                    tanggal between '$tgl1' and '$tgl2' order by id Asc");

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