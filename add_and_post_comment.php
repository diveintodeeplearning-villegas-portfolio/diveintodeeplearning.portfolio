
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
$table = "comments"; 
//$servername="sql311.byethost.com";

//if isset($_POST['comment_id']){
    $parent_comment_id= checkDataInjection($_POST['comment_id']);
//}
//else{
  //  $parent_comment_id=0;
//}

$blog_id= checkDataInjection($_POST['blog_id']);
$name= checkDataInjection($_POST['name']);
$email= checkDataInjection($_POST['email']);
$website= checkDataInjection($_POST['website']);
$message= checkDataInjection($_POST['message']);


// Create connection
$conn = new mysqli($host, $user, $password, $dbase);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Validate email
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //echo("$email is a valid email address");
    $sql = "INSERT INTO $table (blog_id, parent_comment_id, name, email, website, message) VALUES ('$blog_id', '$parent_comment_id', '$name', '$email', '$website', '$message')";

    if ($conn->query($sql) === TRUE) {
    //$message= "New record created successfully".' '.$name.' '.$email;
     $message = true;
 //    header("Location: index.html#comment-section");
    }
    else {
    //$message= "Error: " . $sql . "<br>" . $conn->error;
   //  header("Location: index.html#comment-section");
    }

}
 else {
    //echo("$email is not a valid email address");
    $failure = "$email is not a valid email address";
     header("Location: index.html#comment-section");
}


function checkDataInjection($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

$conn->close();

?>