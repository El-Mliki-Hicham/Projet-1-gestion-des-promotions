<?php 

// include 'Data_Acess/PromoManager.php';
include "business/PromotionBLL.php";
$PromoManager = new PromoBLL();
$GetData =  $PromoManager->GetAllData();





?>



<input type="text" id="search">
<div id="showS"></div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php 
        foreach($GetData as $value){
          
       
        ?>
      <td> <?php echo $value->GetId() ?></td>
      <td> <?php echo $value->getName() ?></td>
     
     
    </tr>
<?php }?>
  </tbody>
</table>

<a href="AddData.php">ajouter</a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#search').keyup(function(){
      var input = $(this).val();
      // alert(input);

      if (input !='') {
        $.ajax({
          url:"search.php",
          method:"POST",
          data:{input:input},
          success:function (data){
            $('#showS').html(data);
          }
        })
        
      }
    })
  })
</script>