<?php
 include 'mypet.php';
 $mypetErr="";
 $isEveryThingFine = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["my_pet"])) {
	  $mypetErr = "Pet name is required";
	} else {
	  $pet = test_input($_POST["my_pet"]);
	  if (!preg_match("/^[a-zA-Z ]*$/",$pet)) {
		$mypetErr = "Pet name is required"; 
	  } else {
		  $isEveryThingFine = true;
	  }
	}



}



 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 session_start();
 $sql = "SELECT * FROM users WHERE userid =" . $_SESSION['userid'];
				//$result = mysql_query($sql);
				$result = $conn -> query($sql);
				
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							$a = $row["fname"]. " " . $row["lname"];
					} 
				}
				else {
						echo "Connect failed: %s\n". $conn -> error;
					} 
   
?>

<!DOCTYPE html>
<html>
<head>
	<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/pet.css">
	<title>Login</title>
</head>
<body>

					  <div id="wrapper">
                <header>
                        <h1>Pet Store</h1>
                    </header>
                
            <div id="contentLeft">
                <nav id="menu">
                        <a href="index.html">Home</a>
                        <a href="AboutUs.html">About Us</a>
                        <a href="ContactUs.php">Contact Us</a> 
                        <a href="client_service.php">Service</a>
						<a href="changePassword.php">Change Password</a>
						<a href="logout.php">Logout</a>
                </nav>
            </div>
    
        <div id="contentRight">

    <div id="banner1">
        <img src="images/pet store banner 5 png.png">
    </div>

    <div id="info">
        <h2>My Pet</h2> <br>

        Required information is marked with an asterik (*). <br>

        <form action="client_service.php" method="POST" name="loginForm">
            <table>
                    <tbody><tr>
                    <td>Client Name: </td>
                    <td><input type="text" name="client_name" required></td>
                    </tr>
                    <tr>
                    <td>*My Pet:</td>
                    <td><input type="text" name="my_pet" required><span class="error"><?php echo $mypetErr;?></span></td>
                    </tr>
                    </tbody></table>
    
                    <br>
                    <input type="submit" value="Submit" name="login_service">
        </form>

       <footer><em></em>Copyright &copy; 2018 Pet Store</em>
        <br><em><a href="mailto:viraj@thakur.com">viraj@thakur.com</a></em></footer>


    </div>

</div>
    
</div>
</body>
</html>