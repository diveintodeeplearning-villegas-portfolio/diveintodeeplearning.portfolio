
<?php

/*session_start();
require_once "head.php";
*/
$message = false;
$failure = false;

$user = "b9_25376111"; 
$password = "Thankyou128"; 
//$host2 = "mysql:host=sql311.byethost.com;port=3306;dbname=b9_25376111_ais_db"; 
$host = "sql311.byethost.com"; 
$dbase = "b9_25376111_ais_db"; 
$table = "messages"; 
//$servername="sql311.byethost.com";

$first_name= checkDataInjection($_POST['first_name']);
$last_name=  checkDataInjection($_POST['last_name']);
$email=      checkDataInjection($_POST['email']);
$subject=    checkDataInjection($_POST['subject']);
$message=    checkDataInjection($_POST['message']);


/************************************* Send email **********************************/
/*
$toEmail = "info.aisolutionsmx@gmail.com";
$mailHeaders = "From: " .$first_name." ".$last_name. "<". $email .">\r\n";
if(mail($toEmail, $subject, $message, $mailHeaders)) {
echo"<p class='success'>Contact Mail Sent.</p>";
} else {
echo"<p class='Error'>Problem in Sending Mail.</p>";


$toEmail = "info.aisolutionsmx@gmail.com";
$mailHeaders = "From: " . $_POST["first_name"]." ".$_POST["last_name"] . "<". $_POST["mail"] .">\r\n";
if(mail($toEmail, $_POST["subject"], $_POST["message"], $mailHeaders)) {
echo"<p class='success'>Contact Mail Sent.</p>";
} else {
echo"<p class='Error'>Problem in Sending Mail.</p>";
*/
/************************************* Send email **********************************/

// Create connection
$conn = new mysqli($host, $user, $password, $dbase);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Validate email
//if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("$email is a valid email address");
    $sql = "INSERT INTO $table (first_name, last_name, email, subject, message) VALUES ('$first_name', '$last_name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
    $message= "New record created successfully".' '.$name.' '.$email;
    echo ($message);
     $message = true;
    // header("Location: index.html#contact-section");
    }
    else {
    $message= "Error: " . $sql . "<br>" . $conn->error;
     echo ($message);
    // header("Location: index.html#contact-section");
    }

//}
 //else {
  //  echo("$email is not a valid email address");
    //$failure = "$email is not a valid email address";
    // header("Location: index.html#contact-section");
//}


function checkDataInjection($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

$conn->close();


?>