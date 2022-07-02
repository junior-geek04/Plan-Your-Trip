<html>

<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">

<style>
form {
  max-width: 900px;
  display: block;
  margin: 0 auto;
}
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
    height: 1050px;
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
 Intrested In :</p><p>
    <select id="interest" class="form-control" required>
          <option>Internship Role</option>
          <option>Full-Time Role</option>
          <option>Operations Role</option>
          <option>Product Role</option>
          <option>Sales Role</option>
          <option>Social Media Role</option>
          <option>Marketing Role</option>
          <option>Development Role</option>
          <option>Graphics Role</option>

    </select></p>
 
    <p class="name">Applying for:</p><p>
    <select class="form-control" id="apply" required>
          <option>Internship Role</option>
          <option>Full-Time Role</option>
          <option>Operations Role</option>
          <option>Product Role</option>
          <option>Sales Role</option>
          <option>Social Media Role</option>
          <option>Marketing Role</option>
          <option>Development Role</option>
          <option>Graphics Role</option>

    </select></p>

   
    <p class="name">
 Name :</p><p>
    <input type="text" class="form-control" id="name" placeholder="Enter Your Name" ">
  </p>

  <p class="name">
Your Preffered Job Location</p><p>
    <input type="text" class="form-control" id="name" placeholder="Enter Your Preffered Job Location" ></p>
  
  
  

    <div class="form-group">
    <label for="seeAnotherField" class="name">Willing To Reallocate</label>
    <select class="form-control" id="seeAnotherField" >
          <option value="no">No</option>
          <option value="yes" selected >Yes</option>
    </select>
  </div>
  <div class="form-group" id="otherFieldDiv">
    <label for="otherField" class="name">Enter Your Top Three Preffered Location</label>
   
    <input type="text" class="form-control" id="otherField" placeholder="Enter Your top 3 Preffered Job Location" >
    
  </div>
    
  


    <p class="name">Your Total Work experience</p>
    <p>
    <select class="form-control" id="years" >
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>More than 8</option>

    </select></p>

    <p class="name">Your Current/Last Company Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Your Current/Last Designation</p><p><div class="row">
    &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control" id="lcmpny" placeholder="Your Current/Last Company Name" style="width: 40%;">


    <input type="text" class="form-control" id="cdesig" placeholder="Your Current/Last Designation" style="width: 40%;"></div>
</p>


<p class="name">Enter Your Current CTC&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Enter Your Expected CTC              </p><p>
<div class="row"> &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="form-control" id="cctc" placeholder="Your Current CTC" style="width:40%"><input type="text" class="form-control" id="Ectc" placeholder="Your Expected CTC" style="width:40%"></div>
</p>

<p class="name">Enter Your 5 Accomplishments </p><p>
    <textarea class="form-control" id="accomplishment" rows="5" placeholder="Your Accomplishments"  ></textarea>
</p>
<p>
<input type="submit" name="sb" value="SUBMIT" class="sub"></p>

</form>
</div></div></div>
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
		
</script>
</body>
</html>







<!-- <html>

<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">

<style>
form {
  max-width: 900px;
  display: block;
  margin: 0 auto;
}
</style>
</head>
<body>
<form class="p-3">

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
    <input type="text" class="form-control" id="name" placeholder="Enter Your Name" style="width: 40%;">
  </div>
  <div class="form-group">
    <label for="loaction">Your Preffered Job Location</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Your Preffered Job Location" style="width: 40%;">
  </div>
  
  
  <div class="form-group">
    <label for="seeAnotherField">Willing To Reallocate</label>
    <select class="form-control" id="seeAnotherField" style="width: 40%;">
          <option value="no">No</option>
          <option value="yes">Yes</option>
    </select>
  </div>
  <div class="form-group" id="otherFieldDiv">
    <label for="otherField">Enter Your Top Three Preffered Location</label>
   
    <input type="text" class="form-control" id="otherField" placeholder="Enter Your top 3 Preffered Job Location" style="width: 40%;">
    
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
    <input type="text" class="form-control" id="lcmpny" placeholder="Your Current/Last Company Name" style="width: 40%;">
  </div>

  <div class="form-group">
    <label for="cdesig">Enter Your Current/Last Designation</label>
    <input type="text" class="form-control" id="cdesig" placeholder="Your Current/Last Designation" style="width: 40%;">
  </div>

  <div class="form-group">
    <label for="cctc">Enter Your Current CTC</label>
    <input type="text" class="form-control" id="cctc" placeholder="Your Current CTC" style="width: 40%;">
  </div>

  <div class="form-group">
    <label for="Ectc">Enter Your Expected CTC</label>
    <input type="text" class="form-control" id="Ectc" placeholder="Your Expected CTC" style="width: 40%;">
  </div>




  

    

  <div class="form-group">
    <label for="accomplishment">Enter Your 5 Accomplishments </label>
    <textarea class="form-control" id="accomplishment" rows="5" placeholder="Your Accomplishments" style="width: 40%;" ></textarea>
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
		
</script>
</body>
</html> -->