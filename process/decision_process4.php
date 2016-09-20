<?php
	include '../koneksi.php';
	

	$age=$_POST['age'];
	
	
	
	
	if ($age=='no'){

	header("location:../index5.php");
	
	
	}
	else{
	
	header("location:../hasil.php?hasil=2");
	
	
	
	}
	
	
	
	

?>