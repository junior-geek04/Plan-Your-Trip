<?php
include_once('config.php');
if(isset($_POST['submit1']))
{
$names=$_POST['name'];
	$emails=$_POST['email'];
	$subjects=$_POST['subject'];
	$messages=$_POST['message'];

 	$query=mysqli_query($con,"insert into contact(fullname,Email,Subject,Message) value('$names','$emails','$subjects','$messages')"); 
	
	
	 /*EMAIL CODE*/ 
	      $header  = 'MIME-Version: 1.0' . "\r\n";
            $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $header .= 'From: '." relations@askmetrip.com  "."\r\n".
                'Reply-To: '." relations@askmetrip.com  "."\r\n" .
                'X-Mailer: PHP/' . phpversion();
		$formcontent="From: $names \n $emails \n Message: $messages";
				$recipient = "connect.amt@gmail.com";
				$sub="New Request- Contact us: ".$subjects;

	$message = '<html><body>';
				
				$message .= '<p>Hi Admin,<br>Just recieved a new contact query request.</p>';
			
		     $message .= '<p>Name: '.$names .'<br/>';
            $message .= 'Email: <a href="mailto:'.$emails.'">'.$emails.'</a><br/>';
           
            $message .= 'Message: '.$messages.'<br/></p>';
            
				$message .= '<p>This mail was sent to you by Contact-Us Bot.<p/>';
				$message .= '<img src="https://www.askmetrip.com/demo/images/50x50Logo.png"></img>';
				$message .= '</body></html>';
				mail($recipient, $sub, $message,$header) or die("Error!"); 
				
				
	$to = $emails;
	$subject = 'ASKMETRIP- Support Team';
	$from = 'relations@askmetrip.com';
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: '.$from."\r\n".
					'Reply-To: '."relations@askmetrip.com"."\r\n" .
					'X-Mailer: PHP/' . phpversion();
				$message = '<html><body>';
				
				$message .= '<p>Dear Customer,</p><p>Thank you for reaching out to us.<br/>One of our representatives will be contacting you regarding the query, within 24 business hours.</p>';
				$message .= '<p>Regards!<br/>ASK ME TRIP<p/>';
				$message .= '<img src="https://www.askmetrip.com/demo/images/50x50Logo.png"></img>';
				$message .= '</body></html>';
				mail($to, $subject, $message, $headers);			
				
	echo "<script>alert('Your information succesfully submitted');</script>";
	echo "<script>window.location.href ='contact.php'</script>";

}


?>



<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="icon" type="image/png" href="images/0.png"/>
  <title>ASKMETRIP | TRIPS WITH LEARNING</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
		
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
<style>
	.card1 {
		margin-top: 3%;
    border: 2px solid black;
    border-radius: 25px;
	padding-left: 2%;
	margin-left: 14% !important  ;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    transition: 0.3s;
    width: 70%;
}
	#shif1{
		margin-left: 15%;
	}
	#shif{
		margin-left: 18%;
	}

	@media screen and (max-width: 1000px)
	{
		#shif1{
			margin-left: 3%;
		}
		#shif{
			margin-left: 7%;
		}
	}

	@media screen and (max-width: 480px)
	{
		#shif1{
			margin-left: 3%;
		}
		#shif{
			margin-left: 1%;
			
		}
		.card1{
			width: 98% !important;
			margin-left: -0% !important;
		}
		#mail{
			font-size: 15px !important;
		}
		

	}
	
@media (min-width: 481px) and (max-width: 768px)
{	.container-contact100{
			margin-top: -12% !important;
		}
		#shif,#mail{
			font-size: 20px !important;
		}
		.card1{
			margin-left: -0% !important;
		
			width: 100% !important;
		}
	}
</style>
  </head>
  <body >
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
		 <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(images/back/b9.jpg);z-index: 1;">
			<div class="container h-100">
				<div class="row h-100 align-items-end">
					<div class="col-12">
						<div class="breadcrumb-content align-items-center justify-content-between pb-5">
							<center><h2 class="room-title" style="font-family: 'Barlow', sans-serif;"><b>CONTACT US</b></h2></center>
						</div>
					</div>
				</div>
			</div>
		</div>
    
   
   	<!-- <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row no-gutters">
					<div class="col-md-12">
						<div class="wrapper">
							<div class="row no-gutters">
								<div class="col-lg-8 col-md-7 d-flex align-items-stretch">
									<div class="contact-wrap w-100 p-md-5 p-4">
										<h3 class="mb-4">GET IN TOUCH</h3>
										<form method="POST" id="contactForm" name="contactForm" class="contactForm">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="name">Full Name</label>
														<input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
													</div>
												</div>
												<div class="col-md-12"> 
													<div class="form-group">
														<label class="label" for="email">Email Address</label>
														<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="subject">Subject</label>
														<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="#">Message</label>
														<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message" required></textarea>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" value="Submit" name="submit"  class="btn btn-primary">
														<div class="submitting"></div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div> 
								    

								Address part
								<div class="col-lg-4 col-md-5 d-flex align-items-stretch" >
									<div class="info-wrap bg-primary w-100 p-md-5 p-4">
					        	<div class="dbox w-100 d-flex align-items-start mt-6">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-map-marker"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Address : C 12 East Krishna Nagar Delhi- 110051 India</span></p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-phone"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Phone :</span> <a href="tel://9460071213">+91 9460071213</a></p>
						          </div>
					          </div>
							  <div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-phone"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Phone :</span> <a href="tel://8210424768">+91 8210424768</a></p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-paper-plane"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Email :</span> <a href="mailto:relations@askmetrip.com">relations@askmetrip.com</a></p>
						          </div>
					          </div>
							  <div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-paper-plane"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Email :</span> <a href="mailto:connect.amt@gmail.com">connect.amt@gmail.com</a></p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-globe"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Website : </span> <a href="index.html">ASKMETRIP.COM</a></p>
						          </div>
					          </div>
				          </div>
								</div>
							</div>
						</div>
					</div>
				</div>
    	</div>
    </section> -->
	<div class="card1" style="font-size: 15px;font-weight:bold;font-family: 'Poppins', sans-serif;" id="shif"> <span class="fa fa-phone" style="color: orange;"></span><b>+91 9608191697</b>  <span class="fa fa-envelope" style="color: orange;" id="shif" ></span>	<a href="mailto:relations@askmetrip.com" style="font-size: 18px;font-family: 'Poppins', sans-serif;"><span><b id="mail">relations@askmetrip.com</b>
						
						</span></a>
						<span class="fa fa-map-marker" id="shif" style="color:orange;"></span>  <span><b>C 12, East Krishna Nagar, Delhi-110051</b></span>	
						</div>
	
	
						<div class="container-contact100" style="z-index: 0;">
		
			<form method="POST" id="contactForm" name="contactForm" class="contact100-form validate-form" style="z-index: 0;border:3px solid black;border-radius:10px;padding-top:5px;font-family: 'Poppins', sans-serif;font-weight:bold;">
				<span class="contact100-form-title" style="font-family: 'Barlow', sans-serif;"><b>
					CONTACT US</b>
				</span>

				
				<div class="wrap-input100 validate-input" data-validate="Type first name">
					<input type="text" class="form-control" style="font-weight: bold;"  name="name" id="name" placeholder="Name"  required>
					<span class="focus-input100">
					</br></br>
					</span>
		
				</div>
				</br></br>
				</br></br>
				

				
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input type="email" class="form-control" name="email" id="email" placeholder="Email" style="font-weight: bold;" required>
					<span class="focus-input100"></span>
				</div>
		</br></br>
		</br></br>
				<div class="wrap-input100">
					<input type="text" class="form-control" style="font-weight: bold;"  name="subject" id="subject" placeholder="Subject" required>
					<span class="focus-input100"></span>
				</div>
				</br></br>
				</br></br>
				
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<textarea name="message"style="font-weight: bold;"  class="form-control" id="message" cols="30" rows="4" placeholder="Message" required></textarea>
					<span class="focus-input100"></span>
				</div>
				</br></br>
				</br></br>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" value="Submit" name="submit1">
						Submit
					</button>
				</div>
			</form></div>

		
	



	<div id="dropDownSelect1"></div>


	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/animsition/js/animsition.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>

	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>

	<script src="vendor/countdowntime/countdowntime.js"></script>

	<script src="js/main.js"></script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

	<?php include 'footer.php';?>

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


    
  </body>
</html>