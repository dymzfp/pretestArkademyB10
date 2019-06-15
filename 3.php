<!DOCTYPE html>
<html>
<head>
	<title>Soal 3</title>
</head>
<body>

	<form action="" method="POST">
		Masukan tinggi awal = <input type="text" name="awal">
		<br>
		Masukan tahun = <input type="text" name="tahun">
		<br>
		<input type="submit" name="kirim" value="kirim">
		
	</form>

</body>
</html>

<?php  

	function pohon($awal, $tahun) {

		$pohon = $awal;
		for ($i=0; $i < $tahun; $i++) { 
			$pohon = ($pohon*2)+1;
		}

		echo "tinggi akhir pohon = {$pohon} m";

	}

	if (isset($_POST['kirim'])) {
		$x = $_POST['awal'];
		$y = $_POST['tahun'];

		pohon($x, $y);
	}

?>