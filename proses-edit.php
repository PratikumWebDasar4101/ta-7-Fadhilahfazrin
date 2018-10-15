<?php
$nim 		= $_POST['nim'];
$nama 		= $_POST['nama'];
$jenis_kel 	= $_POST['jenis_kel'];
$prodi 		= $_POST['prodi'];
$fakultas 	= $_POST['fakultas'];
$asal 		= $_POST['asal'];
$moto 		= $_POST['moto'];

$db = new mysqli("localhost", "root", "", "webdasar");
$sql = "UPDATE mahasiswa SET nama='$nama', jenis_kel='$jenis_kel', prodi='$prodi', fakultas='$fakultas', asal='$asal', moto='$moto' WHERE nim=$nim";
if (mysqli_query($db, $sql)) {
	echo "<h2>Terima kasih!</h2>";
	echo "<br>";
    echo "Record updated successfully";
}else {
    echo "Error updating record: " . $sql . "<br>" . mysql_error($db);
}

echo "<a href = lihat-data.php>Lihat Data</a>";
echo "<br>";
echo "<a href = form.php>Input Kembali</a>";
?>