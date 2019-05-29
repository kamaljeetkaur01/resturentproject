<?php

 include('class.phpmailer.php'); 
include("include\settings.php");
$msg="";
 /* code for event page is start here*/
   if(isset($_POST['btnevent']))
    { 
     if(($_POST["txt1"]!=null)&& ($_POST["txt2"]!=null)&& ($_POST["txt3"]!=null)&& ($_POST["txt4"]!=null)&& ($_POST["txt5"]!=null)&& ($_POST["txt6"]!=null)&& ($_POST["txt7"]!=null))
      {  
          $sql=$con->prepare("insert into event(Event,Name,Phone_number,People,Email,Dated,Budget)values(?,?,?,?,?,?,?)");
          $sql->bind_param("sssissi",$_POST["txt1"],$_POST["txt2"],$_POST["txt3"],$_POST["txt4"],$_POST["txt5"],$_POST["txt6"],$_POST["txt7"]);
          $sql->execute();
          $sql->close();
          $msg="Your Event is booked";
       }
  else                                                     
   {
     // echo"Fields can't be empty";
   }
}
  /*end here*/
?>
 <!DOCTYPE html>
<html>
<head>
<title> Title </title>
     <script src="val_function.js" type="text/javascript"></script>
     <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="C:\Users\Br4r\Desktop\prjct\js\custom.js"><meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
        function validate()
      {
        var a= document.getElementById('1').value;
        var b= document.getElementById('2').value;
        var d= document.getElementById('3').value;
        var c= document.getElementById('4').value;
        var f=true;
        var m="";
        
        if(a==null || a=="")
        {
          m+="Please enter the correct value in the name field\n";
          f=false;
        }
        // if(b.length<8 || b.length>18)
        // {
        //   m+="Please enter the password between 8 to 18 characters\n";
        //   f=false;
        // }
        if(c.length<10 || c.length>10)
        {
          m+="Please enter the correct 10 digit phone number\n";
          f=false;
        }
        if((d.indexOf("..")!=-1)||(d.indexOf("__")!=-1)||(d.indexOf("@")!=d.lastIndexOf("@")) ||(d.indexOf("@")==-1))
        {
          m+="Enter correct email like in format abc@gmail.com\n";
          f=false;
        }
        alert(m);
        return f;
      }
</script>
<style type="text/css">
.first
{
  height: 125px;
  width: 100%;
 background-image:linear-gradient(rgba(30, 233, 233, 0.98),rgba(244, 115, 54, 0.37),rgba(75, 0, 255, 0.65));
}
.top
{
	height: 650px;
	width: 100%;
  background-image: url("white.jpg");
  
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
     <!--  <div style="height:117px;width:395px;margin-left: 965px;">
        
           <i class="fa fa-phone" aria-hidden="true" style="font-size:22px;margin-top:67px;margin-left:20px;"></i>
           <p style="margin-left: 44px;margin-top:-26px;">+91 8591139245<br>+91 8591139246</p>
           <i class="fa fa-envelope" aria-hidden="true" style="font-size:22px;margin-left:174px;"></i>
           <p style="margin-left: 199px;margin-top:-51px;">diamondplaza10@gmail.com</p>
           
      </div> -->
  
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
    <div class="col-md-12" >
		<div class="col-md-4" style="margin-top: 113px;">
			<div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:322px;">
    <div class="carousel-inner" role="listbox">
      <div class="item active">
       <img src="male.png" style="height:100px;width:100px;border-radius:40px;margin-left:138px;">
           <h4 style="margin-left:98px;">Wonderful Experience !</h4><br>
           <p style="margin-left:65px;text-align:center;">we are very happy with your service and to makes us shortlist the venue easily.<br><br>
           <span style="font-weight:bold;"> Aman Sandhu </span></p>
       </div>
       <div class="item">
           <img src="male.png" style="height:100px;width:100px;border-radius:40px;margin-left:138px;"><br>
        <h4 style="margin-left:108px;">Great Experience !</h4>
        <p style="margin-left:57px;">Used your services to finalize our birthday party venue. Found it extremely helpful especially the brief description of every restaurant. Found Greenmint very good in all respects.<br><br>
        <span style="font-weight:bold;margin-left:98px;">Ankush</span></p>
  
      </div>
       <div class="item">
         <img src="male.png" style="height:100px;width:100px;border-radius:40px;margin-left:138px;">
    <h4 style="margin-left:76px;">Very Happy With Services !</h4><br>
    <p style="margin-left:50px;">Found your service extremely useful. Thanks for helping me find Bottles and Barrels for my bachelors' party. Venue and food both were very good.<br><br>
    <span style="font-weight:bold;margin-left:99px;">Deepika</span></p>
   </div>
       <div class="item">
         <img src="male.png" style="height:100px;width:100px;border-radius:40px;margin-left:138px;">
      <h4 style="margin-left:95px;">Wonderful Experience !</h4><br>
      <p style="margin-left:57px;">Very helpful service, saved me effort and time. Try suggesting more options in future.Wish you best of luck! Keep it up! <br><br>
      <span style="font-weight:bold;margin-left:99px;">Ankita</span></p>
  
      </div>
       <div class="item">
         <img src="male.png" style="height:100px;width:100px;border-radius:40px;margin-left:138px;">
      <h4 style="margin-left:108px;">Great Experience !</h4>
 <p style="margin-left:65px;">Was satisfied with the service..Loved it..Place was nice food was fine .. Management was also good.<br><br>
 <span style="font-weight:bold;margin-left:95px;">Harish</span></p>
   </div>
       <div class="item">
         <img src="male.png" style="height:100px;width:100px;border-radius:40px;margin-left:138px;">
      <h4 style="margin-left:107px;">Great Experience !</h4> <br>             
       <p style="margin-left:150px;">Satisfied.<br><br>
       <span style="font-weight:bold;margin-left:8px;">Vicky</span></p>
       </div>
     </div>
     </div>
       </div>	
			
		<div class="col-md-8" style="margin-top: 70px;">
			    <br><br>
          <form method="POST" action=""  onsubmit="return validate()">
          <select class="form-control input-sm m-b" id="1" name="txt1" style="width:690px;margin-left:159px;">
                <option>Select your event*</option>
            	<option>Birthday Party</option>
                 <option>Bachelor Party</option>
                 <option>Reception</option>
                 <option>Anniversary</option>
                 <option>Ring Ceremony</option>
                 <option>Farewell Party</option>
                 <option>New Year Party</option>
            </select><br><br>
		<div class="col-md-4" style="margin-left:145px;">
			<input type="textbox" required class="form-control input-sm m-b " name="txt2" placeholder="Name" id="1"><br><br>
        <input type="textbox" class="form-control input-sm m-b " name="txt3" placeholder="Phone Number" id="4"><br><br>
            <input type="textbox" class="form-control input-sm m-b " name="txt4" placeholder="No. of Guest" id="2"><br><br>  
              	
		</div>
				<div class="col-md-4" >
           <input type="textbox" class="form-control input-sm m-b " name="txt5" placeholder="Email Address" id="3"><br><br>
					<input type="date" class="form-control input-sm m-b " name="txt6" placeholder="Select Occasion Date" id="3"><br><br>
            	 
            	  <select class="form-control input-sm m-b " name="txt7" id="4">
                    <option>Per Person Budget</option>
            	    <option>400-600</option>
            	    <option>600-800</option>
            	    <option>800-1000</option>
            	    <option>1000-1200</option>
            	    <option>1200-1400</option>
            	    <option>1400-1600</option>
                 </select> <br><br>
                
       </div>
              
               <input type="Submit"  name="btnevent" class="form-control input-sm m-b" value="Book Your Event" style="width:127px;margin-top:210px;margin-left:370px;background:rgba(158, 158, 158, 0.52);font-weight:bold;">
            </form>   
    	</div>
       <?php
       if(isset($_POST['btnevent']))
{
  // $Event=$_POST['txt1']
  //  $Name=$_POST['txt2'];
  //  $Phone_number=$_POST['txt3'];
  // $People=$_POST['txt4'];
  //  $Email=$_POST['txt5'];
  //  $Dated=$_POST['txt6'];
  //  $Budget=$_POST['txt7'];

}
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 587; // or 587//465
$mail->IsHTML(true);
$mail->Username = "rkaur9705@gmail.com";
$mail->Password = "babbu1babbu";
$mail->SetFrom("rkaur9705@gmail.com");
$mail->Subject = "Your Gmail SMTP Mail subject";
$mail->Body = "your email bosy text";
$mail->AddAddress("manpreetbrar068@gmail.com");
 if(!$mail->Send()){
  echo "Mailer Error: " . $mail->ErrorInfo;
} 
else
{
  echo "Message has been sent";
}

?>

		</div>
	</div>
  
</body>
</html>