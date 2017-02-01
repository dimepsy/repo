<html>
<body>

 <?php
   
	$user = $_POST["userName"];
	$pass= $_POST["password"];
	
	//code for AES encryption
	
	include 'AES.php';
	//$imputText = "mypassword";
	$imputKey = "qwertyuiopasdfgh";
	$blockSize = 256;
	$aes = new AES($pass, $imputKey, $blockSize);

	$encPass = $aes->encrypt();
	//$aes->setData($enc);
	//$dec=$aes->decrypt();
	//echo "After encryption: ".$enc."<br/>";
	//echo "After decryption: ".$dec."<br/>";


	
				$servername = "localhost";
				$username="root";
				$password="";
				$dbname ="mocktestdb";	
				$conn = new mysqli($servername, $username, $password, $dbname);
				
				if($conn->connect_error)
				{
					die("Connection failed:". $conn->connect_error);
				}
				$checkData = "SELECT * FROM supervisor";
				$result = $conn->query($checkData);
				if ($result->num_rows > 0) 
				{
					while($row = $result->fetch_assoc()) 
					{
						if($user==$row['username'] && $encPass==$row['password'])
						{
							//echo "Login Sucessful";
							echo "<script>setTimeout(\"location.href = 'sup.php';\",1200);</script>";
							session_start();
							$_SESSION['unme']=$row['username'];
						}
						else
						{
							//echo "Invalid Username or Password";
							echo "<script>setTimeout(\"location.href = 'test_center.php?chk=0';\",1500);</script>";
						}	
					}
				}	
				$conn->close();
	
	
	exit();
 ?>
 
</body>
</html>