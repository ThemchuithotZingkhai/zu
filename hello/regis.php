<?php
require_once "connection.php";
extract($_POST);
if(isset($submit))
{
    $sql = "INSERT INTO `cy` (RollNo,Email,Name,Address,Age,Phone,Course) VALUES ('$RollNo','$Email','$Name','$Address','$Age','$Phone','$Course')";
    if($con->query($sql) === True)
  {
    echo "Registered successfully";
  } 
  else{
    echo "error";
  }
}
?>

<!DOCTYPE html>
<html>

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

    .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color:  #8854d0;
    width: 100%;
    height: 60px;
    position: fixed;
    z-index: 10;
    top:0;
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
      color: white;
      padding: 35px 20px;
    }    

    .container {
        top:0 ;
        width: 382px;  
        overflow: hidden;  
        margin: auto;  
        margin: 20 0 0 450px;  
        padding: 60px;  
        background: #fefefe;  
        border-radius: 15px ; 
        border

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
      color: white;
      padding: 35px 20px;
    }

    .nav-items a:hover,
.nav-items :focus {
  color: #779BF0;
  cursor: pointer;
}


/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>

<body>
    

   

    <form action="" method="post">

       <div class="hero">

       <header class="header">
        <a href="#" class="logo">Developer</a>
        <nav class="nav-items">
          <a href="dashboard2.php">Home</a>
          <a href="#">About</a>
          <a href="#">Contact</a>
        </nav>
    </header>
    
            <div class="container">

               <h1>Registration</h1>

               <label for="RollNo"><b>RollNo</b></label>
               <input type="text" placeholder="Enter RollNo" name="RollNo" required>

               <label for="Email"><b>Email</b></label>
               <input type="text" placeholder="Enter Email " name="Email" required>

               <label for="Name"><b>Name</b></label>
               <input type="text" placeholder="Enter Name" name="Name" required>
  
               <label for="Address"><b>Address</b></label>
               <input type="text" placeholder="Enter Address " name="Address" required>

        
               <label for="Age"><b>Age</b></label>
               <input type="text" placeholder="Enter Age" name="Age" required>

        
               <label for="Phone"><b>Phone</b></label>
               <input type="text" placeholder="Enter Phone" name="Phone" required>

        
               <label for="Course"><b>Course</b></label>
               <input type="text" placeholder="Enter Course" name="Course" required>

               <button type="submit" name="submit">Submit</button>


            </div>
       </div>   
    </form> 
    
</body>
</html>


