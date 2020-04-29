
<?php

/*
$user = "b9_25376111"; 
$password = "Thankyou128"; 
//$host2 = "mysql:host=sql311.byethost.com;port=3306;dbname=b9_25376111_ais_db"; 
$host = "sql311.byethost.com"; 
$dbase = "b9_25376111_ais_db"; 
$table = "users"; 
//$servername="sql311.byethost.com";

$name= checkDataInjection($_POST['name']);
$email= checkDataInjection($_POST['email']);


// Create connection
$conn = new mysqli($host, $user, $password, $dbase);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO $table (name, email)
VALUES ('$name', '$email')";


if ($conn->query($sql) === TRUE) {
    $message= "New record created successfully".' '.$name.' '.$email;
     header("Location: index.html#newsletter-section");
} else {
    $message= "Error: " . $sql . "<br>" . $conn->error;
     header("Location: index.html#newsletter-section");
}
function checkDataInjection($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

$conn->close();
*/

session_start();
require_once "head.php";

$user = "b9_25376111"; 
$password = "Thankyou128"; 
//$host2 = "mysql:host=sql311.byethost.com;port=3306;dbname=b9_25376111_ais_db"; 
$host = "sql311.byethost.com"; 
$dbase = "b9_25376111_ais_db"; 
$table = "users"; 
//$servername="sql311.byethost.com";

$name= checkDataInjection($_POST['name']);
$email= checkDataInjection($_POST['email']);


// Create connection
$conn = new mysqli($host, $user, $password, $dbase);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Validate email
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //echo("$email is a valid email address");
    $sql = "INSERT INTO $table (name, email) VALUES ('$name', '$email')";

    if ($conn->query($sql) === TRUE) {
    $message= "New record created successfully".' '.$name.' '.$email;
     header("Location: index.html#newsletter-section");
    }
    else {
    $message= "Error: " . $sql . "<br>" . $conn->error;
     header("Location: index.html#newsletter-section");
    }

}
 else {
    //echo("$email is not a valid email address");
    $failure = "$email is not a valid email address";
     header("Location: index.html#newsletter-section");
}


function checkDataInjection($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

$conn->close();





?>

//Block 4
/*
//session_start();
//require_once "head.php";
try{
    $pdo = new PDO('mysql:host=sql311.byethost9.com;port=3306;dbname=b9_25376111_ais_db','b9_25376111','Thankyou128');

      $stmt = $pdo->prepare('INSERT INTO users
                        (name, email)
                        VALUES ( :name, :email)');

                          $stmt->execute(array(
                                    
                                    ':name' => 'yazmin',
                                    ':email' => 'yazminvillegas128@gmail.com'));



if ( isset($_POST['name']) && isset($_POST['email'])) {
                  $stmt = $pdo->prepare('INSERT INTO users
                        (name, email)
                        VALUES ( :name, :email)');

                          $stmt->execute(array(
                                    
                                    ':name' => checkDataInjection($_POST['name']),
                                    ':email' => checkDataInjection($_POST['email'])));

}

}catch(Exception $ex){
    die($ex->getMessage());
}

var_dump($pdo)


    */


//mysqli_close($dbc);


