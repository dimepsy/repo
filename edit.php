<?php
$count=0;
	include("configure.php");
	$postid=$_GET['eid'];
	//echo $postid;
	
	$sql="SELECT  title, description, email, file, status FROM upload WHERE id='$postid'";
	
	mysqli_select_db($connect,'epiz_19215595_wiki');
	
	$retval= mysqli_query($connect,$sql);
	if(! $retval)
	{
		die('Could not get data : ' .mysqli_error());	
	}
	
	$row = mysqli_fetch_array($retval);
	
	
		$b= $row['title'];
		$c = $row['description'];
		$d = $row['email'];
		
		$count++;	
	
	
	
?>




<?php
session_start();
$count1=0;
	include("configure.php");
	$name=$_SESSION['uid'];
	//echo $postid;
	
	$sql1="SELECT  first_name,last_name FROM login WHERE username='$name'";
	
	mysqli_select_db($connect,'wikidata');
	
	$retval1= mysqli_query($connect,$sql1);
	if(! $retval)
	{
		die('Could not get data : ' .mysqli_error());	
	}
	
	$row1 = mysqli_fetch_array($retval1);
	
	
		$f= $row1['first_name'];
		$l = $row1['last_name'];
		
		
		$count1++;	
	
	
	
?>
<html>
<head>
  <style>input[type="text"] {
  padding: 10px;
        width: 40%;
  border: solid 1px #dcdcdc;
  transition: box-shadow 0.3s, border 0.3s;
}
        
.sub
{
    left:600px;
}
        
        
input[type="text"]:focus,
input[type="text"].focus {
  border: solid 1px #707070;
  box-shadow: 0 0 5px 1px #969696;
}</style>
<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",width: 780, height:350,
		theme : "advanced",
		plugins : "openmanager,autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,
		
		//Open Manager Options
		file_browser_callback: "openmanager",
		open_manager_upload_path: '../../../../uploads/',

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
</head>
<link href="CSS/Style Sheet1.css" rel="stylesheet" type="text/css" />
<body>
<div class = "content4" >
	
				<form id="myform" action="editupdate.php?eid=<?php echo $postid?>" method='post' enctype="multipart/form-data"><br>                                                                                                                
                    <?php echo "<b>Researched Topic :&nbsp </b><input class='input' type='text' enable='false' name='nop' value='$b'> <br><br><br>";?>
				
				<?php echo "<b>Name :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </b><input class='input'  name='email' value='$f $l' readonly> <br><br>";?><br>
				<input type="hidden" name <?php echo"<b>Description  :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </b>";?> <br><br> 
				<textarea name="description" >   <?php echo $c?></textarea> <br><br>
				<input type="hidden" name="project" size="50"/>
				<input type='submit' value='Update'>
			 
			
</div>
</body>
</html>