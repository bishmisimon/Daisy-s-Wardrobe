<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>

   
<?php



      // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "customer_db");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $firstName =  $_REQUEST['firstName'];
        $lastName = $_REQUEST['lastName'];
        $Cus_address1 =  $_REQUEST['Cus_address1'];
        $Cus_address2 = $_REQUEST['Cus_address2'];
        $telephone = $_POST['telephone'];
        $email = $_POST['email'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO users ( `firstName`, `lastName`, `Cus_address1`, `Cus_address2`, `Telephone`, `email`)  VALUES ('$firstName',
            '$lastName','$Cus_address1','$Cus_address2','$telephone','$email')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>Your Details have been saved </h3>";
                
 
            echo nl2br("\n$firstName&nbsp;$lastName\n "
                . "$Cus_address1\n $Cus_address2\n $telephone\n $email");

            echo "<p>"."Dear".("&nbsp;$firstName &nbsp;$lastName"). "<br>" ."Ready Dispatch the Order"."<br> "."Thank You much for your Order";
            
            


        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        
         
        
    
        // Close connection
        mysqli_close($conn);
        ?>
    </center>

 


