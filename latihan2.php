<h1>Tambah Mahasiswa</h1>
<a href="latihan1.php"><span>< Kembali</span></a>
<br></br>
<?php
    include 'koneksi.php';
    $db     = new Database();
    $con    = $db->Connect();
    if(isset($_POST['proses']))
    {
    
        $query = mysqli_query($con,"insert into mahasiswa (npm, nama) values('".$_POST['npm']."','".$_POST['nama']."')");
        
        header('location:latihan1.php');
    }

?>
<form action="" method="POST">
        <table>
            <tr>
                <td>NPM :</td>
                <td>
                    <input type="text" name="npm" >
                </td>
            </tr>
            <tr>
                <td>Nama :</td>
                <td>
                    <input type="text" name="nama" >
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
    