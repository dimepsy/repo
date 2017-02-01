<?php
    include('configure.php');
	$Date= GETDATE();
	$fid=$_GET['eid'];
	echo $fid;
	
	//if(isset($_POST['nop'])&&isset($_POST['description'])&&isset($_POST['email']))
	{
		$nop=$_POST["nop"];
		$description=$_POST["description"];
        $description=mysqli_real_escape_string($connect,$description);
        
		$email=$_POST["email"];
		$status=1;
		//$date=$_POST["Date"];
		$edited=$_POST["email"];
		
		$sql = 'SELECT * FROM upload2';
		mysqli_select_db($connect,'epiz_19215595_wiki');
		$retval=mysqli_query($connect,$sql);
		
		
				
			   $query="UPDATE upload2 SET description='$description', email='$email', status='$status', Last_Edited_By='$edited' WHERE id='$fid' ";
			   $query_run=mysqli_query($connect,$query); 
			   header("Location:sample2.php?id=$fid");
			

}	
?>	