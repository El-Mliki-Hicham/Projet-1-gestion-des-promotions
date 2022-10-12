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
<link rel="stylesheet" href="assets/css/style.css">
<style>
 
</style>

</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Employee <b>Details</b></h2></div>
                    <div style="display:inline;" class="col-sm-4">
                        <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                       
                            <div class="search-box">
                                <i class="material-icons">&#xE8B6;</i>
                                <input type="text" class="form-control" placeholder="Search&hellip;">
                         
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>Administration</td>
                        <td>(171) 555-2222</td>
                        <td>
							<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                 
                </tbody>
            </table>
        </div>
    </div>     
</body>
</html>
<script src="assets/css/style.css"></script>


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
          data:{input:input},
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

