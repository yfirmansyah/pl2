<?php 
    // koneksi database
    include 'koneksi.php';
    $db     = new Database();
    $con    = $db->Connect();

    $id     = $_POST['id'];
    $npm    = $_POST['npm'];
    $nama   = $_POST['nama'];
    mysqli_query($con,"UPDATE mahasiswa set npm='$npm', nama='$nama' where id='$id'");
    header("location:latihan1.php");

    $id_dosen    = $_POST['id_dosen'];
    $kode_dosen  = $_POST['kode_dosen'];
    $nama_dosen  = $_POST['nama_dosen'];
    mysqli_query($con,"UPDATE dosen set kode_dosen='$kode_dosen', nama_dosen='$nama_dosen' where id_dosen='$id_dosen'");
    header("location:latihan5.php");
?>
