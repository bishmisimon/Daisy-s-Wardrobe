<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "daisy");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  ,
                   
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="kids.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"] ,
               
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo 'Item Removed';  
                     echo '<script>window.location="kids.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>home</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
           <link rel="stylesheet" href="dress.css">
          
           <link rel="stylesheet" href="shop.css">
    <link rel="stylesheet "href= "button.css">
    <link rel="stylesheet" href="slide.css">
    <link rel="stylesheet" href="video.css">
    <link rel="stylesheet" href="headervideo.css">
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="/search/search.css">
    <link rel="stylesheet" href="search.css">



      </head>  
      <body>  

 


     
           


                <div class="header"> <div class="contain">

    <div class="navbar">
        <div class="logo">
    <img src="../Online-Store/Store-Images/Daisylogo.png" width="300px">
                
        </div>
         
        <nav>
       
<ul>

        <li><a href="../admin/Login/login.php">Sign In</a></li>
        <li><a href="../admin/Login/signup.php" >Sign Up</a></li>
            
        
        <img src="../Online-Store/Store-Images/cart.png" width="30px" height="30px">
        <img src="../Online-Store/Store-Images/menu.png" class="menu-icon" onclick="menutoggle()"><br><br><br><br>

        <ul type="none" id="MenuItems">
                <li><a href="home.php">Home</a></li>
                <li><a href="">About</li>
                <li><a href=""></a></li>
                <li><a href="">Contact</a></li>

               
  
    
  </div>

</li>


        </ul>




        </nav>

  
</div>
<div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>
                                        " class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

<div class="btn-group">
  <button  onclick="location='Men.php'">Men</a></button>
  <button  onclick="location='Women.php'">Women</button>
  <button   onclick="location='kids.php'">Kids</button>
  <button  onclick="location='footwear.php'">Footwear</button>
</div>





 <!-- The video -->






     <!-- The video -->
<video autoplay muted loop id="myVideo">
  <source src="../admin/Videos/kidswear.mp4" type="video/mp4">
 

    
</video>
<div class="col-3">
<h2 class="headline">Kids's wear in Wardrobe</h2> 
</div>




                <?php  
               
               $query = "SELECT * FROM store WHERE category='Kids'";
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                     <form method="post" action="kids.php?action=add&id=<?php echo $row["id"]; ?>">  
                          <div class ="box">  
                               <img src="<?php echo $row["picture"]; ?>" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                               <h4 class="text-danger">LKR <?php echo $row["price"]; ?></h4>  
                               <h4 class="text-info"><?php echo $row["description"]; ?></h4>  
                             
                               <div class="ratings"></div>
                   
                              
                               <input type="number" name="quantity" class="form-control"  />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                                
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>LKR<?php echo $values["item_price"]; ?></td>  
                             
                               <td>LKR<?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  

                               <td><a href="kids.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);
                                    $result++;   
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">LKR<?php echo number_format($total, 2); ?></td> 
                                
                               <td></td>  
                          </tr> 
                         

                          
                          <?php  
                          }  
                          ?>  

                     </table>  
                     Do you want Confirm the order?Please enter your Details<br><a href="../admin/shop/shop.php"><input id ="button"value="YES" ></a>
                     <a href="Customer.php"><input id ="button"value="NO" ></a>
                </div>  
           </div>  
      </div>

      
                         
           <br />  
           <!--------footer--->
 <a href="ManageDress.php">Log in to Administration</a>

<div class="footer">
    <div class="contain">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for Android and ios mobile Phone</p>
                <div class="app-logo">
                    <img src="../Online-Store/Store-Images/apple.jpg">
                    <img src="../Online-Store/Store-Images/aps.png">
                </div>

            </div>
            <div class="footer-col-2">
               
                <img src="../Online-Store/Store-Images/Daisylogo.png">
                <p>Our Purpose is to Sustainably Make the Pleasure and Benifits of Sports Accessible to Many.</p>
                
            </div>

            <div class="footer-col-3">
            <h3>Useful Links</h3>
            <ul style="list-style-type:none ;">
                <li>Coupons</li>
                <li>Blog Post</li>
                <li>Return Policy</li>
                <li>Join Affliate</li>
                

            </ul>
            </div>


            <div class="footer-col-4">
                <h3>Follow Us</h3>
                <ul style="list-style-type:none ;">
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instergram</li>
                    <li>Youtube</li>
                </ul>
                </div>

        </div>

        <hr>
        <p class="copyright">Copyright 2022 Daisy's Wardrobe</p>
    </div>
</div>
      </body>  
 </html>
   