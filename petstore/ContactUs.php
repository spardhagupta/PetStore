<!DOCTYPE html>
<html>
<head>
    <title>Cotact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="css/pet.css" />
</head>
<body>
    
<?php

include 'mypet.php';
$isEverythinFine = false;
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
      $isEverythinFine = true;
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
        $isEverythinFine = true;
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
      $isEverythinFine = true;
    }
  }


  if (empty($_POST["comment"])) {
    $lnameErr = "comment is required";
  } else {
    $lname = test_input($_POST["comment"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $lnameErr = "Only letters and white space allowed"; 
    } else {
      $isEverythinFine = true;
    }
  }
  
 
  if($isEverythinFine) {
    insertIntoComments($_POST["first_name"],$_POST["last_name"],$_POST["email"],$_POST["phone"],$_POST["comment"]);
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
        <img src="images/pet store banner 7 png.png">
    </div>

    <div id="info">
        <h2>Contact Us</h2> <br>

        Required information is marked with an asterik (*). <br>

        <form action="ContactUs.php" method="POST" name="contact_us">
        <table>
            <tbody>
                <tr>
                <td>*First Name:</td>
                <td><input type="text" name="first_name" required></td> </tr>
                
                <tr>
                <td>*Last Name:</td>
                <td><input type="text" name="last_name" required></td> </tr>
                
                <tr>
                <td>*E-mail:</td>
                <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                <td>Phone:</td>
                <td><input type="tel" name="phone" required></td>
                </tr>
                <tr>
                <td>*Comments: </td>
                <td><textarea name="comment" required></textarea></td></tr>      
                </tbody></table>
    

                <br>
            <input type="submit" value="Submit" name="contact_us">
            </form>

       <footer><em></em>Copyright &copy; 2019 Pet Store</em>
        <br><em><a href="mailto:hhh.com">spardha@gupta.com</a></em>
        </footer>


    </div>


    </div>


</div>
</body>
</html>
