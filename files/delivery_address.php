<!DOCTYPE html>
<!-- Do not edit this file, copy the code to use it in your module-->
<html>
<head>
	<meta charset="utf-8">
    <title>Template</title>
	<link rel="stylesheet" href="../css/bootstrap.css"  type="text/css"/>
	<link rel="stylesheet" type="text/css" href="../css/smoothness/jquery-ui.css">
    <style>
        .cntrol{
        }
    </style>
</head>
<body>
	<div class="container-fluid">
		<div class="row" role="header">
			<?php include_once "header.php";?>
		</div>

		<div class="container"><!-- you can delete this div if you don't want the side bar-->
                    <!--Navigation sidebar-->
				<div class="col-sm-4 col-md-4 sidebar">
	                <ul class="nav nav-sidebar">
		             <!--   <li class="active"><a href="#">Search</a></li>
		                <li><a href="#">Profile</a></li>
		                <li><a href="#">Bulk Order</a></li>
		                <li><a href="#">Auction</a></li>-->
	                </ul>
                </div>
				<!--Main Content area-->
		        <div class="container-fluid col-sm-8 col-md-8">
		            <h3><?php echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" ?><u>ADDRESS DETAILS</u></h3><br><br>
                    <!---------Main content---------------->
                    <form action="add.php" class="form_horizontal" method="Post" id="formu">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="first_name">
                                    First Name*
                                </label>
                                <!--<div class="controls">-->
                                    <input id="first_name" style="width: 280px" type="text" name="first_name"></input>
                                <!--</div>-->
                            </div>
                            <br><br>
                             <div class="control-group">
                                <label class="control-label" for="last_name">
                                    Last Name*
                                </label>

                                    <input id="last_name" style="width: 280px" type="text" name="last_name"></input>

                            </div><br><br>
                            <div class="control-group">
                                <label class="control-label" for="contact_no">
                                    Contact No*
                                </label>
                                <input id="contact_no" style="width: 280px" type="text" name="contact_no"></input>
                                <?php echo "*Please enter your 10 digit phone number"; ?>
                            </div><br><br>
                            <div class="control-group">
                                <label class="control-label" for="address">
                                    Address*
                                </label>
                                <div class="controls">
                                <textarea id="address" class="input-xlarge" rows="3" style="width: 360px; height: 90px;" name="address"></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="checkBox" name="check" value="checked" id="check"></input>
                                <small><b>Make it your default address</b></small>
                            </div>
                            <br><br>
                            <div align="center">
                                <button class="btn btn-primary" type="button" onclick="validate();">Save Changes</button>
                               <!-- <button class="btn">Cancel</button>-->
                            </div>

                        </fieldset>
                    </form>
	    		</div>
		</div>
	</div>
	<!--All javascript placed at the end so that the page loads faster-->
    <script src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/jquery-ui.js"></script>
	<script type="text/javascript" src="../js/custom/search_suggestions.js"></script>
	<!----Jquery to check if all the fields are required-->
	<script>
	    function validate(){
            var correct=1;
            var phoneno = /^\d{10}$/;//removes all non-digits and allow only nos and checks if it is of 10 digits
            var nm= /^\D+$/;
            if((document.getElementById('first_name').value.length==0)||(!document.getElementById('first_name').value.match(nm))){
                correct=0;
                alert("Fill in correct name");
                //document.getElementById('first_name').innerHTML = "Empty First Name";

            }
            if((document.getElementById('last_name').value.length==0)||(!document.getElementById('last_name').value.match(nm))){
                correct=0;
                alert("Fill in correct last name");
                document.getElementById('last_name').innerHTML = "Empty Last Name";
            }
            if(document.getElementById('address').value.length==0){
                correct=0;
                alert("Fill in correct last name");
                document.getElementById('address').innerHTML = "Empty Address";
            }

            if(!document.getElementById('contact_no').value.match(phoneno)){
                //if(document.getElementById('contact_no').value[0])==0){
                correct=0;
                alert("Fill in correct Contact No.");
                //document.getElementById('contact_no').innerHTML = "Empty Contact No";
               //}
            }
            if(correct==1){
                document.forms["formu"].submit();
            }
            else
                alert("Fill in correct details");
	    }
	</script>
</body>
</html>

