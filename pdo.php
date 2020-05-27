<!--
<html>
<head>
</head>
<body>

<form action="#" method="post">
    <input type="text" name="findMe" placeholder="Search Yacht">
</form>
</body>
</html>
-->

<?php
/* Connect to a MySQL database using driver invocation */

$host = 'mysql:host=sql311.byethost.com;port=3306;dbname=b9_25376111_ais_db'
$dsn = 'mysql:dbname=b9_25376111_ais_db;host=185.27.134.10';
$user = 'b9_25376111';
$password = 'Thankyou128';

$servername='sql311.byethost.com';
$dbname='b9_25376111_ais_db';

try{
    $pdo = new PDO('mysql:host=sql311.byethost9.com;port=3306;dbname=b9_25376111_ais_db','b9_25376111','Thankyou');
}catch(Exception $ex){
    die($ex->getMessage());
}

var_dump($pdo)


/*
//$homepage = file_get_contents('https://www.w3schools.com/php/php_ajax_database.asp');

//YOU WILL HAVE TO LINE THIS UP WITH YOUR WORKING FILE NAMES
$home = file_get_contents('http://aiforeverybody.byethost9.com/');//IMAGINE THIS IS REALLY HOME.PHP
$homePageName = "index.html";//JUST HERE TO SHOW AN EXAMPLE

$search = $_POST['findMe'];
//$search = "deep learning";//THIS WOULD WORK, BUT I WAS SHOWING HOW TO USE FORM

//IF WORD FOUND IN HOME PAGE
if (stripos($home, $search) !== false) {//USING EXAMPLE.COM TO SHOW IT WORKS
    echo '<a href="'.$homePageName.'">'.$homePageName.'</a>';
}
*/

?>
