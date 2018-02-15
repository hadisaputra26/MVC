<?php 

// 1. Function Untuk Matematika Function
function tambah($data){
	$nilai1 = $data['nilai1'];
	$nilai2 = $data['nilai2'];
	return $nilai1 + $nilai2;
}

// 2. Class Untuk Matematika Class
class matematika {
	public $n1;
	public $n2;

	public function pertambahan(){
		$nilai1 = $this->n1;
		$nilai2 = $this->n2;
		return $nilai1+$nilai2;
	}
}

// 3. Function Untuk Menembalikan nilai
function nilai(){
	$data['nilai1'] = 20;
	$data['nilai2'] = 30;
	$data['nilai3'] = 40;
	$data['nilai4'] = 50;
	$data['nilai5'] = 60;
	return $data;
}


 ?>
