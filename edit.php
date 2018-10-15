<?php 
if (!empty($_GET['nim'])) {
	$nim = $_GET['nim'];
	$db = new  mysqli("localhost", "root", "", "webdasar");
	$sql = "SELECT  * FROM mahasiswa WHERE nim='$nim'";
	$result = mysqli_query($db, $sql);

	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$nim = $row['nim'];
			$nama = $row['nama'];
			$jenis_kel = $row['jenis_kel'];
			$prodi = $row['prodi'];
			$fakultas = $row['fakultas'];
			$asal = $row['asal'];
			$moto = $row['moto'];
		}
	}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="proses-edit.php" method="post">
	<h2>Masukan data anda!</h2>
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" value="<?php echo $nim;?>" disabled>
				<input type="hidden" name="nim" value="<?php echo $nim;?>">
			</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jenis_kel" value="perempuan" <?php if($jenis_kel=='perempuan'):echo "checked"; endif ?>>Perempuan
				<input type="radio" name="jenis_kel" value="laki-laki" <?php if($jenis_kel=='laki-laki'):echo "checked"; endif ?>>Laki - Laki
			</td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td><select name="prodi">
				<option value="MI" <?php if($prodi=='MI'):echo "selected"; endif ?>>D3 Manajemen Informatika</option>
				<option value="KA" <?php if($prodi=='KA'):echo "selected"; endif ?>>D3 Komputerisasi Akuntansi</option>
				<option value="TK" <?php if($prodi=='TK'):echo "selected"; endif ?>>D3 Teknik Komputer</option>
				<option value="TT" <?php if($prodi=='TT'):echo "selected"; endif ?>>D3 Teknik Telekomunikasi</option>
				<option value="MP" <?php if($prodi=='MP'):echo "selected"; endif ?>>D3 Manajemen Pemasaran</option>
				<option value="IF" <?php if($prodi=='IF'):echo "selected"; endif ?>>D3 Teknik Informatika</option>
				<option value="PH" <?php if($prodi=='PH'):echo "selected"; endif ?>>D3 Perhotelan</option>
				<option value="SM" <?php if($prodi=='SM'):echo "selected"; endif ?>>D4 Sistem Multimedia</option>
			</select></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
					<option value="FIT" <?php if($fakultas=='FIT'):echo "selected"; endif ?>>Fakultas Ilmu Terapan</option>
					<option value="FIK" <?php if($fakultas=='FIK'):echo "selected"; endif ?>>Fakultas Industri Kreatif</option>
					<option value="FIF" <?php if($fakultas=='FIF'):echo "selected"; endif ?>>Fakultas Informatika</option>
					<option value="FRI" <?php if($fakultas=='FRI'):echo "selected"; endif ?>>Fakultas Rekayasa Industri</option>
					<option value="FKB" <?php if($fakultas=='FKB'):echo "selected"; endif ?>>Fakultas Komunikasi Bisnis</option>
					<option value="FEB" <?php if($fakultas=='FEB'):echo "selected"; endif ?>>Fakultas Ekonomi Bisnis</option>
					<option value="FTE" <?php if($fakultas=='FTE'):echo "selected"; endif ?>>Fakultas Teknik Elektro</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Asal</td>
			<td>:</td>
			<td><input type="text" name="asal" value="<?php echo $asal;?>"></td>
		</tr>
		<tr>
			<td valign="top">Moto Hidup</td>
			<td valign="top">:</td>
			<td><textarea cols="40" rows="10" name="moto"><?php echo $moto;?></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" name="edit" value="Simpan"></td>
		</tr>
	</table>
</form>
</body>
</html>