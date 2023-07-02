<?php 
class Validation extends fetch {
	public function validateDvd($sku,$name,$price,$type,$space){
		if(empty($sku && $name&& $price && $type && $space))
      {
      		    echo("Please, submit required data");
       			 header("refresh:1.5;index.php" );
      }
      else{
        if(!$this->checkSKU($sku)== false){
            echo("Sorry This SKU is already Exists");
            header("refresh:2;index.php" );
          }
          else{
                      $sql = "INSERT INTO e_products (sku, name, price, typeswitcher, space, height, width, length, weight) VALUES ('$sku', '$name', '$price', '$type', '$space', '0', '0', '0', '0')";
                $insert = $this->connect();
                mysqli_query($insert, $sql);
                echo("Product Added");
                header("refresh:1.5;index.php" );

                }
	}
}



	public function validateFurniture($sku,$name,$price,$type,$height,$length,$width){
		      if(empty($sku && $name&& $price && $type && $height && $length && $width))
              {
                 echo("Please, submit required data");
                 header("refresh:1.5;index.php" );

              }
              else{
        if(!$this->checkSKU($sku)== false){
            echo("Sorry This SKU is already Exists");
            header("refresh:2;index.php" );
          }
      else
              { 
      	$sql = "INSERT INTO e_products (sku, name, price, typeswitcher, space, height, width, length, weight) VALUES ('$sku', '$name', '$price', '$type', '0', '$height', '$width', '$length', '0')";

                $insert = $this->connect();
                mysqli_query($insert, $sql);
                echo("Product Added");
                header("refresh:1.5;index.php" );
  
                }
	}
}

	public function validateBook($sku,$name,$price,$type,$weight){
		if(empty($sku && $name&& $price && $type && $weight))
         {
        echo("Please, submit required data");
        header("refresh:1.5;index.php" );

         }
         else{
        if(!$this->checkSKU($sku)== false){
            echo("Sorry This SKU is already Exists");
            header("refresh:2;index.php" );
          }
             else{
                      $sql = "INSERT INTO e_products (sku, name, price, typeswitcher, space, height, width, length, weight) VALUES ('$sku', '$name', '$price', '$type', '0', '0', '0', '0', '$weight')";
                $insert = $this->connect();
                mysqli_query($insert, $sql);
                echo("Product Added");
                header("refresh:1.5;index.php" );

                }
      	}
      }
 public function checkSKU($sku)
      {
                $result = $this->getData();
                 while($row=mysqli_fetch_assoc($result)){
                  if($sku==$row['sku'])
                         {
                             return true;
                          }

        
                                                         }
}

}