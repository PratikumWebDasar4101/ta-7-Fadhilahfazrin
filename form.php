<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="proses-form.php" method="post">
	<h2>Masukan data anda!</h2>
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jenis_kel" value="perempuan">Perempuan
				<input type="radio" name="jenis_kel" value="laki-laki">Laki - Laki
			</td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td><select name="prodi">
				<option value="MI">D3 Manajemen Informatika</option>
				<option value="KA">D3 Komputerisasi Akuntansi</option>
				<option value="TK">D3 Teknik Komputer</option>
				<option value="TT">D3 Teknik Telekomunikasi</option>
				<option value="MP">D3 Manajemen Pemasaran</option>
				<option value="IF">D3 Teknik Informatika</option>
				<option value="PH">D3 Perhotelan</option>
				<option value="SM">D4 Sistem Multimedia</option>
			</select></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
					<option value="FIT">Fakultas Ilmu Terapan</option>
					<option value="FIK">Fakultas Industri Kreatif</option>
					<option value="FIF">Fakultas Informatika</option>
					<option value="FRI">Fakultas Rekayasa Industri</option>
					<option value="FKB">Fakultas Komunikasi Bisnis</option>
					<option value="FEB">Fakultas Ekonomi Bisnis</option>
					<option value="FTE">Fakultas Teknik Elektro</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Asal</td>
			<td>:</td>
			<td><input type="text" name="asal"></td>
		</tr>
		<tr>
			<td valign="top">Moto Hidup</td>
			<td valign="top">:</td>
			<td><textarea cols="40" rows="10" name="moto"></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" name="simpan" value="Simpan"></td>
		</tr>
	</table>
</form>
</body>
</html>