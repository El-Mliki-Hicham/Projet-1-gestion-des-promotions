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

 
    
        <?php while(  $value = mysqli_fetch_assoc($result) ){ ?>
        <tr>
            <td><?php echo $value['Id'] ?></td>
            <td><?php echo $value['Name_Promotion'] ?></td>
        </tr>
    

    
    

<?php
}
}
}
?>
