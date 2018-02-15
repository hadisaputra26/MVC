<?php 

// 1. Setup Untuk Matematika Function
if(isset($_POST['hasil'])){
	$hasil = tambah($_POST);
}

// 2. Setup untuk Matematika Class
if(isset($_POST['hasilclass'])){
	$pertambahan1 = new matematika();
	$pertambahan1->n1 = $_POST['nilai11'];
	$pertambahan1->n2 = $_POST['nilai22'];
	$hitung = $pertambahan1->pertambahan();
}

// 3. Setup untuk Mengembalikan Nilai
$nilaiss = nilai();


 ?>