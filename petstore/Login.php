<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="mypet.php" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/pet.css" />
</head>
<body>

<?php

include 'mypet.php';
$isEveryThingFine = false;
$passwordErr = $emailErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $pwd = test_input($_POST["password"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$pwd)) {
      $passwordErr = "Password is required"; 
    } else {
        $isEveryThingFine = true;
    }
  }


  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    } else {
        $isEveryThingFine = true;
    }
  }

  if ($isEveryThingFine) {
    userLogin();
  }


    

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  ?>
    
<div id="wrapper">
    <header>
        <h1>Pet Store</h1>
    </header>
    
    <div id="contentLeft">
        <nav id="menu">
        <a href="index.html">Home</a>
            <a href="AboutUs.html">About Us</a>
            <a href="ContactUs.php">Contact Us</a> 
            <a href="Client.php">Client</a> 
            <a href="Service.php">Service</a>
            <a href="Login.php">Login</a>
        </nav>
    </div>
    
        <div id="contentRight">

    <div id="banner1">
        <img src="images/pet store banner 5 png.png">
    </div>

    <div id="info">
        <h2>Login</h2> <br>

        Required information is marked with an asterik (*). <br>

        <form action="Login.php" method="POST" name="loginForm">
            <table>
                <tbody>
                    <tr>
                    <td>*E-mail:</td>
                    <td><input type="email" name="email" required><span class="error"><?php echo $emailErr;?></span></td>
                    </tr>
                    <tr>
                    <td>*Password:</td>
                    <td><input type="password" name="password" required><span class="error"><?php echo $passwordErr;?></span></td>
                    </tr>      
                </tbody>
            </table>    
            <br>
            <input type="submit" value="Submit" name="login">
        </form>
    
       <footer><em></em>Copyright &copy; 2019 Pet Store</em>
                <br><em><a href="mailto:hhh.com">spardha@gupta.com</a></em>
        </footer>


    </div>

    </div>

</div>
</body>
</html>
