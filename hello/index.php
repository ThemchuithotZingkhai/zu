<?php
require_once "connection.php";
extract($_POST);
if(isset($submit))
{
    $sql = "INSERT INTO `admin` (Email,Password) VALUES ('$Email','$Password')";
    if($con->query($sql) === True)
    {
      header('location: dashboard2.php'); 
    }
}
?>

<!DOCTYPE html>
<html>
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
      margin: 0;
      padding:0;
    }
   *{box-sizing: border-box;} 

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 10px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: rgb(225, 214, 246);
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 5px;

}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%),url('wallpaper.png');
  background-size: cover;
  background-position: center;
  padding-top: 50px;
}


/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border-radius: 15px ;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 10px;
  top: 5px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}


    #hero{
        
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%),url('wallpaper.png');
        background-size: cover;
        background-position: center;
        position: relative;
    }

         /* CSS for header */
    .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color:  #8854d0;
    width: 100%;
    height: 60px;
    position: fixed;
    z-index: 10;
    }

    .header .logo {
      font-size: 25px;
      font-family: 'Sriracha', cursive;
      color: white;
      text-decoration: none;
      margin-left: 30px;
    }

    .nav-items {
      display: flex;
      justify-content: space-around;
      align-items: center;
      background-color:  #8854d0;
      margin-right: 20px;
      height: 60px;
      
    }

    .nav-items a {
      text-decoration: none;
      font-family: Arial, Helvetica, sans-serif;
      color: white;
      padding: 35px 20px;
    }

    .nav-items a:hover,
.nav-items :focus {
  color: #779BF0;
  cursor: pointer;
}


    .half 
    {
      width: 50%;
      height: 100vh;
      background: rgba(86,86,86,0.3);
      backdrop-filter: blur(10px);
      position: absolute;
      left: 0;
      top: 0;
    }

    .half h1{
      position: relative;
      top:35%; 
      left: 0;
      font-family: sans-serif;
      font-weight: bold;
      text-transform: uppercase;
      margin: 0;
    }


    .but{  
    border-radius: 50px; 
    width:30%; 
    position: absolute; 
    top:55%;
    left: 33%;   
    background-color:#8854d0; 
    cursor: pointer;
    }

  .flex-container {
  display: flex;
  flex-wrap: wrap;
  font-size: 20px;
  color: #f5f5f5;
  text-align: center;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

    @media (max-width: 300px) {
  .half {
    width: 100%;
  }
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>
  <header class="header">
    <a href="#" class="logo">Developer</a>
    <nav class="nav-items">
      <a href="#">About</a>
      <a href="#">Contact</a>
      <a href="login.php">Login</a>
    </nav>
  </header>
 
  <div id="hero">
    <div class="flex-container">
      <div class="half">
           <h1>Web Development Internship</h1>
           <button onclick="document.getElementById('id01').style.display='block'" class="but">Sign Up</button>
      </div>
    </div>

  </div>
  
  <div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    <form class="modal-content" action="" method="post">
      <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <label for="Email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="Email" required>
  
        <label for="Password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="Password" required>
  
        
        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>
  
        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
  
        <div class="clearfix">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          <button type="submit" class="signupbtn" name="submit">Sign Up</button>
        </div>
      </div>
    </form>
  </div>
 
  
<script>
// Get the modal
var modal = document.getElementById('id01');
  
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
  
</body>
</html>


