<?php 

include 'Promotion.php';
include 'ConnectionDB.php';

class PromoManager {
    
public function GetData(){

    $selectRow = "SELECT * from promotion";
    $Query = mysqli_query(GetConnection(),$selectRow);
    $GetData = mysqli_fetch_all($Query,MYSQLI_ASSOC);
    $array= array(); 
    foreach ($GetData as $value){
        $promo = new Promo();    
        $promo->SetId($value['Id']);
        $promo->SetName($value['Name_Promotion']);
        array_push($array,$promo);
    }
    
    return $array ;
}    

function Edit($id){
    $SelectRowId = "SELECT * FROM promotion WHERE id=$id";
    $Query = mysqli_query(GetConnection(),$SelectRowId);
    $GetData = mysqli_fetch_all($Query,MYSQLI_ASSOC);
   
    foreach ($GetData as $value){
    $promo = new Promo();
    $promo->SetId($value['Id']);
    $promo->SetName($value['Name_Promotion']);
   
    }
    
    return $promo ;
}

public function AddData($Promo){
    
    $Name =$Promo->getName();    
    
    $insertRow="INSERT INTO promotion(Name_Promotion) 
VALUES( '$Name')";

mysqli_query(getConnection(), $insertRow);

}

public function UpdataData($id,$name) {
    // Requête SQL
    $RowUpdate = "UPDATE promotion SET 
    Name_Promotion='$name'
    WHERE id=$id";

    mysqli_query(getConnection(),$RowUpdate);

}
public function Delete($id){
    $DeleteRow = "DELETE  FROM promotion where id = $id";
    mysqli_query(getConnection(),$DeleteRow);


}

}

?>







