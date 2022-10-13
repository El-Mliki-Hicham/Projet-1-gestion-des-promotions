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
        $promotion = new Promotion();    
        $promotion->SetId($value['Id']);
        $promotion->SetName($value['Name_Promotion']);
        array_push($array,$promotion);
    }
    
    return $array ;
}    

function Edit($id){
    $SelectRowId = "SELECT * FROM promotion WHERE id=$id";
    $Query = mysqli_query($this->GetConnection(),$SelectRowId);
    $GetData = mysqli_fetch_all($Query,MYSQLI_ASSOC);
   
    foreach ($GetData as $value){
    $promotion = new Promotion();
    $promotion->SetId($value['Id']);
    $promotion->SetName($value['Name_Promotion']);
   
    }
    
    return $promotion ;
}

public function AddData($Promotion){
    
    $Name =$Promotion->getName();    
    
    $insertRow="INSERT INTO promotion(Name_Promotion) 
VALUES( '$Name')";

mysqli_query($this->GetConnection(), $insertRow);

}

public function UpdataData($id,$name) {
    // Requête SQL
    $RowUpdate = "UPDATE promotion SET 
    Name_Promotion='$name'
    WHERE id=$id";

    mysqli_query($this->GetConnection(),$RowUpdate);

}
public function Delete($id){
    $DeleteRow = "DELETE  FROM promotion where id = $id";
    mysqli_query($this->GetConnection(),$DeleteRow);


}

}

?>







