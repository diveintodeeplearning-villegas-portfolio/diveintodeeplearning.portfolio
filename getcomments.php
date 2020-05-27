 
<!DOCTYPE html>
<html>
<head>
<title>AI Solutions &mdash;Artificial Intelligence, Deep Learning and Machine Learning</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="style.css">
     <link rel="shortcut icon" type="image/jpg" href="images/ico.jpg">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<script>
$(function(){
   $('.reply').click(function(){
      $(this).hide();
      $('.replyForm').show();
      return false;
   });
});
</script> 

<style>
    .replyDiv .replyForm{display:none;}
</style>
</head>
<body>

<?php
$blog_id = intval($_GET['blog_id']);
//$blog_id = "1";

$user = "b9_25376111"; 
$password = "Thankyou128"; 
//$host2 = "mysql:host=sql311.byethost.com;port=3306;dbname=b9_25376111_ais_db"; 
$host = "sql311.byethost.com"; 
$dbase = "b9_25376111_ais_db"; 
$table = "comments"; 

$countReply=0;

$con = mysqli_connect($host, $user, $password, $dbase);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"b9_25376111_ais_db");
$sql="SELECT * FROM comments WHERE blog_id = '".$blog_id."'";
$result = mysqli_query($con,$sql);

$rows = array() ;
 if ($result){
   while ($row = mysqli_fetch_array($result)){
    $rows[] = $row ; //Put your data in the array first. 
   }
 }

/*
echo ("<ul class='comment-list'>");
while($row = mysqli_fetch_array($result)) {
//    $date = $row['created_at'];
    $countReply++;
    $time = strtotime($row['created_at']);
    $mystr=strftime('%a, %b %d %Y at %I:%M %p', $time);

    echo "<li class='comment'>";
    echo "<div class='vcard bio'>";
    echo "<img src='images/profile.jpg' alt='Image'>";
    echo " </div>";
    echo "<div class='comment-body'>";
    echo "<h3>".$row['name']."</h3>";
    echo "<div class='meta'>".$mystr."</div>";
    echo "<p>".$row['message']."</p>";
    //echo " <input class='reply' type='submit' id='reply'.$countReply value='Reply'>";
    echo "

    <div class='replyDiv' >
             <p><a href='#comments-section' class='reply' >Reply</a></p>
             <div class= 'replyForm' >
      <input type='text' value='' name='myinput' id='myinput'/>
   </div>
    </div>";
    
    
    
    echo "</div>";
    echo "</li>";
}
echo "</ul>";
*/
mysqli_close($con);
?>

<ul class='comment-list'>
<?php 
 foreach ($rows as $row) {  
    $countReply++;
    $time = strtotime($row['created_at']);
    $mystr=strftime('%a, %b %d %Y at %I:%M %p', $time);
?>
  <td><?php echo $row['inital']; ?></td> 
  <td><?php echo $row['firstname']; ?></td> 
  
    <li class='comment'>
    <div class='vcard bio'>
    <img src='images/profile.jpg' alt='Image'>
    </div>
    <div class='comment-body'>
    <h3><?php echo $row['name']; ?></h3> 
    <div class='meta'><?php echo $mystr; ?></div> 
    <p><?php echo $row['message']; ?></p> 
    <!--echo " <input class='reply' type='submit' id='reply'.$countReply value='Reply'>";
    echo "-->
    <div class='replyDiv'>
             <p><a href='#comments-section' class='reply' id=<?php echo 'reply'.$countReply; ?> >Reply</a></p>
             <div class= 'replyForm'>
      <input type='text' value='' name='myinput'  id=<?php 'myinput'.$countReply; ?>/>
            </div>
    </div>
    </div>
    </li>
<?php } ?> 
</ul>

<!--
<div class="reply-form-wrap pt-5" id="reply-form-section">
                <form name = "comment-form" action="#" method="post" class="" id="comment-form" onsubmit="hideform()">
                   <div class="form-group">
                    <input type="hidden" class="form-control" id="blog_id" name="blog_id" value="1">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="message" name="message" placeholder = "Join the disscusion" required>
                  </div>
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                  <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website" name="website">
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Reply" class="btn btn-primary btn-md text-white" name="submit" id="submit" required>
                  </div>
                </form>
              </div>
*/


/*
<ul class="comment-list">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person_2.jpg" alt="Image">
                  </div>
                  <div class="comment-body">
                    <h3>Jacob Smith</h3>
                    <div class="meta">April 8, 2020 at 2:21pm</div>
                    <p>Thank you for sharing this deep learning blog.</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li>

                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person_3.jpg" alt="Image">
                  </div>
                  <div class="comment-body">
                    <h3>Chris Meyer</h3>
                    <div class="meta">April 8, 2020 at 2:21pm</div>
                    <p>I'm using GANGs to create images.  </p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li> 
              </ul>
-->





</body>



<script>
/*
countReply=0;
 $('#reply').click(function(event){
      event.preventDefault();

      countReply++;
      window.console && console.log("Adding reply");

      $('#reply').append('<div class="reply-form-wrap pt-5" id="reply-form-section">
                <form name = "comment-form" action="#" method="post" class="" id="comment-form" onsubmit="hideform()">
                   <div class="form-group">
                    <input type="hidden" class="form-control" id="blog_id" name="blog_id" value="1">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="message" name="message" placeholder = "Join the disscusion" required>
                  </div>
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                  <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website" name="website">
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Reply" class="btn btn-primary btn-md text-white" name="submit" id="submit" required>
                  </div>
                </form>
              </div>');
    });
    */
</script>
</html>
