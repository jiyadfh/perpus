<?php 
    include "../../config/koneksi.php";

   
    $id_pegawai         = $_POST['id_pegawai'];
    $nama_pegawai       = $_POST['nama_pegawai'];
    $jenis_kelamin      = $_POST['jenis_kelamin'];
    $alamat             = $_POST['alamat'];
    $jabatan             = $_POST['jabatan'];
    $no_hp              = $_POST['no_hp'];


    $sql = "Update tabel_pegawai set
        nama_pegawai    = '".$nama_pegawai."',
        jenis_kelamin   = '".$jenis_kelamin."',
        alamat          = '".$alamat."',
        jabatan          = '".$jabatan."',
        no_hp           = '".$no_hp."'
        
        where id_pegawai = '".$id_pegawai."'
        ";
    
    $db->query($sql);


    header('Location: ../../beranda.php?page=pegawai');

?>

