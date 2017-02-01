<?php 

if(empty($_SESSION['uid'])){?>
<!--<div id="echo" style='position:absolute;padding-left:800px;color:black;padding-top:60px;'>
    <marquee>
        <?php echo("Please login to upload articles");?></marquee>
</div>-->
<?php
}
?>


<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Seva Portal </title>

    <!-- Bootstrap Core CSS -->
    <link href="portal/css/saroj.min.css" rel="stylesheet">
    <script src="wysiwyg.js"></script>
	<link rel="stylesheet" type="text/css" href="CSS/searchbar.css">
	
    <link href="css/custom.css" rel="stylesheet">
<style>
    
    .message {
color: #FF0000;
font-weight: bold;
text-align: center;
width: 100%;
}
    </style>
	
	</head>
  

  
  
<body onLoad="iFrameOn();">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <img src="seva.jpg" width="100px" height="60x" align="left">
		<div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                
                <a class="navbar-brand" > Seva Development</a>
            





            </div>
            <!-- Form -->
            
  
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
			
                <ul class="nav navbar-nav">
					
                    <li class="active">
                        <a href="index.php">Home </a>
					
                    </li>
                   
				   
                </ul>

				
		       
            </div>
            <!-- /.navbar-collapse -->
			
        </div>
        <!-- /.container -->
    </nav>
    
    
    
    
    
    
    
    
    
    
    
    
    

<div class="container-fluid">


		<!-- Left Column -->
		<div class="col-sm-3">

			<div id="main" >
	
	<div class="mi" align="center">
	<!<form id="form" autocomplete="off" style="padding-left:420px;">
		<!<input id="textbox" style="padding-left:420px;" type="text" size="40px" height="100px"class="li1" >
		<form class="searchbox_1" autocomplete="off" action="">
         <input id="textbox" type="search" class="search_1"  placeholder="&#128269 Portal Search..." />
		

		<span id="abc" style="left:480px;padding-top:50px;"onClick="search();"></span>
	</form>
	
	</div>
</div>
				  <br>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="panel-title"> <strong>Article Topics</strong></h1>
				</div>
				
			</div>

			<!-- Text Panel -->
			
            <div id = "fetch" class= "list-group">
			
			<?php
				include("projectfetch.php");
			?>
				<div class='sidebar1'>
               
                    <table class="search-table">
				<?php
					for($i=0; $i< $count; $i++)
					{
						if($f[$i]==1)
						{	$p=$i+1;
							echo "
							
							<a id='$a[$i]' href='#' onClick='load_detail(this.id);' class='list-group-item'>	&nbsp&nbsp$b[$i]</a>
								
							";
						}
					}
				?>
                        </table>
				</div>
			</div>
			<!-- Text Panel -->
			
				
		</div><!--/Left Column-->
  
  
		<!-- Center Column -->
		<div class="col-sm-6">
		
			<!-- Alert -->
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>! WELCOME ! </strong><br> Welcome to the Seva Portal !! ---Learn and let other know---
			</div>		
			
			<div id="detail">
<?php
        
$var = @$_GET['sugg'] ; // Get the search variable
$lower= strtolower($var); //make string lowercase
$trimmed = trim($lower); //remove whitespace from the variable
$stringlen=strlen($trimmed); // Get the length
$searchlimit=10;// No. of search result appear for suggetion
//EDIT Requied here
$dbhost="localhost"; //hostname
$dbuser="root"; //username
$dbpass=" "; //password
$dbname="wikidata"; //databasename
$dbtable="upload"; //table name
$dbcol="title";// column name
$dbdesc="description";
$connect= mysqli_connect("localhost","root","");//connect to your database 
mysqli_select_db($connect,$dbname) or die("Unable to select database"); //specify database 
$query = "Select * FROM $dbtable WHERE $dbcol LIKE \"%$trimmed%\"  
  ORDER BY $dbcol"; // specify table and fie ld names for the SQL query

 $numresults=mysqli_query($connect,$query);
 $numrows=mysqli_num_rows($numresults);
  
  if($numrows==0) // No result condition
  {
  echo " <ul> <h1>No Results for your search</h1>";
  }
 else
 {
	  echo "<ul> <h1>Seva Wiki Portal<h1></ul>";
	
	  echo "<ul>Seva Wiki Portal is a platform where you can have knowledge about topics related to software testing, software development life cycle. As a supplement, there is a upload module where the user upload their research on various topics. Moreover, this portal is developed to enhance the understanding on various subjects related to software quality assurance. Main target groups include employees of Seva who can go through the portal for any information they are seeking.</ul>";
	        
  }
  
// get results
 // $result = mysqli_query($connect,$query) or die("Unable to execute");
// counter intialized to 0
//$count = 0 ;
// display the search results returned
  /*while ($row= mysqli_fetch_array($result)) //start whule
  { 
  $title = $row["$dbcol"];
  $desc = $row["$dbdesc"];
  $desc=$row["$dbdesc"];
  if($count<=$searchlimit) //start if for checking search limit
  {
		$lower2=strtolower($title); // make database value lowercase
		$sub=substr($lower2, 0,$stringlen); //make string length equal to user string
		if($trimmed==$sub)// start if for string matching with substring
		{
			echo "<li><b>$title</b></li>";
			echo "$desc";
			echo "<br><br>";
			$count++ ;
			}	//End if for string matching with substring
		}//Endif for checking search limit
	}*///End while


?>
<div>
               <img src="c.jpg" align="right" height= "450px" width= "950px" style="left-padding:500px";>
			
			  
			 
			   <br>
			   <ul><h1>Seva Development<h1></ul>
			   <ul>Seva Development’s mission is to provide high quality high paying jobs to Nepali graduates and economic development for their villages by providing economical, best-in-class software testing services to companies the United States.
                   We want to help the people of Nepal work their way out of poverty by empowering the best and brightest students to apply their talents in a way that benefits their local economy. Seva offers exceptional employment and educational opportunities to local Nepali graduates in village regions and contributes to development projects in their communities.</ul>
			 <br>
			 <img src="d.jpg" align="right" height= "450px" width= "950px" style="left-padding:500px";>
			</div>
			
			
			<hr>
			<hr>
		</div><!--/Center Column-->


	  <!-- Right Column -->
	  
	</div><!--/container-fluid-->
	


	
    <!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- IE10 viewport bug workaround -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>
	
	<!-- Placeholder Images -->
	<script src="js/holder.min.js"></script>
	

	

		<script>
			 function load_detail(link_id){
            document.getElementById("detail").innerHTML='<object id="profileobj" width="100%" height="100%" type="text/html" data="raiti.php?id='+link_id+'" ></object>';
			//document.getElementByID("dinfo").className="";
			//document.getElementByID("pinfo").className="active";			
			}
		</script>


	
	

</body>


<script type="text/javascript" src="jquery.js"></script>
<link rel="stylesheet" type="text/css" href="CSS/searchbar.css">


<link rel="stylesheet" type="text/css" href="style/style.css">		
	<script type="text/javascript">
	$(document).ready(function(){
     $('input#button').attr('disabled','disabled');
     
	$("input").keyup(function(){
    txt=$("input#textbox").val();
    $.post("post.php",{suggest:txt},function(result){
      $("span").html(result);
	   
	
    });
  });
  
  $("input").keyup(function(event){
				if($("input#textbox").val() == "")
				 {
					// hide suggestions
					$("#abc").fadeOut('fast', function(){
						$("#abc").css('visibility', 'hidden');
					});
 
				}else{
					$("#abc").fadeIn('fast', function(){
						$("#abc").css('visibility', 'visible');
					});
 
					
				}
			});
 
});
</script>
<link rel="stylesheet" type="text/css" href="CSS/searchbar.css">
<link rel="stylesheet" type="text/css" href="style1.css">
<link rel="stylesheet" type="text/css" href="style/style.css">
    
    
    <style type="text/css">
.classname {
	-moz-box-shadow:inset 0px 1px 0px 0px #004644;
	-webkit-box-shadow:inset 0px 1px 0px 0px #004644;
	box-shadow:inset 0px 1px 0px 0px #97c4fe;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #004644), color-stop(1, #004644) );
	background:-moz-linear-gradient( center top, #004644 5%, #004644 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#004644', endColorstr='#004644');
	background-color:#004644;
	-webkit-border-top-left-radius:0px;
	-moz-border-radius-topleft:0px;
	border-top-left-radius:0px;
	-webkit-border-top-right-radius:0px;
	-moz-border-radius-topright:0px;
	border-top-right-radius:0px;
	-webkit-border-bottom-right-radius:0px;
	-moz-border-radius-bottomright:0px;
	border-bottom-right-radius:0px;
	-webkit-border-bottom-left-radius:0px;
	-moz-border-radius-bottomleft:0px;
	border-bottom-left-radius:0px;
	text-indent:0;
	border:1px solid #004644;
	display:inline-block;
	color:#ffffff;
	font-family:Comic Sans MS;
	font-size:15px;
	font-weight:bold;
	font-style:normal;
	height:35px;
	line-height:35px;
	width:70px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #004644;
}

}.classname:active {
	position:relative;
	top:1px;
}</style>
<script type="text/javascript">

function search(){
window.location.href='portal.php?sugg='+document.getElementById("textbox").value;

}
   
	
   
</html>





