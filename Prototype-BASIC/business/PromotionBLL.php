<?php

include ("Data_Acess/PromotionAD.php");


class PromotionBLL{

    private $PromotionAD = null ;
    public  function __construct()
    {
       $this->PromotionAD = new PromotionAD();
    
    }


    function GetAllData(){

       return $this->PromotionAD->GetData();

    }
    function AddData($Promo){

       return $this->PromotionAD->AddData($Promo);

    }
    
 
}

?>