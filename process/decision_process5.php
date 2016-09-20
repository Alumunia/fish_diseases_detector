<?php
	include '../koneksi.php';
	

	$age=$_POST['age'];
	
	
	
	
	if ($age=='no'){

	header("location:../hasil.php?hasil=1");
	
	
	}
	else{
	
	header("location:../hasil.php?hasil=2");
	
	
	
	}
	
	
	
	

?>