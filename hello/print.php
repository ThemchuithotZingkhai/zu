<?php
require_once "connection.php";
extract($_POST);
$que = mysqli_query($con, "select * from reportgen ORDER BY id DESC");
$row = mysqli_fetch_array($que);
?>

<!DOCTYPE html>
<html>

<style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], input[type=Item] {
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

     
     /* CSS for header */
     .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color:  #8854d0;
      width: 70px;
    height: 50px;
    position: fixed;
    z-index: 10;
    top: 0;
    right: 10px;
    border-radius:15px;
    }

    .header .logo {
      font-size: 25px;
      font-family: 'Sriracha', cursive;
      color: white;
      text-decoration: none;
      margin-right: 30px;
    }

    .nav-items a:hover,
.nav-items :focus {
  color: #779BF0;
  cursor: pointer;
}



/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn {
     width: 100%;
  }
}

</style>


<body>

<header class="header">
    <nav class="nav-items">
    <a href="dashboard2.php" class="logo">Home</a>
    </nav>
  </header>

    <form method="POST" >

    <div class="hero">

    <header class="header">
    <nav class="nav-items">
    <a href="dashboard2.php" class="logo">Home</a>
    </nav>
  </header>

    <div class="container">

       <h1></h1>
       <label for="Customer"><b>Customer</b></label>
       <input   type="text" placeholder="Customer" readonly name="Customer"  value="<?php echo $row['Customer'];?>">

       <label for="Item"><b>Item</b></label>
       <input    type="text" placeholder="Enter Item"  readonly name="Item"  value="<?php echo $row['Item'];?>">
      
       <label for="Quantity"><b>Quantity</b></label>
       <input   type="text" placeholder="Enter Quantity" readonly name="Quantity"  value="<?php echo $row['Price'];?>"  >

       <label for="Price"><b>Price</b></label>($)
       <input   type="text" placeholder="Enter Price"  readonly name="Price"  value="<?php echo $row['Quantity'];?>"  >

       <label for="Total"><b>Total</b></label>($)
       <input   type="text" placeholder="Total"  readonly name="Total"  value="<?php echo $row['Total'];?>" >
        
       <button type = "button"  id="print" onclick="printpage();">Print</button>
       <button type="button" class="cancelbtn"><a href="pricecalc.php">Cancel</a></button>
      
    </div>
    </div>



</form>


</body>
</html>

<script type ="text/javascript">
    function printpage()
    {
        var printButton = document.getElementById("print");
        printButton.style.visibility = 'hidden';
        window.print()
        printButton.style.visibility = 'visible';

    }
</script>