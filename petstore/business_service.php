<?php
 include 'mypet.php';
 $serviceErr="";
 $isEveryThingFine = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["service"])) {
	  $serviceErr = "Service is required";
	} else {
	  $pwd = test_input($_POST["service"]);
	  if (!preg_match("/^[a-zA-Z ]*$/",$pwd)) {
		$serviceErr = "Service is required"; 
	  } else {
		  $isEveryThingFine = true;
	  }
	}

	if ($isEveryThingFine) {
		insertService($_POST["service"], );
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
                        <h1>Business's Pet Store</h1>
                    </header>
                
            <div id="contentLeft">
                <nav id="menu">
                        <a href="index.html">Home</a>
                        <a href="AboutUs.html">About Us</a>
                        <a href="ContactUs.php">Contact Us</a> 
                        <a href="business_service.php">Service</a>
						<a href="changePassword.php">Service</a>
						<a href="logout.php">Logout</a>
                </nav>
            </div>
    
        <div id="contentRight">

    <div id="banner1">
        <img src="images/pet store banner 5 png.png">
    </div>

    <div id="info">
        <h2>My Business</h2> <br>

        Required information is marked with an asterik (*). <br>

        <form action="business_service.php" method="POST" name="loginForm">
            <table>
                    <tbody><tr>
                    <td>Business Name: </td>
                    <td><input type="text" name="business_name" required></td>
                    </tr>
                    <tr>
                    <td>*Service:</td>
                    <td><input type="text" name="service" required><span class="error"><?php echo $serviceErr;?></span></td>
                    </tr>
                    </tbody></table>
    
                    <br>
                    <input type="submit" value="Submit" name="login_service">
        </form>

       <footer><em></em>Copyright &copy; 2019 Pet Store</em>
        <br><em><a href="mailto:">spardha@gupta.com</a></em></footer>


    </div>

</div>
</div>
</body>
</html>
