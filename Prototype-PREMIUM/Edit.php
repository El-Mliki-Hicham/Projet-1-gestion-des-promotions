<?php
include "business/PromotionBLL.php";
$promoBLL = new PromoBLL();
// include "Data_Acess/PromoManager.php";
// $Promo = new PromoManager;
if(isset($_GET['id'])){
   $Data = $promoBLL->EditData($_GET['id']);
}
if(!empty($_POST)){
$id=$_POST['id'];
$name=$_POST['name'];
$promoBLL->UpdataData($id,$name);

header("Location:index.php");

}



?>

<form method="POST">

<input type="hidden" value=<?php echo $Data->getId()?>  name="id" >                                                             
Name: <input type="text" value=<?php echo $Data->getName()?> name="name" >
<button >Update</button>
</form>