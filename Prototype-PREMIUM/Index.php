<?php 

// include 'Data_Acess/PromoManager.php';
include "business/PromotionBLL.php";
$PromoManager = new PromoBLL();


        $GetData =  $PromoManager->GetAllData();
        
   
// if (isset($_POST['input'])) {
//   # code...
//   $GetData =  $PromoManager->GetAllData();
// }else {
//   $GetData = null;
// }





?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#search').keyup(function(){
      var input = $(this).val();
      // alert(input);

      if (input !=' ') {
        $.ajax({
          url:"Data_Acess/search.php",
          method:"POST",
          data:{key:input},
          success:function (data){
            $('#showS').html(data);
          }
        });
        
      }
     
    });
  });
</script>
<form action="" method="POST">
<input type="text" id="search" name="input" >
</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody id="showS">
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

