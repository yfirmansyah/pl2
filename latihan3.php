<h1>Edit Mahasiswa</h1>
<a href="latihan1.php"><span>< Kembali</span></a>
<br></br>
<?php
    include 'koneksi.php';
    $db     = new Database();
    $con    = $db->Connect();
    $id     = $_GET['id'];
    $id     = 

    $data   = mysqli_query($con,"SELECT * from mahasiswa where id='$id'");
    while($d = mysqli_fetch_array($data)){
?>
    <form action="update.php" method="POST">
        <table>
            <tr>
                <td>NPM :</td>
                <td>
                    <input type="hidden" name="id" value="<?= $d['id']; ?>">
                    <input type="text" name="npm" value="<?= $d['npm']; ?>">
                </td>
            </tr>
            <tr>
                <td>Nama :</td>
                <td>
                    <input type="text" name="nama" value="<?= $d['nama']; ?>">
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