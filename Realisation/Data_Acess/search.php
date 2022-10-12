<?php

include 'ConnectionDB.php';
if(isset($_POST['input'])){

$input = $_POST['input'];
$query= "SELECT * FROM promotion where Name_Promotion  like '{$input}%'  ";
$result = mysqli_query(getConnection(), $query);

if(mysqli_num_rows($result)>0){
?>

 
    
        <?php while(  $value = mysqli_fetch_assoc($result) ){ 
            $id =$value['Id'];
            $name =$value['Name_Promotion'];
            ?>

        <tr>
            <td><?php echo $id ?></td>
            <td><?php echo $name  ?></td>
            <td>
              <a class="edit" title="Edit" data-toggle="tooltip" href="Edit.php?id=<?php echo $id ?>"><i class="material-icons">&#xE254;</i></a>
              <a class="delete" title="Delete" data-toggle="tooltip"  href="Delete.php?id=<?php echo $id ?>"><i class="material-icons">&#xE872;</i></a>
            </td>
        </tr>
    

    
    

<?php
}
}
}
?>
