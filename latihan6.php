<h1>Input Dosen</h1>
<a href="latihan5.php"><span>< Kembali</span></a>
<?php

// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();

// Perintah insert data ke Database
if(isset($_POST['proses']))
{
$query = mysqli_query($con,"insert into dosen (kode_dosen, nama_dosen) values('".$_POST['kode_dosen']."','".$_POST['nama_dosen']."')");

header('location:latihan5.php');
}
?>
<form action="" method="POST">
        <table>
            <tr>
                <td>Kode Dosen :</td>
                <td>
                    <input type="text" name="kode_dosen" >
                </td>
            </tr>
            <tr>
                <td>Nama :</td>
                <td>
                    <input type="text" name="nama_dosen" >
                </td>
            </tr>    
        <tr>
            <td></td>
            <td>
                <input type="submit" name="proses" value="Simpan">        
            </td>
        </tr>
        
        </table>    
    </form>