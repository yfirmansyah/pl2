<h1>Daftar Dosen</h1>
<a href="latihan6.php"><span>Tambah Dosen</span></a>
<br></br>

<?php

// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();

// Mengambil data dari Database
$query=mysqli_query($con,"select * from dosen");
$res = $query->num_rows;

    if ($res > 0) {
        echo "<table border='1px solid black'>
            <tr>
                <th>Kode Dosen</th>
                <th>Nama Dosen</th>
                <th>Action</th>
            </tr>";
                $no = 0;
                while($data = mysqli_fetch_array($query)){
                    echo " <tr>
                                <td>".$data["kode_dosen"]."</td>
                                <td>".$data["nama_dosen"]."</td>
                                <td>
                                    <a href='latihan7.php?id_dosen=".$data["id_dosen"]."; ?>'>Edit</a>
                                    <a href='latihan8.php?id_dosen=".$data["id_dosen"]."; ?>'>Hapus</a>
                                </td>
                            </tr>";
                }
        echo "</table>";
    }else{
        echo "0 results";
    }
?>
