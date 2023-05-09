

 <?php




require 'Dress.php'; 






session_start();










?>

<!DOCTYPE html>
<html lang="en">
<head>
   
<link rel="stylesheet" href="dress.css"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Dress</title>
</head>
<body>

<?php

if (isset($_POST["btnEdit"])) 
   {
  $dress=$_SESSION["dresses"][$_POST["btnEdit"]];
  $_SESSION["bid"]=$dress->id;
  $dress->Update();

}elseif (isset($_POST["btnDelete"])) {
    $dress2=$_SESSION["dresses"][$_POST["btnDelete"]];
     echo $_POST["btnDelete"]."Delete"; 
     $dress2->Delete();
     
     }




?>

    <head><h1>Manage Dress</h1></head>
   
</body>
</html>

    <a  href="Customer.php">Logout</a><br><br>
    <a href="Managesearchbar.php">Search Items</a>
   
   

   <br>

 

   
    <div id="pic">
    <img src="../Online-Store/Store-Images/Daisylogo.png" width="200px" >
    </div><nav></nav>

    <div class=style>


    <aside>

    <form method="post" enctype="multipart/form-data">

   
    <ul >
    <br> 
   
    <li>Name or Theme<br><input type="text" name="txtName" required  
    placeholder="Enter the Name" value="<?php
    
    if(isset($dress))

    echo $dress->name;
    
    
    ?>"></li>


   
    <li>Price of the Item<br><input type="number" name="txtPrice" required  
    placeholder="Enter the price" value="<?php
    

    if(isset($dress))

    echo $dress->price;
    
    
    ?>"></li>
   

 


      

<li>Select Sub Category</li>

<li><select name="ddCategory">
   
<?php

$types=Dress::GetCategoryTypes();
foreach($types as $type)

{
echo' <option';

if(isset($dress)) {
    


    if (trim($dress->category)==trim($type)) {
       echo   '         selected';
    }
}
echo'>'.$type.'</option>';
}



?>




</select>
</li>



<br>





    <li>Select Sub Category</li>

    <li><select name="ddSubCategory">
       
    <?php

  $stypes=Dress::GetDressesSubTypes();
  foreach($stypes as $stype)

{
    echo' <option';
    
    if(isset($dress)) {
        

   
        if (trim($dress->subCategory)==trim($stype)) {
           echo   '       selected';
        }
    }
    echo'>'.$stype.'</option>';
}
   


?>




    </select>
    </li>


   
<br>


    <li>Select Colour</li>
    <li><select name="ddColor" >
    <?php

$tcolors=Dress::GetColors();
foreach($tcolors as $tcolor)

{
    echo' <option';
    
    if(isset($dress)) {
        

   
        if (trim($dress->color)==trim($tcolor)) {
           echo   '      selected';
        }
    }
    echo'>'.$tcolor.'</option>';
}
   


?>

</select></li><br>




    </li>Select Size</li>
    <li><select name="ddSize" >
    <?php

$tsizes=Dress::GetSizes();
foreach($tsizes as $tsize)

{
    echo' <option';
    
    if(isset($dress)) {
        

   
        if (trim($dress->size)==trim($tsize)) {
           echo   '        selected';
        }
    }
    echo'>'.$tsize.'</option>';
}
   


?>


    </select></li><br>



    <li>Quantity<br><input type="number" name="txtQuantity" required  
                                    placeholder="Enter Dress Quantity" value="<?php
    
    if(isset($dress))

    echo $dress->quantity;
    
    
    ?>"></li>



<br>
    <li>Select book Picture</li>
    

   <?php
    
    if(isset($dress))

    {
        {
            echo '<img src="'.$dress->picture.'"width="100px" height="100px">';
            echo '<input type="hidden" value="'.$dress->picture.'" name="hdfPicture">';
        
        }
        

    
    }
    
    
    ?>
   



<li><input type="file" name="fupPicture" <?php if(!isset($dress)){
   
} echo 'required';?>></li><br>
   
    

    

<div class id="des">

     <li>Description<br><textarea name="txtDes"  cols="20" rows="3"><?php
    
    if(isset($dress))

    echo $dress->description; ?>
    
    
   </textarea></li>

</div>
  
     <li>
        <input type="submit" name="btnSave" value="Add Dress">
        <input type="submit" name="btnUpdate" value="Update Dress">
        
     </li>




    

    

</ul>


</form>





<?php


   if(isset($_POST["btnSave"]))

   {
   
    $dress= new Dress;
    $dress->name=$_POST["txtName"];
    $dress->price=$_POST["txtPrice"];

    $dress->category=$_POST["ddCategory"];
    $dress->subCategory=$_POST["ddSubCategory"];
    $dress->color=$_POST["ddColor"];
    $dress->size=$_POST["ddSize"];
    $dress->quantity=$_POST["txtQuantity"];
    $dress->description=$_POST["txtDes"];




    $dress->id=$dress->Add();


    //upload to the server
    $picture=$_FILES["fupPicture"]['name'];
    $info=new SplFileInfo($picture);
    $ext=$info->getExtension();
    $newName=$dress->id.".".$ext;
    $dress->picture='./uploads/'.$newName;
    $dress->updatePicture();
    move_uploaded_file($_FILES["fupPicture"]['tmp_name'],
    $dress->picture);
    
    echo("Dress Details added successfully");

}





    elseif(isset($_POST["btnUpdate"]))

    {
    
     $dress= new Dress;
     $dress->name=$_POST["txtName"];
     $dress->price=$_POST["txtPrice"];
 
     $dress->category=$_POST["ddCategory"];
     $dress->subCategory=$_POST["ddSubCategory"];
     $dress->color=$_POST["ddColor"];
     $dress->size=$_POST["ddSize"];
     $dress->quantity=$_POST["txtQuantity"];
     $dress->description=$_POST["txtDes"];
     $dress->id= $_SESSION["bid"];
 
 
 
 
    if(is_uploaded_file($_FILES["fupPicture"]['tmp_name'])){

      

        $picture=$_FILES["fupPicture"]['name'];
        $info=new SplFileInfo($picture);
        $ext=$info->getExtension();
        $newName=$dress->id.".".$ext;
        $dress->picture='./uploads/'.$newName;
       
        move_uploaded_file($_FILES["fupPicture"]['tmp_name'],
        $dress->picture);
        $dress->Update();


    }

    else

    {
        $dress->picture=$_POST["hdfPicture"];
        
        
    }
 
    
    
    echo("Dress Details Updated successfully");
   

}
















  




?>

</aside>
</div>
<?php

$dresses=Dress::GetDresses();

$_SESSION["dresses"]=$dresses;
echo '<form method="post" enctype="multipart/form-data"><table><tr><th>Item Bio & Price</th><th>description</th><th>Picture</th></tr>';

$row=0;
foreach($dresses as $d){




    echo "<tr>";
    echo "<td>"
    .$d->name.'<br>'
    .$d->price.'<br>'.
    $d->category.'<br>'.
    $d->subCategory.'<br>'.
    $d->color.'<br>'.
    $d->size.'<br>'.
    $d->quantity.'<br>'.
    
    
    "</td>";


   
      
   
   

    echo '<td><button name="btnEdit" type="submit" value="'.$row.'">Edit</button>
    <button name="btnDelete" type="submit" value="'.$row.'">Delete</button>
</td>';

    echo "</tr>";
    $row++;
}
echo '</table></form>';


?>






<footer>Dress Admin &copy;Daisy's Wardrobe.de</footer>
</body>
</html>
