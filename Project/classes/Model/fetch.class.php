<?php 

include_once "classes/Database.class.php";

    class fetch extends Database {
        
        public function getData () {
                        
          $query="select * from e_products limit 50";
           $conn = $this->connect();
                $query="select * from e_products limit 50"; 
                 $result=mysqli_query($conn,$query);
                 return $result;
      
}
}

