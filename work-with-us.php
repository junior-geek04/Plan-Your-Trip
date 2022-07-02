<?php
include_once('config.php');
if(isset($_POST['submit1']))
{

$interest=$_POST['interest'];
$apply=$_POST['apply'];
$name=$_POST['name'];
$location=$_POST['location'];
$reallocate=$_POST['reallocate'];
$experience=$_POST['experience'];
$preffered=$_POST['preffered'];
$cname=$_POST['cname'];
$desig=$_POST['desig'];
$ctc=$_POST['ctc'];
$ectc=$_POST['ectc'];
$accomplishment=$_POST['accomplishment'];
$emails=$_POST['email'];

$query=mysqli_query($con,"insert into opportunities(Role,ApplyingFor,Name,Location,Reallocate,Experience,TopLocations,CompanyName,Designation,CurrentCTC,ExpectedCTC,Accomplishment) value('$interest','$apply','$name','$location','$reallocate','$experience','$preffered','$cname','$desig','$ctc','$ectc','$accomplishment')");

 /*EMAIL CODE*/  
    // $formcontent="From: $names \n Trip: $trip \n Email: $emails \n Contact: $contacts \n Size: $size \n Place: $placevisit \n Budget: $budgets ";
    //         $recipient = "connect.amt@gmail.com";
    //         $subjects="Trips-form";
    //         mail($recipient, $subjects, $formcontent) or die("Error!");  

    //         echo "<script>window.location.href ='Trips.php'</script>";
   $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $header .= 'From: '." relations@askmetrip.com "."\r\n".
        'Reply-To: '." relations@askmetrip.com "."\r\n" .
        'X-Mailer: PHP/' . phpversion();
$formcontent="From: $names \n $emails \n Message: $messages";
        $recipient = "connect.amt@gmail.com";
$subjects="Hiring Alert- New CV";
$message = '<html><body>';
       
        $message .= '<p>Hi Admin,<br>Just recieved a new work with us query request.</p>';
    
     $message .= '<p>Name: '.$name .'<br/>';
	 $message .= '<p>Email: '.$emails .'<br/>';
    $message .= 'Role:'.$interest.'<br/>';
    $message .= 'Applying For: '.$apply .'<br/>';
	$message .= 'Experience: '.$experience .'<br/>';
    $message .= 'Accomplishment: '.$accomplishment.'<br/></p>';
        $message .= '<p>This mail was sent to you by Contact-Us Bot.<p/>';
         $message .= '<img src="https://www.askmetrip.com/demo/images/50x50Logo.png"></img>';
        $message .= '</body></html>';
        mail($recipient, $subjects, $message,$header) or die("Error!"); 



    $to = $emails;
	$subject = 'ASKMETRIP- HR Team Thanking You';
	$from = 'relations@askmetrip.com';
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: '.$from."\r\n".
					'Reply-To: '."relations@askmetrip.com"."\r\n" .
					'X-Mailer: PHP/' . phpversion();
				$message = '<html><body>';
				
				$message .= '<p>Dear Customer,</p><p>Thank you for reaching out to us.<br/>One of our representatives will be contacting you regarding the query, within 24 business hours.</p><p>Till then please share your CV by replying through the same email.</p>';
				$message .= '<p>Regards!<br/>ASK ME TRIP<p/>';
				$message .= '<img src="https://www.askmetrip.com/demo/images/50x50Logo.png"></img>';
				$message .= '</body></html>';
				mail($to, $subject, $message, $headers);

echo "<script>alert('Your trip information succesfully submitted');</script>";
echo "<script>window.location.href ='work-with-us'</script>";

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="icon" type="image/png" href="images/0.png" />
	<title>ASKMETRIP | TRIPS WITH LEARNING</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- <link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet"> -->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">

	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/main1.css">


	<link rel="stylesheet" href="style.css">
	<style>
	#foo {
    max-width: 900px;
    display: block;
    margin: 0 auto;
}

#co {
    margin-left: -30%;
}

.ysh {
    color: #fff;
    font-weight: 600;
    font-size: 0.9rem;
}

blockquote {
    margin-left: 46px;
    font-family: "Segoe Print", "Times New Roman", Verdana;
    padding: 8px;
    min-height: 44px;
    border: 2px solid black;
    border-radius: 6px;
    z-index: 1;
    color: blueviolet;
}

.card1 {
    border: 2px solid black;
    border-radius: 25px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    transition: 0.3s;
    width: 40%;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}

.container {
    padding: 2px 16px;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

.flip-card {

    background-color: transparent;
    width: 300px;
    height: 300px;
    perspective: 1000px;
}

.flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.6s;
    transform-style: preserve-3d;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.flip-card:hover .flip-card-inner {
    transform: rotateY(180deg);
}

.flip-card-front,
.flip-card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
}

.flip-card-front {
    background-color: #bbb;
    color: black;
}

.flip-card-back {
    background-color: #2980b9;
    color: white;
    transform: rotateY(180deg);
}

.box-shadow {
    width: 89%;
}

/* start form */

#career {
    max-width: 900px;
    display: block;
    margin: 0 auto;
}

.fl {
    float: right;
}

.warpper {
    width: 130%;

    background-image: url("img/tacos.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}

.main {
    width: 80%;
    height: 770px;
    background-color: rgba(7, 47, 79, 0.63);
    margin: 50px 35%;
    border-radius: 20px 20px 30px 30px;
}
#ip1 {
    width: 40%;
    border-radius:10px;
    margin-left:4%;
    padding:10px;
}
.head {
    width: 100%;
    background-color: yellow;
    height: 40px;
    border-radius: 20px 20px 0 0;
}

.head p {
    line-height: 40px;
    text-align: center;
    font-size: 25px;
    font-weight: bold;
    color: black;
}

.form {
    width: 100%;
    height: 750px;
}

.name {
    font-size: 16px;
    color: #fff;
    margin: 15px 0 0 5%;
}

.name-inp {
    width: 90%;
    height: 30px;
    margin: 5px 0 0 5%;
    font-size: 16px;
    padding: 2px;
    color: rgb(114, 111, 111);
    border: 1px solid rgb(17, 67, 107);
    background-color: rgb(231, 232, 250);
}

.name-inp,
.form-control:hover {
    background-color: lightcyan;
    color: rgb(173, 167, 167);
    border: 1px solid rgb(139, 139, 139);
}

.pass {
    margin: 5px 0 0 5%;
    height: 30px;
    width: 41%;
    padding: 2px;
    background-color: rgb(231, 232, 250);
    border: 1px solid rgb(17, 67, 107);
}

.pass:hover {
    background-color: rgb(0, 23, 41);
    color: rgb(173, 167, 167);
    border: 1px solid rgb(139, 139, 139);
}

.gender {
    margin: 15px 0 0 5%;
    color: #fff;
    font-size: 16px;
}

.gen {
    font-size: 18px;
}

.genm {
    margin-left: 5%;
}

.sub {
    width: 87%;
    margin: 15px 0 0 5%;
    font-size: 16px;
    height: 40px;
    background-color: #54e346;
    border: 1px solid rgb(17, 67, 107);
    color: #fff;
}

.sub:hover {
    background-color: #E94601;
    color: #fff;
}

.form-control {
    margin-left: 5%;
    width: 90%;
}
#shif{
    margin-left: 38%;
}
#shif1{
margin-left: 30%;
}
#shif3{
margin-left: 25%;
}
#shif2{
margin-left: 20%;
}
#colm1{
margin-left: 5%;
margin-top:6%;
}
#colm2{
margin-top: -3.5%;
margin-left:-5%;
}

@media screen and (max-width: 1000px) {
    .box-shadow {
        width: 66%;
        margin-left: 19%;
    }
#colm1{
margin-left: 11%;
}
#colm2{
margin-top: -3.5%;
margin-left:4%;
}
    .main {
        margin-left: 15%;
        width: 90%;
        height: 1580px;

    }

    #co {
        margin-left: -10%;
    }
    #shif1{
        margin-left: 25%;
    }
    #shif{
        margin-left: 35%;
    }
    #span1{
        margin-left: -16%;
    }
    #shif2{
        margin-left: 9%;
    }
    #shif3{
        margin-left: 15%;
    }
    .main{
        height: 780px;
    }
}

@media screen and (max-width: 480px) {
    .box-shadow {
        width: 66%;
        margin-left: 19%;
    }

    #span1{
        margin-left: -15% !important;
    }
#colm1{
margin-left: 9%;
}
#colm2{
margin-top: -3.5%;
margin-left:-1%;
}
    .main {
        margin-left: 15%;
        width: 90%;
        /* height: 840px !important; */

        
    }
    .name{
        font-size: 12px !important;
    }

    #co {
        margin-left: -10%;
    }
    #shif1{
        margin-left: 25%;
        font-size: 12px !important;
    }
    #shif{
        margin-left: 35%;
        font-size: 12px !important;
    }
    #span1{
        margin-left: -16%;
    }
    #shif2{
        margin-left: 9%;
        font-size: 12px !important;
    }
    #shif3{
        margin-left: 17.5%;
        font-size: 12px !important;
    }
    .main{
        height: 750px ;
    }
    
}

@media (min-width: 481px) and (max-width: 768px)
{
    .box-shadow {
        width: 66%;
        margin-left: 19%;
    }

    #span1{
        margin-left: -15% !important;
    }
#colm1{
margin-left: 9%;
}
#colm2{
margin-top: -3.5%;
margin-left:-1%;
}
    .main {
        margin-left: 17%;
        width: 90%;
        /* height: 840px !important; */

        
    }
    .name{
        font-size: 20px !important;
    }

    #co {
        margin-left: -10%;
    }
    #shif1{
        margin-left: 28%;
        font-size: 20px !important;
    }
    #shif{
        margin-left: 37%;
        font-size: 20px !important;
    }
    #span1{
        margin-left: -6% !important;
    }
    #shif2{
        margin-left: 14%;
        font-size: 22px !important;
    }
    #shif3{
        margin-left: 21%;
        font-size: 20px !important;
    }
    .main{
        height: 750px ;
    }
}
	</style>
</head>

<body>
	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
	<script>
		var mybutton = document.getElementById("myBtn");
		window.onscroll = function () { scrollFunction() };
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
	<div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(images/back/b1.jpg);">
		<div class="container h-100">
			<div class="row h-100 align-items-end">
				<div class="col-12">
					<div class="breadcrumb-content align-items-center justify-content-between pb-5">
						<center>
							<h2 class="room-title">WORK WITH US</h2>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="column" id="colm1" >
			<div class="container" style="text-align: justify;">


				<p align="center">
				<h4 align="center" style="width: 90%;"> <i>
						<blockquote>"if you are looking for excitement, growth and unimaginable experience,
							We are looking for you"
						</blockquote>
					</i></h4><br></p><br><br>
				<p align="center" style="font-size: 18px;">
				<div class="card1" style="width: 90%;padding: 12px 16px;margin-top: 2%;font-size: 18px;font-family: 'Poppins', sans-serif ;font-weight:bold;">
					<!--formaction will have the file references which have the positions which are open at that time"-->


					We are proud of the exceptional abilities of our team members and supportive staff, who are ever
					ready to help our consumers. If you want to be a part of such a highly efficient, growth
					oriented,
					and incredible team.

					Join us at ASKMETRIP.COM by
					dropping an e-mail at
					<i style="font-size: 18px;"><b>connect.amt@gmail.com</b></i>.
					<!--include the email thing here also-->
					We will certainly contact you.


					For us, success depends on dedication of our people, so we tend to provide a healthy, diverse
					and
					growth dependent culture to our hardworking team members. We are looking for dedicated and
					motivated
					out of the box thinkers and innovators to help us in our mission to connect people and
					revolutionize
					education forever.</p>


				</div>

			</div>
		</div>
		<!-- <form class="p-3" id="career" style="border: 3px solid black;" id="foo">
		<h1 style="align-self: center;">CARRER FORM</h1>
		<div class="form-group">
			<label for="interest">Interested in</label>
			<select class="form-control" id="interest" style="width: 40%;">
				  <option>Internship Role</option>
				  <option>Full-Time Role</option>
				  <option>Operations Role</option>
				  <option>Product Role</option>
				  <option>Sales Role</option>
				  <option>Social Media Role</option>
				  <option>Marketing Role</option>
				  <option>Development Role</option>
				  <option>Graphics Role</option>
		
			</select>
		  </div>
		  <div class="form-group">
			<label for="interest">Applying for</label>
			<select class="form-control" id="apply" style="width: 40%;">
				  <option>Internship Role</option>
				  <option>Full-Time Role</option>
				  <option>Operations Role</option>
				  <option>Product Role</option>
				  <option>Sales Role</option>
				  <option>Social Media Role</option>
				  <option>Marketing Role</option>
				  <option>Development Role</option>
				  <option>Graphics Role</option>
		
			</select>
		  </div>
		  <div class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control" id="name" placeholder="Enter Your Name">
		  </div>
		  <div class="form-group">
			<label for="loaction">Your Preffered Job Location</label>
			<input type="text" class="form-control" id="name" placeholder="Enter Your Preffered Job Location">
		  </div>
		  
		  
		  <div class="form-group">
			<label for="seeAnotherField">Willing To Reallocate</label>
			<select class="form-control" id="seeAnotherField">
				  <option value="no">No</option>
				  <option value="yes">Yes</option>
			</select>
		  </div>
		  <div class="form-group" id="otherFieldDiv">
			<label for="otherField">Enter Your Top Three Preffered Location</label>
		   
			<input type="text" class="form-control" id="otherField" placeholder="Enter Your top 3 Preffered Job Location">
			
		  </div>
		
		  <div class="form-group">
			<label for="years">Your Total Work Experience</label>
			<select class="form-control" id="years" style="width: 40%;">
				  <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  <option>4</option>
				  <option>5</option>
				  <option>6</option>
				  <option>7</option>
				  <option>8</option>
				  <option>More than 8</option>
		
			</select>
		  </div>
		  <div class="form-group">
			<label for="lcmpny">Enter Your Current/Last Company Name</label>
			<input type="text" class="form-control" id="lcmpny" placeholder="Your Current/Last Company Name">
		  </div>
		
		  <div class="form-group">
			<label for="cdesig">Enter Your Current/Last Designation</label>
			<input type="text" class="form-control" id="cdesig" placeholder="Your Current/Last Designation">
		  </div>
		
		  <div class="form-group">
			<label for="cctc">Enter Your Current CTC</label>
			<input type="text" class="form-control" id="cctc" placeholder="Your Current CTC">
		  </div>
		
		  <div class="form-group">
			<label for="Ectc">Enter Your Expected CTC</label>
			<input type="text" class="form-control" id="Ectc" placeholder="Your Expected CTC">
		  </div>
		
		
		
		
		  
		
			
		
		  <div class="form-group">
			<label for="accomplishment">Enter Your 5 Accomplishments which helps us to understand you</label>
			<textarea class="form-control" id="accomplishment" rows="5" placeholder="Your Accomplishments"></textarea>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
		
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
		<script>
		$("#seeAnotherField").change(function() {
					if ($(this).val() == "yes") {
						$('#otherFieldDiv').show();
						$('#otherField').attr('required','');
						$('#otherField').attr('data-error', 'This field is required.');
					} else {
						$('#otherFieldDiv').hide();
						$('#otherField').removeAttr('required');
						$('#otherField').removeAttr('data-error');				
					}
				});
				$("#seeAnotherField").trigger("change");
				
		$("#seeAnotherFieldGroup").change(function() {
					if ($(this).val() == "yes") {
						$('#otherFieldGroupDiv').show();
						$('#otherField1').attr('required','');
						$('#otherField1').attr('data-error', 'This field is required.');
				$('#otherField2').attr('required','');
						$('#otherField2').attr('data-error', 'This field is required.');
					} else {
						$('#otherFieldGroupDiv').hide();
						$('#otherField1').removeAttr('required');
						$('#otherField1').removeAttr('data-error');
				$('#otherField2').removeAttr('required');
						$('#otherField2').removeAttr('data-error');	
					}
				});
				$("#seeAnotherFieldGroup").trigger("change");


</script> -->
		<div class="column" id="colm2" >

			<div class="container" id="co">
				<div class="row justify-content-center">
					<div class="warpper fl">
						<div class="main">
							<div class="head">
								<p>
									Opportunities</p>
							</div>
							<div class="form fl">
								<!-- add mail to wala part -->
								<form action="#" method="post">
									<p class="name"><b>Intrested In :</b>
										<b id="shif1"> Applying for:</b></p>
									<p>
									<div class="row">
										&nbsp;&nbsp;&nbsp;&nbsp;<select 
									id="ip1" required name="interest">
									<option selected>Choose</option>
											<option>Internship Role</option>
											<option>Full-Time Role</option>


										</select>

										<select  id="ip1" name="apply" required>
										<option selected>Choose</option>
											<option>Operations Role</option>
											<option>Product Role</option>
											<option>Sales Role</option>
											<option>Social Media Role</option>
											<option>Marketing Role</option>
											<option>Development Role</option>
											<option>Graphics Role</option>
										</select>
									</div>
									</p>

									<p class="name"><b>Name :</b>
									<b id="shif">Preffered Job Location</b></p>
									<p>
									<div class="row">
										&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"
											placeholder="Enter Your Name"   id="ip1" name="name">


										<input type="text"  id="ip1"
											placeholder="Enter Your Preffered Job Location" name="location" >
									</div>
									</p>








									<div class="form-group">
										<label for="seeAnotherField" class="name" ><b>Willing To Reallocate</b><span style="width: 140%;" id="span1">   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         </span><b>Work experience</b></label>

										<p>
										<div class="row">&nbsp;&nbsp;&nbsp;&nbsp;<select 
												id="seeAnotherField" style="width: 40%;border-radius:10px;margin-left:4%;padding:10px;" name="reallocate">
												<option value="no" selected >No</option>
												<option value="yes" >Yes</option>
											</select> <select  id="ip1" style="width: 40%;" name="experience">
											<option selected>Choose</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												<option>6</option>
												<option>7</option>
												<option>8</option>
												<option>More than 8</option>

											</select></div></p>
										</div>


										<div class="form-group" id="otherFieldDiv">
											<label for="otherField" class="name" ><b>Your Top Three Preffered
												Location</b></label>

											<input type="text"  id="otherField" style="width: 90%;border-radius:10px;margin-left:4%;padding:10px;"
												placeholder="Enter Your top 3 Preffered Job Location" name="preffered">

										</div>





										<p class="name"><b>Your Company Name</b>
										<b id="shif2">Your Designation</b></p>
										<p>
										<div class="row">
											&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  id="ip1"
												placeholder="Your Current/Last Company Name" name="cname">


											<input type="text"  id="ip1"
												placeholder="Your Current/Last Designation" name="desig">
										</div>
										</p>


										<p class="name"><b>Your Current CTC</b><b id="shif3">
											Your Expected CTC </b></p>
										<p>
										<div class="row"> &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="ctc"
												 id="ip1" placeholder="Your Current CTC"
												><input type="text"  id="ip1"
												placeholder="Your Expected CTC" name="ectc"></div>
										</p>

										<p class="name"><b>Your Accomplishments</b> </p>
										<p>
											<textarea  rows="2"
												style="width: 88%;border-radius:10px;margin-left:4%;padding:10px;" placeholder="Enter Your 5 Accomplishments" name="accomplishment"></textarea>
										</p>
										<p class="name"><b>Email:</b> </p>
										<p>
										<input type="email" id="ip1" name="email" placeholder="Email"  style="width: 88%;" required>
									</p>

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
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script> -->
	<script>
		$("#seeAnotherField").change(function () {
			if ($(this).val() == "yes") {
				$('.main').height(880);
				$('#otherFieldDiv').show();
				$('#otherField').attr('required', '');
				$('#otherField').attr('data-error', 'This field is required.');
			} else {
				$('.main').height(770);
				$('#otherFieldDiv').hide();

				$('#otherField').removeAttr('required');
				$('#otherField').removeAttr('data-error');
			}
		});
		$("#seeAnotherField").trigger("change");

		$("#seeAnotherFieldGroup").change(function () {
			if ($(this).val() == "yes") {
				$('#otherFieldGroupDiv').show();
				$('#otherField1').attr('required', '');
				$('#otherField1').attr('data-error', 'This field is required.');
				$('#otherField2').attr('required', '');
				$('#otherField2').attr('data-error', 'This field is required.');
			} else {
				$('.main').height(770);
				$('#otherFieldGroupDiv').hide();
				$('#otherField1').removeAttr('required');
				$('#otherField1').removeAttr('data-error');
				$('#otherField2').removeAttr('required');
				$('#otherField2').removeAttr('data-error');
			}
		});
		$("#seeAnotherFieldGroup").trigger("change");

	</script>
	<!-- <section class="ftco-section testimony-section bg-light mt-6" id="co"> -->
	<!-- <div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ">
					<h2>CURRENT OPENINGS</h2>
				</div>
			</div>
			<div class="row  text-center" id="dv">
				` <div class="col-md-12">
					<div class="carousel-testimony owl-carousel">
						<div class="card box-shadow">
							<div class="card-header">
								<h4 class="ysh">FRONT END DEVELOPER</h4>
							</div>
							<div class="flip-card">
								<div class="flip-card-inner">
									<div class="flip-card-front">
										<img src="images/frontend.jpg" alt="Avatar" style="width:300px;height:300px;">
									</div>
									<div class="flip-card-back">
										<div class="card-body">
											<div class="row mb-3 text-center">
												<div class="col-2 themed-grid-col"></div>
												<div class="col-8 themed-grid-col"><i
														class="flaticon-workout"></i>&nbsp;&nbsp;Technology</div>
												<div class="col-2 themed-grid-col"></div>
											</div>

											<div class="row mb-3 text-center">
												<div class="col-2 themed-grid-col"></div>
												<div class="col-8 themed-grid-col"><span
														class="fa fa-fax"></span>&nbsp;&nbsp;Experience: 0-2 years</div>
												<div class="col-2 themed-grid-col"></div>
											</div>
											<div class="row mb-3 text-center">
												<div class="col-2 themed-grid-col"></div>
												<div class="col-8 themed-grid-col">Share your updated CV at: <a
														href="mailto:connect.amt@gmail.com">connect.amt@gmail.com</a>
												</div>
												<div class="col-2 themed-grid-col"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="box-shadow">
							<div class="card-header">
								<h4 class="ysh">BACK END DEVELOPER</h4>
							</div>
							<div class="flip-card">
								<div class="flip-card-inner">
									<div class="flip-card-front">
										<img src="images/backend.png" alt="Avatar" style="width:300px;height:300px;">
									</div>
									<div class="flip-card-back">
										<div class="card-body">
											<div class="row mb-3 text-center">
												<div class="col-2 themed-grid-col"></div>
												<div class="col-8 themed-grid-col"><i
														class="flaticon-workout"></i>&nbsp;&nbsp;Technology</div>
												<div class="col-2 themed-grid-col"></div>
											</div>

											<div class="row mb-3 text-center">
												<div class="col-2 themed-grid-col"></div>
												<div class="col-8 themed-grid-col"><span
														class="fa fa-fax"></span>&nbsp;&nbsp;Experience: 0-2 years</div>
												<div class="col-2 themed-grid-col"></div>
											</div>
											<div class="row mb-3 text-center">
												<div class="col-2 themed-grid-col"></div>
												<div class="col-8 themed-grid-col">Share your updated CV at: <a
														href="mailto:connect.amt@gmail.com">connect.amt@gmail.com</a>
												</div>
												<div class="col-2 themed-grid-col"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="box-shadow">
							<div class="card-header">
								<h4 class="ysh">APPLICATION DEVELOPER</h4>
							</div>
							<div class="flip-card">
								<div class="flip-card-inner">
									<div class="flip-card-front">
										<img src="images/appli.jpg" alt="Avatar" style="width:300px;height:300px;">
									</div>
									<div class="flip-card-back">
										<div class="card-body">
											<div class="row mb-3 text-center">
												<div class="col-2 themed-grid-col"></div>
												<div class="col-8 themed-grid-col"><i
														class="flaticon-workout"></i>&nbsp;&nbsp;Technology</div>
												<div class="col-2 themed-grid-col"></div>
											</div>

											<div class="row mb-3 text-center">
												<div class="col-2 themed-grid-col"></div>
												<div class="col-8 themed-grid-col"><span
														class="fa fa-fax"></span>&nbsp;&nbsp;Experience: 0-2 years</div>
												<div class="col-2 themed-grid-col"></div>
											</div>
											<div class="row mb-3 text-center">
												<div class="col-2 themed-grid-col"></div>
												<div class="col-8 themed-grid-col">Share your updated CV at: <a
														href="mailto:connect.amt@gmail.com">connect.amt@gmail.com</a>
												</div>
												<div class="col-2 themed-grid-col"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="box-shadow">
							<div class="card-header">
								<h4 class="ysh">GRAPHICS DESIGNER</h4>
							</div>
							<div class="flip-card">
								<div class="flip-card-inner">
									<div class="flip-card-front">
										<img src="images/graphic.jpg" alt="Avatar" style="width:600px;height:300px;">
									</div>
									<div class="flip-card-back">
										<div class="card-body">
											<div class="row mb-3 text-center">
												<div class="col-2 themed-grid-col"></div>
												<div class="col-8 themed-grid-col"><i
														class="flaticon-workout"></i>&nbsp;&nbsp;Marketing</div>
												<div class="col-2 themed-grid-col"></div>
											</div>

											<div class="row mb-3 text-center">
												<div class="col-2 themed-grid-col"></div>
												<div class="col-8 themed-grid-col"><span
														class="fa fa-fax"></span>&nbsp;&nbsp;Experience: 0-2 years</div>
												<div class="col-2 themed-grid-col"></div>
											</div>
											<div class="row mb-3 text-center">
												<div class="col-2 themed-grid-col"></div>
												<div class="col-8 themed-grid-col">Share your updated CV at: <a
														href="mailto:connect.amt@gmail.com">connect.amt@gmail.com</a>
												</div>
												<div class="col-2 themed-grid-col"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>-->
	<!-- this -->
	<!-- <div class="box-shadow">
							<div class="card-header">
								<h4 class="ysh">BUSINESS MANAGER</h4>
							</div>

							<div class="flip-card">
								<div class="flip-card-inner">
									<div class="flip-card-front">
										<img src="images/buiss.jpg" alt="Avatar" style="width:600px;height:300px;">
									</div>
									<div class="flip-card-back">
										<div class="card-body">
											<div class="row mb-3 text-center">
												<div class="col-2 themed-grid-col"></div>
												<div class="col-8 themed-grid-col"><i
														class="flaticon-workout"></i>&nbsp;&nbsp;Marketing</div>
												<div class="col-2 themed-grid-col"></div>
											</div>

											<div class="row mb-3 text-center">
												<div class="col-2 themed-grid-col"></div>
												<div class="col-8 themed-grid-col"><span
														class="fa fa-fax"></span>&nbsp;&nbsp;Experience: 0-2 years</div>
												<div class="col-2 themed-grid-col"></div>
											</div>
											<div class="row mb-3 text-center">
												<div class="col-2 themed-grid-col"></div>
												<div class="col-8 themed-grid-col">Share your updated CV at: <a
														href="mailto:connect.amt@gmail.com">connect.amt@gmail.com</a>
												</div>
												<div class="col-2 themed-grid-col"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
			
		 	<div class="box-shadow">
				<div class="card-header">
					<h4 class="ysh">PRODUCT MANAGER</h4>
				</div>
				<div class="flip-card">
					<div class="flip-card-inner">
						<div class="flip-card-front">
							<img src="images/productm.jpg" alt="Avatar" style="width:600px;height:300px;">
						</div>
						<div class="flip-card-back">


							<div class="card-body">
								<div class="row mb-3 text-center">
									<div class="col-2 themed-grid-col"></div>
									<div class="col-8 themed-grid-col"><i
											class="flaticon-workout"></i>&nbsp;&nbsp;Product</div>
									<div class="col-2 themed-grid-col"></div>
								</div>

								<div class="row mb-3 text-center">
									<div class="col-2 themed-grid-col"></div>
									<div class="col-8 themed-grid-col"><span
											class="fa fa-fax"></span>&nbsp;&nbsp;Experience: 0-2 years</div>
									<div class="col-2 themed-grid-col"></div>
								</div>
								<div class="row mb-3 text-center">
									<div class="col-2 themed-grid-col"></div>
									<div class="col-8 themed-grid-col">Share your updated CV at: <a
											href="mailto:connect.amt@gmail.com">connect.amt@gmail.com</a></div>
									<div class="col-2 themed-grid-col"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="box-shadow">
				<div class="card-header">
					<h4 class="ysh">OPERATION MANAGER</h4>
				</div>
				<div class="flip-card">
					<div class="flip-card-inner">
						<div class="flip-card-front">
							<img src="images/operationm.jpg" alt="Avatar" style="width:300px;height:300px;">
						</div>
						<div class="flip-card-back">
							<div class="card-body">
								<div class="row mb-3 text-center">
							  <div class="col-2 themed-grid-col"></div>
								  <div class="col-8 themed-grid-col"><i class="flaticon-workout"></i>&nbsp;&nbsp;Supply Chain</div>
								  <div class="col-2 themed-grid-col"></div>
								</div>
								
								<div class="row mb-3 text-center">
							  <div class="col-2 themed-grid-col"></div>
								  <div class="col-8 themed-grid-col"><span class="fa fa-fax"></span>&nbsp;&nbsp;Experience: 0-2 years</div>
								  <div class="col-2 themed-grid-col"></div>
								</div>
								<div class="row mb-3 text-center">
							  <div class="col-2 themed-grid-col"></div>
								  <div class="col-8 themed-grid-col">Share your updated CV at: <a href="mailto:connect.amt@gmail.com">connect.amt@gmail.com</a></div>
								  <div class="col-2 themed-grid-col"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="box-shadow">
				<div class="card-header">
					<h4 class="ysh">CONTENT WRITING</h4>
				</div>
				<div class="flip-card">
					<div class="flip-card-inner">
						<div class="flip-card-front">
							<img src="images/content.png" alt="Avatar" style="width:300px;height:300px;">
						</div>
						<div class="flip-card-back">
							<div class="card-body">
								<div class="row mb-3 text-center">
							  <div class="col-2 themed-grid-col"></div>
								  <div class="col-8 themed-grid-col"><i class="flaticon-workout"></i>&nbsp;&nbsp;Product</div>
								  <div class="col-2 themed-grid-col"></div>
								</div>
								
								<div class="row mb-3 text-center">
							  <div class="col-2 themed-grid-col"></div>
								  <div class="col-8 themed-grid-col"><span class="fa fa-fax"></span>&nbsp;&nbsp;Experience: 0-2 years</div>
								  <div class="col-2 themed-grid-col"></div>
								</div>
								<div class="row mb-3 text-center">
							  <div class="col-2 themed-grid-col"></div>
								  <div class="col-8 themed-grid-col">Share your updated CV at: <a href="mailto:connect.amt@gmail.com">connect.amt@gmail.com</a></div>
								  <div class="col-2 themed-grid-col"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="box-shadow">
				<div class="card-header">
					<h4 class="ysh">LOGISTICS MANAGER</h4>
				</div>
				<div class="flip-card">
					<div class="flip-card-inner">
						<div class="flip-card-front">
							<img src="images/logistic.jpg" alt="Avatar" style="width:300px;height:300px;">
						</div>
						<div class="flip-card-back">
							<div class="card-body">
								<div class="row mb-3 text-center">
							  <div class="col-2 themed-grid-col"></div>
								  <div class="col-8 themed-grid-col"><i class="flaticon-workout"></i>&nbsp;&nbsp;Supply Chain</div>
								  <div class="col-2 themed-grid-col"></div>
								</div>
								
								<div class="row mb-3 text-center">
							  <div class="col-2 themed-grid-col"></div>
								  <div class="col-8 themed-grid-col"><span class="fa fa-fax"></span>&nbsp;&nbsp;Experience: 0-2 years</div>
								  <div class="col-2 themed-grid-col"></div>
								</div>
								<div class="row mb-3 text-center">
							  <div class="col-2 themed-grid-col"></div>
								  <div class="col-8 themed-grid-col">Share your updated CV at: <a href="mailto:connect.amt@gmail.com">connect.amt@gmail.com</a></div>
								  <div class="col-2 themed-grid-col"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>

		</div>
		</div>
		</div>
		</div>


















		
	<section class="ftco-section testimony-section bg-light" id="in">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ">
					<h2>INTERNSHIPS</h2>
				</div>
			</div>
			
			<div class="row  text-center" id="dv">
				  <div class="col-md-12">
					<div class="carousel-testimony owl-carousel">
						<div class="box-shadow">
							<div class="card-header">
								<h4 class="ysh">APPLICATION DEVELOPER</h4>
							</div>
							<div class="flip-card">
								<div class="flip-card-inner">
									<div class="flip-card-front">
										<img src="images/appli.jpg" alt="Avatar" style="width:300px;height:300px;">
									</div>
									<div class="flip-card-back">
										<div class="card-body">
											<div class="row mb-3 text-center">
										  <div class="col-2 themed-grid-col"></div>
											  <div class="col-8 themed-grid-col"><i class="flaticon-workout"></i>&nbsp;&nbsp;Technology</div>
											  <div class="col-2 themed-grid-col"></div>
											</div>
											
											<div class="row mb-3 text-center">
										  <div class="col-2 themed-grid-col"></div>
											  <div class="col-8 themed-grid-col">Share your updated CV at: <a href="mailto:connect.amt@gmail.com">connect.amt@gmail.com</a></div>
											  <div class="col-2 themed-grid-col"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="box-shadow">
							<div class="card-header">
								<h4 class="ysh">FRONT & BACK END DEVELOPER</h4>
							</div>
							<div class="flip-card">
								<div class="flip-card-inner">
									<div class="flip-card-front">
										<img src="images/frontend.jpg" alt="Avatar" style="width:300px;height:300px;">
									</div>
									<div class="flip-card-back">
										<div class="card-body">
											<div class="row mb-3 text-center">
												<div class="col-2 themed-grid-col"></div>
												<div class="col-8 themed-grid-col"><i
														class="flaticon-workout"></i>&nbsp;&nbsp;Technology</div>
												<div class="col-2 themed-grid-col"></div>
											</div>

											<div class="row mb-3 text-center">
												<div class="col-2 themed-grid-col"></div>
												<div class="col-8 themed-grid-col"><span
														class="fa fa-fax"></span>&nbsp;&nbsp;Experience: 0-2 years</div>
												<div class="col-2 themed-grid-col"></div>
											</div>
											<div class="row mb-3 text-center">
												<div class="col-2 themed-grid-col"></div>
												<div class="col-8 themed-grid-col">Share your updated CV at: <a
														href="mailto:connect.amt@gmail.com">connect.amt@gmail.com</a>
												</div>
												<div class="col-2 themed-grid-col"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="box-shadow">
							<div class="card-header">
								<h4 class="ysh">CONTENT WRITER</h4>
							</div>
							<div class="flip-card">
								<div class="flip-card-inner">
									<div class="flip-card-front">
										<img src="images/content.png" alt="Avatar" style="width:300px;height:300px;">
									</div>
									<div class="flip-card-back">
										<div class="card-body">
											<div class="row mb-3 text-center">
										  <div class="col-2 themed-grid-col"></div>
											  <div class="col-8 themed-grid-col"><i class="flaticon-workout"></i>&nbsp;&nbsp;Product</div>
											  <div class="col-2 themed-grid-col"></div>
											</div>
											
											<div class="row mb-3 text-center">
										  <div class="col-2 themed-grid-col"></div>
											  <div class="col-8 themed-grid-col">Share your updated CV at: <a href="mailto:connect.amt@gmail.com">connect.amt@gmail.com</a></div>
											  <div class="col-2 themed-grid-col"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="box-shadow">
							<div class="card-header">
								<h4 class="ysh">OPERATIONS</h4>
							</div>
							<div class="flip-card">
								<div class="flip-card-inner">
									<div class="flip-card-front">
										<img src="images/operationm.jpg" alt="Avatar" style="width:300px;height:300px;">
									</div>
									<div class="flip-card-back">
										<div class="card-body">
											<div class="row mb-3 text-center">
										  <div class="col-2 themed-grid-col"></div>
											  <div class="col-8 themed-grid-col"><i class="flaticon-workout"></i>&nbsp;&nbsp;Supply Chain</div>
											  <div class="col-2 themed-grid-col"></div>
											</div>
											
											<div class="row mb-3 text-center">
										  <div class="col-2 themed-grid-col"></div>
											  <div class="col-8 themed-grid-col">Share your updated CV at: <a href="mailto:connect.amt@gmail.com">connect.amt@gmail.com</a></div>
											  <div class="col-2 themed-grid-col"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="box-shadow">
							<div class="card-header">
								<h4 class="ysh">CAMPUS BOOSTER</h4>
							</div>
							<div class="flip-card">
								<div class="flip-card-inner">
									<div class="flip-card-front">
										<img src="images/camp.jpg" alt="Avatar" style="width:300px;height:300px;">
									</div>
									<div class="flip-card-back">
										
							  <div class="card-body">
								<div class="row mb-3 text-center">
							  <div class="col-2 themed-grid-col"></div>
								  <div class="col-8 themed-grid-col"><i class="flaticon-workout"></i>&nbsp;&nbsp;Campus Ambassador</div>
								  <div class="col-2 themed-grid-col"></div>
								</div>
								
								<div class="row mb-3 text-center">
							  <div class="col-2 themed-grid-col"></div>
								  <div class="col-8 themed-grid-col">Share your updated CV at: <a href="mailto:connect.amt@gmail.com">connect.amt@gmail.com</a></div>
								  <div class="col-2 themed-grid-col"></div>
								</div>
							</div>
									</div>
								</div>
							</div>
						</div>
						<div class="box-shadow">
							<div class="card-header">
								<h4 class="ysh">GRAPHICS DESIGNER</h4>
							</div>
							<div class="flip-card">
								<div class="flip-card-inner">
									<div class="flip-card-front">
										<img src="images/graphic.jpg" alt="Avatar" style="width:300px;height:300px;">
									</div>
									<div class="flip-card-back">
										<div class="card-body">
											<div class="row mb-3 text-center">
										  <div class="col-2 themed-grid-col"></div>
											  <div class="col-8 themed-grid-col"><i class="flaticon-workout"></i>&nbsp;&nbsp;Design</div>
											  <div class="col-2 themed-grid-col"></div>
											</div>
											
											<div class="row mb-3 text-center">
										  <div class="col-2 themed-grid-col"></div>
											  <div class="col-8 themed-grid-col">Share your updated CV at: <a href="mailto:connect.amt@gmail.com">connect.amt@gmail.com</a></div>
											  <div class="col-2 themed-grid-col"></div>
											</div>
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
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

</body>

</html>