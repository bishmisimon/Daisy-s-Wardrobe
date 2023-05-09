<?php

session_start();

include("../Login/config.php");
include("../Login/function.php");

if ($_SERVER['REQUEST_METHOD']== "POST"){
    # code...

    //something has been inputed

    $user_name=$_POST['user_name'];
    $password=$_POST['password'];

    if(!empty($user_name)&& !empty($password)&& !is_numeric($user_name))
    {
  //save to database
     $user_id=random_num(20);
     $query="insert into users(user_id,user_name,password) values('$user_id','$user_name','$password')";
     mysqli_query($con,$query);

     header("Location:login.php");
	 die;


    }else {
        # code...
        echo"Please enter some valid information! ";
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../loginstyle.css">
    <title>Sign Up</title>
</head>


<body>
    <div id="boxstyle">
        <form method="post">
            <div style="font-size:20px;margin:10px; color:white;">Signup</div>
            Enter Username<input id="text" type="text" name="user_name"><br><br>
            Create Password<input id="text" type="password" name="password"><br><br>

            <input id="button" type="submit" value="Signup"><br><br>

            <a href="../Login/login.php">Click here to Login </a><br><br>
        </form>
    </div>
    
</body>
</html>