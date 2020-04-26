<?php
include 'mypet.php';
$isEverythinFine = false;
$nameErr = $lnameErr = $emailErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["first_name"])) {
    $nameErr = "Old Password is required";
  } else {
      $isEverythinFine = true;
    
  }


    if (empty($_POST["last_name"])) {
      $lnameErr = "New Password is required";
    } else {
        $isEverythinFine = true;
    }


    if (empty($_POST["newp2"])) {
      $emailErr = "Retype New Password";
    } else {
        $isEverythinFine = true;
    }


  if($isEverythinFine) {
    changePassword($_POST["first_name"], $_POST["last_name"], $_POST["newp2"]);
  }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
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

        <form action="changePassword.php" method="POST" name="loginForm">
            <table>
                    <tbody><tr>
                    <td>*Old Password: </td>
                    <td><input type="text" name="first_name" required><span class="error"><?php echo $nameErr;?></span></td>
                    </tr>
                    <tr>
                    <td>*New Password:</td>
                    <td><input type="text" name="last_name" required><span class="error"><?php echo $lnameErr;?></span></td>
                    </tr>
                    <tr>
                    <td>*Retype Password:</td>
                    <td><input type="text" name="newp2" required><span class="error"><?php echo $emailErr;?></span></td>
                    </tr>
                    </tbody></table>
    
                    <br>
                    <input type="submit" value="Submit" name="login_service">
        </form>

       <footer><em></em>Copyright &copy; 2019 Pet Store</em>
        <br><em><a href="mailto:spardha.com">spardha@gupta.com</a></em></footer>


    </div>

</div>
    
</div>
</body>
</html>
