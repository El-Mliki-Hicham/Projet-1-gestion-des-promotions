<?php

include "business/PromotionBLL.php";
$PromotionBLL = new PromotionBLL();
if(!empty($_POST)){

    $Promotion = new Promotion();
	$Promotion->setName($_POST['Name']);
    
    $GetData =  $PromotionBLL->AddData($Promotion);
	header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap Table with Add and Delete Row Feature</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="assets/css/forms.css">
	<script src="assets/js/script.js"></script>

	<style>

	</style>

</head>

<div class="container cadre">
	<div class=" text-center">
		<form class="form-inline justify-content-center form" method="POST">
			<h1 class="title">Ajouter promotion</h1>
			<div class="form-group mx-sm-3 mb-2 input">
				<label for="input" class="sr-only">Nom poromotion</label>
				Nom de la poromotion <input name="Name" required type="text" class="form-control " placeholder="Nom poromotion">
				<button class=" btn btn-info  ">Envoyer</button>
			</div>
		</form>

	</div>
</div>