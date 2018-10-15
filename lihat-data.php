<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Data Mahasiswa</h2>
	<form action="proses-cari.php" method="post">
	<input type="text" name="nim" placeholder="Masukkan Nim">
	<input type="submit" name="cari" value="Cari">
	</form>
	<br>
	<table border="1">
		<thead>
			<th>NIM</th>
			<th>Nama</th>
			<th>Action</th>
		</thead>
		<tbody>

<?php 
$db = new mysqli("localhost", "root", "", "webdasar");
$sql = "SELECT * FROM mahasiswa";
$result = mysqli_query($db, $sql);
$row = mysqli_num_rows($result);

if ($row > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$nim = $row['nim'];
		echo "<tr>";
		echo "<td>".$row['nim']."</td>";
		echo "<td>".$row['nama']."</td>";
		echo "<td>" ."<a href='delete.php?nim=$nim'>Hapus</a> | <a href='detail-data.php?nim=$nim'>Detail</a>" . "</td>";
		echo "</tr>";
	}
} else {
	echo "0 Result";
}

 ?>
 		</tbody>
 	</table>
 	<br>
 	<a href = "form.php">Input Kembali</a>
 </body>
 </html>