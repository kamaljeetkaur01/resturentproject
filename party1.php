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
  height: 132px;
  width: 100%;
 background-image:linear-gradient(rgba(30, 233, 233, 0.98),rgba(244, 115, 54, 0.37),rgba(75, 0, 255, 0.65));
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

  .third
	{
		height: 800px;
		width: 100%;
		background-image: linear-gradient(rgba(255, 0, 59, 0.65),rgba(0, 255, 208, 0.78));
		position: absolute;
	}
	
	.bttn
	{
		 background-color:yellow;
		 height:50px;
		 width:250px;
		 margin-left: 250px;
	}
</style>
 </head>
 <body> 
         <div class="first">
            <div style="float:left;">
          <img src="logo1.png" style="height: 125px; width: 137px; margin-left: 15px;">
      </div>
        <div style="height:129px;width:970px;">
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
    <!-- third cls start here-->
         <div class="third">
          <h1 style="font-size:40px;font-family:cursive;color:white;margin-left:489px;">Up Coming events</h1> 
          <!-- col 12 start here-->
          <br>
           <div class="col-md-12">
               <div class="col-md-6" >
               	       <img src="party.jpg" style="height: 200px;width: 419px;margin-left:200px;border:solid black;"> <br> <br>
               	       <img src="kitty.jpg" style="height: 200px;width: 419px;margin-left:200px;border:solid black;"><br><br> 
               	        <img src="bech.jpg" style="height: 200px;width: 419px;margin-left:200px;border:solid black;"> 

               </div>
                   <div class="col-md-6" >
                     <div style="height: 200px;width: 547px;border: solid #FFC107;background:black;    margin-left: -15px;">
                         <h1 style="margin-top:17px;font-family:cursive;color:orange;text-align:center;">Birthday Party</h1>
                    	<p style="color:white;margin-left:13px;font-size:16px;"> For birthday parties we are offering our party package to our clients. This party package includes the vegetarian dinner and snacks, music and dancing facilities, nicely decorated hall and a/c facility. We have an expert team that  can fulfill all the demands of the clients.</p>
                    	 <a href="event2.php" style="font-size:17px;margin-left: 399px;color:orange;"><b>BOOK A EVENT</b></a>
                   	</div><br>
                   	<div style="height: 200px;width: 547px;border: solid #FFC107;background:black;    margin-left: -15px;">
                         <h1 style="margin-top:4px;font-family:cursive;color:orange;text-align:center;">Kitty Party</h1>
                    	<p style="color:white;margin-left:13px;font-size:16px;"> We offer specialized services for Kitty parties and we serve the most delicious food. Being a service provider we are giving the package for ladies kitty parties and they are offered in the cheap rate. For the ladies entertainment we have provided the DJ service and dance floor. We are offering the tasty and delicious food to our clients.</p>
                    	<a href="event2.php" style="font-size:17px;margin-left: 399px;color:orange;"><b>BOOK A EVENT</b></a>
                   	</div><br>
                   	  	<div style="height: 200px;width: 547px;border: solid #FFC107;background:black;    margin-left: -15px;">
                         <h1 style="margin-top:2px;font-family:cursive;color:orange;text-align:center;">Bechelor Party</h1>
                    	<p style="color:white;margin-left:13px;font-size:16px;"> We are providing the best bechelor Party to our guests by serving the tasty and delicious food. These services are known for their yummy food. Our restaurant is the smoke free area and our clients can easily hang out with their family. This place has the attractive design which meets all the requirements of our customers.</p>
                    	<a href="event2.php" style="font-size:17px;margin-left: 399px;color:orange;"><b>BOOK A EVENT</b></a>
                   	</div>
                   </div>
           </div>
           <!--ending here-->
            <div style="">
                <a href="read.php" style="color:black;margin-left:1041px;font-size:27px;margin-top:100px;"><b>READ MORE</b></a>
            </div> 
         </div>
 </body>
 </html>