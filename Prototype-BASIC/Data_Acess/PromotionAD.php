<?php 

include 'Promotion.php';

class PromotionAD {



    
function GetConnection(){

    $connection = mysqli_connect("localhost",'root','','gestion_promotion');

return $connection;
}


public function GetData(){

    $selectRow = "SELECT * from promotion";
    $Query = mysqli_query($this->GetConnection(),$selectRow);
    $GetData = mysqli_fetch_all($Query,MYSQLI_ASSOC);
   $array= array();
    foreach ($GetData as $value){
    $Promotion = new Promotion();
    $Promotion->SetId($value['Id']);
    $Promotion->SetName($value['Name_Promotion']);
    array_push($array,$Promotion);
    }
    
    return $array ;
}

public function AddData($Promotion){

$Name =$Promotion->getName();

$insertRow="INSERT INTO promotion(Name_Promotion) 
VALUES( '$Name')";

mysqli_query($this->GetConnection(), $insertRow);

}


}





?>