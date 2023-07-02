<?php 
include_once "classes/Model/fetch.class.php";

class Delete extends fetch {

        public function deleteProduct()
        {
                if(isset($_POST['products_btn']))
                    {
                              $all_id=$_POST['checkbox'];
                              $extract_id= implode(',' , $all_id);
                              $delete = "DELETE FROM e_products WHERE id IN($extract_id)";
                                $query = $this->connect()->query($delete);
                    }
        }
}