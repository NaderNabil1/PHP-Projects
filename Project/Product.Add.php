    <?php
    include "classes/Controller/Insert.class.php" ;
    $DVD= new Dvd;
    $DVD->insertData($_POST);
    $furniture = new Furniture;
    $furniture->insertData($_POST);
    $BOOK = new Book;
    $BOOK->insertData($_POST);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<script>
     </script>
    <title> E-Commerce Website </title>
    <link rel="stylesheet" href="includes/stylesheet.css" />
    <style >
        .hiddendvd{
            display:none;
        }
        .showdvd{
            display:block;
        }
        .hiddenfur{
            display:none;
        }
        .showfur{
            display:block;
        }
        .hiddenbook{
            display:none;
        }
        .showbook{
            display:block;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">  </script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

</head>
<header>
      <h1><span>Product List </span> </h1>
      <nav>
        <ul>
          <li class="delbutton"> <a href="index.php"> Back</a></li>

       </u1>
  </nav>
</header>

<body>

<div class="container">  
<form action="" method="POST" name="frm" id='#product_form'   >
    <div class="user-details">
             <div class="input-box">
                 <span class="details"> SKU :</span>
                 <input  type="text" name="SKU"  id="skuu" >
             </div>
             <div class="input-box">
                 <span class="details"> Name :</span>
                 <input type="text" name="Name"  >
              </div>
                  <div class="input-box">
                     <span class="details"> Price ($) :</span>
                      <input type="text" name="Price" >
                  </div>  
            <div class="input-box">
                <span class="details"> Type Switcher </span>
                <select name="Type_Switcher" id="producttype" class="producttype" >
                    <option id="select" value="" name="default"> Select </option>
                    <option id="DVD" value="1" name="DVD"> DVD </option>
                    <option id="Furniture" value="2" name="Furniture"> Furniture</option>
                    <option id="Book" value="3" name="Book"> Book </option>
                </select>
            </div>


            <div class="input-box" id="DVDfunction">
                <div class="hiddendvd" id="pdvdDetails">
                    <span class="details" > Size (MB)</span> 
                         <input type="text" name="Space" >
                         <p > *Please provide size in MB *</p>
                </div>
            </div>




            <div class="input-box" id="furfunction">
                <div class="hiddenfur" id="pfurDetails">
                        <span class="details" > Height (CM)  </span> 
                         <input type="text" name="Height" >
                        <br>
                         <span class="details" > Width (CM) </span> 
                          <input type="text" name="Width">
                        <br>
                          <span class="details" > Length (CM) </span> 
                       <input type="text" name="Length" >
                       <p > *Please Provide dimensions in CM *</p>

            </div>
                </div>
                  <div class="input-box" id= "bookfunction">
                          <div class="hiddenbook" id="pbookDetails">
                               <span class="details" > Weigth(KG) </span> 
                                 <input type="text" name="Weigth" >
                                 <p > *Please provide weight in KG *</p>

                         </div>
                 </div>
                <button class="subbotton" type="submit" name="Submit" value="Submit" >Submit</button>
    </div>

</form>
</div>
<script src ="includes/switchProducts.js">
   
</script>
</body>
</html>