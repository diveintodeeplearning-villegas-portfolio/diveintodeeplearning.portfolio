<?php

//$blog_id = 1;
$blog_id = intval($_POST['blog_id']);

$user = "b9_25376111"; 
$password = "Thankyou128"; 
//$host2 = "mysql:host=sql311.byethost.com;port=3306;dbname=b9_25376111_ais_db"; 
$host = "sql311.byethost.com"; 
$dbase = "b9_25376111_ais_db"; 
$table = "comments"; 

$con = mysqli_connect($host, $user, $password, $dbase);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,$dbase);
$sql="SELECT * FROM comments WHERE blog_id = '".$blog_id."' ORDER BY parent_comment_id asc, comment_id asc";
$result = mysqli_query($con,$sql);



//$sql = "SELECT * FROM tbl_comment ORDER BY parent_comment_id asc, comment_id asc";
//$result = mysqli_query($con, $sql);

$record_set = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($record_set, $row);
}
mysqli_free_result($result);

mysqli_close($con);
echo json_encode($record_set);
?>