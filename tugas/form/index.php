<?php

$koneksi = mysql_connect("localhost", "root", "");
$database = mysql_select_db("cobadata");

if($koneksi) {
	if(isset($_POST['kirim'])) {
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$alamat = $_POST['alamat'];
		$tanggal_lahir = $_POST['tgll'];
		$jenis_kelamin = $_POST['jk'];
		$hoby = $_POST['hoby'];
		$pesan = $_POST['pesan'];
		$insert = mysql_query("INSERT INTO identitas (".
			"nama,".
			"kelas,".
			"alamat,".
			"tanggal_lahir,". 
			"jenis_kelamin,".
			"hoby,".
			"pesan".
			") VALUES (".
			"'".$nama."',".
			"'".$kelas."',".
			"'".$alamat."',".
			"'".$tanggal_lahir."',".
			"'".$jenis_kelamin."',".
			"'".$hoby."',".
			"'".$pesan."'".
			");"
		, $koneksi);
		if ($insert) {
			print_r("Berhasil");
		} else {
			print_r("Gagal");
		}
		header("Location: index.php", true, 303);
	}
} else {
	print_r("Oops Koneksi Gagal");
	redirect("Location: index.php", true, 303);
}

mysql_close($koneksi);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Pengisisan Identitas Diri</title>
	<link rel="stylesheet" href="css.css">
</head>
<body>
	<div id="wrapper" class="bgtrans">
		<hr/>
			<h1> <marquee> Isikan Identitas Kalian di Sini :D </marquee> </h1>
		<hr/>
		<div id="input">
			<form method="post" action="index.php">
				<table>
					<tbody>
						<tr>
							<td>
								<p>Nama : </p>
							</td>
							<td>
								<input name="nama" type="text" required="require">
							</td>
						</tr>
						<tr>
							<td>
								<p>Kelas : </p>
							</td>
							<td>
								<input name="kelas" type="text" required="require">
							</td>
						</tr>
						<tr>
							<td>
								<p>Alamat : </p>
							</td>
							<td>
								<input name="alamat" type="text" required="require">
							</td>
						</tr>
						<tr>
							<td>
								<p>Tanggal Lahir <span>(yyyy-mm-dd)</span> : </p> 
							</td>
							<td>
								<input name="tgll" type="date" required="require">
							</td>
						</tr>
						<tr>
							<td>
								<p>Jenis Kelamin : </p>
							</td>
							<td>
								Laki-Laki <input name="jk" type="radio" value="Laki-Laki" required="require">
								Perempuan <input name="jk" type="radio" value="Perempuan" required="require">
							</td>
						</tr>
						<tr>
							<td>
								<p>Hoby : </p>
							</td>
							<td>
								<input name="hoby" type="textbox" required="require">
							</td>
						</tr>
						<tr>
							<td>
								<p>Pesan Dan Kesan : </p>
							</td>
							<td>
								<br/>
								<textarea name="pesan" type="text" required="require"></textarea>
							</td>
						</tr>
						<tr>
							<td>
								<input name="kirim" type="submit" value="Kirim" required="require">
							</td>
						</tr>
					</tbody>
				</table>
			</form>
			<a href="daftar_identitas.php">Lihat Daftar</a>
		</div>
		<hr/>
		<footer>
			<span> Best View on Chrome </span>	
		</footer>
	</div>
</body>
</html>