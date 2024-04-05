<?php
    session_start();

    include "koneksi.php";

    if (isset($_POST['login'])){
        $pass     = md5($_POST['password']);
        $username = mysqli_escape_string($koneksi, $_POST['username']);
        $password = mysqli_escape_string($koneksi, $pass);


        $data = mysqli_query($koneksi,"SELECT * From tb_login WHERE username='$username' AND password = '$password'");
        
        $cek = mysqli_fetch_array($data);

        if($cek){
            $_SESSION['username']= $cek['username'];
            $_SESSION['password']= $cek['password'];

            header('location: halaman.php');
        }else{
            echo "<script>
            alert('login gagal, Silahkan Masukkan Username dan Password dengan Benar !!');
            document.location= 'index.php';
            </script>";
        }
    }
?>