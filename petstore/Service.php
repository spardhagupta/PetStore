<!DOCTYPE html>
<html>
<head>
    <title>Service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="css/pet.css" />

</head>
<body>

<?php
include 'mypet.php';
$isEverythingFine = false;
$nameErr = $lnameErr = $emailErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["first_name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["first_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    } else {
        $isEverythingFine = true;
    }
  }


    if (empty($_POST["last_name"])) {
      $lnameErr = "Last Name is required";
    } else {
      $lname = test_input($_POST["last_name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
        $lnameErr = "Only letters and white space allowed"; 
      } else {
        $isEverythingFine = true;
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
        $isEverythingFine = true;
    }
  }

  if ($isEverythingFine) {
        $message = insertIntoClient(false);
        if ($message == 1) {
            echo "<script type=\"text/javascript\">window.alert(New record created successfully\n Please check mail);
                     window.location.href = '/assignment 4/login.php';</script>";
        } else{
            echo 'fail';
        }
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
        <h2>Service</h2> <br>

        Required information is marked with an asterik (*). <br>

        <form action="Service.php" method="POST" name="loginForm">
            <table>
                    <tbody><tr>
                    <td>*First Name:</td>
                    <td><input type="text" name="first_name" required><span class="error"><?php echo $nameErr;?></span></td>
                    </tr>
                    <tr>
                    <td>*Last Name:</td>
                    <td><input type="text" name="last_name" required><span class="error"><?php echo $lnameErr;?></span></td>
                    </tr>
                    <tr>
                    <td>*E-mail:</td>
                    <td><input type="email" name="email" required><span class="error"><?php echo $emailErr;?></span></td>
                    </tr>
                    <tr>
                    <td>Phone:</td>
                    <td><input type="tel" name="phone" required></td>
                    </tr>
                    <tr>
                    <td>Business Name:</td>
                    <td><input type="text" name="business_name" required></td>
                    </tr>      
                    </tbody></table>
    
                    <br>
                    <input type="submit" value="Submit" name="login_service">
        </form>

       <footer><em></em>Copyright &copy; 2019 Pet Store</em>
                <br><em><a href="mailto:hhh.com">spardha@gupta.com</a></em>
        </footer>


    </div>

</div>
    


</div>
</body>
</html>
