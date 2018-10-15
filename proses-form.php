<?php 
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kel = $_POST['jenis_kel'];
$prodi = $_POST['prodi'];
$fakultas = $_POST['fakultas'];
$asal = $_POST['asal'];
$moto = $_POST['moto'];

$db = new mysqli("localhost", "root", "", "webdasar");
$sql = "INSERT INTO mahasiswa(nim, nama, jenis_kel, prodi, fakultas, asal, moto)
		VALUES ('$nim', '$nama', '$jenis_kel', '$prodi', '$fakultas', '$asal', '$moto')";
if (mysqli_query($db, $sql)) {
	echo "New record created successfully";
}else{
	echo "Error : ".$sql."<br>".mysqli_error($db);
}

mysqli_close($db);
echo "<br>";
echo "<a href = lihat-data.php>Lihat data";
?>