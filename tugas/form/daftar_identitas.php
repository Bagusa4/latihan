<?php

$koneksi = mysql_connect("localhost", "root", "");
$database = mysql_select_db("cobadata");

$getdatasql = "SELECT nama, kelas, alamat, tanggal_lahir, jenis_kelamin, hoby, pesan FROM identitas";
$getdatasqlquery = mysql_query($getdatasql); 

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css.css">
</head>
<body>
	<div id="wrapper" class="bgtrans">
		<hr/>
			<h1> <marquee> ^_^ Semua Daftar Identitas ^_^ </marquee> </h1>
		<hr/>
		<div id="hasil">
			<table>
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Kelas</th>
						<th>Alamat</th>
						<th>Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Hoby</th>
						<th>Pesan</th>
					</tr>
				</thead>
				<tbody>	
					<?php 
						$jml_baris = mysql_num_rows($getdatasqlquery);
						$idx_baris = 1;
						while ($idx_baris <= $jml_baris) {
						while ($baris = mysql_fetch_array($getdatasqlquery, MYSQL_ASSOC)) {
					?>
					<tr>
					 <td><?php echo $idx_baris++; ?></td>
					 <td><?php echo $baris["nama"]; ?></td>
					 <td><?php echo $baris["kelas"]; ?></td>
					 <td><?php echo $baris["alamat"]; ?></td>
					 <td><?php echo $baris["tanggal_lahir"]; ?></td>
					 <td><?php echo $baris["jenis_kelamin"]; ?></td>
					 <td><?php echo $baris["hoby"]; ?></td>
					 <td><?php echo $baris["pesan"]; ?></td>
					</tr>
					<?php
						} }
					?>
				</tbody>
			</table>
		</div>
		<br/>
		<a href="index.php">Kembali Ke Formulir</a>
		<footer>
			<span> Best View on Chrome </span>	
		</footer>
	</div>
</body>
</html>