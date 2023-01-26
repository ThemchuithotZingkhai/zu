<!DOCTYPE html>
<style>
*{
    box-sizing: border-box;
}

html,body{
    overflow-x: hidden;
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
}
body{ 
    font-family: arial sans-serif;
    padding: 0;
    margin:0;
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
      color: white;
      padding: 35px 20px;
      font-family: Arial, Helvetica, sans-serif;
    }

    .nav-items a:hover,
.nav-items :focus {
  color: #779BF0;
  cursor: pointer;
}


.main{
  height: 100%;
  margin-top: 60px;
  padding: 10px 50px;
}

#sidebarMenu{
  height: 100%;
  position: fixed;
  left: 0;
  top: 0;
  width: 250px;
  margin-top: 60px;
  background-color:#2f3542;
  transform: translateX(-250px) ;
  transition: transform 250ms ease-in-out;
}

#openSidebarMenu:checked ~ #sidebarMenu{
  transform: translateX(0px) ;
}



.menu{
  list-style: none;
  padding:0;
  margin: 0;
}

.menu li{
  color: azure;
  border-bottom: 1px solid rgba(255 , 255 , 255 , 0.10);
}

.menu li a{
  color: azure;
  display: block;
  text-decoration: none;
  text-transform: uppercase;
  padding: 20px;
}

.sidebarIconToggle{
  width: 22px;
  height: 22px;
  position: fixed;
  z-index: 20;
  top: 22px;
  left: 15px;
  cursor: pointer;
}

.spinner{
  height: 3px;
  background-color:#2f3542 ;
  transition: all 0.3s;
}

.spinner.middle,
.spinner.bottom{
  margin-top: 3px;
}

#openSidebarMenu:checked ~ .sidebarIconToggle > .spinner.middle{
  opacity: 0;
}

#openSidebarMenu:checked ~ .sidebarIconToggle > .spinner.top{
  transform: rotate(135deg);
  margin-top: 8px;

}

#openSidebarMenu:checked ~ .sidebarIconToggle > .spinner.bottom{
  transform: rotate(-135deg);
  margin-top: -9px;
}


</style>
<html>

<body>
  

<header class="header">
    <a href="#" class="logo">&nbsp;&nbsp;Developer</a>
    <nav class="nav-items">
    <a href="dashboard2.php">Home</a>
      <a href="#">About</a>
      <a href="#">Contact</a>
    
    </nav>
  </header>


  <input type="checkbox" id="openSidebarMenu">
  <label for="openSidebarMenu" class="sidebarIconToggle">
    <div class="spinner top"></div>
    <div class="spinner middle"></div>
    <div class="spinner bottom"></div>   
  </label>
  <div id ="sidebarMenu">
    <ul class="menu">
      
      <li><a href="dashboard2.php">HOME</a></li>
      <li><a href="pricecalc.php">PRINT RECEIPT</a></li>
      <li><a href="search and update.php">SEARCH & UPDATE</a></li>
      <li><a href="regis.php">REGISTRATION</a></li>
      <li><a href="index.php">LOG OUT</a></li>
    
    </ul>
  </div> 
  
  <div class="main">

</body>
</html>
