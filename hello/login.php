<?php
session_start();
require_once "connection.php";
extract($_POST);
if(isset($login))
{
    $que = mysqli_query($con, "select * from admin where Email='$Email' and Password='$Password'");
    $row = mysqli_num_rows($que);
    if ($row)
   {
    header('location: search and update.php');
   }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.hero{
  position: fixed; /* Stay in place */ 
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%),url('wallpaper.png');
  background-size: cover;
  background-position: center;
  padding-top: 50px;
    }


.container {
        top:0 ;
        width: 382px;  
        overflow: hidden;  
        margin: auto;  
        margin: 20 0 0 450px;  
        padding: 80px;  
        background: #fefefe;  
        border-radius: 15px ; 

}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<form action="" method="post">

 <div class="hero">
    <div class="container">

       <h1>Login Form</h1>
       <label for="Email"><b>Email</b></label>
       <input type="text" placeholder="Enter Email " name="Email" required>

       <label for="Password"><b>Password</b></label>
       <input type="password" placeholder="Enter Password" name="Password" required>
        
       <button type="submit" name="login">Login</button>
       <label>
         <input type="checkbox" checked="checked" name="remember"> Remember me
       </label>
       <button type="button" class="cancelbtn"><a href="index.php">Cancel</a></button>
       <span class="psw">Forgot <a href="#">password?</a></span>

    </div>
    </div>

</form>

</body>
</html>
