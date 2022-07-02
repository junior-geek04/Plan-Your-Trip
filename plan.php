<?php
include_once('config.php');
if (isset($_POST['submit1'])) {

    $types = $_POST['type'];
    $names = $_POST['name'];
    $associated = $_POST['associated'];
    $emails = $_POST['email'];
    $contacts = $_POST['contact'];
    $size = $_POST['size'];
    $placevisit = $_POST['travel'];
    $pickup = $_POST['pick'];

    $query=mysqli_query($con,"insert into tripz(Name,Contact,Email,Associated_with,Trip,Groups,Place,Pickup) value('$names','$contacts','$emails','$associated','$types','$size','$placevisit','$pickup')");

    /*EMAIL CODE*/
    // $formcontent="From: $names \n Trip: $trip \n Email: $emails \n Contact: $contacts \n Size: $size \n Place: $placevisit \n Budget: $budgets ";
    //         $recipient = "connect.amt@gmail.com";
    //         $subjects="Trips-form";
    //         mail($recipient, $subjects, $formcontent) or die("Error!");  

    //         echo "<script>window.location.href ='Trips.php'</script>";
    $header  = 'MIME-Version: 1.0' . "\r\n";
    $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $header .= 'From: ' . " relations@askmetrip.com " . "\r\n" .
        'Reply-To: ' . " relations@askmetrip.com " . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $formcontent = "From: $names \n $emails \n Message: $messages";
    $recipient = "connect.amt@gmail.com";
    $subjects = "New Trip Enquiry";
    $message = '<html><body>';

    $message .= '<p>Hi Admin,<br>Just recieved a new contact query request.</p>';

    $message .= '<p>Name: ' . $names . '<br/>';
    $message .= 'Email: <a href="mailto:' . $emails . '">' . $emails . '</a><br/>';
    $message .= 'Place Visit: ' . $placevisit . '<br/>';
    $message .= 'Number: ' . $contacts . '<br/></p>';
    $message .= '<img src="https://www.askmetrip.com/demo/images/0.png"></img>';
    $message .= '<p>This mail was sent to you by Contact-Us Bot.<p/>';
    $message .= '</body></html>';
    mail($recipient, $subjects, $message, $header) or die("Error!");



    $to = $emails;
    $subject = 'ASKMETRIP- Happiness Team ';
    $from = 'relations@askmetrip.com';
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: ' . $from . "\r\n" .
        'Reply-To: ' . "relations@askmetrip.com" . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $message = '<html><body>';

    $message .= '<p>Dear Customer,</p><p>Thank you for reaching out to us.<br/>One of our representatives will be contacting you regarding the query, within 24 business hours.</p>';
    $message .= '<p>Regards!<br/>ASK ME TRIP<p/>';
    $message .= '<img src="https://www.askmetrip.com/demo/images/0.png"></img>';
    $message .= '</body></html>';
    mail($to, $subject, $message, $headers);

    echo "<script>alert('Your trip information succesfully submitted');</script>";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="images/0.png" />
    <title>ASKMETRIP | TRIPS WITH LEARNING</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
     -->
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
    <link rel="stylesheet" href="css/associative.css">
    <link rel="stylesheet" href="css/main1.css">

    <link rel="stylesheet" href="css/news.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>-->
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->
    <style>
        body {
            overflow-y: visible;
            scroll-behavior: smooth;
            max-height: 100%;

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

            width: 75%;
            height: 500px;
            margin-left: 22%;
            margin-top: -1%;

            background-color: rgba(7, 47, 79, 0.63);

            border-radius: 20px 20px 30px 30px;
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
            height: 67px;
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

        ol {
            list-style-type: none;
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
            width: 90%;
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
            width: 90%;
            margin-left: 5%;

        }

        #tp {
            margin-top: 0%;
            width: 104%;
        }

        /* #c1 {
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        } */

        #trend12 {
            margin-left: 3%;
            margin-top: 10%;
            font-size: 18px;
            color: lawngreen;
        }

        #shif {
            margin-left: 41%;
        }

        #shif1 {
            margin-left: 33%;
        }

        #shif2 {
            margin-left: 29%;
        }

        #shif3 {
            margin-left: 30%;
        }

        .row1 {
            width: 50%;
        }

        .col1 {
            width: 25%;
        }

        @media screen and (max-width: 1000px) {
            #shif {
                margin-left: 40%;
            }

            #shif1 {
                margin-left: 25%;
            }

            #shif2 {
                margin-left: 20%;
            }

            #shif3 {
                margin-left: 20%;
            }

            #tt {
                margin-left: 3%;
                margin-top: -1%;
                width: 110%;
            }

        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        @media screen and (max-width: 480px){
			#tt{
                margin-top: -70% !important;
                margin-left: 6%;
            }
            #shif {
                margin-left: 34%;
            }

            #shif1 {
                margin-left: 18%;
            }

            #shif2 {
                margin-left: 10%;
            }

            #shif3 {
                margin-left: 10%;
            }
		}
		@media (min-width: 481px) and (max-width: 768px){
            #shif {
                margin-left: 42%;
            }

            #shif1 {
                margin-left: 34%;
            }

            #shif2 {
                margin-left: 29.5%;
            }

            #shif3 {
                margin-left: 30%;
            }
		}
    </style>






</head>

<body>
    <!-- 		
		<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> -->
    <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn" title="Go to top" style="background-color: aquamarine;">Top</i>
    <script>
        var mybutton = document.getElementById("myBtn");
        window.onscroll = function() {
            scrollFunction()
        };

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


    <?php include 'header.php'; ?>






    <div class="row" id="tp">


        <div class="column" id="c1" style="height:500px;">
            <!-- <img src="images/0.png"> -->
      
            <img src="images/3_4.png">
            

        </div>

        <div class="column" id="tt">

            <div class="warpper fl">
                <div class="main">
                    <div class="head">
                        <p>
                            Plan Trip</p>
                    </div>
                    <div class="form fl">
                        <form action="#" method="post">
                            <!-- add mail to wala part -->

                            <p class="name"><b>Name : </b><b id="shif">Associated With : </b> </p>
                            <p>
                            <div class="row"> &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" placeholder="Enter Your Name" class="form-control" style="width: 40%;height:2px;padding-top:0px" autocomplete="on" required><select id="associated with" class="form-control" name="associated" style="width: 40%;padding-top:0px" required>
                                <option selected>Choose</option>    
                            <option>School</option>
                                    <option>Colleges</option>
                                    <option>Corporate</option>
                                    <option>Industry</option>


                                </select></div>
                            </p>
                            <p class="name"><b>Type of Trips : </b><b id="shif1">Group Size : </b> </p>
                            <p>
                            <div class="row"> &nbsp;&nbsp;&nbsp;&nbsp;<select id="planning" class="form-control" name="type" style="width: 40%;padding-top:0px" required>
                            <option selected>Choose</option> 
                                    <option>Fun Learn Trip</option>
                                    <option>Curriculam Trip</option>
                                    <option>Industrial Trip</option>
                                    <option>One-Day Trip</option>
                                    <option>Parents-Teacher Trip</option>
                                    <option>Expert Trip</option>
                                </select>
                                <select name="size" id="" class="form-control" style="width: 40%;padding-top:0px" required>
                                    <option value="Group Size">Group Size</option>
                                    <option value="01-10">01-10</option>
                                    <option value="10-20">10-20</option>
                                    <option value="20-30">20-30</option>
                                    <option value="30-40">30-40</option>
                                    <option value="40-50">40-50</option>
                                    <option value="50 +">50+</option>

                                </select>
                            </div>
                            </p>



                            <p class="name"><b>
                                    Contact Number : </b><b id="shif2">EMAIL : </b></p>
                            <p>
                            <div class="row"> &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" class="form-control" placeholder="Contact Number" style="width: 40%;padding-top:0px" name="contact" required>

                                <input type="email" name="email" placeholder="Email" class="form-control" style="width: 40%;padding-top:0px" required>
                            </div>
                            </p>

                            <p class="name">


                                <b>Pickup Location : </b><b id="shif3">Travel Location :</b>
                            </p>
                            <p>
                            <div class="row"> &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" name="pick" placeholder="Enter Your Pickup Location" style="width: 40%;padding-top:0px" class="form-control" required>



                                <input type="text" name="travel" placeholder="Enter Your Travel Location" style="width: 40%;padding-top:0px;padding-bottom:0px;" class="form-control" required>
                            </div>
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










    <?php include 'footer.php'; ?>
    <script src="assets/vendor/aos/aos.js"></script>


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


    <script src="assets/js/main.js"></script>


</body>

</html>



