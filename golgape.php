<!DOCTYPE html>
<html>
<head>
<title> Title </title>
 <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     
<style type="text/css">
 .first
{
  height: 125px;
  width: 100%;
 background-image:linear-gradient(rgba(30, 233, 233, 0.98),rgba(244, 115, 54, 0.37),rgba(75, 0, 255, 0.65));
}
 .top
 {
 	height: 483px;
 	width: 100%;
    background-image: url('01.jpg');
    color:#950505;
 
 	}
 .txt
 {
 	height: 100px;
 	width: 693px;
 	margin-top: 32px;
 	margin-left: 334px;
 	position: absolute;
 }
 .nav
{
    text-decoration: none;
    width: 100%;
    background:#000;
}
ul {
    list-style-type: none;
    background-color: #333;
  }

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color:#f1f1f1;
}
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer
}

.dropbtn:hover, .drbtn:focus {
    background-color: #3e8e41;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
</style>
</head>
<body>
    <div class="first">
       <div style="float:left;">
          <img src="logo1.png" style="height: 125px; width: 137px; margin-left: 15px;">
      </div>
        <div style="height:117px;width:970px;">
        <p style="margin-left:98px;font-family:Algerian; font-size:90px;color:black;">DIAMOND PLAZA</p>
        <p style="font-size:23px;margin-left:725px;margin-top:-43px;">(Restaurant Ordering)</p>
    </div>
   </div>
     <!-- Navbar is started here-->
	     
 <div class="nav">
       <ul>
       <li><a class="active" href="templateres.php" style="text-decoration:none;">HOME</a></li>
        <li><a  href="about.php" style="text-decoration:none;">ABOUT</a></li>
            <li><a  href="party1.php" style="text-decoration:none;">EVENTS</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"  style="text-decoration:none;">MENU<span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="golgape.php">Golgappa Junction</a></li>
            <li><a href="main.php">Main-Course</a></li>
            <li><a href="thali.php">Thali</a></li>
            <li><a href="street- food.php">Street-Food</a></li>
            <li><a href="ice-cream.php">Ice-cream</a></li>
            <li><a href="sandwich.php">Sandwich</a></li>
            <li><a href="lassi.php">Lassi</a></li>
            <li><a href="beverage.php">Beverage</a></li>
             <li><a href="pizza.php">Pizza</a></li>
            <li><a href="burger.php">Burgers</a></li>
             <li><a href="slush.php">Slush</a></li>
            <li><a href="chiense.php">Chinese</a></li>
            <li><a href="snacks.php">Snacks</a></li>
            <li><a href="chuski.php">Chuski</a></li>
            <li><a href="shakes.php">Shakes</a></li>
           </ul>
          </li>
               <li><a href="gallary.php" style="text-decoration:none;">GALLERY</a></li>
                <li><a href="contact.php" style="text-decoration:none;">CONTACT US</a></li>
         </ul>
    </div>
     <!-- ending navbar-->
	<div class="top">
		<div class="txt">
		 <h1 style="font-size:70px;font-family:Algerian;">Golgappa Junction</h1>
	   </div>
	   <div class="container">
	   <div class="col-md-12" style="margin-top:136px;">
	   	<div class="col-md-4" >
	   		<br><br><br>
	   		Khatta Meetha<br>
	   		7 Rangi<br>
	   		Dahi Waale<br>
	   	    Fruit Waale<br>
	   	    Dry Fruit Waale<br><br>
	   	</div>
	   	<div class="col-md-3" ><br><br><br>
	   	<i class="fa fa-inr" style="font-size:18;margin-left:30px;">30</i><br>
	   	<i class="fa fa-inr" style="font-size:18;margin-left:30px;">50</i><br>
	   	<i class="fa fa-inr" style="font-size:18;margin-left:30px;">60</i><br>
	   	<i class="fa fa-inr" style="font-size:18;margin-left:30px;">60</i><br>
	    <i class="fa fa-inr" style="font-size:18;margin-left:30px;">100</i><br>
	   	</div>
	   	<div class="col-md-5"><img src="golgape.png" style="margin-top:13px;"></div>
	   </div>
	   </div>
	</div>
</body>
</html>