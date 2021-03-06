<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
<link href="../css/bootstrap-responsive.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<link href="../css/flexslider.css" type="text/css" media="screen" rel="stylesheet"  />
<link href="../css/jquery.fancybox.css" rel="stylesheet">
<link href="../css/cloud-zoom.css" rel="stylesheet">
<link rel="shortcut icon" href="../../assets/ico/favicon.html">
<link rel="stylesheet" href="../css/bootstrap.css"  type="text/css"/>
<link rel="stylesheet" type="text/css" href="../css/smoothness/jquery-ui.css">
<?php 
    session_start();
    if(!isset($_SESSION['authentication'])||!$_SESSION["authentication"]){
      unset($_SESSION["authentication"]);
      header("Location: login.php");
    }
    include_once'notification.php';
    include_once'class.MySQL.php';
    $object=new MySQL();
    $row=$object->ExecuteSQL("SELECT `name` from user where user_nm='".$_SESSION['user_nm']."'");
?>
</head>
<body>
  <?php include 'header.php';?>

<div id="maincontainer">
  <section id="product">
    <div class="container">
      <div class="row">
        
        <!-- My Account-->
        <div class="span9">
<h1 class="heading1"><span class="maintext">Welcome, <?php echo $row[0]['name']?></span><span class="subtext">View All your account information</span></h1>        
              <h3 class="heading3">My Accounts</h3>
          <div class="myaccountbox">
            <ul>
              <li>
                <a href="edit_info.php"> Edit your account information</a>
              </li>
              <li>
                <a href="change_password.php"> Change your password</a>
              </li>
              <li>
                <a href="cart_display.php">Cart</a>
              </li>
              <li>
                <a href="wishlist.php">Modify your wish list</a>
              </li>
              <li>
                <a href="addtowishlist.php">Add items to your wishlist</a>
              </li>
              <li>
                <a href="watchlist.php">Modify your watch list</a>
              </li>
              <li>
                <a href="myitems.php">My Items</a>
              </li>

              <li>
                <a href="bidding.php">Your Bidding Items</a>
              </li>
              <li>
                <a href="#">Recommendations</a>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown"  href="#" >Notifications  
                  <?php
                  $count=0;
                  foreach ($_SESSION['notifications'] as $key => $value) {
                    if(isset($value))
                      ++$count;
                  }
                  if($count>0)
                  echo '<span id="badge" class="badge">'.$count.'</span>';
                  ?></span></a>
                  <?php 
                  if(sizeof($_SESSION['notifications'])>0)
                        {
                          echo '<ul class="dropdown-menu" >';
                          foreach ($_SESSION['notifications'] as $key => $value) {
                        echo '<li><span class="span3"><a href="'.$_SESSION['notifications_link'][$key].'" ';
                          echo '>'.$value.'</span></a></li>'; 
                        }
                    echo '</ul>';
                      }
                        ?>
                  </li>
              <li>
                <a href="logout.php">Log out</a>
              </li>
            </ul>
          </div>
          <h3 class="heading3">My Wallet</h3>
          <div class="myaccountbox">
            <ul>
              <li>
                <a href="mycredits.php"> View your Credits</a>
              </li>
              <li>
                <a href="mytransactions.php">Your Transactions</a>
              </li>
              <li>
                <a href="recharge.php">Recharge Credits</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>


<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript">
  if (typeof(jQuery) == 'undefined')   
    document.write("<script type='text/javascript' src='../js/jquery.js'/>");
</script>

<script src="js/bootstrap.js"></script>
<script src="js/respond.min.js"></script>
<script src="js/application.js"></script>
<script src="js/bootstrap-tooltip.js"></script>
<script defer src="js/jquery.fancybox.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/jquery.tweet.js"></script>
<script  src="js/cloud-zoom.1.0.2.js"></script>
<script  type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript"  src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script type="text/javascript"  src="js/jquery.mousewheel.min.js"></script>
<script type="text/javascript"  src="js/jquery.touchSwipe.min.js"></script>
<script type="text/javascript"  src="js/jquery.ba-throttle-debounce.min.js"></script>
<script defer src="js/custom.js"></script>
<script type="text/javascript">
$('.dropdown-menu').css('left','12%');
</script>
</body>
</html>