<?php
$to = $_POST['email'];
$firstname = $_POST['firstname'];

$subject = $_POST['subject'];
$ticket = $_POST['message'];

$message = "
<html>
<head>
<title>'.$subject.'</title>
</head>
<body>
Hello $firstname ,
<p>$ticket</p>
<table>
<tr>
</tr>
<tr>
<td> </td>
<td>  </td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: Atlassian Codegeist' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);


header("location: success.html"); 


?>
