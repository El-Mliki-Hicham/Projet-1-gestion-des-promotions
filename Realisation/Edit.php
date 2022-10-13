<?php
include "business/PromotionBLL.php";
$PromotionBLL = new PromotionBLL();
// include "Data_Acess/PromoManager.php";
// $Promo = new PromoManager;
if(isset($_GET['id'])){
   $Data = $PromotionBLL->EditData($_GET['id']);
}
if(!empty($_POST)){
$id=$_POST['id'];
$name=$_POST['name'];
$promoBLL->UpdataData($id,$name);

header("Location:index.php");

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
   <h1 class="title">Modifier promotion</h1>
   <div class="form-group mx-sm-3 mb-2 input">
      <label for="input" class="sr-only">Name poromotion</label>
      <input type="hidden" value=<?php echo $Data->getId()?> name="id">
      Nom de la poromotion <input type="text" value=<?php echo $Data->getName()?> name="name">
      <button class=" btn btn-info  ">Envoyer</button>
   </div>
</form>

</div>
</div>