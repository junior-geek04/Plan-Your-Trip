<?php
if(isset($_POST['q3_email'])){
    $server="localhost";
    $username="root";
    $password="";
    $dbname="amt";

    $con=mysqli_connect($server, $username, $password, $dbname);

    if(!$con){
        die("Connection to this databse failed due to". mysqli_connect_error());
    }

    $q22_date=$_POST['q22_date'];
    $q2_name=$_POST['q2_name'];
    $q2_name=$_POST['q2_name'];
    $q3_email=$_POST['q3_email'];
    $q5_contactNumber=$_POST['q5_contactNumber'];
    $q4_address=$_POST['q4_address'];
    $q4_address=$_POST['q4_address'];
    $q4_address=$_POST['q4_address'];
    $q4_address=$_POST['q4_address'];
    $q40_typeA=$_POST['q40_typeA'];
    $q4_address=$_POST['q4_address'];
    $q25_modeType=$_POST['q25_modeType'];
    $q26_orderType=$_POST['q26_orderType'];
    $q37_name37=$_POST['q37_name37'];
    $q37_name37=$_POST['q37_name37'];
    $q20_email20=$_POST['q20_email20'];
    $q38_contactNumber38=$_POST['q38_contactNumber38'];
    $q39_address39=$_POST['q39_address39'];
    $q39_address39=$_POST['q39_address39'];
    $q4_address=$_POST['q4_address'];
    $q24_address24=$_POST['q24_address24'];
    $q40_typeA=$_POST['q40_typeA'];
    $q4_address=$_POST['q4_address'];
    $q27_packageCategory=$_POST['q27_packageCategory'];
    $q35_totalInvoice=$_POST['q35_totalInvoice'];
    $q28_numberOf=$_POST['q28_numberOf'];
    $q29_requiredVehicle=$_POST['q29_requiredVehicle'];
    $q36_weightinKg=$_POST['q36_weightinKg'];
    $itemQuantity=$_POST['itemQuantity'];
    $weight=$_POST['weight'];
    $length=$_POST['length'];
    $width=$_POST['width'];
    $height=$_POST['height'];
    $invoice=$_POST['invoice'];
    
    
    $sql="INSERT INTO `pldatabse` ( `date`, `pi_fname`, `pi_lname`, `pi_email`, `pi_phone`, `pi_addr_line1`, `pi_addr_line2`, 
    `pi_city`, `pi_district`, `pi_state`, `pi_postal`, `mode_type`, `order_type`, `de_fname`, `de_lname`, `de_email`, `de_phone`, 
    `de_addrline1`, `de_addrline2`, `de_city`, `de_district`, `de_state`, `de_postal`, `package_category`, `tot_invoice_amt`, 
    `no_of_packets`, `required_veh`, `weight_inkg`,`itemQuantity`,`weight`,`length`,`width`,`height`,`invoice`) 
    VALUES ('$q22_date[year]-[month]-[day]', '$q2_name[first]', '$q2_name[last]', '$q3_email', '$q5_contactNumber', 
    '$q4_address[addr_line1]', '$q4_address[addr_line2]', '$q4_address[city]', '$q24_address24[district]', '$q40_typeA',
    '$q4_address[postal]','$q25_modeType', '$q26_orderType', '$q37_name37[first]', '$q37_name37[last]', '$q20_email20',
    '$q38_contactNumber38','$q39_address39[addr_line1]', '$q39_address39[addr_line2]', '$q4_address[city]',
    '$q24_address24[district]', '$q40_typeA', '$q4_address[postal]', '$q27_packageCategory', '$q35_totalInvoice', '$q28_numberOf', 
    '$q29_requiredVehicle', '$q36_weightinKg', '$itemQuantity', '$weight', '$length', '$width', '$height',
    '$invoice');";

    $result=mysqli_query($con,$sql);

    if($result){
     echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='Logistic.html'</script>";
    }
    else{
      echo "ERROR: $con->error";
    }
  }
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html class="supernova"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=https%3A%2F%2Fform.jotform.com%2F201004008705438" title="oEmbed Form">
<link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=https%3A%2F%2Fform.jotform.com%2F201004008705438" title="oEmbed Form">
<meta property="og:title" content="ordernew" >
<meta property="og:url" content="https://form.jotform.com/201004008705438" >
<meta property="og:description" content="Please click the link to complete this form.">
<meta name="slack-app-id" content="AHNMASS8M">
<link rel="shortcut icon" href="https://cdn.jotfor.ms/favicon.ico">
<link rel="canonical" href="https://form.jotform.com/201004008705438" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
<meta name="HandheldFriendly" content="true" />
<title>Partload-AMT</title>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.16886" rel="stylesheet" type="text/css" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.16886" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.16886" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/548b1325700cc48d318b4567.css?themeRevisionID=5d9dde6d01344c57607dbf31"/>
<style type="text/css">
    .form-label-left{
        width:150px;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px;
    }
    body, html{
        margin:0;
        padding:0;
        background:#fff;
    }

    .form-all{
        margin:0px auto;
        padding-top:0px;
        width:690px;
        color:#555 !important;
        font-family:'Muli';
        font-size:16px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: false;
    }

</style>

<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/buttons/form-submit-button-simple_green_apple.css?3.3.16886"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.min.js"></script>
<script src="https://cdn.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.16886" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.16886" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.16886" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.16886" type="text/javascript"></script>
<script src="https://js.jotform.com/vendor/postMessage.js?3.3.16886" type="text/javascript"></script>
<script src="https://js.jotform.com/WidgetsServer.js?v=1586615186482" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.setConditions([{"action":[{"id":"action_1581690116457","visibility":"Hide","isError":false,"field":"10"}],"id":"1581690133174","index":"0","link":"Any","priority":"0","terms":[{"id":"term_1581690116457","field":"17","operator":"isEmpty","value":"","isError":false}],"type":"field"},{"action":[{"id":"action_0_1581690045611","visibility":"Hide","isError":false,"field":"10"}],"id":"1581689801697","index":"1","link":"Any","priority":"1","terms":[{"id":"term_0_1581690045611","field":"17","operator":"equals","value":"Yes","isError":false}],"type":"field"},{"action":[{"field":"11","visibility":"Show","id":"action_1_1581689802691"}],"id":"1581689543679","index":"2","link":"Any","priority":"2","terms":[{"field":"15","operator":"equals","value":"Yes"}],"type":"field"},{"action":[{"field":"18","visibility":"Show","id":"action_0_1581945983644","isError":false}],"id":"1581689543680","index":"3","link":"Any","priority":"3","terms":[{"field":"15","operator":"equals","value":"Yes","id":"term_0_1581945983644","isError":false}],"type":"field"},{"action":[{"field":"10","visibility":"Show","id":"action_3_1581689802691"}],"id":"1581689543681","index":"4","link":"Any","priority":"4","terms":[{"field":"15","operator":"equals","value":"Yes"}],"type":"field"}]);
	JotForm.init(function(){

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("22", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("22", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});
      JotForm.setPhoneMaskingValidator( 'input_5_full', '###-###-####' );
      JotForm.setPhoneMaskingValidator( 'input_38_full', '###-###-####' );
if (window.JotForm && JotForm.accessible) $('input_35').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_36').setAttribute('tabindex',0);
	JotForm.newDefaultTheme = false;
      JotForm.alterTexts({"couponApply":"Apply","couponBlank":"Please enter a coupon.","couponChange":"","couponEnter":"Enter coupon","couponExpired":"Coupon is expired. Please try another one.","couponInvalid":"Coupon is invalid.","couponValid":"Coupon is valid.","shippingShipping":"Shipping","taxTax":"Tax","totalSubtotal":"Subtotal","totalTotal":"Total"}, true);
    /*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"createOrder","qid":"1","text":"CREATE ORDER","type":"control_head"},{"name":"name","qid":"2","text":"Name","type":"control_fullname"},{"name":"email","qid":"3","text":"E-mail","type":"control_email"},{"name":"address","qid":"4","text":"Address","type":"control_address"},{"name":"contactNumber","qid":"5","text":"Contact Number","type":"control_phone"},null,null,null,null,null,null,null,{"name":"submit","qid":"13","text":"Book","type":"control_button"},null,null,null,null,null,null,{"description":"","name":"email20","qid":"20","subLabel":"example@example.com","text":"E-mail","type":"control_email"},null,{"description":"","name":"date","qid":"22","text":"Date","type":"control_datetime"},null,null,{"description":"","name":"modeType","qid":"25","subLabel":"","text":"Mode Type","type":"control_dropdown"},{"description":"","name":"orderType","qid":"26","subLabel":"","text":"Order Type","type":"control_dropdown"},{"description":"","name":"packageCategory","qid":"27","subLabel":"","text":"Package Category","type":"control_dropdown"},{"description":"","name":"numberOf","qid":"28","subLabel":"","text":"Number of Packets","type":"control_dropdown"},{"description":"","name":"requiredVehicle","qid":"29","subLabel":"","text":"Required Vehicle","type":"control_dropdown"},null,{"name":"pickupDetails","qid":"31","text":"PICKUP DETAILS","type":"control_head"},{"name":"deliveryDetails","qid":"32","text":"DELIVERY DETAILS","type":"control_head"},{"name":"packageDetails","qid":"33","text":"PACKAGE DETAILS","type":"control_head"},{"name":"otherSpecifications","qid":"34","text":"Other Specifications","type":"control_widget"},{"description":"","name":"totalInvoice","qid":"35","subLabel":"","text":"Total Invoice Amount","type":"control_textbox"},{"description":"","name":"weightinKg","qid":"36","subLabel":"","text":"Weight(in Kg)","type":"control_textbox"},{"description":"","name":"name37","qid":"37","text":"Name","type":"control_fullname"},{"description":"","name":"contactNumber38","qid":"38","text":"Contact Number","type":"control_phone"},{"description":"","name":"address39","qid":"39","text":"Address","type":"control_address"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"createOrder","qid":"1","text":"CREATE ORDER","type":"control_head"},{"name":"name","qid":"2","text":"Name","type":"control_fullname"},{"name":"email","qid":"3","text":"E-mail","type":"control_email"},{"name":"address","qid":"4","text":"Address","type":"control_address"},{"name":"contactNumber","qid":"5","text":"Contact Number","type":"control_phone"},null,null,null,null,null,null,null,{"name":"submit","qid":"13","text":"Book","type":"control_button"},null,null,null,null,null,null,{"description":"","name":"email20","qid":"20","subLabel":"example@example.com","text":"E-mail","type":"control_email"},null,{"description":"","name":"date","qid":"22","text":"Date","type":"control_datetime"},null,null,{"description":"","name":"modeType","qid":"25","subLabel":"","text":"Mode Type","type":"control_dropdown"},{"description":"","name":"orderType","qid":"26","subLabel":"","text":"Order Type","type":"control_dropdown"},{"description":"","name":"packageCategory","qid":"27","subLabel":"","text":"Package Category","type":"control_dropdown"},{"description":"","name":"numberOf","qid":"28","subLabel":"","text":"Number of Packets","type":"control_dropdown"},{"description":"","name":"requiredVehicle","qid":"29","subLabel":"","text":"Required Vehicle","type":"control_dropdown"},null,{"name":"pickupDetails","qid":"31","text":"PICKUP DETAILS","type":"control_head"},{"name":"deliveryDetails","qid":"32","text":"DELIVERY DETAILS","type":"control_head"},{"name":"packageDetails","qid":"33","text":"PACKAGE DETAILS","type":"control_head"},{"name":"otherSpecifications","qid":"34","text":"Other Specifications","type":"control_widget"},{"description":"","name":"totalInvoice","qid":"35","subLabel":"","text":"Total Invoice Amount","type":"control_textbox"},{"description":"","name":"weightinKg","qid":"36","subLabel":"","text":"Weight(in Kg)","type":"control_textbox"},{"description":"","name":"name37","qid":"37","text":"Name","type":"control_fullname"},{"description":"","name":"contactNumber38","qid":"38","text":"Contact Number","type":"control_phone"},{"description":"","name":"address39","qid":"39","text":"Address","type":"control_address"}]);}, 20); 
</script>
</head>
 <body onload="createTable()">
<form class="jotform-form" action="pl.php" method="post" name="form_201004008705438" id="201004008705438" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="201004008705438" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 id="header_1" class="form-header" data-component="header">
              CREATE ORDER
            </h1>
          </div>
        </div>
      </li>
      </li>
      <li class="form-line jf-required" data-type="control_datetime" id="id_22">
        <label class="form-label form-label-left form-label-auto" id="label_22" for="lite_mode_22">
          Date
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_22" class="form-input jf-required">
          <div data-wrapper-react="true">
            <div style="display:none">
              <span class="form-sub-label-container " style="vertical-align:top">
                <input type="tel" class="form-textbox validate[required, limitDate]" id="month_22" name="q22_date[month]" size="2" data-maxlength="2" maxLength="2" value="" required="" autoComplete="off" aria-labelledby="label_22 sublabel_22_month" />
                <span class="date-separate" aria-hidden="true">
                   -
                </span>
                <label class="form-sub-label" for="month_22" id="sublabel_22_month" style="min-height:13px" aria-hidden="false"> Month </label>
              </span>
              <span class="form-sub-label-container " style="vertical-align:top">
                <input type="tel" class="form-textbox validate[required, limitDate]" id="day_22" name="q22_date[day]" size="2" data-maxlength="2" maxLength="2" value="" required="" autoComplete="off" aria-labelledby="label_22 sublabel_22_day" />
                <span class="date-separate" aria-hidden="true">
                   -
                </span>
                <label class="form-sub-label" for="day_22" id="sublabel_22_day" style="min-height:13px" aria-hidden="false"> Day </label>
              </span>
              <span class="form-sub-label-container " style="vertical-align:top">
                <input type="tel" class="form-textbox validate[required, limitDate]" id="year_22" name="q22_date[year]" size="4" data-maxlength="4" maxLength="4" value="" required="" autoComplete="off" aria-labelledby="label_22 sublabel_22_year" />
                <label class="form-sub-label" for="year_22" id="sublabel_22_year" style="min-height:13px" aria-hidden="false"> Year </label>
              </span>
            </div>
            <span class="form-sub-label-container " style="vertical-align:top">
              <input type="text" class="form-textbox validate[required, limitDate, validateLiteDate]" id="lite_mode_22" size="12" data-maxlength="12" maxLength="12" data-age="" value="" required="" data-format="mmddyyyy" data-seperator="-" placeholder="mm-dd-yyyy" autoComplete="off" aria-labelledby="label_22 sublabel_22_litemode" />
              <img class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_22_pick" src="https://cdn.jotfor.ms/images/calendar.png" style="vertical-align:middle;margin-left:5px" data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v1" />
              <label class="form-sub-label" for="lite_mode_22" id="sublabel_22_litemode" style="min-height:13px" aria-hidden="false"> Date </label>
            </span>
          </div>
        </div>
      </li>
      <li id="cid_31" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-default">
          <div class="header-text httal htvam">
            <h2 id="header_31" class="form-header" data-component="header">
              PICKUP DETAILS
            </h2>
          </div>
        </div>
      </li>
      </li>
      <li class="form-line jf-required" data-type="control_fullname" id="id_2">
        <label class="form-label form-label-top" id="label_2" for="first_2">
          Name
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_2" class="form-input-wide jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_2" name="q2_name[first]" class="form-textbox validate[required]" size="10" value="" data-component="first" aria-labelledby="label_2 sublabel_2_first" required="" />
              <label class="form-sub-label" for="first_2" id="sublabel_2_first" style="min-height:13px" aria-hidden="false"> First Name </label>
            </span>
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_2" name="q2_name[last]" class="form-textbox validate[required]" size="15" value="" data-component="last" aria-labelledby="label_2 sublabel_2_last" required="" />
              <label class="form-sub-label" for="last_2" id="sublabel_2_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_email" id="id_3">
        <label class="form-label form-label-top" id="label_3" for="input_3">
          E-mail
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_3" class="form-input-wide jf-required">
          <input type="email" id="input_3" name="q3_email" class="form-textbox validate[required, Email]" size="30" value="" data-component="email" aria-labelledby="label_3" required="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_phone" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5_full">
          Contact Number
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_5" class="form-input-wide jf-required">
          <span class="form-sub-label-container " style="vertical-align:top">
           <input type="text" name="q5_contactNumber" class="mask-phone-number form-textbox validate[required, Fill Mask]" autoComplete="off" 
data-masked="true" 
value=""  aria-labelledby="label_5" required="">
            <label class="form-sub-label" for="input_5_full" id="sublabel_5_masked" style="min-height:13px" aria-hidden="false">  </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_address" id="id_4">
        <label class="form-label form-label-top" id="label_4" for="input_4_addr_line1">
          Address
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_4" class="form-input-wide jf-required">
          <table summary="" class="form-address-table">
            <tbody>
              <tr>
                <td colSpan="2">
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_4_addr_line1" name="q4_address[addr_line1]" class="form-textbox validate[required] form-address-line" value="" data-component="address_line_1" aria-labelledby="label_4 sublabel_4_addr_line1" required="" />
                    <label class="form-sub-label" for="input_4_addr_line1" id="sublabel_4_addr_line1" style="min-height:13px" aria-hidden="false"> Line 1 </label>
                  </span>
                </td>
              </tr>
              <tr>
                <td colSpan="2">
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_4_addr_line2" name="q4_address[addr_line2]" class="form-textbox form-address-line" size="46" value="" data-component="address_line_2" aria-labelledby="label_4 sublabel_4_addr_line2" />
                    <label class="form-sub-label" for="input_4_addr_line2" id="sublabel_4_addr_line2" style="min-height:13px" aria-hidden="false"> Line 2 </label>
                  </span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_4_city" name="q4_address[city]" class="form-textbox validate[required] form-address-city" size="21" value="" data-component="city" aria-labelledby="label_4 sublabel_4_city" required="" />
                    <label class="form-sub-label" for="input_4_city" id="sublabel_4_city" style="min-height:13px" aria-hidden="false"> City </label>
                  </span>
                </td>
				<td>
				<input type="text" id="input_24_district" name="q24_address24[district]" class="form-textbox form-address-district" size="21" value="" data-component="district" aria-labelledby="label_24 sublabel_24_district" />
                    <label class="form-sub-label" for="input_24_district" id="sublabel_24_district" style="min-height:13px" aria-hidden="false">District</label>
				</td>
				</tr>
				<tr>
				<td>
				 <span class="form-sub-label-container " style="vertical-align:top">
                   <select class="form-dropdown validate[required]" id="input_40" name="q40_typeA" style="width:150px" data-component="dropdown" required="" aria-labelledby="label_40">
					<option value="Andaman and Nicobar">Andaman and Nicobar</option>
					<option value="Andhra Pradesh">Andhra Pradesh</option>
					<option value="Arunachal Pradesh">Arunachal Pradesh</option>
					<option value="Assam">Assam</option>
					<option value="Bihar">Bihar</option>
					<option value="Chandigarh">Chandigarh</option>
					<option value="Chhattisgarh">Chhattisgarh</option>
					<option value="Daman and Diu">Daman and Diu</option>
					<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
					<option value="Delhi">Delhi</option>
					<option value="Goa">Goa</option>
					<option value="Gujarat">Gujarat</option>
					<option value="Haryana">Haryana</option>
					<option value="Himachal Pradesh">Himachal Pradesh</option>
					<option value="Jammu and Kashmir">Jammu and Kashmir</option>
					<option value="Jharkhand">Jharkhand</option>
					<option value="Karnataka">Karnataka</option>
					<option value="Kerala">Kerala</option>
					<option value="Ladakh">Ladakh</option>
					<option value="Lakshadweep">Lakshadweep</option>
					<option value=" Madhya Pradesh"> Madhya Pradesh</option>
					<option value="Maharashtra">Maharashtra</option>
					<option value="Manipur">Manipur</option>
					<option value="Meghalaya">Meghalaya</option>
					<option value="Mizoram">Mizoram</option>
					<option value="Nagaland">Nagaland</option>
					<option value="Odisha">Odisha</option>
					<option value="Puducherry">Puducherry</option>
					<option value="Punjab">Punjab</option>
					<option value="Rajasthan">Rajasthan</option>
					<option value="Sikkim">Sikkim</option>
					<option value="Tamil Nadu">Tamil Nadu</option>
					<option value="Telangana">Telangana</option>
					<option value="Tripura">Tripura</option>
					<option value="Uttar Pradesh">Uttar Pradesh</option>
					<option value="Uttarakhand">Uttarakhand</option>
					<option value="West Bengal">West Bengal</option>
					
				   </select>
                    <label class="form-sub-label" for="input_24_state" id="sublabel_24_state" style="min-height:13px" aria-hidden="false"> State </label>
                  </span>
                </td>
             
            
                <td>
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="number" id="input_4_postal" name="q4_address[postal]" class="form-textbox validate[required] form-address-postal" size="10" value="" data-component="zip" aria-labelledby="label_4 sublabel_4_postal" required="" />
                    <label class="form-sub-label" for="input_4_postal" id="sublabel_4_postal" style="min-height:13px" aria-hidden="false"> Pin Code </label>
                  </span>
                </td>
                <td style="display:none">
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <select class="form-dropdown form-address-country noTranslate" name="q4_address[country]" id="input_4_country" data-component="country" required="" aria-labelledby="label_4 sublabel_4_country">
                      <option value=""> Please Select </option>
                      <option value="United States"> United States </option>
                      <option value="Afghanistan"> Afghanistan </option>
                      <option value="Albania"> Albania </option>
                      <option value="Algeria"> Algeria </option>
                      <option value="American Samoa"> American Samoa </option>
                      <option value="Andorra"> Andorra </option>
                      <option value="Angola"> Angola </option>
                      <option value="Anguilla"> Anguilla </option>
                      <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                      <option value="Argentina"> Argentina </option>
                      <option value="Armenia"> Armenia </option>
                      <option value="Aruba"> Aruba </option>
                      <option value="Australia"> Australia </option>
                      <option value="Austria"> Austria </option>
                      <option value="Azerbaijan"> Azerbaijan </option>
                      <option value="The Bahamas"> The Bahamas </option>
                      <option value="Bahrain"> Bahrain </option>
                      <option value="Bangladesh"> Bangladesh </option>
                      <option value="Barbados"> Barbados </option>
                      <option value="Belarus"> Belarus </option>
                      <option value="Belgium"> Belgium </option>
                      <option value="Belize"> Belize </option>
                      <option value="Benin"> Benin </option>
                      <option value="Bermuda"> Bermuda </option>
                      <option value="Bhutan"> Bhutan </option>
                      <option value="Bolivia"> Bolivia </option>
                      <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                      <option value="Botswana"> Botswana </option>
                      <option value="Brazil"> Brazil </option>
                      <option value="Brunei"> Brunei </option>
                      <option value="Bulgaria"> Bulgaria </option>
                      <option value="Burkina Faso"> Burkina Faso </option>
                      <option value="Burundi"> Burundi </option>
                      <option value="Cambodia"> Cambodia </option>
                      <option value="Cameroon"> Cameroon </option>
                      <option value="Canada"> Canada </option>
                      <option value="Cape Verde"> Cape Verde </option>
                      <option value="Cayman Islands"> Cayman Islands </option>
                      <option value="Central African Republic"> Central African Republic </option>
                      <option value="Chad"> Chad </option>
                      <option value="Chile"> Chile </option>
                      <option value="China"> China </option>
                      <option value="Christmas Island"> Christmas Island </option>
                      <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                      <option value="Colombia"> Colombia </option>
                      <option value="Comoros"> Comoros </option>
                      <option value="Congo"> Congo </option>
                      <option value="Cook Islands"> Cook Islands </option>
                      <option value="Costa Rica"> Costa Rica </option>
                      <option value="Cote d&#x27;Ivoire"> Cote d&#x27;Ivoire </option>
                      <option value="Croatia"> Croatia </option>
                      <option value="Cuba"> Cuba </option>
                      <option value="Curacao"> Curacao </option>
                      <option value="Cyprus"> Cyprus </option>
                      <option value="Czech Republic"> Czech Republic </option>
                      <option value="Democratic Republic of the Congo"> Democratic Republic of the Congo </option>
                      <option value="Denmark"> Denmark </option>
                      <option value="Djibouti"> Djibouti </option>
                      <option value="Dominica"> Dominica </option>
                      <option value="Dominican Republic"> Dominican Republic </option>
                      <option value="Ecuador"> Ecuador </option>
                      <option value="Egypt"> Egypt </option>
                      <option value="El Salvador"> El Salvador </option>
                      <option value="Equatorial Guinea"> Equatorial Guinea </option>
                      <option value="Eritrea"> Eritrea </option>
                      <option value="Estonia"> Estonia </option>
                      <option value="Ethiopia"> Ethiopia </option>
                      <option value="Falkland Islands"> Falkland Islands </option>
                      <option value="Faroe Islands"> Faroe Islands </option>
                      <option value="Fiji"> Fiji </option>
                      <option value="Finland"> Finland </option>
                      <option value="France"> France </option>
                      <option value="French Polynesia"> French Polynesia </option>
                      <option value="Gabon"> Gabon </option>
                      <option value="The Gambia"> The Gambia </option>
                      <option value="Georgia"> Georgia </option>
                      <option value="Germany"> Germany </option>
                      <option value="Ghana"> Ghana </option>
                      <option value="Gibraltar"> Gibraltar </option>
                      <option value="Greece"> Greece </option>
                      <option value="Greenland"> Greenland </option>
                      <option value="Grenada"> Grenada </option>
                      <option value="Guadeloupe"> Guadeloupe </option>
                      <option value="Guam"> Guam </option>
                      <option value="Guatemala"> Guatemala </option>
                      <option value="Guernsey"> Guernsey </option>
                      <option value="Guinea"> Guinea </option>
                      <option value="Guinea-Bissau"> Guinea-Bissau </option>
                      <option value="Guyana"> Guyana </option>
                      <option value="Haiti"> Haiti </option>
                      <option value="Honduras"> Honduras </option>
                      <option value="Hong Kong"> Hong Kong </option>
                      <option value="Hungary"> Hungary </option>
                      <option value="Iceland"> Iceland </option>
                      <option value="India"> India </option>
                      <option value="Indonesia"> Indonesia </option>
                      <option value="Iran"> Iran </option>
                      <option value="Iraq"> Iraq </option>
                      <option value="Ireland"> Ireland </option>
                      <option value="Israel"> Israel </option>
                      <option value="Italy"> Italy </option>
                      <option value="Jamaica"> Jamaica </option>
                      <option value="Japan"> Japan </option>
                      <option value="Jersey"> Jersey </option>
                      <option value="Jordan"> Jordan </option>
                      <option value="Kazakhstan"> Kazakhstan </option>
                      <option value="Kenya"> Kenya </option>
                      <option value="Kiribati"> Kiribati </option>
                      <option value="North Korea"> North Korea </option>
                      <option value="South Korea"> South Korea </option>
                      <option value="Kosovo"> Kosovo </option>
                      <option value="Kuwait"> Kuwait </option>
                      <option value="Kyrgyzstan"> Kyrgyzstan </option>
                      <option value="Laos"> Laos </option>
                      <option value="Latvia"> Latvia </option>
                      <option value="Lebanon"> Lebanon </option>
                      <option value="Lesotho"> Lesotho </option>
                      <option value="Liberia"> Liberia </option>
                      <option value="Libya"> Libya </option>
                      <option value="Liechtenstein"> Liechtenstein </option>
                      <option value="Lithuania"> Lithuania </option>
                      <option value="Luxembourg"> Luxembourg </option>
                      <option value="Macau"> Macau </option>
                      <option value="Macedonia"> Macedonia </option>
                      <option value="Madagascar"> Madagascar </option>
                      <option value="Malawi"> Malawi </option>
                      <option value="Malaysia"> Malaysia </option>
                      <option value="Maldives"> Maldives </option>
                      <option value="Mali"> Mali </option>
                      <option value="Malta"> Malta </option>
                      <option value="Marshall Islands"> Marshall Islands </option>
                      <option value="Martinique"> Martinique </option>
                      <option value="Mauritania"> Mauritania </option>
                      <option value="Mauritius"> Mauritius </option>
                      <option value="Mayotte"> Mayotte </option>
                      <option value="Mexico"> Mexico </option>
                      <option value="Micronesia"> Micronesia </option>
                      <option value="Moldova"> Moldova </option>
                      <option value="Monaco"> Monaco </option>
                      <option value="Mongolia"> Mongolia </option>
                      <option value="Montenegro"> Montenegro </option>
                      <option value="Montserrat"> Montserrat </option>
                      <option value="Morocco"> Morocco </option>
                      <option value="Mozambique"> Mozambique </option>
                      <option value="Myanmar"> Myanmar </option>
                      <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                      <option value="Namibia"> Namibia </option>
                      <option value="Nauru"> Nauru </option>
                      <option value="Nepal"> Nepal </option>
                      <option value="Netherlands"> Netherlands </option>
                      <option value="Netherlands Antilles"> Netherlands Antilles </option>
                      <option value="New Caledonia"> New Caledonia </option>
                      <option value="New Zealand"> New Zealand </option>
                      <option value="Nicaragua"> Nicaragua </option>
                      <option value="Niger"> Niger </option>
                      <option value="Nigeria"> Nigeria </option>
                      <option value="Niue"> Niue </option>
                      <option value="Norfolk Island"> Norfolk Island </option>
                      <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
                      <option value="Northern Mariana"> Northern Mariana </option>
                      <option value="Norway"> Norway </option>
                      <option value="Oman"> Oman </option>
                      <option value="Pakistan"> Pakistan </option>
                      <option value="Palau"> Palau </option>
                      <option value="Palestine"> Palestine </option>
                      <option value="Panama"> Panama </option>
                      <option value="Papua New Guinea"> Papua New Guinea </option>
                      <option value="Paraguay"> Paraguay </option>
                      <option value="Peru"> Peru </option>
                      <option value="Philippines"> Philippines </option>
                      <option value="Pitcairn Islands"> Pitcairn Islands </option>
                      <option value="Poland"> Poland </option>
                      <option value="Portugal"> Portugal </option>
                      <option value="Puerto Rico"> Puerto Rico </option>
                      <option value="Qatar"> Qatar </option>
                      <option value="Republic of the Congo"> Republic of the Congo </option>
                      <option value="Romania"> Romania </option>
                      <option value="Russia"> Russia </option>
                      <option value="Rwanda"> Rwanda </option>
                      <option value="Saint Barthelemy"> Saint Barthelemy </option>
                      <option value="Saint Helena"> Saint Helena </option>
                      <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                      <option value="Saint Lucia"> Saint Lucia </option>
                      <option value="Saint Martin"> Saint Martin </option>
                      <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                      <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
                      <option value="Samoa"> Samoa </option>
                      <option value="San Marino"> San Marino </option>
                      <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                      <option value="Saudi Arabia"> Saudi Arabia </option>
                      <option value="Senegal"> Senegal </option>
                      <option value="Serbia"> Serbia </option>
                      <option value="Seychelles"> Seychelles </option>
                      <option value="Sierra Leone"> Sierra Leone </option>
                      <option value="Singapore"> Singapore </option>
                      <option value="Slovakia"> Slovakia </option>
                      <option value="Slovenia"> Slovenia </option>
                      <option value="Solomon Islands"> Solomon Islands </option>
                      <option value="Somalia"> Somalia </option>
                      <option value="Somaliland"> Somaliland </option>
                      <option value="South Africa"> South Africa </option>
                      <option value="South Ossetia"> South Ossetia </option>
                      <option value="South Sudan"> South Sudan </option>
                      <option value="Spain"> Spain </option>
                      <option value="Sri Lanka"> Sri Lanka </option>
                      <option value="Sudan"> Sudan </option>
                      <option value="Suriname"> Suriname </option>
                      <option value="Svalbard"> Svalbard </option>
                      <option value="eSwatini"> eSwatini </option>
                      <option value="Sweden"> Sweden </option>
                      <option value="Switzerland"> Switzerland </option>
                      <option value="Syria"> Syria </option>
                      <option value="Taiwan"> Taiwan </option>
                      <option value="Tajikistan"> Tajikistan </option>
                      <option value="Tanzania"> Tanzania </option>
                      <option value="Thailand"> Thailand </option>
                      <option value="Timor-Leste"> Timor-Leste </option>
                      <option value="Togo"> Togo </option>
                      <option value="Tokelau"> Tokelau </option>
                      <option value="Tonga"> Tonga </option>
                      <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                      <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                      <option value="Tristan da Cunha"> Tristan da Cunha </option>
                      <option value="Tunisia"> Tunisia </option>
                      <option value="Turkey"> Turkey </option>
                      <option value="Turkmenistan"> Turkmenistan </option>
                      <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                      <option value="Tuvalu"> Tuvalu </option>
                      <option value="Uganda"> Uganda </option>
                      <option value="Ukraine"> Ukraine </option>
                      <option value="United Arab Emirates"> United Arab Emirates </option>
                      <option value="United Kingdom"> United Kingdom </option>
                      <option value="Uruguay"> Uruguay </option>
                      <option value="Uzbekistan"> Uzbekistan </option>
                      <option value="Vanuatu"> Vanuatu </option>
                      <option value="Vatican City"> Vatican City </option>
                      <option value="Venezuela"> Venezuela </option>
                      <option value="Vietnam"> Vietnam </option>
                      <option value="British Virgin Islands"> British Virgin Islands </option>
                      <option value="Isle of Man"> Isle of Man </option>
                      <option value="US Virgin Islands"> US Virgin Islands </option>
                      <option value="Wallis and Futuna"> Wallis and Futuna </option>
                      <option value="Western Sahara"> Western Sahara </option>
                      <option value="Yemen"> Yemen </option>
                      <option value="Zambia"> Zambia </option>
                      <option value="Zimbabwe"> Zimbabwe </option>
                      <option value="other"> Other </option>
                    </select>
                    <label class="form-sub-label" for="input_4_country" id="sublabel_4_country" style="min-height:13px" aria-hidden="false"> Country </label>
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_25">
        <label class="form-label form-label-left form-label-auto" id="label_25" for="input_25">
          Mode Type
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_25" class="form-input jf-required">
          <select class="form-dropdown validate[required]" id="input_25" name="q25_modeType" style="width:150px" data-component="dropdown" required="" aria-labelledby="label_25">
            <option value="">  </option>
            <option value="AIR"> AIR </option>
            <option value="LITE- 2 Kg"> LITE- 2 Kg </option>
            <option value="LITE- 1 Kg"> LITE- 1 Kg </option>
            <option value="LITE- 0.5 Kg"> LITE- 0.5 Kg </option>
            <option value="SURFACE- 10 Kg"> SURFACE- 10 Kg </option>
            <option value="SURFACE- 5 Kg"> SURFACE- 5 Kg </option>
            <option value="">  </option>
          </select>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_26">
        <label class="form-label form-label-left form-label-auto" id="label_26" for="input_26">
          Order Type
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_26" class="form-input jf-required">
          <select class="form-dropdown validate[required]" id="input_26" name="q26_orderType" style="width:150px" data-component="dropdown" required="" aria-labelledby="label_26">
            <option value="">  </option>
            <option value="Pre-Paid"> Pre-Paid </option>
            <option value="COD"> COD </option>
            <option value="Reverse"> Reverse </option>
            <option value="">  </option>
          </select>
        </div>
      </li>
      <li id="cid_32" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-default">
          <div class="header-text httal htvam">
            <h2 id="header_32" class="form-header" data-component="header">
              DELIVERY DETAILS
            </h2>
          </div>
        </div>
      </li>
      </li>
      <li class="form-line jf-required" data-type="control_fullname" id="id_37">
        <label class="form-label form-label-top" id="label_37" for="first_37">
          Name
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_37" class="form-input-wide jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_37" name="q37_name37[first]" class="form-textbox validate[required]" size="10" value="" data-component="first" aria-labelledby="label_37 sublabel_37_first" required="" />
              <label class="form-sub-label" for="first_37" id="sublabel_37_first" style="min-height:13px" aria-hidden="false"> First Name </label>
            </span>
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_37" name="q37_name37[last]" class="form-textbox validate[required]" size="15" value="" data-component="last" aria-labelledby="label_37 sublabel_37_last" required="" />
              <label class="form-sub-label" for="last_37" id="sublabel_37_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_email" id="id_20">
        <label class="form-label form-label-top" id="label_20" for="input_20">
          E-mail
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_20" class="form-input-wide jf-required">
          <span class="form-sub-label-container " style="vertical-align:top">
            <input type="email" id="input_20" name="q20_email20" class="form-textbox validate[required, Email]" size="30" value="" data-component="email" aria-labelledby="label_20 sublabel_input_20" required="" />
            <label class="form-sub-label" for="input_20" id="sublabel_input_20" style="min-height:13px" aria-hidden="false"> example@example.com </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_phone" id="id_38">
        <label class="form-label form-label-top" id="label_38" for="input_38_full">
          Contact Number
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_38" class="form-input-wide jf-required">
          <span class="form-sub-label-container " style="vertical-align:top">
            <input type="text" name="q38_contactNumber38" class="mask-phone-number form-textbox validate[required, Fill Mask]" autoComplete="off" 
data-masked="true" 
value=""  aria-labelledby="label_5" required="">
            <label class="form-sub-label" for="input_38_full" id="sublabel_38_masked" style="min-height:13px" aria-hidden="false">  </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_address" id="id_39">
        <label class="form-label form-label-top" id="label_39" for="input_39_addr_line1">
          Address
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_39" class="form-input-wide jf-required">
          <table summary="" class="form-address-table">
            <tbody>
              <tr>
                <td colSpan="2">
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_39_addr_line1" name="q39_address39[addr_line1]" class="form-textbox validate[required] form-address-line" value="" data-component="address_line_1" aria-labelledby="label_39 sublabel_39_addr_line1" required="" />
                    <label class="form-sub-label" for="input_39_addr_line1" id="sublabel_39_addr_line1" style="min-height:13px" aria-hidden="false"> Line 1 </label>
                  </span>
                </td>
              </tr>
              <tr>
                <td colSpan="2">
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_39_addr_line2" name="q39_address39[addr_line2]" class="form-textbox form-address-line" size="46" value="" data-component="address_line_2" aria-labelledby="label_39 sublabel_39_addr_line2" />
                    <label class="form-sub-label" for="input_39_addr_line2" id="sublabel_39_addr_line2" style="min-height:13px" aria-hidden="false"> Line 2 </label>
                  </span>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="text" id="input_4_city" name="q4_address[city]" class="form-textbox validate[required] form-address-city" size="21" value="" data-component="city" aria-labelledby="label_4 sublabel_4_city" required="" />
                    <label class="form-sub-label" for="input_4_city" id="sublabel_4_city" style="min-height:13px" aria-hidden="false"> City </label>
                  </span>
                </td>
				<td>
				<input type="text" id="input_24_district" name="q24_address24[district]" class="form-textbox form-address-district" size="21" value="" data-component="district" aria-labelledby="label_24 sublabel_24_district" />
                    <label class="form-sub-label" for="input_24_district" id="sublabel_24_district" style="min-height:13px" aria-hidden="false">District</label>
				</td>
				</tr>
				<tr>
				<td>
				 <span class="form-sub-label-container " style="vertical-align:top">
                   <select class="form-dropdown validate[required]" id="input_40" name="q40_typeA" style="width:150px" data-component="dropdown" required="" aria-labelledby="label_40">
					<option value="Andaman and Nicobar">Andaman and Nicobar</option>
					<option value="Andhra Pradesh">Andhra Pradesh</option>
					<option value="Arunachal Pradesh">Arunachal Pradesh</option>
					<option value="Assam">Assam</option>
					<option value="Bihar">Bihar</option>
					<option value="Chandigarh">Chandigarh</option>
					<option value="Chhattisgarh">Chhattisgarh</option>
					<option value="Daman and Diu">Daman and Diu</option>
					<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
					<option value="Delhi">Delhi</option>
					<option value="Goa">Goa</option>
					<option value="Gujarat">Gujarat</option>
					<option value="Haryana">Haryana</option>
					<option value="Himachal Pradesh">Himachal Pradesh</option>
					<option value="Jammu and Kashmir">Jammu and Kashmir</option>
					<option value="Jharkhand">Jharkhand</option>
					<option value="Karnataka">Karnataka</option>
					<option value="Kerala">Kerala</option>
					<option value="Ladakh">Ladakh</option>
					<option value="Lakshadweep">Lakshadweep</option>
					<option value=" Madhya Pradesh"> Madhya Pradesh</option>
					<option value="Maharashtra">Maharashtra</option>
					<option value="Manipur">Manipur</option>
					<option value="Meghalaya">Meghalaya</option>
					<option value="Mizoram">Mizoram</option>
					<option value="Nagaland">Nagaland</option>
					<option value="Odisha">Odisha</option>
					<option value="Puducherry">Puducherry</option>
					<option value="Punjab">Punjab</option>
					<option value="Rajasthan">Rajasthan</option>
					<option value="Sikkim">Sikkim</option>
					<option value="Tamil Nadu">Tamil Nadu</option>
					<option value="Telangana">Telangana</option>
					<option value="Tripura">Tripura</option>
					<option value="Uttar Pradesh">Uttar Pradesh</option>
					<option value="Uttarakhand">Uttarakhand</option>
					<option value="West Bengal">West Bengal</option>
					
				   </select>
                    <label class="form-sub-label" for="input_24_state" id="sublabel_24_state" style="min-height:13px" aria-hidden="false"> State </label>
                  </span>
                </td>
             
            
                <td>
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <input type="number" id="input_4_postal" name="q4_address[postal]" class="form-textbox validate[required] form-address-postal" size="10" value="" data-component="zip" aria-labelledby="label_4 sublabel_4_postal" required="" />
                    <label class="form-sub-label" for="input_4_postal" id="sublabel_4_postal" style="min-height:13px" aria-hidden="false"> Pin Code </label>
                  </span>
                </td>
                <td style="display:none">
                  <span class="form-sub-label-container " style="vertical-align:top">
                    <select class="form-dropdown form-address-country noTranslate" name="q39_address39[country]" id="input_39_country" data-component="country" required="" aria-labelledby="label_39 sublabel_39_country">
                      <option value=""> Please Select </option>
                      <option value="United States"> United States </option>
                      <option value="Afghanistan"> Afghanistan </option>
                      <option value="Albania"> Albania </option>
                      <option value="Algeria"> Algeria </option>
                      <option value="American Samoa"> American Samoa </option>
                      <option value="Andorra"> Andorra </option>
                      <option value="Angola"> Angola </option>
                      <option value="Anguilla"> Anguilla </option>
                      <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                      <option value="Argentina"> Argentina </option>
                      <option value="Armenia"> Armenia </option>
                      <option value="Aruba"> Aruba </option>
                      <option value="Australia"> Australia </option>
                      <option value="Austria"> Austria </option>
                      <option value="Azerbaijan"> Azerbaijan </option>
                      <option value="The Bahamas"> The Bahamas </option>
                      <option value="Bahrain"> Bahrain </option>
                      <option value="Bangladesh"> Bangladesh </option>
                      <option value="Barbados"> Barbados </option>
                      <option value="Belarus"> Belarus </option>
                      <option value="Belgium"> Belgium </option>
                      <option value="Belize"> Belize </option>
                      <option value="Benin"> Benin </option>
                      <option value="Bermuda"> Bermuda </option>
                      <option value="Bhutan"> Bhutan </option>
                      <option value="Bolivia"> Bolivia </option>
                      <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                      <option value="Botswana"> Botswana </option>
                      <option value="Brazil"> Brazil </option>
                      <option value="Brunei"> Brunei </option>
                      <option value="Bulgaria"> Bulgaria </option>
                      <option value="Burkina Faso"> Burkina Faso </option>
                      <option value="Burundi"> Burundi </option>
                      <option value="Cambodia"> Cambodia </option>
                      <option value="Cameroon"> Cameroon </option>
                      <option value="Canada"> Canada </option>
                      <option value="Cape Verde"> Cape Verde </option>
                      <option value="Cayman Islands"> Cayman Islands </option>
                      <option value="Central African Republic"> Central African Republic </option>
                      <option value="Chad"> Chad </option>
                      <option value="Chile"> Chile </option>
                      <option value="China"> China </option>
                      <option value="Christmas Island"> Christmas Island </option>
                      <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                      <option value="Colombia"> Colombia </option>
                      <option value="Comoros"> Comoros </option>
                      <option value="Congo"> Congo </option>
                      <option value="Cook Islands"> Cook Islands </option>
                      <option value="Costa Rica"> Costa Rica </option>
                      <option value="Cote d&#x27;Ivoire"> Cote d&#x27;Ivoire </option>
                      <option value="Croatia"> Croatia </option>
                      <option value="Cuba"> Cuba </option>
                      <option value="Curacao"> Curacao </option>
                      <option value="Cyprus"> Cyprus </option>
                      <option value="Czech Republic"> Czech Republic </option>
                      <option value="Democratic Republic of the Congo"> Democratic Republic of the Congo </option>
                      <option value="Denmark"> Denmark </option>
                      <option value="Djibouti"> Djibouti </option>
                      <option value="Dominica"> Dominica </option>
                      <option value="Dominican Republic"> Dominican Republic </option>
                      <option value="Ecuador"> Ecuador </option>
                      <option value="Egypt"> Egypt </option>
                      <option value="El Salvador"> El Salvador </option>
                      <option value="Equatorial Guinea"> Equatorial Guinea </option>
                      <option value="Eritrea"> Eritrea </option>
                      <option value="Estonia"> Estonia </option>
                      <option value="Ethiopia"> Ethiopia </option>
                      <option value="Falkland Islands"> Falkland Islands </option>
                      <option value="Faroe Islands"> Faroe Islands </option>
                      <option value="Fiji"> Fiji </option>
                      <option value="Finland"> Finland </option>
                      <option value="France"> France </option>
                      <option value="French Polynesia"> French Polynesia </option>
                      <option value="Gabon"> Gabon </option>
                      <option value="The Gambia"> The Gambia </option>
                      <option value="Georgia"> Georgia </option>
                      <option value="Germany"> Germany </option>
                      <option value="Ghana"> Ghana </option>
                      <option value="Gibraltar"> Gibraltar </option>
                      <option value="Greece"> Greece </option>
                      <option value="Greenland"> Greenland </option>
                      <option value="Grenada"> Grenada </option>
                      <option value="Guadeloupe"> Guadeloupe </option>
                      <option value="Guam"> Guam </option>
                      <option value="Guatemala"> Guatemala </option>
                      <option value="Guernsey"> Guernsey </option>
                      <option value="Guinea"> Guinea </option>
                      <option value="Guinea-Bissau"> Guinea-Bissau </option>
                      <option value="Guyana"> Guyana </option>
                      <option value="Haiti"> Haiti </option>
                      <option value="Honduras"> Honduras </option>
                      <option value="Hong Kong"> Hong Kong </option>
                      <option value="Hungary"> Hungary </option>
                      <option value="Iceland"> Iceland </option>
                      <option value="India"> India </option>
                      <option value="Indonesia"> Indonesia </option>
                      <option value="Iran"> Iran </option>
                      <option value="Iraq"> Iraq </option>
                      <option value="Ireland"> Ireland </option>
                      <option value="Israel"> Israel </option>
                      <option value="Italy"> Italy </option>
                      <option value="Jamaica"> Jamaica </option>
                      <option value="Japan"> Japan </option>
                      <option value="Jersey"> Jersey </option>
                      <option value="Jordan"> Jordan </option>
                      <option value="Kazakhstan"> Kazakhstan </option>
                      <option value="Kenya"> Kenya </option>
                      <option value="Kiribati"> Kiribati </option>
                      <option value="North Korea"> North Korea </option>
                      <option value="South Korea"> South Korea </option>
                      <option value="Kosovo"> Kosovo </option>
                      <option value="Kuwait"> Kuwait </option>
                      <option value="Kyrgyzstan"> Kyrgyzstan </option>
                      <option value="Laos"> Laos </option>
                      <option value="Latvia"> Latvia </option>
                      <option value="Lebanon"> Lebanon </option>
                      <option value="Lesotho"> Lesotho </option>
                      <option value="Liberia"> Liberia </option>
                      <option value="Libya"> Libya </option>
                      <option value="Liechtenstein"> Liechtenstein </option>
                      <option value="Lithuania"> Lithuania </option>
                      <option value="Luxembourg"> Luxembourg </option>
                      <option value="Macau"> Macau </option>
                      <option value="Macedonia"> Macedonia </option>
                      <option value="Madagascar"> Madagascar </option>
                      <option value="Malawi"> Malawi </option>
                      <option value="Malaysia"> Malaysia </option>
                      <option value="Maldives"> Maldives </option>
                      <option value="Mali"> Mali </option>
                      <option value="Malta"> Malta </option>
                      <option value="Marshall Islands"> Marshall Islands </option>
                      <option value="Martinique"> Martinique </option>
                      <option value="Mauritania"> Mauritania </option>
                      <option value="Mauritius"> Mauritius </option>
                      <option value="Mayotte"> Mayotte </option>
                      <option value="Mexico"> Mexico </option>
                      <option value="Micronesia"> Micronesia </option>
                      <option value="Moldova"> Moldova </option>
                      <option value="Monaco"> Monaco </option>
                      <option value="Mongolia"> Mongolia </option>
                      <option value="Montenegro"> Montenegro </option>
                      <option value="Montserrat"> Montserrat </option>
                      <option value="Morocco"> Morocco </option>
                      <option value="Mozambique"> Mozambique </option>
                      <option value="Myanmar"> Myanmar </option>
                      <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                      <option value="Namibia"> Namibia </option>
                      <option value="Nauru"> Nauru </option>
                      <option value="Nepal"> Nepal </option>
                      <option value="Netherlands"> Netherlands </option>
                      <option value="Netherlands Antilles"> Netherlands Antilles </option>
                      <option value="New Caledonia"> New Caledonia </option>
                      <option value="New Zealand"> New Zealand </option>
                      <option value="Nicaragua"> Nicaragua </option>
                      <option value="Niger"> Niger </option>
                      <option value="Nigeria"> Nigeria </option>
                      <option value="Niue"> Niue </option>
                      <option value="Norfolk Island"> Norfolk Island </option>
                      <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
                      <option value="Northern Mariana"> Northern Mariana </option>
                      <option value="Norway"> Norway </option>
                      <option value="Oman"> Oman </option>
                      <option value="Pakistan"> Pakistan </option>
                      <option value="Palau"> Palau </option>
                      <option value="Palestine"> Palestine </option>
                      <option value="Panama"> Panama </option>
                      <option value="Papua New Guinea"> Papua New Guinea </option>
                      <option value="Paraguay"> Paraguay </option>
                      <option value="Peru"> Peru </option>
                      <option value="Philippines"> Philippines </option>
                      <option value="Pitcairn Islands"> Pitcairn Islands </option>
                      <option value="Poland"> Poland </option>
                      <option value="Portugal"> Portugal </option>
                      <option value="Puerto Rico"> Puerto Rico </option>
                      <option value="Qatar"> Qatar </option>
                      <option value="Republic of the Congo"> Republic of the Congo </option>
                      <option value="Romania"> Romania </option>
                      <option value="Russia"> Russia </option>
                      <option value="Rwanda"> Rwanda </option>
                      <option value="Saint Barthelemy"> Saint Barthelemy </option>
                      <option value="Saint Helena"> Saint Helena </option>
                      <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                      <option value="Saint Lucia"> Saint Lucia </option>
                      <option value="Saint Martin"> Saint Martin </option>
                      <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                      <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
                      <option value="Samoa"> Samoa </option>
                      <option value="San Marino"> San Marino </option>
                      <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                      <option value="Saudi Arabia"> Saudi Arabia </option>
                      <option value="Senegal"> Senegal </option>
                      <option value="Serbia"> Serbia </option>
                      <option value="Seychelles"> Seychelles </option>
                      <option value="Sierra Leone"> Sierra Leone </option>
                      <option value="Singapore"> Singapore </option>
                      <option value="Slovakia"> Slovakia </option>
                      <option value="Slovenia"> Slovenia </option>
                      <option value="Solomon Islands"> Solomon Islands </option>
                      <option value="Somalia"> Somalia </option>
                      <option value="Somaliland"> Somaliland </option>
                      <option value="South Africa"> South Africa </option>
                      <option value="South Ossetia"> South Ossetia </option>
                      <option value="South Sudan"> South Sudan </option>
                      <option value="Spain"> Spain </option>
                      <option value="Sri Lanka"> Sri Lanka </option>
                      <option value="Sudan"> Sudan </option>
                      <option value="Suriname"> Suriname </option>
                      <option value="Svalbard"> Svalbard </option>
                      <option value="eSwatini"> eSwatini </option>
                      <option value="Sweden"> Sweden </option>
                      <option value="Switzerland"> Switzerland </option>
                      <option value="Syria"> Syria </option>
                      <option value="Taiwan"> Taiwan </option>
                      <option value="Tajikistan"> Tajikistan </option>
                      <option value="Tanzania"> Tanzania </option>
                      <option value="Thailand"> Thailand </option>
                      <option value="Timor-Leste"> Timor-Leste </option>
                      <option value="Togo"> Togo </option>
                      <option value="Tokelau"> Tokelau </option>
                      <option value="Tonga"> Tonga </option>
                      <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                      <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                      <option value="Tristan da Cunha"> Tristan da Cunha </option>
                      <option value="Tunisia"> Tunisia </option>
                      <option value="Turkey"> Turkey </option>
                      <option value="Turkmenistan"> Turkmenistan </option>
                      <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                      <option value="Tuvalu"> Tuvalu </option>
                      <option value="Uganda"> Uganda </option>
                      <option value="Ukraine"> Ukraine </option>
                      <option value="United Arab Emirates"> United Arab Emirates </option>
                      <option value="United Kingdom"> United Kingdom </option>
                      <option value="Uruguay"> Uruguay </option>
                      <option value="Uzbekistan"> Uzbekistan </option>
                      <option value="Vanuatu"> Vanuatu </option>
                      <option value="Vatican City"> Vatican City </option>
                      <option value="Venezuela"> Venezuela </option>
                      <option value="Vietnam"> Vietnam </option>
                      <option value="British Virgin Islands"> British Virgin Islands </option>
                      <option value="Isle of Man"> Isle of Man </option>
                      <option value="US Virgin Islands"> US Virgin Islands </option>
                      <option value="Wallis and Futuna"> Wallis and Futuna </option>
                      <option value="Western Sahara"> Western Sahara </option>
                      <option value="Yemen"> Yemen </option>
                      <option value="Zambia"> Zambia </option>
                      <option value="Zimbabwe"> Zimbabwe </option>
                      <option value="other"> Other </option>
                    </select>
                    <label class="form-sub-label" for="input_39_country" id="sublabel_39_country" style="min-height:13px" aria-hidden="false"> Country </label>
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </li>
      <li id="cid_33" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-default">
          <div class="header-text httal htvam">
            <h2 id="header_33" class="form-header" data-component="header">
              PACKAGE DETAILS
            </h2>
          </div>
        </div>
      </li>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_27">
        <label class="form-label form-label-left form-label-auto" id="label_27" for="input_27">
          Package Category
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_27" class="form-input jf-required">
          <select class="form-dropdown validate[required]" id="input_27" name="q27_packageCategory" style="width:150px" data-component="dropdown" required="" aria-labelledby="label_27">
            <option value="">  </option>
            <option value="Toys &amp; Baby Products"> Toys &amp; Baby Products </option>
            <option value="Handbags &amp; Luggage"> Handbags &amp; Luggage </option>
            <option value="Computer &amp; Accessories"> Computer &amp; Accessories </option>
            <option value="Food Articles"> Food Articles </option>
            <option value="Home &amp; Kitchen Parts"> Home &amp; Kitchen Parts </option>
            <option value="Shoe &amp; Leather Items"> Shoe &amp; Leather Items </option>
            <option value="Clothing &amp; Accessories"> Clothing &amp; Accessories </option>
            <option value="Gift Items"> Gift Items </option>
            <option value="Books &amp; Stationery Items"> Books &amp; Stationery Items </option>
            <option value="Movies, Music &amp; Videos Games"> Movies, Music &amp; Videos Games </option>
            <option value="Camera, Tablets &amp; Phones"> Camera, Tablets &amp; Phones </option>
            <option value="Sports, Fitness &amp; Outdoors"> Sports, Fitness &amp; Outdoors </option>
            <option value="Beauty, Health &amp; Gourmet"> Beauty, Health &amp; Gourmet </option>
            <option value="Jewellery, Watches, Eyewear "> Jewellery, Watches, Eyewear </option>
            <option value="Car, Motorcycle, Industial"> Car, Motorcycle, Industial </option>
            <option value="Furniture"> Furniture </option>
            <option value="Others"> Others </option>
            <option value="">  </option>
          </select>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_35">
        <label class="form-label form-label-left form-label-auto" id="label_35" for="input_35"> Total Invoice Amount </label>
        <div id="cid_35" class="form-input">
          <input type="text" id="input_35" name="q35_totalInvoice" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" aria-labelledby="label_35" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_28">
        <label class="form-label form-label-left form-label-auto" id="label_28" for="input_28">
          Number of Packets
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_28" class="form-input jf-required">
          <select class="form-dropdown validate[required]" id="input_28" name="q28_numberOf" style="width:150px" data-component="dropdown" required="" aria-labelledby="label_28">
            <option value="">  </option>
            <option value="1 to 5"> 1 to 5 </option>
            <option value="6 to 10"> 6 to 10 </option>
            <option value="11 to 15"> 11 to 15 </option>
            <option value="16 to 30"> 16 to 30 </option>
            <option value="31 to 50"> 31 to 50 </option>
            <option value="51 to 100"> 51 to 100 </option>
            <option value="more than 100"> more than 100 </option>
            <option value="">  </option>
          </select>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_29">
        <label class="form-label form-label-left form-label-auto" id="label_29" for="input_29">
          Required Vehicle
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_29" class="form-input jf-required">
          <select class="form-dropdown validate[required]" id="input_29" name="q29_requiredVehicle" style="width:150px" data-component="dropdown" required="" aria-labelledby="label_29">
            <option value="">  </option>
            <option value="14 feet"> 14 feet </option>
            <option value="19 ft"> 19 ft </option>
            <option value="17 ft"> 17 ft </option>
            <option value="20 ft"> 20 ft </option>
            <option value="14 feet- Closed"> 14 feet- Closed </option>
            <option value="19 ft- Closed"> 19 ft- Closed </option>
            <option value="17 ft- Closed"> 17 ft- Closed </option>
            <option value="20 ft- Closed"> 20 ft- Closed </option>
            <option value="32 ft- Closed"> 32 ft- Closed </option>
            <option value=" Tata Ace"> Tata Ace </option>
            <option value="Tata Champion"> Tata Champion </option>
            <option value="Tata EECO"> Tata EECO </option>
            <option value="Pickup-407"> Pickup-407 </option>
            <option value="">  </option>
          </select>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_36">
        <label class="form-label form-label-left form-label-auto" id="label_36" for="input_36"> Weight(in Kg) </label>
        <div id="cid_36" class="form-input">
          <input type="text" id="input_36" name="q36_weightinKg" data-type="input-textbox" class="form-textbox" size="20" value="" data-component="textbox" aria-labelledby="label_36" />
        </div>
      </li>
	  <li class="form-input-wide" >
	  <label class="form-label form-label-top" id="label_38" for="input_38_full">
          &nbsp &nbsp &nbsp &nbsp Other Specifications</label>
<div id="wrapper">
<table align='center' id="data_table" border="1" style="width:90%; table-layout:fixed;">
<tr>
<th>Item Quantity</th>
<th>Weight(in Kg)</th>
<th>Length(in cm)</th>
<th>Width(in cm)</th>
<th>Height(in cm)</th>
<th>Total Invoice Amt.(in rupees)</th>
<th></th>
</tr>



<tr>
<td><input type="number" id="new_quantity" name="itemQuantity" style="width:4rem"></td>
<td><input type="number" id="new_weight" name="weight" style="width:4rem"></td>
<td><input type="number" id="new_length" name="length" style="width:4rem"></td>
<td><input type="number" id="new_width" name="width" style="width:4rem"></td>
<td><input type="number" id="new_height" name="height" style="width:4rem"></td>
<td><input type="number" id="new_amt" name="invoice" style="width:4rem"></td>
<td><input type="button" class="add" onclick="add_row();" name="add_more" value="Add More"></td>
</tr>

</table>
</div>
<script>
function edit_row(no)
{
 document.getElementById("edit_button"+no).style.display="none";
 document.getElementById("save_button"+no).style.display="block";
	
 var quantity=document.getElementById("quantity_row"+no);
 var weight=document.getElementById("weight_row"+no);
 var length=document.getElementById("length_row"+no);
 var width=document.getElementById("width_row"+no);
 var height=document.getElementById("height_row"+no);
 var amt=document.getElementById("amt_row"+no);
	
 var quantity_data=quantity.innerHTML;
 var weight_data=weight.innerHTML;
 var length_data=length.innerHTML;
 var width_data=width.innerHTML;
 var height_data=height.innerHTML;
 var amt_data=amt.innerHTML;
	
 quantity.innerHTML="<input type='number' style='width:4rem' id='quantity_text"+no+"' value='"+quantity_data+"'>";
 weight.innerHTML="<input type='number' style='width:4rem' id='weight_text"+no+"' value='"+weight_data+"'>";
 length.innerHTML="<input type='number' style='width:4rem'  id='length_text"+no+"' value='"+length_data+"'>";
 width.innerHTML="<input type='number' style='width:4rem' id='width_text"+no+"' value='"+width_data+"'>";
 height.innerHTML="<input type='number' style='width:4rem' id='height_text"+no+"' value='"+height_data+"'>";
 amt.innerHTML="<input type='number' style='width:4rem' id='age_text"+no+"' value='"+amt_data+"'>";
}

function save_row(no)
{
 var quantity_val=document.getElementById("quantity_text"+no).value;
 var weight_val=document.getElementById("weight_text"+no).value;
 var length_val=document.getElementById("length_text"+no).value;
  var width_val=document.getElementById("width_text"+no).value;
 var height_val=document.getElementById("height_text"+no).value;
 var amt_val=document.getElementById("amt_text"+no).value;

 document.getElementById("quantity_row"+no).innerHTML=quantity_val;
 document.getElementById("weight_row"+no).innerHTML=weight_val;
 document.getElementById("length_row"+no).innerHTML=length_val;
 document.getElementById("width_row"+no).innerHTML=width_val;
 document.getElementById("height_row"+no).innerHTML=height_val;
 document.getElementById("amt_row"+no).innerHTML=amt_val;

 document.getElementById("edit_button"+no).style.display="block";
 document.getElementById("save_button"+no).style.display="none";
}

function delete_row(no)
{
 document.getElementById("row"+no+"").outerHTML="";
}

function add_row()
{
 var new_quantity=document.getElementById("new_quantity").value;
 var new_weight=document.getElementById("new_weight").value;
 var new_length=document.getElementById("new_length").value;
 var new_width=document.getElementById("new_width").value;
 var new_height=document.getElementById("new_height").value;
 var new_amt=document.getElementById("new_amt").value;
	
 var table=document.getElementById("data_table");
 var table_len=(table.rows.length)-1;
 var row = table.insertRow(table_len).outerHTML="<tr id='row"+table_len+"'><td id='quantity_row"+table_len+"'>"+new_quantity+"</td><td id='weight_row"+table_len+"'>"+new_weight+"</td><td id='length_row"+table_len+"'>"+new_length+"</td><td id='width_row"+table_len+"'>"+new_width+"</td><td id='height_row"+table_len+"'>"+new_height+"</td><td id='amt_row"+table_len+"'>"+new_amt+"</td><td><input type='button' id='edit_button"+table_len+"' value='Edit' class='edit' onclick='edit_row("+table_len+")'><input type='button' id='save_button"+table_len+"' value='Save' class='save' onclick='save_row("+table_len+")'> <input type='button' value='Delete' class='delete' onclick='delete_row("+table_len+")'></td></tr>";

 document.getElementById("new_quantity").value="Add Data To Database";
 document.getElementById("new_weight").value="Add Data To Database";
 document.getElementById("new_length").value="Add Data To Database";
 document.getElementById("new_width").value="Add Data To Database";
 document.getElementById("new_height").value="Add Data To Database";
 document.getElementById("new_amt").value="Add Data To Database";
}
</script>
</li>
      <li class="form-line" data-type="control_button" id="id_13">
        <div id="cid_13" class="form-input-wide">
          <div style="text-align:center" data-align="center" class="form-buttons-wrapper  ">
            <button id="input_13" type="submit" class="form-submit-button form-submit-button-simple_green_apple" data-component="button" data-content="">
              Book
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="Add Data To Database" />
      </li>
    </ul>
  </div>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
  JotForm.poweredByText = "Powered by JotForm";
  </script>
  <input type="hidden" id="simple_spc" name="simple_spc" value="201004008705438" />
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "201004008705438-201004008705438";
  </script>
 
</form></body>
</html>
<script type="text/javascript">JotForm.ownerView=true;</script>