<!DOCTYPE html>
<html>
<head>
<title> Title </title>
     <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="C:\Users\Br4r\Desktop\prjct\js\custom.js">
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
.gallery
{
  height: 500px;
  width: 100%;
 position: absolute;
}
.first
{
  height: 125px;
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
    background-image: linear-gradient( blue,pink,#f06d06,yellow);
    position: absolute;
  }
  
  .bttn
  {
     background-color:yellow;
     height:50px;
     width:250px;
     margin-left: 250px;
  }
  #myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

 #myImg1 {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg1:hover {opacity: 0.7;}
 #myImg2 {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg2:hover {opacity: 0.7;}
 #myImg3 {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg3:hover {opacity: 0.7;}
 #myImg4 {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg4:hover {opacity: 0.7;}
 #myImg5{
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg5:hover {opacity: 0.7;}
 #myImg6 {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg6:hover {opacity: 0.7;}
 #myImg7 {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg7:hover {opacity: 0.7;}

 #myImg8 {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg8:hover {opacity: 0.7;}

 #myImg9 {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg9:hover {opacity: 0.7;}

 #myImg10 {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg10:hover {opacity: 0.7;}

 #myImg11 {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg11:hover {opacity: 0.7;}




/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
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
   <div class="gallery">
        <h1 style="font-size:47px;font-family:algerian;margin-left:522px;">OUR GALLERY</h1><br>
         <div class="col-md-12">
             <div class="col-md-3" >
                <img id="myImg" src="22.jpg" style="height:264px;width:286px;border:10px solid #9E9E9E;margin-left:29px;">
                  <!-- The Modal -->
                       <div id="myModal23" class="modal">
                           <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                              <div id="caption"></div>
                      </div>

             </div>
               <div class="col-md-3" >
                <img id="myImg1" src="30.jpg" style="height:264px;width:286px;border:10px solid #9E9E9E;margin-left:29px;">
                     <!-- The Modal -->
                       <div id="myModal23" class="modal">
                           <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                              <div id="caption"></div>
                      </div>
             </div>
              <div class="col-md-3" >
                <img id="myImg2" src="31.jpg" style="height:264px;width:286px;border:10px solid #9E9E9E;margin-left:29px;">
                   <!-- The Modal -->
                       <div id="myModal23" class="modal">
                           <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                              <div id="caption"></div>
                      </div>
             </div>
                <div class="col-md-3" >
                <img id="myImg3" src="32.jpg" style="height:264px;width:286px;border:10px solid #9E9E9E;margin-left:29px;">
                  <!-- The Modal -->
                       <div id="myModal23" class="modal">
                           <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                              <div id="caption"></div>
                      </div>
             </div>
         </div>
               <div class="col-md-12" style="margin-top:23px;">
             <div class="col-md-3" >
                <img id="myImg4" src="1.jpg" style="height:264px;width:286px;border:10px solid #9E9E9E;margin-left:29px;">
                   <!-- The Modal -->
                       <div id="myModal23" class="modal">
                           <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                              <div id="caption"></div>
                      </div>
             </div>
               <div class="col-md-3" >
                <img id="myImg5" src="20.jpg" style="height:264px;width:286px;border:10px solid #9E9E9E;margin-left:29px;">
                   <!-- The Modal -->
                       <div id="myModal23" class="modal">
                           <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                              <div id="caption"></div>
                      </div>
             </div>
              <div class="col-md-3" >
                <img id="myImg6" src="4.jpg" style="height:264px;width:286px;border:10px solid #9E9E9E;margin-left:29px;">
                   <!-- The Modal -->
                       <div id="myModal23" class="modal">
                           <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                              <div id="caption"></div>
                      </div>
             </div>
                <div class="col-md-3" >
                <img id="myImg7" src="8.jpg" style="height:264px;width:286px;border:10px solid #9E9E9E;margin-left:29px;">
                   <!-- The Modal -->
                  
                       <div id="myModal23" class="modal">
                           <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                              <div id="caption"></div>
                      </div>
             </div>
         </div>
             <div class="col-md-12" style="margin-top:23px;">
             <div class="col-md-3" >
                <img id="myImg8" src="11.jpg" style="height:264px;width:286px;border:10px solid #9E9E9E;margin-left:29px;">
                      <div id="myModal23" class="modal">
                           <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                              <div id="caption"></div>
                      </div>
             </div>
               <div class="col-md-3" >
                <img id="myImg9" src="9.jpg" style="height:264px;width:286px;border:10px solid #9E9E9E;margin-left:29px;">
                    <div id="myModal23" class="modal">
                           <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                              <div id="caption"></div>
                      </div>
             </div>
              <div class="col-md-3" >
                <img id="myImg10" src="5.jpg" style="height:264px;width:286px;border:10px solid #9E9E9E;margin-left:29px;">
                    <div id="myModal23" class="modal">
                           <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                              <div id="caption"></div>
                      </div>
             </div>
                <div class="col-md-3" >
                <img id="myImg11" src="10.jpg" style="height:264px;width:286px;border:10px solid #9E9E9E;margin-left:29px;">
                    <div id="myModal23" class="modal">
                           <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                              <div id="caption"></div>
                      </div>
             </div>
         </div>
              

  </div>
     <script>
// Get the modal
var modal = document.getElementById('myModal23');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}



// Get the modal
var modal = document.getElementById('myModal23');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg1');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}


// Get the modal
var modal = document.getElementById('myModal23');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg2');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}


// Get the modal
var modal = document.getElementById('myModal23');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg3');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}


// Get the modal
var modal = document.getElementById('myModal23');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg4');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}


// Get the modal
var modal = document.getElementById('myModal23');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg5');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}

// Get the modal
var modal = document.getElementById('myModal23');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg6');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}



// Get the modal
var modal = document.getElementById('myModal23');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg7');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}


// Get the modal
var modal = document.getElementById('myModal23');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg8');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}


// Get the modal
var modal = document.getElementById('myModal23');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg9');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}

// Get the modal
var modal = document.getElementById('myModal23');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg10');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}


// Get the modal
var modal = document.getElementById('myModal23');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg11');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}


</script>
</body>
</html>