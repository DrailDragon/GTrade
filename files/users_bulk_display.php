

<!DOCTYPE html>
<!-- Do not edit this file, copy the code to use it in your module-->

<html>
<head>
	<meta charset="utf-8">
    <title>Template</title>
	<link rel="stylesheet" href="../css/bootstrap.css"  type="text/css"/>
	<link rel="stylesheet" type="text/css" href="../css/smoothness/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-magnify.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
</script>

<script>
$(document).ready(function(){
	$('input').click(function(){
		var value=$(this).val();
		
		
	  if(value=='Search')
	  	{
	  	  //alert(value);
	  	  var search_txt = $('#search').val();
	  	  //alert(search_txt);

	  	  $( "h1" ).each(function(  ) {

 				var id=$(this).attr('id');

 				 var str=id.split("");
				 var x='';
			     for(var i=1;i<str.length;i++)
		      	{
			    	x=x+str[i];
			    }
			    //alert(x);
 				var name=$(this).text();
 				//var x=name.substring(3);
 				//alert(id1);
	    	    //alert(name);

	    	    var temp='#i'+x;
			    //alert(temp);
			    search_txt = search_txt.toLowerCase();
			    name=name.toLowerCase();
			    if( name.search(search_txt) != -1)
			    {
			    	$('#'+id).show();
			    	$(temp).show();
			    }
			    else
			    {
			    	$('#'+id).hide();
			    	$(temp).hide();
			    	
			    }
			});

	  	  

	  	 }

	  if(value=='Buy')
	  	{
	  	  //alert(value);
	  	  var id=$(this).attr('id');
	  	  var str=id.split("");
			var x='';
			for(var i=1;i<str.length;i++)
			{
				x=x+str[i];
			}
	  	  var q_id='#q'+x;

	  	  var q=$(q_id).val();

	  	  $.ajax({
				url:'bulk_buy.php',
				method:'POST',
				data:'id='+x+'&q='+q,
				success:function(result){
					alert(result);
					if(result)
					{
						//alert(result);
						//$('#response').html("<p style='color:green'>Updated</p>")
					}
				}
			});


	  	}

	
	});
}); 
</script>



</head>
<body>
	<div class="container-fluid">
		<div class="row" role="header">
			<?php include_once "header.php";?> 
		</div>

		<p>Enter name of the item to search:</p>
				<table>
				 	<tr>
				 		<td>
				<input autocomplete="off"  style="width: 169px; height: 35px" width="80%"class="form-control ui-autocomplete-input" placeholder="enter text here..." id="search" name="search" type="text">
						</td>

						<td>
				   <input  class="btn btn-primary" type='button' value='Search' id="searchbtn">
				   		</td>
				   	</tr>
				  </table>
	
		<!--  <div class="container">
				Navigation sidebar
				<div class="col-sm-3 col-md-2 sidebar">
	                <ul class="nav nav-sidebar">
		                <li class="active"><a href="#">Search</a></li>
		                <li class="active"><a href="orders list.php">Orders list</a></li>
		                <li class="active"><a href="#">Help</a></li>	                
	                </ul>
                </div>
				 -->
				 <!--Main Content area-->
		        <div class="container-fluid"> 
		        	
				
				 


				<!-- <div class="input-group">
     		 <input type="text" style="width: 169px; height: 35px" class="form-control">
      		<span class="input-group-btn">
        		<input class="btn btn-primary" style="width: 30px; height: 35px" type="button">
      		</span>
    		</div>
		        	 --> 	           		           		            
		        	
		        	<?php
		        	require_once "class.MySQL.php";
		        	   
                      	$obmysql=new MySQL();
                      	
						$obmysql->Select("vendor's database","");
                       
                         
                       $rows=$obmysql->arrayedResult;
                       $item_id;

                      if($obmysql->records>0)
                      {
                      	   
   	                      foreach ($rows as $row)
   	                         {
   	                               
                                   $item_id=$row["id"]; 
                                   $item_name=$row["name"];
                                   $pic_loc=$row["pic_loc"];
                                   $qty=0;
                                   $cost=$row["cost"];                                 
                                   $discount=$row["discount"]; 
                                   $brand=$row['brand'];
                                   $model=$row['model'];
                                   $vendor=$row['username'];

                                   ?>
                      <div class="container">
                      	
				<div class="col-sm-3 col-md-2 sidebar">
	                <ul class="nav nav-sidebar">
		                	                
	                </ul>
                </div>
                                    <h1 id="<?php echo 'h'.$item_id ?>"> <?php print("$item_name"); ?> </h1> 
                                        
                                 <div class="row">
                                 	<div class="row" id="<?php echo 'i'.$item_id ?>">
                                       <div class="col-md-3" >
                                           <div class="mag">
                                                                                      
                                                <img data-toggle="magnify" src="../upload/<?php echo $pic_loc;?>" alt="" title="" width="250" height="370" class="img-thumbnail">
                                                     
                                           </div>
                                            
                                       </div>
                                   
                                    <div class="col-md-4 col-md-offset-1">
                                        <blockquote>
                                        <p>
                                        	<h2>
                                           Rs. <?php echo $cost;?>
                                           </h2> 
                                        	<?php
                                        	 echo "<li> Brand: $brand </li>";
                                        	 echo "<li> Vendor: $vendor </li>";
                                        	 echo "<li> Discount: $discount % OFF </li>";
                                        	 if ($model != null){
                                                    echo "<li> Model: $model </li>";
                                              }

                                              ?>
                                              
                                             <input  class="btn btn-primary"style="display: inline"  align="center" type='button' value='Buy' id="<?php echo 'e'.$item_id; ?>">
                                           
 									       <input type="text" height:50px style="width:88px;" id="<?php echo 'q'.$item_id; ?>" value="<?php echo $qty ?> "class="form-control" >
								      
                                        </p>
                                        </blockquote>
                                    </div>
                                </div>
                                </div>
                                							    
	                       				                       			                       		
	                       		     
	                       	   <?php	  
	                       	     	                       	   
	                         }                       	   

	                   }
	                 else
	                  {
	                  	echo "The query hasn't returned anything!! ";
	                  }
	                  	
		        	?>
		        		        
		         

	    		</div>
		</div>
	</div>
	<!--All javascript placed at the end so that the page loads faster-->

     <script src="../js/bootstrap-magnify.min.js"></script>
    <script src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/jquery-ui.js"></script>
	<script type="text/javascript" src="../js/custom/search_suggestions.js"></script>
</body>
</html>
