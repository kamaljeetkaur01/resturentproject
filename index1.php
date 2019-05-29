
<!DOCTYPE html>
<html>

<head>
  <title>My Cart</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="bg.css">
       <link rel="stylesheet" type="text/css" href="modal.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style>
     .first
{
  height: 125px;
  width: 100%;
 background-image:linear-gradient(rgba(30, 233, 233, 0.98),rgba(244, 115, 54, 0.37),rgba(75, 0, 255, 0.65));
}
    #mySidenav a {
    position: fixed;
    margin-top: 242px;
    left: -118px;
    transition: 0.3s;
    padding: 15px;
    width: 176px;
    text-decoration: none;
    font-size: 17px;
    color: white;
    border-radius: 0 5px 5px 0;
    z-index: 1;
}

#mySidenav a:hover {
    left: 0;


}

#Home {
    top: 20px;
    background-color: #4CAF50;
    
}

#chat {
    top: 80px;
    background-color: #2196F3;
    
}
#sandwich{
    top: 140px;
    background-color: #f44336;
   
}

#piza {
    top: 200px;
    background-color: #555;
    
}
#dess {
    top: 260px;
    background-color: #E91E63;
    
}
#bev {
    top: 320px;
    background-color: #ffc107;
    
}

#chine {
    top: 20px;
    background-color: #ffc107;
    
}

#indian{
    top: 80px;
    background-color: #E91E63;
    
}

#rice{
    top: 140px;
    background-color: #555;
    
}

#bread{
    top: 200px;
    background-color: #f44336;
    
}

#meal{
    top: 260px;
    background-color: #2196F3;
    
}

#currd {
    top: 320px;
    background-color: #4CAF50;
    
}


</style>
  <style>
  .btn-danger click
    {
      margin-left: 85px;
     }
  b
{
  text-align: center;

}

  body 
  {
      position: relative; 
  }
  
 .badge-notify{
    background:red;
    position:relative;
    top: -20px;
    right: 10px;
  }
  .my-cart-icon-affix {
    position: fixed;
    z-index: 999;
  }

  .col-md-3 {
      margin-top: 33px;
      width: 25%;
      }


 #mySidenavr a {
    position: fixed;
    margin-top: 242px;
    right: -118px;
    transition: 0.3s;
    padding: 15px;
    width: 176px;
    text-decoration: none;
    font-size: 17px;
    color: white;
    border-radius: 5px 0 0 5px;
    z-index: 1;
}

#mySidenavr a:hover {
    right: 0;


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
   <!--navbar start here-->
<nav class="navbar navbar-inverse ">
     <div class="container-fluid">
   
    <ul class="nav navbar-nav">
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
 </nav>
                          
     
           
<div id="mySidenav" class="sidenav">
        <a href="#snacks" style="text-align:center;" id="Home">Snacks</a>
        <a href="#chaats" style="text-align:center;" id="chat">Chaats</a>
        <a href="#grilled Sandwiches" id="sandwich">Grilled Sandwiches</a>
        <a href="#pizza" style="text-align:center;" id="piza">Pizza</a>
        <a href="#desserts" style="text-align:center;" id="dess">Desserts </a>
        <a href="#beverages" style="text-align:center;" id="bev">Beverages</a>
       
</div>







<div id="mySidenavr" class="sidenavr">
        <a href="#chinese Delicacies" style="text-align:center;" id="chine">Chinese Delicacies</a>
        <a href="#indian main course" style="text-align:center;" id="indian">Indian main course</a>
        <a href="#rice" style="text-align:center;" id="rice">Rice</a>
        <a href="#breads" style="text-align:center;" id="bread">Breads </a>
        <a href="#indian Meals" style="text-align:center;" id="meal">Indian Meals</a>
        <a href="#curd" style="text-align:center;" id="currd">Curd</a>
       
</div>







<div class="container">

  
    <h1>      <div style="float: right; cursor: pointer;">
        <span class="glyphicon glyphicon-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
      </div>
    </h1>

<div id="snacks" class="container" style="background-color: rgba(0, 5, 150, 0.91);color:white;opacity: 1;margin-top: 20px;font-size: 40px;margin-left:40px;width: 165px;"><a name="anchor" href="" style="color:white;">Snacks</a></div>
  <div class="row">
    <div class="col-md-3 text-center">
      <img src="chana.jpg" width="150px" height="150px">
      <br>
      Chana Bhatura - <strong>Rs.95</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="1" data-name="Chana Bhatura" data-summary="summary 1" data-price="95" data-quantity="1" data-image="chana.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="pav.jpg" width="150px" height="150px">
      <br>
     Pav Bhaji - <strong>Rs.90</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="2" data-name="Pav Bhaji" data-summary="summary 2" data-price="90" data-quantity="1" data-image="pav.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="kulcha.jpg" width="150px" height="150px">
      <br>
      Chana Kulcha - <strong>Rs.80</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="3" data-name="Chana Kulcha" data-summary="summary 3" data-price="80" data-quantity="1" data-image="kulcha.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="tikki.jpg" width="150px" height="150px">
      <br>
      Aloo Ki Tikki<br> served with chana - <strong>Rs.70</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="4" data-name=" Aloo Ki Tikki" data-summary="summary 4" data-price="70" data-quantity="1" data-image="tikki.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="samosa.jpg" width="150px" height="150px">
      <br>
     Samosa<br> served with chana - <strong>Rs.50</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="5" data-name="Samosa" data-summary="summary 5" data-price="50" data-quantity="1" data-image="samosa.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="burger1.jpg" width="150px" height="150px">
      <br>
      Burger - <strong>Rs.70</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="6" data-name="Burger" data-summary="summary 6" data-price="70" data-quantity="1" data-image="burger1.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="french.jpg" width="150px" height="150px">
      <br>
     French Fries - <strong>Rs.60</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="7" data-name="French Fries" data-summary="summary 7" data-price="60" data-quantity="1" data-image="french.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="dhokla.jpg" width="150px" height="150px">
      <br>
      Dhokla - <strong>Rs.40</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="8" data-name="Dhokla" data-summary="summary 8" data-price="40" data-quantity="1" data-image="dhokla.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="panner.jpg" width="150px" height="150px">
      <br>
      Paneer Tikka - <strong>Rs.195</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="9" data-name="Paneer Tikka" data-summary="summary 9" data-price="195" data-quantity="1" data-image="panner.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="mushroom.jpg" width="150px" height="150px">
      <br>
      Mushroom Tikka - <strong>Rs.160</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="10" data-name="Mushroom Tikka" data-summary="summary 10" data-price="160" data-quantity="1" data-image="mushroom.jpg">Add to Cart</button>
      
    </div>
  </div>







<hr>
<div id="chaats" class="container" style="background-color:  rgba(0, 5, 150, 0.91);color:white;opacity: 1;margin-top: 20px;font-size: 40px;margin-left:40px;width: 157px;"><a name="anchor" href="" style="color:white;">Chaats</a></div>
      <div class="row">
    <div class="col-md-3 text-center">
      <img src="papdi.jpg" width="150px" height="150px">
      <br>
      Chaat Bhalla Papdi - <strong>Rs.75</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="11" data-name="Chaat Bhalla Papdi" data-summary="summary 11" data-price="75" data-quantity="1" data-image="papdi.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="dahipapdi.jpg" width="150px" height="150px">
      <br>
     Dahi Papdi - <strong>Rs.75</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="12" data-name="Dahi Papdi" data-summary="summary 12" data-price="75" data-quantity="1" data-image="dahipapdi.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="dahibhalla.jpg" width="150px" height="150px">
      <br>
      Dahi Bhalla - <strong>Rs.75</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="13" data-name="Dahi Bhalla" data-summary="summary 13" data-price="75" data-quantity="1" data-image="dahibhalla.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="dahigolgappa.jpg" width="150px" height="150px">
      <br>
      Dahi Golgappa - <strong>Rs.80</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="14" data-name="Dahi Golgappa" data-summary="summary 14" data-price="80" data-quantity="1" data-image="dahigolgappa.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="golgappa.jpg" width="150px" height="150px">
      <br>
     Golgappa - <strong>Rs.45</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="15" data-name="Golgappa" data-summary="summary 15" data-price="45" data-quantity="1" data-image="golgappa.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="bhelpuri.jpg" width="150px" height="150px">
      <br>
      Bhelpuri - <strong>Rs.65</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="16" data-name="Bhelpuri" data-summary="summary 16" data-price="65" data-quantity="1" data-image="bhelpuri.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="idlichaat.jpg" width="150px" height="150px">
      <br>
      Idli Chaat- <strong>Rs.75</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="17" data-name="Idli Chaat" data-summary="summary 17" data-price="75" data-quantity="1" data-image="idlichaat.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="sprout.jpg" width="150px" height="150px">
      <br>
      Sprout Chaat - <strong>Rs.75</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="18" data-name="Sprout Chaat" data-summary="summary 18" data-price="75" data-quantity="1" data-image="sprout.jpg">Add to Cart</button>
      
    </div>
 </div>







 <hr>
<div id="grilled Sandwiches" class="container" style="background-color: rgba(0, 5, 150, 0.91);color:white;opacity: 1;margin-top: 20px;font-size: 40px;margin-left:40px;width: 375px;"><a name="anchor" href="" style="color:white;">Grilled Sandwiches</a></div>
      <div class="row">
    <div class="col-md-3 text-center">
      <img src="chessesand.jpg" width="150px" height="150px">
      <br>
     Grilled Cottage Cheese Sandwich - <strong>Rs.179</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="19" data-name="Grilled Cottage Cheese Sandwich" data-summary="summary 19" data-price="179" data-quantity="1" data-image="chessesand.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="tamotosand.jpg" width="150px" height="150px">
      <br>
      Masala Potato Sandwich - <strong>Rs.160</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="20" data-name="Masala Potato Sandwich" data-summary="summary 20" data-price="160" data-quantity="1" data-image="tamotosand.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="pannersand.jpg" width="150px" height="150px">
      <br>
     Paneer Tikka Sandwich - <strong>Rs.169</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="21" data-name="Paneer Tikka Sandwich" data-summary="summary 21" data-price="169" data-quantity="1" data-image="pannersand.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="vegsand.jpg" width="150px" height="150px">
      <br>
     Vegetable Grilled Sandwich - <strong>Rs.180</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="22" data-name="Vegetable Grilled Sandwich" data-summary="summary 22" data-price="180" data-quantity="1" data-image="vegsand.jpg">Add to Cart</button>
      
    </div>
</div>










<hr>
<div id="pizza" class="container" style="background-color: rgba(0, 5, 150, 0.91);color:white;opacity: 1;margin-top: 20px;font-size: 40px;margin-left:40px;width: 127px;"><a name="anchor" href="" style="color:white;">Pizza</a></div>
      <div class="row">
    <div class="col-md-3 text-center">
      <img src="tamotopizza.jpg" width="150px" height="150px">
      <br>
      Tomato & Cheese Pizza - <strong>Rs.300</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="23" data-name="Tomato & Cheese Pizza" data-summary="summary 23" data-price="300" data-quantity="1" data-image="tamotopizza.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="marita.jpg" width="150px" height="150px">
      <br>
     Margarita Pizza - <strong>Rs.395</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="24" data-name="Margarita Pizza" data-summary="summary 24" data-price="395" data-quantity="1" data-image="marita.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="nacos.jpg" width="150px" height="150px">
      <br>
      Nachos Pizza - <strong>Rs.350</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="26" data-name="Nachos Pizza" data-summary="summary 26" data-price="350" data-quantity="1" data-image="nacos.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="pannerpizza.jpg" width="150px" height="150px">
      <br>
      Paneer Tikka Pizza - <strong>Rs.390</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="27" data-name="Paneer Tikka Pizza" data-summary="summary 27" data-price="390" data-quantity="1" data-image="pannerpizza.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="malaipizza.jpg" width="150px" height="150px">
      <br>
      Malai Tikka Pizza - <strong>Rs.350</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="28" data-name="Malai Tikka Pizza" data-summary="summary 28" data-price="350" data-quantity="1" data-image="malaipizza.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="muttonpizza.jpg" width="150px" height="150px">
      <br>
      Sweetcorn with cheese Pizza - <strong>Rs.550</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="29" data-name="Sweetcorn with cheese Pizza" data-summary="summary 29" data-price="550" data-quantity="1" data-image="muttonpizza.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="pep.jpg" width="150px" height="150px">
      <br>
      Pepperoni Pizza - <strong>Rs.525</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="30" data-name="Pepperoni Pizza" data-summary="summary 30" data-price="525" data-quantity="1" data-image="pep.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="exo.jpg" width="150px" height="150px">
      <br>
       Onion Pizza - <strong>Rs.250</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="31" data-name="Onion Pizza" data-summary="summary 31" data-price="250" data-quantity="1" data-image="exo.jpg">Add to Cart</button>
      
    </div>
</div>








<hr>
<div id="desserts" class="container" style="background-color:  rgba(0, 5, 150, 0.91);color:white;opacity: 1;margin-top: 20px;font-size: 40px;margin-left:40px;width: 187px;"><a name="anchor" href="" style="color:white;">Desserts</a></div>
      <div class="row">
    <div class="col-md-3 text-center">
      <img src="rasmalai.jpg" width="150px" height="150px">
      <br>
     Rasmalai - <strong>Rs.65</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="32" data-name="Rasmalai" data-summary="summary 32" data-price="65" data-quantity="1" data-image="rasmalai.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="kesar.jpg" width="150px" height="150px">
      <br>
     Kesar Rasmalai - <strong>Rs.70</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="33" data-name="Kesar Rasmalai" data-summary="summary 33" data-price="70" data-quantity="1" data-image="kesar.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="rasgulla.jpg" width="150px" height="150px">
      <br>
      Rasgulla - <strong>Rs.40</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="34" data-name="Rasgulla" data-summary="summary 34" data-price="40" data-quantity="1" data-image="rasgulla.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="gulab.jpg" width="150px" height="150px">
      <br>
     Gulab Jamun - <strong>Rs.40</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="35" data-name="Gulab Jamun" data-summary="summary 35" data-price="40" data-quantity="1" data-image="gulab.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="dalhalwa.jpg" width="150px" height="150px">
      <br>
     Dal Halwa<br>Winter special - <strong>Rs.55</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="36" data-name=" Dal Halwa" data-summary="summary 36" data-price="55" data-quantity="1" data-image="dalhalwa.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="gajar.jpg" width="150px" height="150px">
      <br>
      Gajar Halwa<br>Winter special - <strong>Rs.55</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="37" data-name="Gajar Halwa" data-summary="summary 37" data-price="Gajar Halwa" data-quantity="1" data-image="gajar.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="ice.jpg" width="150px" height="150px">
      <br>
     Ice Cream - <strong>Rs.60</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="38" data-name="ice Cream" data-summary="summary 38" data-price="60" data-quantity="1" data-image="ice.jpg">Add to Cart</button>
      
    </div>
 </div>






 <hr>
<div id="beverages" class="container" style="background-color:  rgba(0, 5, 150, 0.91);color:white;opacity: 1;margin-top: 20px;font-size: 40px;margin-left:40px;width: 220px;"><a name="anchor" href="" style="color:white;">Beverages</a></div>
      <div class="row">
    <div class="col-md-3 text-center">
      <img src="coldcoffee.jpg" width="150px" height="150px">
      <br>
     Cold Coffee- <strong>Rs.80</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="39" data-name="Cold Coffee" data-summary="summary 39" data-price="80" data-quantity="1" data-image=coldcoffee.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="coffeeice.jpg" width="150px" height="150px">
      <br>
     Cold Coffee with Ice Cream - <strong>Rs.99</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="40" data-name="Cold Coffee with Ice Cream" data-summary="summary 40" data-price="99" data-quantity="1" data-image="coffeeice.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="freshcream.jpg" width="150px" height="150px">
      <br>
      Cold Coffee with Fresh Cream - <strong>Rs.99</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="41" data-name="Cold Coffee with Fresh Cream" data-summary="summary 41" data-price="99" data-quantity="1" data-image="freshcream.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="lemontea.jpg" width="150px" height="150px">
      <br>
     Lemon Iced Tea - <strong>Rs.60</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="42" data-name="Lemon Iced Tea" data-summary="summary 42" data-price="60" data-quantity="1" data-image="lemontea.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="greenappy.jpg" width="150px" height="150px">
      <br>
     Green Apple Cooler - <strong>Rs.75</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="43" data-name="Green Apple Cooler" data-summary="summary 43" data-price="75" data-quantity="1" data-image="greenappy.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="lamonsoda.jpg" width="150px" height="150px">
      <br>
    Fresh Lime Soda - <strong>Rs.80</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="44" data-name="Fresh Lime Soda" data-summary="summary 44" data-price="80" data-quantity="1" data-image="lamonsoda.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="sakajvi.jpg" width="150px" height="150px">
      <br>
     Shikanji - <strong>Rs.40</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="45" data-name="Shikanji" data-summary="summary 45" data-price="40" data-quantity="1" data-image="sakajvi.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="milk.jpg" width="150px" height="150px">
      <br>
      Milk Badam - <strong>Rs.100</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="46" data-name="Milk Badam" data-summary="summary 46" data-price="100" data-quantity="1" data-image="milk.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="watermolen.jpg" width="150px" height="150px">
      <br>
      Watremelon Cooler - <strong>Rs.75</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="47" data-name="Watremelon Cooler" data-summary="summary 47" data-price="75" data-quantity="1" data-image="watermolen.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="berry.jpg" width="150px" height="150px">
      <br>
     Strawberry Crush - <strong>Rs.75</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="48" data-name="Strawberry Crush" data-summary="summary 48" data-price="75" data-quantity="1" data-image="berry.jpg">Add to Cart</button>
      
    </div>
  </div>








<hr>
<div id="chinese Delicacies" class="container" style="background-color:  rgba(0, 5, 150, 0.91);color:white;opacity: 1;margin-top: 20px;font-size: 40px;margin-left:40px;width: 373px;"><a name="anchor" href="" style="color:white;">Chinese Delicacies</a></div>
      <div class="row">
    <div class="col-md-3 text-center">
      <img src="manchrian.jpg" width="150px" height="150px">
      <br>
      Manchurian Dry - <strong>Rs.180</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="49" data-name="Manchurian Dry" data-summary="summary 49" data-price="180" data-quantity="1" data-image="manchrian.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="cheesechli.jpg" width="150px" height="150px">
      <br>
      Chilli Cheese Dry - <strong>Rs.210</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="50" data-name="Chilli Cheese Dry" data-summary="summary 50" data-price="210" data-quantity="1" data-image="cheesechli.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="mushroomchli.jpg" width="150px" height="150px">
      <br>
      Chilli Mushroom - <strong>Rs.210</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="51" data-name="Chilli Mushroom" data-summary="summary 51" data-price="210" data-quantity="1" data-image="mushroomchli.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src=" Noodles.jpg" width="150px" height="150px">
      <br>
      Noodles - <strong>Rs.180</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="52" data-name="Noodles" data-summary="summary 52" data-price="180" data-quantity="1" data-image=" Noodles.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="Cheese Chow Mein.jpg" width="150px" height="150px">
      <br>
     Cheese Chow Mein - <strong>Rs.170</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="53" data-name="Cheese Chow Mein" data-summary="summary 53" data-price="170" data-quantity="1" data-image="Cheese Chow Mein.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="Vegetable Chow Mein.jpg" width="150px" height="150px">
      <br>
      Mixed Vegetable Chow Mein - <strong>Rs.180</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="54" data-name="Mixed Vegetable Chow Mein" data-summary="summary 54" data-price="180" data-quantity="1" data-image="Vegetable Chow Mein.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="Noodles with Gravy.jpg" width="150px" height="150px">
      <br>
      Noodles with Gravy - <strong>Rs.170</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="55" data-name="Noodles with Gravy" data-summary="summary 55" data-price="170" data-quantity="1" data-image="Noodles with Gravy.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="Fried Rice.jpg" width="150px" height="150px">
      <br>
      Vegetable Fried Rice - <strong>Rs.170</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="56" data-name="Vegetable Fried Rice" data-summary="summary 56" data-price="170" data-quantity="1" data-image="Fried Rice.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="Rice Gravy.jpg" width="150px" height="150px">
      <br>
      Rice with Gravy - <strong>Rs.190</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="57" data-name="Rice with Gravy" data-summary="summary 57" data-price="190" data-quantity="1" data-image="Rice Gravy.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="Cheese Gravy.jpg" width="150px" height="150px">
      <br>
     Chilli Cheese Gravy - <strong>Rs.180</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="58" data-name="Chilli Cheese Gravy" data-summary="summary 58" data-price="180" data-quantity="1" data-image="Cheese Gravy.jpg">Add to Cart</button>
      
    </div>

     <div class="col-md-3 text-center">
      <img src="Chilli Potato.jpg" width="150px" height="150px">
      <br>
     Crispy Chilli Potato - <strong>Rs.160</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="59" data-name="Crispy Chilli Potato" data-summary="summary 59" data-price="160" data-quantity="1" data-image="Chilli Potato.jpg">Add to Cart</button>
      
    </div>

     <div class="col-md-3 text-center">
      <img src="Chop Suey.jpg" width="150px" height="150px">
      <br>
     Cheese Chop Suey - <strong>Rs.180</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="60" data-name="Cheese Chop Suey" data-summary="summary 50" data-price="180" data-quantity="1" data-image="Chop Suey.jpg">Add to Cart</button>
      
    </div>
   </div>




   
<hr>
<div id="indian main course" class="container" style="background-color:  rgba(0, 5, 150, 0.91);color:white;opacity: 1;margin-top: 20px;font-size: 40px;margin-left:40px;width: 368px;"><a name="anchor" href="" style="color:white;">Indian main course</a></div>
      <div class="row">
    <div class="col-md-3 text-center">
      <img src="dal.jpg" width="150px" height="150px">
      <br>
     Dal Tadka - <strong>Rs.119</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="61" data-name="Dal Tadka" data-summary="summary 61" data-price="119" data-quantity="1" data-image="dal.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="rajma.jpg" width="150px" height="150px">
      <br>
      Rajma Masala - <strong>Rs.129</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="62" data-name="Rajma Masala" data-summary="summary 62" data-price="129" data-quantity="1" data-image="rajma.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="makhni.jpg" width="150px" height="150px">
      <br>
      Dal Makhani - <strong>Rs.159</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="63" data-name="Dal Makhani" data-summary="summary 63" data-price="159" data-quantity="1" data-image="makhni.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="mixveg.jpg" width="150px" height="150px">
      <br>
      Mix Veg. - <strong>Rs.179</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="64" data-name="Mix Veg." data-summary="summary 64" data-price="179" data-quantity="1" data-image="mixveg.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="Kofta.jpg" width="150px" height="150px">
      <br>
      Malai Kofta - <strong>Rs.199</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="65" data-name="Malai Kofta" data-summary="summary 65" data-price="199" data-quantity="1" data-image="Kofta.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="palak.jpg" width="150px" height="150px">
      <br>
     Palak Paneer - <strong>Rs.219</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="66" data-name="Palak Paneer" data-summary="summary 66" data-price="219" data-quantity="1" data-image="palak.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="Kadhai.jpg" width="150px" height="150px">
      <br>
      Kadhai Paneer - <strong>Rs.219</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="67" data-name="Kadhai Paneer" data-summary="summary 67" data-price="219" data-quantity="1" data-image="Kadhai.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="PaneerLababdar.jpg" width="150px" height="150px">
      <br>
      Paneer Lababdar - <strong>Rs.249</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="68" data-name="Paneer Lababdar" data-summary="summary 68" data-price="249" data-quantity="1" data-image="PaneerLababdar.jpg">Add to Cart</button>
      
    </div>
</div>











<hr>
<div id="rice" class="container" style="background-color:  rgba(0, 5, 150, 0.91);color:white;opacity: 1;margin-top: 20px;font-size: 40px;margin-left:40px;width: 110px;"><a name="anchor" href="" style="color:white;">Rice</a></div>
      <div class="row">
    <div class="col-md-3 text-center">
      <img src="FiredRice.jpg" width="150px" height="150px">
      <br>
      Fired Rice - <strong>Rs.120</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="69" data-name=" Fired Rice" data-summary="summary 69" data-price="120" data-quantity="1" data-image="FiredRice.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="CheeseRice.jpg" width="150px" height="150px">
      <br>
     Cheese Rice - <strong>Rs.130</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="70" data-name="Cheese Rice" data-summary="summary 70" data-price="130" data-quantity="1" data-image="CheeseRice.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="MushroomRice.jpg" width="150px" height="150px">
      <br>
      Mushroom Rice - <strong>Rs.130</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="71" data-name="Mushroom Rice" data-summary="summary 71" data-price="130" data-quantity="1" data-image="MushroomRice.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="chillyrice.jpg" width="150px" height="150px">
      <br>
      Chiily Garlic Rice - <strong>Rs.130</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="72" data-name="Chiily Garlic Rice" data-summary="summary 72" data-price="130" data-quantity="1" data-image="chillyrice.jpg">Add to Cart</button>
      
    </div>

      </div>






<hr>
<div id="breads" class="container" style="background-color:  rgba(0, 5, 150, 0.91);color:white;opacity: 1;margin-top: 20px;font-size: 40px;margin-left:40px;width: 159px;"><a name="anchor" href="" style="color:white;">Breads</a></div>
      <div class="row">
    <div class="col-md-3 text-center">
      <img src="tawaroti.jpg" width="150px" height="150px">
      <br>
      Tawa Roti - <strong>Rs.10</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="73" data-name="Tawa Roti" data-summary="summary 73" data-price="10" data-quantity="1" data-image="tawaroti.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="tandorroti.jpg" width="150px" height="150px">
      <br>
      Tandoori Rot - <strong>Rs.10</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="74" data-name="Tandoori Rot" data-summary="summary 74" data-price="10" data-quantity="1" data-image="tandorroti.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="buterroti.jpg" width="150px" height="150px">
      <br>
      Butter Roti - <strong>Rs.15</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="75" data-name="Butter Roti" data-summary="summary 75" data-price="15" data-quantity="1" data-image="buterroti.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="Naan.jpg" width="150px" height="150px">
      <br>
      Naan - <strong>Rs.25</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="76" data-name="Naan" data-summary="summary 76" data-price="25" data-quantity="1" data-image="Naan.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="PudinaParatha.jpg" width="150px" height="150px">
      <br>
      Pudina Paratha - <strong>Rs.30</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="77" data-name="Pudina Paratha" data-summary="summary 77" data-price="30" data-quantity="1" data-image="PudinaParatha.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="methi.jpg" width="150px" height="150px">
      <br>
      Methi Paratha - <strong>Rs.30</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="78" data-name="Methi Paratha" data-summary="summary 78" data-price="30" data-quantity="1" data-image="methi.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="mirchi.jpg" width="150px" height="150px">
      <br>
      Mirchi Paratha - <strong>Rs.30</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="79" data-name="Mirchi Paratha" data-summary="summary 78" data-price="30" data-quantity="1" data-image="mirchi.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="OnionKulcha.jpg" width="150px" height="150px">
      <br>
      Onion Kulcha - <strong>Rs.50</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="80" data-name="Onion Kulcha" data-summary="summary 80" data-price="50" data-quantity="1" data-image="OnionKulcha.jpg">Add to Cart</button>
      
    </div>
</div>








 <hr>
<div id="indian Meals" class="container" style="background-color:  rgba(0, 5, 150, 0.91);color:white;opacity: 1;margin-top: 20px;font-size: 40px;margin-left:40px;width: 257px;"><a name="anchor" href="" style="color:white;">Indian Meals</a></div>
      <div class="row">
    <div class="col-md-3 text-center">
      <img src="amritthali.jpg" width="150px" height="150px">
      <br>
     Amritsari Kulcha Thali<br>(Chana masala, 2 stuffed kulcha, salad, papad and raita) - <strong>Rs.170</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="81" data-name="Amritsari Kulcha Thali" data-summary="summary 81" data-price="170" data-quantity="1" data-image="amritthali.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="naanthali.jpg" width="150px" height="150px">
      <br>
      Cheese Naan Thali<br>(Served with gravy, salad, achaar, papad and raita) - <strong>Rs.170</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="82" data-name="Cheese Naan Thali" data-summary="summary 82" data-price="170" data-quantity="1" data-image="naanthali.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="vegthali.jpg" width="150px" height="150px">
      <br>
      Special Veg. Thali<br>(Dal, paneer,seasonal vegetable,jeera rice,3 tawa roti, papad,achaar and kheer) - <strong>Rs.200</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="83" data-name="Special Veg. Thali" data-summary="summary 83" data-price="200" data-quantity="1" data-image="vegthali.jpg">Add to Cart</button>
      
    </div>

     <div class="col-md-3 text-center">
      <img src="ecothali.jpg" width="150px" height="150px">
      <br>
     Economy Thali<br>(Dal, paneer, jeera rice, 3 tawa roti and raita) - <strong>Rs.170</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="84" data-name="Economy Thali" data-summary="summary 84" data-price="170" data-quantity="1" data-image="ecothali.jpg">Add to Cart</button>
      
    </div>

 </div>








<hr>
<div id="curd" class="container" style="background-color: rgba(0, 5, 150, 0.91); color:white;opacity: 1;margin-top: 20px;font-size: 40px;margin-left:40px;width: 118px;"><a name="anchor" href="" style="color:white;">Curd</a></div>
      <div class="row">
    <div class="col-md-3 text-center">
      <img src="MintRaita.jpg" width="150px" height="150px"> 
      <br>
      Mint Raita - <strong>Rs.90</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="85" data-name="Mint Raita" data-summary="summary 85" data-price="90" data-quantity="1" data-image="MintRaita.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="mixraita.jpg" width="150px" height="150px">
      <br>
      Mixed Vegetable Raita - <strong>Rs.120</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="86" data-name="Mixed Vegetable Raita" data-summary="summary 86" data-price="120" data-quantity="1" data-image="mixraita.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="jeera.jpg" width="150px" height="150px">
      <br>
     Jeera Raita - <strong>Rs.120</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="87" data-name="Jeera Raita" data-summary="summary 87" data-price="120" data-quantity="1" data-image="jeera.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src=" PineapplaRaita.jpg" width="150px" height="150px">
      <br>
      Pineapple Raita - <strong>Rs.120</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="88" data-name="Pineapple Raita" data-summary="summary 88" data-price="120" data-quantity="1" data-image=" PineapplaRaita.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="boondi.jpg" width="150px" height="150px">
      <br>
      Boondi Raita with Bhalla - <strong>Rs.130</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="89" data-name="Boondi Raita with Bhallat" data-summary="summary 89" data-price="130" data-quantity="1" data-image="boondi.jpg">Add to Cart</button>
      
    </div>

    <div class="col-md-3 text-center">
      <img src="plaincurd.jpg" width="150px" height="150px">
      <br>
      Plain Curd - <strong>Rs.85</strong>
      <br>
      <button class="btn btn-danger my-cart-btn" data-id="90" data-name="Plain Curd" data-summary="summary 90" data-price="85" data-quantity="1" data-image="plaincurd.jpg">Add to Cart</button>
      
    </div>
 </div>


<footer class="container">
    <div class="row">
       <div class="col-md-3" style="float:right;margin-bottom:50px;">
        <h4 style="font-size:24px;">About</h4>
         <p style="font-size:19px;"><a href="#">Payment[Cash-On-Delivery]</a></p>
        <p style="font-size:19px;"><a href="#">Return</a></p>
        
      </div>
    </div>
  </footer>
       

                       






  <script src="js/jquery-2.2.3.min.js"></script>
  <script type='text/javascript' src="js/bootstrap.min.js"></script>
  <script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
    classCartIcon: 'my-cart-icon',
    classCartBadge: 'my-cart-badge',
    affixCartIcon: true,
    checkoutCart: function(products) {
      $.each(products, function(){
        console.log(this);
      });
    },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      afterAddOnCart: function(products, totalPrice, totalQuantity) {
        console.log("afterAddOnCart", products, totalPrice, totalQuantity);
      },
      clickOnCartIcon: function($cartIcon, products, totalPrice, totalQuantity) {
        console.log("cart icon clicked", $cartIcon, products, totalPrice, totalQuantity);
      },
      checkoutCart: function(products, totalPrice, totalQuantity) {
        var checkoutString = "Total Price: " + totalPrice + "\nTotal Quantity: " + totalQuantity;
        checkoutString += "\n\n id \t name \t summary \t price \t quantity \t image path";
        $.each(products, function(){
          checkoutString += ("\n " + this.id + " \t " + this.name + " \t " + this.summary + " \t " + this.price + " \t " + this.quantity + " \t " + this.image);
        });
        alert(checkoutString)
        console.log("checking out", products, totalPrice, totalQuantity);
      },
      getDiscountPrice: function(products, totalPrice, totalQuantity) {
        console.log("calculating discount", products, totalPrice, totalQuantity);
        return totalPrice * 0.7;
      }
    });

  });
  </script>

</body>

</html>
