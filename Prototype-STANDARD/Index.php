<?php 

// include 'Data_Acess/PromoManager.php';
include "business/PromotionBLL.php";
$PromotionBLL = new PromotionBLL();
$GetData =  $PromotionBLL->GetAllData();





?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php 
        foreach($GetData as $value){
          
       
        ?>
      <td> <?php echo $value->GetId() ?></td>
      <td> <?php echo $value->getName() ?></td>
      <td>
                    <a href="Edit.php?id=<?php echo $value->getId() ?>">Edit</a>
                    <a href="Delete.php?id=<?php echo $value->getId() ?>">Delete</a>
          </td>
     
     
    </tr>
<?php }?>
  </tbody>
</table>

<a href="AddData.php">ajouter</a>