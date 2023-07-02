<?php
 include 'classes/Model/fetch.class.php';
 include 'Validation.class.php';
 

   
    class Dvd extends fetch  {
        
        public function insertData() {
            
          if (isset($_POST['Submit'])) {
              
            $skuValue = $_POST['SKU'];
            $nameValue = $_POST['Name'];
            $priceValue = $_POST['Price'];
            $typeValue = $_POST['Type_Switcher'];
            $spaceValue = $_POST['Space'];
            if($typeValue=='1'){
             $ValidationDVD=new Validation;
            $ValidationDVD->validateDvd($skuValue,$nameValue,$priceValue,$typeValue,$spaceValue);
            }
            
        }
    }
}
             
      
                  
  
        
   

    class Furniture extends fetch  {
        
        public function insertData() {
          
            if (isset($_POST['Submit'])) {
              
            $skuValue = $_POST['SKU'];
            $nameValue = $_POST['Name'];
            $priceValue = $_POST['Price'];
            $typeValue = $_POST['Type_Switcher'];
            $heightValue = $_POST['Height'];
            $widthValue = $_POST['Width'];
            $lengthValue = $_POST['Length'];
              if($typeValue=='2'){
             $ValidationFur=new Validation;
            $ValidationFur->validateFurniture($skuValue,$nameValue,$priceValue,$typeValue,$heightValue,$widthValue,$lengthValue);

            }
                
                  
                }
              
            }
            
        }
        
    

    class Book extends fetch  {
        
        public function insertData() {
            
           if (isset($_POST['Submit'])) {
              
            $skuValue = $_POST['SKU'];
            $nameValue = $_POST['Name'];
            $priceValue = $_POST['Price'];
            $typeValue = $_POST['Type_Switcher'];
            $weightValue = $_POST['Weigth'];
            
            if($typeValue=='3'){
             
            $ValidationBook=new Validation;
            $ValidationBook->validateBook($skuValue,$nameValue,$priceValue,$typeValue,$weightValue);
             
                
                  
                }
              
            }
            
        }
    }
        
    