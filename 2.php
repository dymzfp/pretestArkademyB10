<!DOCTYPE html>
<html>
<head>
	<title>Soal 2</title>
</head>
<body>

	<form action="" method="POST">
		Masukan alas dan tinggi = <input type="text" name="panjang">

		<br>
		<input type="submit" name="kirim" value="kirim">
	</form>

</body>
</html>


<?php 


	if (isset($_POST['kirim'])) {
	 	
		$panjang = $_POST['panjang'];

		$prima = array();

		$i = 2;
		do {
			
			$p = 0; // total pembagi

			// mencari pembagi
			for($j=1; $j<=$i; $j++){
				if ($i % $j == 0) {
					$p += 1;
				}
			}

			// jika pembagi kurang dari samadengan 2 berarti bilangan prima, masukan ke dalam array
			if ($p <= 2) {
				array_push($prima, $i);
			}

			$i++;

		}
		while ( count($prima) < $panjang );

		// var_dump($prima);

		echo "<br><br>";
		echo "Alas/tinggi = " . $panjang;
		echo "<br><br>";

		for ($i=0; $i < $panjang; $i++) {
			
			// membuat sama dengan pertama, selalu bertambah satu
			for ($y=0; $y <= $i; $y++) { 
				echo $prima[$y] . " ";
			}

			echo "<br>";
		}

	} 


?>