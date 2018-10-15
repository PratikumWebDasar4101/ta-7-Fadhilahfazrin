<?php
$db = new mysqli("localhost", "root", "", "webdasar");
$nim = $_POST['nim'];
$sql = "SELECT * from mahasiswa WHERE nim LIKE '%$nim'";
$result = mysqli_query($db, $sql);
$row = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Hasil pencarian data :</p>
	<table border="1">
		<thead>
			<th>NIM</th>
			<th>Nama</th>
			<th>Action</th>
		</thead>
		<tbody>
<?php
if ($row > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$nim = $row['nim'];
		echo "<tr>";
		echo "<td>".$row['nim']."</td>";
		echo "<td>".$row['nama']."</td>";
		echo "<td>" ."<a href='delete.php?nim=$nim'>Hapus</a> | <a href='detail-data.php?nim=$nim'>Detail</a>"."</td>";
		echo "</tr>";
	}
}else{
	echo "0 Result";
}

?>
		</tbody>
	</table>
	<br>
 	<a href = "form.php">Input Kembali</a>
</body>
</html>