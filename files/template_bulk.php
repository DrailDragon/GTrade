

<!DOCTYPE html>
<!-- Do not edit this file, copy the code to use it in your module-->

<html>
<head>
	<meta charset="utf-8">
    <title>Template</title>
	<link rel="stylesheet" href="../css/bootstrap.css"  type="text/css"/>
	<link rel="stylesheet" type="text/css" href="../css/smoothness/jquery-ui.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row" role="header">
			<?php include_once "header.php";?> 
		</div>
	
		<div class="container"><!-- you can delete this div if you don't want the side bar-->
				<!--Navigation sidebar-->
				<div class="col-sm-3 col-md-2 sidebar">
	                <ul class="nav nav-sidebar">
		                <li class="active"><a href="#">Search</a></li>
		                <li><a href="#">Profile</a></li>
		                <li><a href="#">Bulk Order</a></li>
		                <li><a href="#">Auction</a></li> 
		                <li><a href="vendors.php">Vendor</a></li>
		                <li><a href="users bulk order.php">Users Bulk Order</a></li>
	                </ul>
                </div>
				<!--Main Content area--> 
		        <div class="container-fluid">
		           
		           

		           <?php
		           include_once './class.MySQL.php';

		         

		           // connecting to the database.
		            $connect=mysql_connect(constant("DB_HOST"),constant("USERNAME"),constant("PASS"))
		             or die('Could not connect to the database: '.mysql_error());

		            $db='online_trading';
		            mysql_select_db($db) or die('Could not select the database ('.$db.') ');
		       

		           ?>

		        
	    		</div>
		</div>
	</div>
	<!--All javascript placed at the end so that the page loads faster-->
    <script src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/jquery-ui.js"></script>
	<script type="text/javascript" src="../js/custom/search_suggestions.js"></script>
</body>
</html>
