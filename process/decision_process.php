<?php
	include '../koneksi.php';
	

	$age=$_POST['age'];
	
	
	
	
	if ($age=='no'){

	header("location:../index2.php");
	
	
	}
	else{
	
	header("location:../hasil.php?hasil=2");
	
	
	
	}
	
	
	
	

?>