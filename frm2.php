
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
    <style>
    *{
    margin: 0;
    padding: 0;
}
.fl{
    float:right;
}
.warpper{
    width: 130%;
    height: 100vh;
    background-image: url("img/tacos.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}
.main{
    width: 30%;
    height: 750px;
    background-color: rgba(7, 47, 79, 0.63);
    margin: 50px 35%;
    border-radius: 20px 20px 30px 30px;
}
.head{
    width: 100%;
    background-color: yellow;
    height: 40px;
    border-radius: 20px 20px 0 0;
}
.head p{
    line-height: 40px;
    text-align: center;
    font-size: 25px;
    font-weight: bold;
    color: black;
}
.form{
    width: 100%;
    height: 750px;
}
.name{
    font-size: 16px;
    color: #fff;
    margin: 15px 0 0 5%;
}
.name-inp{
    width: 90%;
    height: 30px;
    margin: 5px 0 0 5%;
    font-size: 16px;
    padding: 2px;
    color: rgb(114, 111, 111);
    border: 1px solid rgb(17, 67, 107);
    background-color: rgb(231, 232, 250);
}
.name-inp,.form-control:hover{
    background-color: lightcyan;
    color: rgb(173, 167, 167);
    border: 1px solid rgb(139, 139, 139);
}
.pass{
    margin: 5px 0 0 5%;
    height: 30px;
    width: 41%;
    padding: 2px;
    background-color: rgb(231, 232, 250);
    border: 1px solid rgb(17, 67, 107);
}
.pass:hover{
    background-color: rgb(0, 23, 41);
    color: rgb(173, 167, 167);
    border: 1px solid rgb(139, 139, 139);
}
.gender{
    margin: 15px 0 0 5%;
    color: #fff;
    font-size: 16px;
}
.gen{
    font-size: 18px;
}
.genm{
    margin-left: 5%;
}
.sub{
    width: 90%;
    margin: 15px 0 0 5%;
    font-size: 16px;
    height: 40px;
    background-color: #54e346;
    border: 1px solid rgb(17, 67, 107);
    color: #fff;
}
.sub:hover{
    background-color: #E94601;
    color: #fff;
}
.form-control{
    margin-left: 5%;
    width: 90%;
}
</style>
</head>
<body>
    <div class="warpper fl">
        <div class="main">
            <div class="head">
<p>
Trip Query</p>
</div>
<div class="form fl">
                <form action="mailto:Bhavyagoyal54@gmail.com" method="post" enctype="text/plain">
                    <p class="name">
 Name :</p>
<p>
<input type="text" name="name" placeholder="Enter Your Name" class="form-control" required></p>
<p class="name">
 Associated With :</p>
    <p>
 <select  id="associated with" class="form-control" required>
          <option>School</option>
          <option>Colleges</option>
          <option>Corporate</option>
          <option>Industry</option>
          

    </select></p>


<p class="name">
Type of Trips :</p>
<p>
 <select  id="planning" class="form-control" required>
          <option>Fun Learn Trip</option>
          <option>Curriculam Trip</option>
          <option>Industrial Trip</option>
          <option>One-Day Trip</option>
          <option>Parents-Teacher Trip</option>
          <option>Expert Trip</option>
          

    </select></p>
<p class="name">
Group Size :</P>
                    <p>
                    <select name="size" id="" class="form-control" required>
													<option value="Group Size">Group Size</option>
													<option value="01-05">01-05</option>
													<option value="06-10">06-10</option>
													<option value="11-20">11-20</option>
													<option value="20-30">20-30</option>
													<option value="30 +">30 +</option>
												</select></p>
<p class="name">
Contact Number :</P>
                    <p>
                    <input type="text" class="form-control" placeholder="Contact Number" name="contact" required></p>
                    <p class="name">
EMAIL :</p>
<p>
<input type="email" name="uid" placeholder="Email" class="form-control" required></p>

                    <p class="name">


Pickup Location :</P>
<p>
<input type="text" name="pickup" placeholder="Enter Your Pickup Location" class="form-control" required></p>

<p class="name">


Travel Location :</P>
<p>
<input type="text" name="travel" placeholder="Enter Your Travel Location" class="form-control" required></p>





<p>
<input type="submit" name="sb" value="SUBMIT" class="sub"></p>
</form>
</div>
</div>
</div>
</body>
</html>

