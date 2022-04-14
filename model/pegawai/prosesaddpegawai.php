<?php 
    include "../../config/koneksi.php";

   
    $nama_pegawai       = $_POST['nama_pegawai'];
    $jenis_kelamin      = $_POST['jenis_kelamin'];
    $alamat             = $_POST['alamat'];
    $jabatan             = $_POST['jabatan'];
    $no_hp              = $_POST['no_hp'];


    $sql = "INSERT INTO tabel_pegawai 
    (
        nama_pegawai,
        jenis_kelamin,
        alamat,
        jabatan,
        no_hp
    ) 
    VALUES 
    (
        '".$nama_pegawai."',
        '".$jenis_kelamin."',
        '".$alamat."',
        '".$jabatan."',
        '".$no_hp."'
    )";
    
    $db->query($sql);


    header('Location: ../../beranda.php?page=pegawai');

?>

