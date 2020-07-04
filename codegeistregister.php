<?php
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */

// Set session variables to be used on profile.php page
$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['firstname'];
$_SESSION['last_name'] = $_POST['lastname'];

// Escape all $_POST variables to protect against SQL injections
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];
//$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$hash = md5( rand(0,1000) ) ;

$host = 'localhost';
$user = 'cwgshosting_codegeist';
$pass = 'codegeist20';
$db = 'cwgshosting_codegeist';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

      
// Check if user with that email already exists
$result = $mysqli->query("SELECT * FROM codegeistregister WHERE email='$email'") or die($mysqli->error());

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO codegeistregister (first_name, last_name, email, password, hash) " 
            . "VALUES ('$first_name','$last_name','$email','$password', '$hash')";

    // Add user to the database
    if ( $mysqli->query($sql) ){

        $_SESSION['active'] = 0; //0 until user activates their account with verify.php
        $_SESSION['logged_in'] = true; // So we know the user has logged in
        $_SESSION['message'] =
                
                 "Confirmation link has been sent to $email, please verify
                 your account by clicking on the link in the message!";

        // Send registration confirmation link (verify.php)
        $to      = $email;
        $subject = 'Account Verification ( Codegeist.com )';
        $message_body = '
        Hello '.$first_name.',

        Thank you for signing up!

        Please click this link to activate your account:

        http://atlassiancodegeist.com/verify.php?email='.$email.'&hash='.$hash;  

        mail( $to, $subject, $message_body );

        header("location: profile.php"); 

    }

    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: error.php");
    }


?>