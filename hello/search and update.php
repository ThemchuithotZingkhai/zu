<?php
  session_start();
  include 'connection.php';
  if(isset($_GET['RollNo']))
  {
    $RollNo = $_GET['RollNo'];
    $sql = "SELECT * FROM cy WHERE RollNo = '$RollNo' ";
    $result = mysqli_query($con,$sql);
    $read = mysqli_fetch_assoc($result);
  }

?>





<!DOCTYPE html>
<html>

<style>


body {font-family: Arial, Helvetica, sans-serif;}

input[type=text] {
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
  overflow: manual; /* Enable scroll if needed */
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%),url('wallpaper.png');
  background-size: cover;
  background-position: center;
  padding-top: 50px;
    }

.container {
        top: 0; 
        width: 382px;  
        height:70%;
        overflow: hidden;
        margin:auto;  
        margin-top:4px; 
        margin: 20 0 0 450px;  
        padding: 80px;  
        background: #fefefe;  
        border-radius: 15px ; 
}

     /* CSS for header */
     .header {
    top: -8px;
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

<body>


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
    <form  action =""  method="GET">
      <label for="RollNo">Roll_No</label>
      <input type="text" name="RollNo" value="<?php if(isset($GET['RollNo'])){echo $_GET['RollNo'];}?>" placeholder="RollNo">
      <button type="submit" >Search</button><br>
    </form>

   <div>
      <form actiom="" method="POST">
       <input type="hidden" name="RollNo" value="<?php echo $read['RollNo'];?>">

    
        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="Name" value ="<?php if(isset($read['Name'])) {echo $read['Name'];}?>" >

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="Email" value ="<?php if(isset($read['Email'])) {echo $read['Email'];}?>" >

        <label for="address"><b>Address</b></label>
        <input type="text" placeholder="Enter Address" name="Address" value ="<?php if(isset($read['Address'])) { echo $read['Address'];}?>" >

        <label for="age"><b>Age</b></label>
        <input type="text" placeholder="Enter Age" name="Age" value ="<?php if(isset($read['Age']))  {echo $read['Age'];}?>" >

        <label for="Phone"><b>Phone</b></label>
        <input type="text" placeholder="Enter Phone" name="Phone" value ="<?php if(isset($read['Phone']))  {echo $read['Phone'];}?>" >
    
        <label for="Course"><b>Course</b></label>
        <input type="text" placeholder="Enter Course" name="Course"  value ="<?php if(isset($read['Course']))  {echo $read['Course'];}?>">

        <div class="clearfix">
          <button type="submit" class="signupbtn" name="Update">Update</button>
        </div>
      </form>
    </div>
 </div>
</div>


</body>
</html>



<?php
 require_once "connection.php";

 if(isset($_POST['Update']))
 {
  $sql = "UPDATE `cy` SET Name='$_POST[Name]',Address='$_POST[Address]', Age='$_POST[Age]',Phone='$_POST[Phone]', Course='$_POST[Course]' where RollNo ='$_POST[RollNo]'";
  $result=mysqli_query($con,$sql);

  if($result)
  {
    echo "data updated";
  } 
  else{
    echo "data not updated";
  }
  
 }
?>
