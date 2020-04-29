<?php
/* Connect to a MySQL database using driver invocation */
$host = 'mysql:host=sql311.byethost.com;port=3306;dbname=b9_25376111_ais_db'
$dsn = 'mysql:dbname=b9_25376111_ais_db;host=185.27.134.10';
$user = 'b9_25376111';
$password = 'Thankyou128';

$servername='sql311.byethost.com';
$dbname='b9_25376111_ais_db';

#$conns = mysql_connect($servername,$user,$password,$dbname);
#$connection = mysqli_connect('sql311.byethost.com','b9_25376111') or die(mysqli_error());
#$database = mysqli_select_db('b9_25376111_ais_db')or die(mysqli_error());

#try {
#    $dbh = new PDO($dsn, $user, $password);
#} catch (PDOException $e) {
#    echo 'Connection failed: ' . $e->getMessage();
#}


try{
    $pdo = new PDO('mysql:host=sql311.byethost9.com;port=3306;dbname=b9_25376111_ais_db','b9_25376111','Thankyou');
}catch(Exception $ex){
    die($ex->getMessage());
}

var_dump($pdo)




?>