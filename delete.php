<?php 
$db = new mysqli("localhost", "root", "", "webdasar");
$nim = $_GET["nim"];
$sql = "DELETE FROM mahasiswa WHERE nim=$nim";

if (mysqli_query($db, $sql)) {
	echo "<h2>Terima kasih!</h2>";
    echo "Record deleted succesfully";
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

echo "<br>";
echo "<a href = lihat-data.php>Lihat data</a>";
echo "<br>";
echo "<a href = form.php>Input Kembali</a>";
?>