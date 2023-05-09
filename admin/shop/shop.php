<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
    <link rel="stylesheet" href="../loginstyle.css">
</head>
 
<body>
<center>

<div class="boxtwo">

         <h1>Storing Form data in Database</h1>
         <form action="fun.php" method="post">
             
         <br>
         <p>
         
               <label  for="firstName">First Name:</label>
               <input id ="text" type="text" name="firstName" id="firstName">
            
         </p>
               <br> 
               
               <br>
               <p>
               <label for="lastName">Last Name:</label>
               <input id ="text" type="text" name="lastName" id="lastName">
</p>
               <br>
               
               
               
               <br>
               <p>
               <label for="Cus_address1">Address Line 1:</label>
               <input id ="text" type="text" name="Cus_address1" id="Cus_address1">
               <br>
</p>
             
               <br>
               <p>
               <label for="addressline">Address Line 2:</label>
               <input id ="text" type="text" name="Cus_address2" id="Cus_address2">
</p>
               <br>
               <br>
               <p>
               <label for="telephone">Telephone</label>
               <input id ="text" type="number" name="telephone" id="telephone">
</p><br>
             
            <br>
            <p>
               <label for="email">Email Address:</label>
               <input id ="text" type="text" name="email" id="email">
               <br>

</p>
            <input id ="button"type="submit" value="Submit" >
            <a href="../home.php"><input id ="button"value="Home" ></a>
         </form>
      
  
         </div>        

     
 
</body>
 
</html>
