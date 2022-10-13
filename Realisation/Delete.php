<?php

include "business/PromotionBLL.php";

$PromotionBLL = new PromotionBLL();

if(isset($_GET["id"])){
   $id = $_GET["id"];
    $PromotionBLL->DeleteData($id);
    header("Location:index.php");
}



?>