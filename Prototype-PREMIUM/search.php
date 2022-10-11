<?php

include 'Data_Acess/ConnectionDB.php';
if(isset($_POST['input'])){

$input = $_POST['input'];
$query= "SELECT * FROM promotion where Name_Promotion like '{$input}%'";
mysqli_query(getConnection(), $query);
}

?>