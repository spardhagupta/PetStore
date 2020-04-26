<?php


$dbhost = 'localhost:3306';
$dbuser = 'spardha22_rdb';
$dbpass = 'Petstore123';
$db = 'spardha22_db';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
if(! $conn ) {
    die('Could not connect: ' . mysql_error());
}




function insertIntoClient($isClient) {
    global $conn;
    $businessId;
    $serviceId;
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $sql = "";

    $roleId = $isClient ? 1 : 2;
    $roleDescription = $isClient ? "client" : "business";
    $emailBody = "Thanks for signing up\n Your password is 123456";

    if ($isClient) {
        $sql = "INSERT INTO `users`(`fname`, `lname`, `phone`, `password`, `email`, `roleid`, `role_description`) 
            VALUES ('$firstName','$lastName','$phone',123456,'$email','$roleId','$roleDescription')";
    } else {
        $businessName = $_POST['business_name'];

        $sqlB = "INSERT INTO `business`(`bname`) VALUES ('$businessName')";
        if ($conn->query($sqlB) === TRUE) {
            echo 'Done';        
        } 
        
        $businessId = $conn->insert_id;

        $sqlService = "INSERT INTO `services`(`businessid`) VALUES ('$businessId')";
        if ($conn->query($sqlService) === TRUE) {
            echo 'Done';        
        } 

        $serviceId = $conn->insert_id;
        $sql = "INSERT INTO `users`(`fname`, `lname`, `phone`, `password`, `email`, `roleid`, `role_description`) 
            VALUES ('$firstName','$lastName','$phone',123456,'$email','$roleId','$roleDescription')";   
    
    }

    if ($conn->query($sql) === TRUE) {
        if (!$isClient) {    
            $sqlfinal = "INSERT INTO `clients`(`serviceid`, `userid`) VALUES ('$serviceId', $conn->insert_id)";
            if ($conn->query($sqlfinal) === TRUE) {
                echo 'Done';        
            } 
        } else {
            $sqlC = "INSERT INTO `clients`(`serviceid`, `userid`) VALUES (null, $conn->insert_id)";
            if ($conn->query($sqlC) === TRUE) {
                echo 'done';        
            } 
        }
        mail($email, "Password for Pet Store", $emailBody, 'From: virajthakur1994@yahoo.com');
        return true;
    } 


    mysqli_close($conn);

}




function userLogin() {
    global $conn;
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
		//$result = mysql_query($sql);
		$result = $conn -> query($sql);
				
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
                $nnn= "id: " . $row["userid"]. " - Name: " . $row["fname"]. " " . $row["lname"]. "<br>";
                            
				if($row["roleid"]==2){
					session_start();
					$_SESSION['userid']=$row['userid'];
					header("location: business_service.php?id=" . $_SESSION['userid']);
				} else if($row["roleid"]==1){
					session_start();
					$_SESSION['userid']=$row['userid'];
					header("location: client_service.php?id=" . $_SESSION['userid']);
				}
			}
		} 
				
}


function changePassword($oldPassword, $newPassword1, $newPassword2) {
    global $conn;

	    if($oldPassword!==$newPassword1) {
    		if($newPassword1===$newPassword2) {
                $userID= "SELECT `userid` from `users` WHERE `password`= $oldPassword";
            $usId;
            $resultN = $conn->query($userID);
            if ($resultN->num_rows > 0) {
                if ($row = $resultN->fetch_assoc()) {
                    $usId = $row["userid"];
                }
            } 
            $sql1="UPDATE `users` SET `password`='$newPassword1' WHERE `userid`=$usId";
            if ($conn->query($sql1) === TRUE) {
                echo 'Password Updated Successfully';        
            } else {
            }    
            } else {echo "Passwords do not match";}
        } else { echo "Old and New password cannot be same"; } 
    }


    function insertIntoComments ($fn, $ln, $em, $ph, $comm) {
        global $conn;
        $sql = "INSERT INTO `contact`(`fname`, `lname`, `email`, `phone`, `comments`) VALUES ('$fn','$ln','$em','$ph','$comm')";
				if($conn -> query($sql) ===TRUE)
				{	
				$to_email = 'spardha22@gmail.com';
				$subject = 'Contact Us Page Information';
				$message = 'You have a message. First Name =  '. $fn .'. Last Name = ' . $ln .'. Email = ' . $em.'. Contact = ' . $ph .'. Comments =  ' . $comm;
				$headers = 'From:noreply@raopetstore.com';
				//check if the email address is invalid $secure_check
				mail($to_email, $subject, $message, $headers);
				}
					header("location: index.php");
					
				}
				
    







?>
