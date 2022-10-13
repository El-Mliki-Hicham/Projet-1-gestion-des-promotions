


<?php

include "business/PromotionBLL.php";
$PromotionBLL = new PromotionBLL();
if(!empty($_POST)){

    $Promotion = new Promotion();
	$Promotion->setName($_POST['Name']);
    
    $GetData =  $PromotionBLL->AddData($Promotion);
	
	// Redirection vers la page index.phpnpn
	header("Location: index.php");
}

?>



<form method="Post">
<input type="text" name="Name">
<button>ajouter</button>
</form>