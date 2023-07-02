<?php 

include "classes/Model/fetch.class.php";

class show extends fetch
 {
        
        public function showProduct () {
          
            $result = $this->getData();

            if ($result->num_rows > 0) {

                include_once "content.php";

                }
    
                    else{
                        echo ("No data found");
                    }

            }
 }
        
        
        