<?php
include("include\settings.php");
 /* code for contact page is start here*/
     if(isset($_POST['btnSubmit']))
{ 
  if(($_POST["txtName"]!=null)&& ($_POST["txtPhone"]!=null)&& ($_POST["txtEmail"]!=null)&& ($_POST["txtmsg"]!=null))
  {  
          $sql=$con->prepare("insert into contact(Name,Phone_Number,Email,Message)values(?,?,?,?)");
          $sql->bind_param("ssss",$_POST["txtName"],$_POST["txtPhone"],$_POST["txtEmail"],$_POST["txtmsg"]);
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


  include "class.phpmailer.php"; // include the class name      
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
$mail->Subject="Your Gmail SMTP Mail subject";
$mail->Body = "your email bosy text";
$mail->AddAddress("$_POST['txtEmail']","dhillon.sarb44@gmail.com");
 if(!$mail->Send())
 {
  echo "Mailer Error: " . $mail->ErrorInfo;
} 
else
{
  echo "Message has been sent";
}
  ?>
 


<!DOCTYPE html>
<html>
<head>
<title> Title </title>
        <script src="val_function.js" type="text/javascript"></script>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
        if(b.length<8 || b.length>18)
        {
          m+="Please enter the password between 8 to 18 characters\n";
          f=false;
        }
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

.top
{
  height: 125px;
  width: 100%;
  background-image:linear-gradient(rgba(30, 233, 233, 0.98),rgba(244, 115, 54, 0.37),rgba(75, 0, 255, 0.65));
}


.mid
{
	height: 530px;
	width: 100%;
 background:white;
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
   <div class="top">
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
  <div class="mid"><br>
  	 <h1 style="margin-left:100px;color:black;">Contact &nbsp; <span style="color:gray;font-size:20px;"> We'd Love to Hear From You!</span></h1>
  	 <div class="col-md-12">
  	 <div class="col-md-8" style="padding-left:50px;">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13717.954911233268!2d76.7627217310707!3d30.732770606192204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390feda4fff97ec9%3A0x217d5ccaf11d4a95!2sSector+22%2C+Chandigarh!5e0!3m2!1sen!2sin!4v1493190408502" width="700" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
  	 	<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13721.71069733637!2d76.70479019999999!3d30.7063752!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1490102960014" width="700" height="400" frameborder="0" style="border:0"  allowfullscreen ></iframe> -->
  	 </div>
  	 
  	 <div class="col-md-4" style="color:black;">
  	 <h1><b>Diamond Plaza</b></h1>
  	 	<p style="font-size:20px;">Taste Our Passion</p>
  	 	    <p>Sector 22</p>
             <p>Chandigarh Chandigarh-160036</p>
               <p>P: +91 8427000296</p>
                 <p>P: +91 8427000295</p>
     </div>
   <div class="container demo">
     <div class="text-center">
       <div style="height:50px;width:58px;background:rgb(70, 63, 181);margin-left:1098px;margin-top:339px;border-radius:8px;position:absolute;">
        <a href="" data-toggle="modal" data-target="#myModal2">
        <i class="fa fa-envelope-o"   style="font-size:37px;color:white;margin-top:5px;"></i>
       </a>
       </div>
  
    </div>
 <!-- Modal -->
    <form method="POST" action=""  onsubmit="return validate()">
  <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
    <div class="modal-dialog" role="document" style="margin-top:203px;">
      <div class="modal-content">

        <div class="modal-header" style="background:rgb(70, 63, 181);color:white;">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel2" style="text-align:center;">Have Queries?</h4>
        </div>

        <div class="modal-body">
            <p style="text-align:center;margin-left: -28px;color:rgb(70, 63, 181);">Please Send Us Your Queries</p>
          <form method="post">
          <input type="text" name="txtName" placeholder="Name" id="1" style="border-radius:6px;height:34px;width:220px;margin-left:-41px;"><br>
          <input type="text" name="txtPhone" placeholder="Phone Number" id="4" style="border-radius:6px;height:34px;width:220px;margin-left:-41px;margin-top:10px;"><br>
          <input type="text" name="txtEmail" placeholder="Email" id="3" style="border-radius:6px;height:34px;width:220px;margin-left:-41px;margin-top:10px;"><br>
          <textarea placeholder="Message" name="txtmsg" id="1" style="border-radius:6px;height:78px;width:220px;margin-top:10px;margin-left:-41px;"></textarea><br>
          <button type="Submit" name="btnSubmit" style="border-radius:6px;height:34px;width:69px;margin-top:10px;background:rgb(70, 63, 181);color:white;">Submit</button>
          
          </form>
        </div>

      </div><!-- modal-content -->
    </div><!-- modal-dialog -->
  </div><!-- modal -->
  </form>
  
  
</div><!-- container -->
       
    </div>
  </div>
		
</body>
<style>
  .modal.right .modal-dialog {
    position: fixed;
    margin-top:100px;
    width: 320px;
    height: 400px;
    -webkit-transform: translate3d(0%, 0, 0);
        -ms-transform: translate3d(0%, 0, 0);
         -o-transform: translate3d(0%, 0, 0);
            transform: translate3d(0%, 0, 0);
  }

  
  .modal.right .modal-content {
    height: 100%;
    overflow-y: auto;
  }
  
  
  .modal.right .modal-body {
    padding: 15px 80px;
  }

/*Left*/
  
        
/*Right*/
  .modal.right.fade .modal-dialog {
    right: -320px;
    -webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
       -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
         -o-transition: opacity 0.3s linear, right 0.3s ease-out;
            transition: opacity 0.3s linear, right 0.3s ease-out;
  }
  
  .modal.right.fade.in .modal-dialog {
    right: 0;
  }

/* ----- MODAL STYLE ----- */
  .modal-content {
    border-radius: 0;
    border: none;
  }

  .modal-header {
    border-bottom-color: #EEEEEE;
    background-color: #FAFAFA;
  }

/* ----- v CAN BE DELETED v ----- */
body {
  background-color: #78909C;
}


.btn-demo {
  margin: 15px;
  padding: 10px 15px;
  border-radius: 0;
  font-size: 16px;
  background-color: #FFFFFF;
}

.btn-demo:focus {
  outline: 0;
}

.demo-footer {
  position: fixed;
  bottom: 0;
  width: 100%;
  padding: 15px;
  background-color: #212121;
  text-align: center;
}

.demo-footer > a {
  text-decoration: none;
  font-weight: bold;
  font-size: 16px;
  color: #fff;
}

</style>
</html>