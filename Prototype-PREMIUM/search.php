<?php

include 'Data_Acess/ConnectionDB.php';
if(isset($_POST['input'])){

$input = $_POST['input'];
$query= "SELECT * FROM promotion where Name_Promotion like '{$input}%'";
$result = mysqli_query(getConnection(), $query);
// $data =  mysqli_fetch_assoc($result);
// 
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
                    <a href="Edit.php?id=<?php echo $id?>">Edit</a>
                    <a href="Delete.php?id=<?php echo $id ?>">Delete</a>
          </td>
        </tr>
    

    
    

<?php
}
}
}
?>
