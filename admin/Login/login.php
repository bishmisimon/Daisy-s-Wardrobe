<?php


session_start();

include("../Login/config.php");
include("../Login/function.php");





if ($_SERVER['REQUEST_METHOD']== "POST")

{

    # code...

    //something has been inputed

    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {

  //raed from to database
     
  $query = "select * from users where user_name = '$user_name' limit 1";
  $result = mysqli_query($con, $query);

  if($result)
  {
      if($result && mysqli_num_rows($result) > 0)
      {

          $user_data = mysqli_fetch_assoc($result);
          
          if($user_data['password'] === $password)
          {

              $_SESSION['user_id'] = $user_data['user_id'];
              

              

            
              
              
          }
         
      }
  }
  
  echo "wrong username or password!";
}else
{
  echo "wrong username or password!";
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
    <title>login</title>
</head>


<body>
    <div class="boxstyle">
        <form method="post" action="../ManageDress.php"  >
            <div style="font-size:20px;margin:10px; color:white;">Login</div>
            <input id="text" type="text" name="user_name"><br><br>
            <input id="text" type="password" name="password"><br><br>

            <input id="button" type="submit" value="Login" ></button><br><br>
           

            <a href="../Login/signup.php">Click here to Sign Up</a><br><br>
        </form>
    </div>
    
</body>
</html>