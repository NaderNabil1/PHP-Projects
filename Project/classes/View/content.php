  <?php while($array=mysqli_fetch_row($result)): ?>
     <div class="column">
              <div class="card">
 
      <input type="checkbox" id="delete-checkbox" name="checkbox[]" value ="<?= $array[0] ?>" >
            

    <p>
         <?php
      if($array[4]==1)
      {
        echo 'DVD';
      }
      else if ($array[4]==2)
      {
        echo ' Furniture';
      }
      else if ($array[4]==3)
      {
        echo 'Book';
      }
       ?>
       </p>

      <p>
         <?php
        echo 'SKU : '.$array[1];
       ?>
       </p>
      <p>
         <?php
        echo 'Name : '.$array[2];
       ?>
       </p>
      <p>
         <?php
        echo 'Price : '.$array[3].'  $';
       ?>
       </p>
      <p>
         <?php
      if($array[5]!=0)
      {
        echo 'Size: '.$array[5] . '  MB';
      }
       ?>
       </p>
      <p>
         <?php
        if($array[4]==2)
        {
        echo 'Dimensions :  '.$array[6] . ' X '.$array[7] . ' X '. $array[8];
        }
        ?>
       
      <p>
       <?php
      if($array[9]!=0)
      {
        echo 'Weight: '.$array[9].'  Kg';
      }
       ?>
       </p>
      </div>
  </div>
          <?php endwhile; ?>
   
        

