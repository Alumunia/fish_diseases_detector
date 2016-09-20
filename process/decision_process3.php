<?php
	include '../koneksi.php';
	

	$age=$_POST['age'];
	
	
	
	
	if ($age=='yes'){

	header("location:../index4.php");
	
	
	}
	else{
	
	header("location:../hasil.php?hasil=1");
	
	
	
	}
	
	
	
	

?>