<?php

	require  'connect.php';
	
	$database = new connect();

	$name = htmlspecialchars($_POST['Name']);
	$location =  htmlspecialchars($_POST['Location']);
	$number = htmlspecialchars($_POST['Contactnumber']);
	$email =  htmlspecialchars($_POST['email1']);
	
	
	
	// access 
	$subcontract = htmlspecialchars($_POST['AccessSubContractors']);
	$machinesupplier = htmlspecialchars($_POST['AccessMachinerySuppliers']);
	$materialSupplier = htmlspecialchars($_POST['AccessMaterialSuppliers']);
	$manpowerSupplier = htmlspecialchars($_POST['AccessManpowerSupplier']);
	
	
	if($subcontract == '1'){
		
		
		
	}else if($machinesupplier == '1'){
		
	}else if($materialSupplier == '1'){
		
	}else if($manpowerSupplier == '1'){
		
	}
	
	
?>