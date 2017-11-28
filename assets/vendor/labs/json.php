<?php
include 'koneksi.php';
$nilai = mysqli_query($koneksi,"select * from nilai_mahasiswa");
while($row = mysqli_fetch_array($nilai)){
	$data[] = $row;
}

echo json_encode($data);

?>