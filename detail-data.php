<?php 
$db = new mysqli("localhost", "root", "", "webdasar");
$nim = $_GET['nim'];
$sql = "SELECT * FROM mahasiswa WHERE nim='$nim'";
$result = mysqli_query($db, $sql);
$row = mysqli_num_rows($result);
?>
<html>
<body>
	<table>
		<tbody>
<?php
if ($row > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$nim = $row['nim'];
		echo "<h2>Detail Data Diri</h2>";
		echo "<tr>";
		echo "<td>NIM</td>";
		echo "<td>:</td>";
		echo "<td>".$row['nim']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Nama</td>";
		echo "<td>:</td>";
		echo "<td>".$row['nama']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Jenis Kelamin</td>";
		echo "<td>:</td>";
		echo "<td>".$row['jenis_kel']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Program Studi</td>";
		echo "<td>:</td>";
		echo "<td>".$row['prodi']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Fakultas</td>";
		echo "<td>:</td>";
		echo "<td>".$row['fakultas']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Asal</td>";
		echo "<td>:</td>";
		echo "<td>".$row['asal']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Moto Hidup</td>";
		echo "<td>:</td>";
		echo "<td>".$row['moto']."</td>";
		echo "</tr>";
	}
} else {
	echo "0 Result";
}
 ?>
 		</tbody>
 	</table>
 	<br>
 	<a href= "edit.php?nim=<?php echo $nim?>">Edit Data</a>
 	<br>
 	<a href = "form.php">Input Kembali</a>
 </body>
 </html>