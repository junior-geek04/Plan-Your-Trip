<?php
include_once('config.php');
if (isset($_POST['submit'])) {
	$email = $_POST['mail'];


	$query=mysqli_query($con,"insert into newsletter(EMAIL) value('$email')");

	$header  = 'MIME-Version: 1.0' . "\r\n";
	$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$header .= 'From: ' . " relations@askmetrip.com " . "\r\n" .
		'Reply-To: ' . " relations@askmetrip.com" . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	$recipient = "connect.amt@gmail.com";
	$subjects = "New Request- Newsletter";
	$message = '<html><body>';

	$message .= '<p>Hi Admin,<br>Just recieved a new newsletter request.</p>';
	$message .= 'Email: <a href="mailto:' . $email . '">' . $email . '</a><br/>';

	$message .= '<p>This mail was sent to you by Contact-Us Bot.<p/>';
	$message .= '<img src="https://www.askmetrip.com/demo/images/50x50Logo.png"></img>';
	$message .= '</body></html>';
	mail($recipient, $subjects, $message, $header) or die("Error!");



	$to = $email;
	$subject = 'ASKMETRIP- Newsletter';
	$from = 'relations@askmetrip.com';
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: ' . $from . "\r\n" .
		'Reply-To: ' . "relations@askmetrip.com" . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
	$message = '<html><body>';

	$message .= '<p>Dear Customer,</p><p>Thank you for reaching out to us.<br/>One of our representatives will be contacting you regarding the query, within 24 business hours.</p>';
	$message .= '<p>Regards!<br/>ASK ME TRIP<p/>';
	$message .= '<img src="https://www.askmetrip.com/demo/images/50x50Logo.png"></img>';
	$message .= '</body></html>';
	mail($to, $subject, $message, $headers);

	echo "<script>alert('Your information succesfully submitted');</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="icon" type="image/png" href="images/0.png" />
	<title>ASKMETRIP | TRIPS WITH LEARNING</title>
	<meta charset="utf-8">
	<meta name="viewport" content="minimum-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
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
	<link rel="stylesheet" href="css/carousel.css">
	<style>
		#lo {
			margin-left: -10% !important;
		}

		#one {
			margin-left: 11% !important;
		}

		#two {
			margin-left: 11% !important;
		}

		#three {
			margin-left: 13% !important;
		}

		#soc {
			margin-left: -45% !important;
		}

		#new {
			margin-left: 8% !important;
		}

		#em {

			margin-left: 16.8% !important;
		}

		@media screen and (max-width: 1000px) {
			#one {
				margin-left: 0 !important;
			}

			#two {
				margin-left: 0 !important;
			}

			#three {
				margin-left: 0 !important;
			}

			#lo {
				margin-left: 0 !important;

			}

			#soc {
				margin-left: -65% !important;
			}

			#new {
				margin-left: 5% !important;
			}

			#em {

				margin-left: 7% !important;
			}
		}


		@media screen and (max-width: 480px) {

			#new {
				font-size: 15px !important;
				margin-left: 3% !important;
			}

			#soc {
				margin-left: -59% !important;
			}

			#em {
				width: 155px !important;
				margin-left: 4% !important;
			}

			#em1 {
				width: 120px !important;
			}

	
		}
		@media (min-width: 481px) and (max-width: 768px)
			{
				#new {
				font-size: 15px !important;
				margin-left: 1.5% !important;
			}

			#soc {
				margin-left: -59% !important;
			}

			#em {
				width: 155px !important;
				margin-left: 6% !important;
			}

			#em1 {
				width: 120px !important;
			}
			}
	</style>
	<!-- <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>

<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>

<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
  rel="stylesheet"
/> -->

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
	<style type="text/css">
		#hi {
			font-size: 20px !important;
			font-style: italic !important;
			color: red !important;

			background-color: #e6f1ef !important;
			width: 100% !important;
			height: 15% !important;
		}
	</style>
</head>

<body>
	<footer class="footer border-top mt-50" style="font-family: 'Poppins', sans-serif !important;font: size 14px !important;">
	<b>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-2 mb-md-0 mb-3" id="lo">
					<img src="images/logo.png">
					<p style="font-family: 'Poppins', sans-serif ;font: size 14px ;"><b>Copyright ©2021</b></p>
				</div>


				<div class="col-md-6 col-lg-2 mb-md-0 mb-3" id="one">
					<h2 class="footer-heading">ASK ME TRIP</h2>
					<ul class="list-unstyled">

						<li><a href="Unbox.html#gift-section" class="py-1 d-block" style="font-family: 'Poppins', sans-serif !important ;font-size: 14px  !important;"><b>Gift &amp; Surprises</b></a></li>

						<li><a href="Partner" class="py-1 d-block" style="font-family: 'Poppins', sans-serif ;font-size: 14px ;"><b>Partner with us</b></a></li>
						<li><a href="work-with-us" class="py-1 d-block" style="font-family: 'Poppins', sans-serif ;font-size: 14px ;"><b>Work with us</b></a></li>
						<li><a href="pay-cancel" style="font-family: 'Poppins', sans-serif ;font-size:13px ;"><b>Payment & Cancellation</b></a></li>


					</ul>
				</div>
				<div class="col-md-6 col-lg-2 mb-md-0 mb-3" id="two">
					<h2 class="footer-heading">UNBOX</h2>
					<ul class="list-unstyled">
						<li><a href="inc" class="py-1 d-block" style="font-family: 'Poppins', sans-serif ;font-size:14px ;"><b>Inclusions &amp; Exclusions</b></a></li>
						<li><a href="blog" class="py-1 d-block" style="font-family: 'Poppins', sans-serif ;font-size:14px ;"><b>Blogs</b></a></li>
						<li><a href="gal" class="py-1 d-block" style="font-family: 'Poppins', sans-serif ;font-size:14px ;"><b>Gallery</b></a></li>
						<li><a href="privacy-policy" style="font-family: 'Poppins', sans-serif ;font-size:14px ;"><b>Privacy &</b> </a><a href="copyright-policy" style="font-family: 'Poppins', sans-serif ;font-size:13px ;"><b>Copyright</b></a></li>

					</ul>
				</div>

				<div class="col-md-6 col-lg-3 mb-md-0 mb-3" id="three">
					<h2 class="footer-heading" >HELP & CONTACT</h2>
					<ul class="list-unstyled">
						<li><a href="FAQs" style="font-family: 'Poppins', sans-serif ;font-size:14px ;"><b>FAQs</b> </a> </li>




						<li><a href="mailto:relations@askmetrip.com" class="py-1 d-block" style="font-family: 'Poppins', sans-serif ;font-size:14px ;"><span class="fa fa-envelope"></span>&nbsp;&nbsp;&nbsp;<b>relations@askmetrip.com</b></a></li>
						<li><a href="tel:9460071213" class="py-1 d-block" style="font-family: 'Poppins', sans-serif ;font-size:14px ;"><span class="fa fa-phone"></span>&nbsp;&nbsp;<b>+91 9608191697 , +91 8210424768</b></a></li>

						<div class="col d-flex justify-content-end" id="soc">
							<ul class="ftco-footer-social p-0">
								<li ><a href="https://www.facebook.com/askmetrip" target="_blank" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
								<li ><a href="https://twitter.com/askmetrip" target="_blank" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
								<li ><a href="https://www.instagram.com/askmetrip_/" target="_blank" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
								<li ><a href="https://www.youtube.com/askmetrip" target="_blank" data-toggle="tooltip" data-placement="top" title="Youtube"><span class="fa fa-youtube"></span></a></li>
							</ul>
						</div>

					</ul>
				</div>


				<!-- <form action="/action_page.php"><p>
<li class="fa fa-envelope" style="color: #ff6633;">&nbsp;&nbsp;<b style="color: #ff6633;">Newsletter:</b></p></br>
<input type="text" placeholder="Email address" name="mail" style="width: 150px;" required>
	 <input type="submit" value="Subscribe" style="width: 70px;background-color:white; ">
		</li>
</form> -->

				</ul>
			</div>
		</div>
		</div>

		<div>
			<form action="#" method="post">

				<p>
					<i class="fa fa-envelope" style="color: #ff6633;font-size:20px;" id="new">&nbsp;&nbsp;<span style="font-family: 'Poppins', sans-serif ;font-size:14px ;"><b>Join our Newsletter and get the latest Updates</b><span></i>

					<input type="text"   placeholder="Email address" name="mail" style="width: 293px;font-weight:bold;border:1px solid black;" id="em" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="submit" value="Subscribe" name="submit" id="em1" style="width: 180px;background-color:white;background-color:aqua;font-weight:bold;border:1px solid black ">
				</p>

		</div>
	</b>
	</br>
	</footer>





</body>

</html>