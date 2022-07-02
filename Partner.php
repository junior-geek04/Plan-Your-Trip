<?php
include_once('config.php');
if(isset($_POST['submit1']))
{
$yours=$_POST['your'];
$names=$_POST['name'];
$emails=$_POST['email'];
$phones=$_POST['phone'];
$messages=$_POST['message'];

$query=mysqli_query($con,"insert into partner(Your,Name,Email,Phone,Message) value('$yours','$names','$emails','$phones','$messages')");

    /*EMAIL CODE*/  
//     $formcontent="From: $yours \n Name: $names \n Email: $emails \n Phone No.: $phones \n Message: $messages";
//             $recipient = "connect.amt@gmail.com";
//             
//             mail($recipient, $subjects, $formcontent) or die("Error!"); 
// echo "<script>window.location.href ='partner.php'</script>";
$subjects="New Request- Partner with us";
$header  = 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$header .= 'From: '." relations@askmetrip.com "."\r\n".
	'Reply-To: '." relations@askmetrip.com "."\r\n" .
	'X-Mailer: PHP/' . phpversion();
$formcontent="From: $names \n $emails \n Message: $messages";
	$recipient = "connect.amt@gmail.com";

$message = '<html><body>';

	$message .= '<p>Hi Admin,<br>Just recieved a new partner with us request.</p>';

 $message .= '<p>Name: '.$names .'<br/>';
$message .= 'Email: <a href="mailto:'.$emails.'">'.$emails.'</a><br/>';

$message .= 'Message: '.$messages.'<br/></p>';

	$message .= '<p>This mail was sent to you by partner-with-Us Bot.<p/>';
		$message .= '<img src="https://www.askmetrip.com/demo/images/50x50Logo.png"></img>';
	$message .= '</body></html>';
	mail($recipient, $subjects, $message,$header) or die("Error!"); 
	
	
$to = $emails;
$subject = 'ASKMETRIP- Partnership Team- Thanking You';
$from = 'relations@askmetrip.com';
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: '.$from."\r\n".
		'Reply-To: '.'relations@askmetrip.com'."\r\n" .
		'X-Mailer: PHP/' . phpversion();
	$message = '<html><body>';
	
	$message .= '<p>Dear Customer,</p><p>Thank you for reaching out to us.<br/>One of our representatives will be contacting you regarding the query, within 24 business hours.</p>';
	$message .= '<p>Regards!<br/>ASK ME TRIP<p/>';
	$message .= '<img src="https://www.askmetrip.com/demo/images/50x50Logo.png"></img>';
	$message .= '</body></html>';
	mail($to, $subject, $message, $headers);			
	
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='Partner.php'</script>";

}
?>
<!DOCTYPE html>
<html lang="en">
	 <head>
	 <link rel="icon" type="image/png" href="images/0.png"/>
	 <title>ASKMETRIP | TRIPS WITH LEARNING</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
			<link rel="stylesheet" href="css/animate.css">

<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/bootstrap-datepicker.css">
<link rel="stylesheet" href="css/jquery.timepicker.css">

<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/main1.css">
<link rel="stylesheet" href="css/partner.css">

<link rel="stylesheet" href="style.css">
<style>
	@media screen and (max-width: 1000px) {
    .box-shadow {
        width: 66%;
        margin-left: 19%;
    }

    #colm1 {
        margin-left: 11%;
    }

    #colm2 {
        margin-top: -3.5%;
        margin-left: 4%;
    }

    .main {
        margin-left: 15%;
        width: 90%;
        height: 1580px;

    }

    #co {
        margin-left: -10%;
    }

    #shif1 {
        margin-left: 25%;
    }

    #shif {
        margin-left: 35%;
    }

    #span1 {
        margin-left: -16%;
    }

    #shif2 {
        margin-left: 9%;
    }

    #shif3 {
        margin-left: 15%;
    }

    .main {
        height: 780px;
    }
}

@media screen and (max-width: 480px) {
    .box-shadow {
        width: 66%;
        margin-left: 19%;
    }

    #span1 {
        margin-left: -15% !important;
    }

    #colm1 {
        margin-left: 9%;
    }

    #colm2 {
        margin-top: -3.5%;
        margin-left: -1%;
    }

    .main {
        margin-left: 15%;
        width: 90%;
        height: 540px !important;


    }

    .name {
        font-size: 12px !important;
    }

    #co {
        margin-left: -10%;
    }

    #shif1 {
        margin-left: 25%;
        font-size: 12px !important;
    }

    #shif {
        margin-left: 35%;
        font-size: 12px !important;
    }

    #span1 {
        margin-left: -16%;
    }

    #shif2 {
        margin-left: 9%;
        font-size: 12px !important;
    }

    #shif3 {
        margin-left: 17.5%;
        font-size: 12px !important;
    }

    .main {
        height: 750px;
    }

}

@media (min-width: 481px) and (max-width: 768px) {
    .box-shadow {
        width: 66%;
        margin-left: 19%;
    }

    #span1 {
        margin-left: -15% !important;
    }

    #colm1 {
        margin-left: 9%;
    }

    #colm2 {
        margin-top: -3.5%;
        margin-left: -1%;
    }

    .main {
        margin-left: 17%;
        width: 90%;
        height: 640px !important;


    }

    .name {
        font-size: 20px !important;
    }

    #co {
        margin-left: -10%;
    }

    #shif1 {
        margin-left: 28%;
        font-size: 20px !important;
    }

    #shif {
        margin-left: 37%;
        font-size: 20px !important;
    }

    #span1 {
        margin-left: -6% !important;
    }

    #shif2 {
        margin-left: 14%;
        font-size: 22px !important;
    }

    #shif3 {
        margin-left: 21%;
        font-size: 20px !important;
    }

    .main {
        height: 750px;
    }
}
</style>
	</head>
	
	<body>
		<form action="" method="post">
		<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
		<script>
			var mybutton = document.getElementById("myBtn");
			window.onscroll = function() {scrollFunction()};
			function scrollFunction() {
				if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
					mybutton.style.display = "block";
				} else {
					mybutton.style.display = "none";
				}
			}
			function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
			}
		</script>
	
	<?php include 'header.php';?>
		<div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(images/back/b7.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcrumb-content align-items-center justify-content-between pb-5">
                        <center><h2 class="room-title" style="font-family: 'Barlow', sans-serif;"><b>PARTNER WITH US</b></h2></center>
                    </div>
                </div>
            </div>
        </div>
    </div>


	<div class="row">
		<div class="column" id="colm1" >
			<div class="container" style="text-align: justify;font-family: 'Poppins', sans-serif;">


				
				<p align="center" style="font-size: 18px;">
				<div class="card1" style="width: 90%;padding: 12px 16px;margin-top: 2%;font-size: 18px;">
					<!--formaction will have the file references which have the positions which are open at that time"-->
<b>
					<p style="font-size: 18px;"><b>Our partnership programme is an innovative operation for the comfort of our regular customers. It is a gift of thanks by our group to our users for using and appreciating our services. You can partner with us if you run or associated with</b></p>
					<p style="font-size: 18px;"><b>1. School/college</b></p>
					<p style="font-size: 18px;"><b>2. Corporation</b></p>
					<p style="font-size: 18px;"><b>3. Institution</b></p>
					<p style="font-size: 18px;"><b>4. Or you are a freelancer (artist / writer / motivator)</b></p>
					<p style="font-size: 18px;"><b>Your partnership with ASKMETRIP will provide you additional advantages and facilities. All the trips for you and your institution will be organised and assured to go smoothly by our team. Your group will be provided with additional discount services on every trip planned. Our logistics team will also be with you at your service and all your shipments and mail will be handled by us too. Our partnership program is our way to thank our regular customers and provide them with exceptional facilities and comfort that too at minimal prizes.</b></p>
					<p style="font-size: 18px;"><b>To join us and partner with us,</b></p>

</b>
				</div>

			</div>
		</div>

		<div class="column" id="colm2" >

			<div class="container" id="co">
				<div class="row justify-content-center">
					<div class="warpper fl">
						<div class="main">
							<div class="head">
								<p style="font-family: 'Barlow', sans-serif;">
									Opportunities</p>
							</div>
							<div class="form fl">
								<!-- add mail to wala part -->
								<form action="#" method="post">
								<div >
											<label class="name" ><b>YOU ARE</b></label>

											<!-- <input type="text"  id="otherField" style="width: 90%;border-radius:10px;margin-left:4%;padding:10px;"
												placeholder="Enter Your top 3 Preffered Job Location" name="preffered"> -->
												<select name="your"  style="width: 90%;border-radius:10px;margin-left:4%;padding:10px;">
															<option value="Select">Select</option>
															<option value="School/college">School/college</option>
															<option value="Corporation">Corporation</option>
															<option value="Institution">Institution</option>
															<option value="Or you are a freelancer (artist / writer / motivator)">Or you are a freelancer (artist / writer / motivator)</option>
														</select>

										</div>
										<div >
											<label  class="name" ><b>FULL NAME
											</b></label>

											<input type="text"   style="width: 90%;border-radius:10px;margin-left:4%;padding:10px;"
												 id="name" placeholder="Name" name="name">

										</div>
										<div >
											<label  class="name" ><b>EMAIL
											</b></label>

											<input type="email"  style="width: 90%;border-radius:10px;margin-left:4%;padding:10px;"  name="email" id="email" placeholder="Email"  required>

										</div>
										<div >
											<label  class="name" ><b>PHONE NUMBER
											</b></label>

											<input type="text"  style="width: 90%;border-radius:10px;margin-left:4%;padding:10px;"  name="phone" id="subject" placeholder="Enter Your Phone Number"  required>

										</div>

										<div >
											<label  class="name" ><b>MESSAGE
											</b></label>

											<input type="text"  style="width: 90%;border-radius:10px;margin-left:4%;padding:10px;"  name="message" id="subject" placeholder="Enter Message"  required>

										</div>
							











									

										<p>
											<input type="submit" name="submit1" value="SUBMIT" class="sub">
										</p>

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>























<!-- 
		<div class="container mt-6" style="text-align: justify;">
			<div class="row">
				<div class="col-sm-12">
					<p>Our partnership programme is an innovative operation for the comfort of our regular customers. It is a gift of thanks by our group to our users for using and appreciating our services. You can partner with us if you run or associated with</p>
					<p>1. School/college</p>
					<p>2. Corporation</p>
					<p>3. Institution</p>
					<p>4. Or you are a freelancer (artist / writer / motivator)</p>
					<p>Your partnership with ASKMETRIP will provide you additional advantages and facilities. All the trips for you and your institution will be organised and assured to go smoothly by our team. Your group will be provided with additional discount services on every trip planned. Our logistics team will also be with you at your service and all your shipments and mail will be handled by us too. Our partnership program is our way to thank our regular customers and provide them with exceptional facilities and comfort that too at minimal prizes.</p>
					<p>To join us and partner with us,</p>
					<div class="col-lg-12 col-md-12 d-flex align-items-stretch">
						<div class="row>">
							<div class="col-lg-1"></div>
							<div class="contact-wrap col-lg-8 w-100 p-md-5 p-4">
								<form method="POST" id="contactForm" name="contactForm" class="contactForm">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											<label class="label" for="name">YOU ARE</label>
												<div class="form-field">
													<div class="select-wrap">
														<select name="your" id="" class="form-control">
															<option value="Select">Select</option>
															<option value="School/college">School/college</option>
															<option value="Corporation">Corporation</option>
															<option value="Institution">Institution</option>
															<option value="Or you are a freelancer (artist / writer / motivator)">Or you are a freelancer (artist / writer / motivator)</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="label" for="name">FULL NAME</label>
												<input type="text" class="form-control" name="name" id="name" placeholder="Name" name="name" required>
											</div>
										</div>
										<div class="col-md-12"> 
											<div class="form-group">
												<label class="label" for="email">EMAIL ADDRESS</label>
												<input type="email" class="form-control" name="email" id="email" placeholder="Email"  required>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="label" for="subject">PHONE NUMBER</label>
												<input type="text" class="form-control" name="phone" id="subject" placeholder="Subject"  required>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="label" for="#">MESSAGE</label>
												<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message" ></textarea>
											
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="submit" value="Submit" name="submit1" class="btn btn-primary">
												<div class="submitting"></div>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="col-lg-3"></div>		
						</div>
					</div>
				</div>
			</div>
		</div>

		 -->
  <div class="foot" style="margin-top: -4%;">

		<?php include 'footer.php';?>
  </div>
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>
		
		<script src="js/jquery.animateNumber.min.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/jquery.timepicker.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/scrollax.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="js/google-map.js"></script>
		<script src="js/main.js"></script>
    </form>
    
	</body>
</html>