<?php 
include "business/PromotionBLL.php";
$PromotionBLL = new PromotionBLL();
 $GetData =  $PromotionBLL->GetAllData();       
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
          <div class="col-sm-8">
            <h2>Gestion des promotions <b>
              <a  href="AddData.php">
                <button type="button" class="btn btn-info add-new">
                  <i class="fa fa-plus"></i> Ajouter </button>
              </b>
              </a>
            </h2>
          </div>
          <div style="display:inline;" class="col-sm-4">


            <div class="search-box">
              <i class="material-icons">&#xE8B6;</i>
              <input id="search" name="input" class="form-control"  placeholder="Recherche&hellip;">

            </div>
          </div>
        </div>
      </div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nom promotion</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody id="searchData">
          <tr>
            <?php 
        foreach($GetData as $value){ ?>
            <td> <?php echo $value->GetId() ?></td>
            <td> <?php echo $value->getName() ?></td>
            <td>
              <a class="edit" title="Edit" data-toggle="tooltip" href="Edit.php?id=<?php echo $value->GetId() ?>"><i class="material-icons">&#xE254;</i></a>
              <a class="delete" title="Delete" data-toggle="tooltip"  href="Delete.php?id=<?php echo $value->GetId() ?>"><i class="material-icons">&#xE872;</i></a>
            </td>
          </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>
<script src="assets/css/style.css"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="assets/js/search.js"></script>
