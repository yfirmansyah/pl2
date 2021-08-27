<h1>Edit Dosen</h1>
<a href="latihan5.php"><span>< Kembali</span></a>
<br><br>
<?php
// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();


// Mengambil data dari Database
$id_dosen = $_GET['id_dosen'];
$data=mysqli_query($con,"select * from dosen where id_dosen='$id_dosen'");
while($d=mysqli_fetch_array($data)){

?>
<form action="update.php" method="POST">
        <table>
            <tr>
                <td>Kode Dosen :</td>
                <td>
                    <input type="hidden" name="id_dosen" value="<?= $d['id_dosen']; ?>">
                    <input type="text" name="kode_dosen" value="<?= $d['kode_dosen']; ?>">
                </td>
            </tr>
            <tr>
                <td>Nama :</td>
                <td>
                    <input type="text" name="nama_dosen" value="<?= $d['nama_dosen']; ?>">
                </td>
            </tr>    
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Simpan">        
            </td>
        </tr>
        
        </table>    
    </form>
<?php 
}

?>