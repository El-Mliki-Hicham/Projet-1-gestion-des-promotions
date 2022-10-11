<?php

include ("Data_Acess/PromoManager.php");


class PromoBLL{

    private $PromoManager = null ;
    public  function __construct()
    {
       $this->PromoManager = new PromoManager();
    
    }


    function GetAllData(){

       return $this->PromoManager->GetData();

    }
    function AddData($Promo){

       return $this->PromoManager->AddData($Promo);

    }
    function EditData($id){

      return $this->PromoManager->Edit($id);

   }

}

?>