<?php 

require 'controller/controller.php';
require 'controller/setup.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Belajar MVC</title>
</head>
<body>
<!-- ===================================================== -->
<!-- 1. Tampilan Untuk Matematika Function -->
<!-- ===================================================== -->	
<hr>
<h1>MATEMATIKA Function</h1>	
<form action="" method="post">
	<ul>
		<li>
			<label for="nilai1">Nilai 1</label>
			<input type="text" id="nilai1" name="nilai1">
		</li>
		<li>
			<label for="nilai2">Nilai 2</label>
			<input type="text" id="nilai2" name="nilai2">
		</li>
		<li>
			<button type="submit" name="hasil">Hasil</button>
		</li>
		<?php if(isset($hasil)):  ?>
			<li>
				<label for="hasilTambah">Hasil Nya: <?= $hasil; ?></label>
			</li>
		<?php endif; ?>
	</ul>
</form>
<hr>

<!-- ===================================================== -->
<!-- 2. Tampilan Untuk Matematika Class -->
<!-- ===================================================== -->	
<h2>MATEMATIKA Class</h2>	
<form action="" method="post">
	<ul>
		<li>
			<label for="nilai11">Nilai 1</label>
			<input type="text" id="nilai11" name="nilai11">
		</li>
		<li>
			<label for="nilai22">Nilai 2</label>
			<input type="text" id="nilai22" name="nilai22">
		</li>
		<li>
			<button type="submit" name="hasilclass">Hasil</button>
		</li>
		<?php if(isset($hitung)):  ?>
				<li>
					<label for="hasilTambah">Hasil Nya: <?= $hitung; ?></label>
				</li>
			<?php endif; ?>
	</ul>
</form>
<hr>
<!-- ===================================================== -->
<!-- 3. Tampilan Untuk Mengembalikan Nilai -->
<!-- ===================================================== -->	
<h2>Mengembalikan Lebih dari 1 nilai</h2>
<?php $i=1; ?>
<?php foreach($nilaiss as $nilaiaja): ?>
	<h3><?= 'Nilai ke '.$i.' : '.$nilaiaja; ?></h3>
	<?php $i++; ?>
<?php endforeach; ?>

<h2>Mengembalikan Beberapa Nilaii</h2>
<h3><?= $nilaiss['nilai1'] ?></h3>
<h3><?= $nilaiss['nilai5'] ?></h3>
<hr>

<!-- ===================================================== -->
<!-- 4.  -->
<!-- ===================================================== -->	

<!-- ===================================================== -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>