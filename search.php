


<?php

$home = file_get_contents('http://aiforeverybody.byethost9.com/');//IMAGINE THIS IS REALLY HOME.PHP
$home1 = "http://aiforeverybody.byethost9.com/blog1.html";
$home2 = "http://aiforeverybody.byethost9.com/blog2.html";
$home3 = "http://aiforeverybody.byethost9.com/blog3.html";
$home4 = "http://aiforeverybody.byethost9.com/blog4.html";
$home5 = "http://aiforeverybody.byethost9.com/blog5.html";
$home6 = "http://aiforeverybody.byethost9.com/blog6.html";

$homePageName = "index.html";//JUST HERE TO SHOW AN EXAMPLE
$homePageName1 = "blog1.html";
$homePageName2 = "blog2.html";
$homePageName3 = "blog3.html";
$homePageName4 = "blog4.html";
$homePageName5 = "blog5.html";
$homePageName6 = "blog6.html";

$homePage = " <li>Home <br>  ";//JUST HERE TO SHOW AN EXAMPLE
$homePage1 = "<li>Generative Adversarial Networks to make 8-bit Pixel art <br> ";
$homePage2 = "<li>How DCGANs work <br> ";
$homePage3 = "<li>DCGAN for Video games <br> ";
$homePage4 = "<li>12 Amazing Deep Learning breakthroughs <br> ";
$homePage5 = "<li>Deep learning and convolutional neural networks <br> ";
$homePage6 = "<li>Emotion AI <br> ";

$homePageDescription = "   AI Solutions is an Artificial Intelligence startup. We develop machine and deep learning systems. We use SVM, forecast trees, convolutional networks, recurrent networks, LSTM, GANGs, etc.</li>";//JUST HERE TO SHOW AN EXAMPLE
$homePageDescription1 = " Generative models are deep learning models that are able to create data such as photos, movies or music by itself. </li>";
$homePageDescription2 = "To build a DCGAN, you create two deep neural networks that will fight against each other. So, these deep neural networks will fight endlessly to become stronger.</li>";
$homePageDescription3 = " DCGAN can be used to generate new artwork for old video games. In this tutorial, we are going to build a DCGAN to generate screenshots of imaginary video games for Nintendo Entertainment System based on screenshots of real-old games. </li>";
$homePageDescription4 = " The last year many AI engineers aimed to create a real artificial intelligence system. A real machine that thinks is what every AI geek wants. Machine learning is the most successful application of artificial intelligence. For example, machine learning is able to win a human Go player. </li>";
$homePageDescription5 = "In this article, you will learn how to create your convolutional neural network (ConvNet) for recognizing objects in images. In fact, Google Photos uses deep learning to search your photos based on what is in the picture.</li>";
$homePageDescription6 = "Nowadays, Artificial Intelligence can be used for making our electronic devices more personal. AI can be used for many things such as simplify the daily task and increase productivity. Emotion AI (or affective computing) is a new technology to make electronic devices understand our moods.</li>";


$search = $_POST['findMe'];


$findMeList="";

//IF WORD FOUND IN HOME PAGE
if (stripos($home, $search) !== false) {
    //USING EXAMPLE.COM TO SHOW IT WORKS
    //echo "example ".'<a href="'.$homePageName.'">'.$homePageName.'</a>'.'<br>';
    $findMeList='<a href="'.$homePageName.'">'.$homePage.'</a>'.$homePageDescription.'<br>';
}
if (stripos($home1, $search) !== false) {
    //USING EXAMPLE.COM TO SHOW IT WORKS
   // echo "example ".'<a href="'.$homePageName1.'">'.$homePageName1.'</a>';
    $findMeList=$findMeList.'<a href="'.$homePageName1.'">'.$homePage1.'</a>'.$homePageDescription1.'<br>';
}
if (stripos($home2, $search) !== false) {
    //USING EXAMPLE.COM TO SHOW IT WORKS
    //echo "example ".'<a href="'.$homePageName2.'">'.$homePageName2.'</a>';
     $findMeList=$findMeList.'<a href="'.$homePageName2.'">'.$homePage2.'</a>'.$homePageDescription2.'<br>';
}
if (stripos($home3, $search) !== false) {
    //USING EXAMPLE.COM TO SHOW IT WORKS
   // echo "example ".'<a href="'.$homePageName3.'">'.$homePageName3.'</a>';
     $findMeList=$findMeList.'<a href="'.$homePageName3.'">'.$homePage3.'</a>'.$homePageDescription3.'<br>';
}
if (stripos($home4, $search) !== false) {
    //USING EXAMPLE.COM TO SHOW IT WORKS
   // echo "example ".'<a href="'.$homePageName4.'">'.$homePageName4.'</a>';
    $findMeList=$findMeList.'<a href="'.$homePageName4.'">'.$homePage4.'</a>'.$homePageDescription4.'<br>';
}
if (stripos($home5, $search) !== false) {
    //USING EXAMPLE.COM TO SHOW IT WORKS
   // echo "example ".'<a href="'.$homePageName5.'">'.$homePageName5.'</a>';
     $findMeList=$findMeList.'<a href="'.$homePageName5.'">'.$homePage5.'</a>'.$homePageDescription5.'<br>';
}
if (stripos($home6, $search) !== false) {
    //USING EXAMPLE.COM TO SHOW IT WORKS
    //echo "example ".'<a href="'.$homePageName6.'">'.$homePageName6.'</a>';
     $findMeList=$findMeList.'<a href="'.$homePageName6.'">'.$homePage6.'</a>'.$homePageDescription6.'<br>';
}

if($findMeList===""){  $findMeList= "No result found" ; }
else{
   /* echo "Results:<br>"; 
    echo $findMeList;*/
}

?>
<!DOCTYPE html>
<html lang="en">
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

    <!-- Load icon library search bar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <style>
        /* ------------------------------------------
[Master Stylesheet]

--------------------------------------------- */
#map {
            height: 600px;
             width: 100%; }
         @media only screen and (max-width: 767px) {
        #map {
             height: 400px; } }
        #map iframe {
              width: 100%;
              height: 100%;
              border: none !important;
              border-radius: 10px; }
/*# sourceMappingURL=style.css.map */

    </style>

    <style>

/* Style the search field */
form.findme input[type=text] {
  padding: 3px; 
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
  
}

    /* Style the submit button */
form.findme button {
  float: left;
  width: 20%;
  padding: 3px;
  background: #32dbc6;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
  
}

form.findme button:hover {
      color: grey; 
      background:#1ec7b2;
      //background: rgba(0, 0, 0, 0.1);
      //opacity:2;
       
}


/* Style the search field */
form.findme2 input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid white;
  float: left;
  width: 80%;
  background: #f1f1f1;
  
}

    /* Style the submit button */
form.findme2 button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #32dbc6;;
  color: white;
  font-size: 17px;
  border: 1px solid white;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.findme2 button:hover {
       color: grey; 
      background:#1ec7b2;
}

form.findme button:focus {outline:0;}
form.findme2 button:focus {outline:0;}

form.findme input[type=text]:focus {outline:0;}
form.findme2 input[type=text]:focus {outline:0;}

    </style>

    <link rel="shortcut icon" type="image/jpg" href="images/ico.jpg">
   
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
 
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="border-bottom top-bar py-2 bg-dark" id="home-section"> <!--bg-dark-->
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="mb-0">
              <span><strong class="text-white">Email:</strong> <a href="#">info@diveintodeeplearning.com</a></span>
            </p>
          </div>
          <div class="col-md-6 " ><!--class="class="social-media"-->
            <ul class="social-media">
              <li><a href="https://github.com/diveintodeeplearning-villegas-portfolio" class="p-2"><span class="icon-github"></span></a></li>
              <li><a href="https://www.linkedin.com/in/yazmin-v-52548a183/" class="p-2"><span class="icon-linkedin"></span></a></li>
              <!--<li><form method="get" action="" > <input type="text" name="search" id="search" value="" /> <input type="submit" name="submit" value="Search" class="no-outline" /> </form></li>-->
              <!--<li><a href="#" class="p-2"><span class="icon-search"></span></a></li>-->
              <li><div class="search-bar social-media">
                  <!--///YOUR FORM/INPUT BOX-->
            <form class="findme" action="search.php" method="post">
                <input class="input-text" type="text" name="findMe"  id="search">
                  <button type="submit"><i class="icon-search"></i></button>
            </form>
</div></li>
                <script>
                    /*
                  var defaultText = "";
                   var searchBox = document.getElementById(""); //default text after load 
                   searchBox.value = defaultText; //on focus behaviour
                    searchBox.onfocus = function() { if (this.value == defaultText) {//clear text field 
                    this.value = ''; } } //on blur behaviour 
                    searchBox.onblur = function() { if (this.value == "") {//restore default text 
                    this.value = defaultText; } }
                    */
                </script>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-black h2 mb-0"> </a><a href="index.html">
              <img src="images/logo.jpg" alt="Logo" class="img-fluid"></a></h1>
           <!--   <img src="images/logo.jpg" alt="Logo" class="img-fluid">-->
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.html#home-section" class="nav-link">Home</a></li>
                <li><a href="index.html#work-section" class="nav-link">Portfolio</a></li>
                <li>
                  <a href="index.html#services-section" class="nav-link">Services</a>
                </li>
                <li class="has-children">
                  <a href="index.html#about-section" class="nav-link">About</a>
                  <ul class="dropdown">
                    <li><a href="index.html#about-section">Specialties</a></li>
                    <li><a href="index.html#team-section">Our Team</a></li>
                    <li><a href="index.html#certificates-section">Certificates</a></li>
                  </ul>
                </li>   
                <li class="has-children">
                    <a href="#blog-section" class="nav-link">Blog</a>
                    <ul  class="dropdown">
                        <li><a href="index.html#blog-section">Latest Blog</a></li>
                        <li><a href="blog.html">Blog</a></li>
                    </ul>
                </li>
                <li><a href="index.html#contact-section" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

    </header>






   

<div class="col-md-12 col-lg-12">
      <a href="#" class=" bg-primary py-5 d-block"> <!-- bg-dark-->
      <div class="container">
        <div class="row justify-content-center">
         <!-- <div class="col-md10"><h2 class="text-white">Let's Get Started</h2></div> --> 
        </div>
      </div>
    </a>
      <a href="#" class=" bg-primary py-5 d-block"> <!-- bg-dark-->
      <div class="container">
        <div class="row justify-content-center">
         <!-- <div class="col-md10"><h2 class="text-white">Let's Get Started</h2></div> --> 
        </div>
      </div>
    </a>
    </div>
  




    <section class="site-section">
      <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-12">
            
              
              <h2 class="text-white"></h2>
              <ul class="list-unstyled primary">
              
            <!--<li><a href="#" class="p-2"><span class="icon-search"></span></a></li>-->
              
              

            <form class="findme2" action="search.php" method="post">
                <input class="input-text" type="text" name="findMe"  id="search" placeholder = <?php echo $search ?>>
                 <button type="submit"><span class="fa fa-search"></span></button>
            </form>

              
                <li><?php echo $findMeList ?></li> 
                
              </ul>
            
          </div>
        
     
       
      </div>
      </div>

    </section>

    





   <section  id="newsletter-section">
    <footer class="site-footer bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Dive Into Deep Learning team can help you with your AI projects.</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <li><a href="#about-section" >About Us</a></li>
                  <li><a href="#services-section" >Services</a></li>
                  <li><a href="#testimonials-section" >Testimonials</a></li>
                  <li><a href="#contact-section" >Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="https://github.com/aisolutionsanddeeplearning/" class="pl-0 pr-3"><span class="icon-github"></span></a>
                <a href="https://www.linkedin.com/in/yazmin-v-52548a183/" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form  name="email-form" method="post" action="addemail.php" id="email-form"> <!--action="addemail.php" onsubmit="return false"-->
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Name" aria-label="Name" aria-describedby="button-addon2" name="name" id="name" required>
                <input type="email" class="form-control border-secondary text-white bg-transparent" placeholder="Email" aria-label="Email" aria-describedby="button-addon2" name="email" id ="email" required>
                <div class="input-group-append "  >
                  <button class="btn btn-primary text-white" onSubmit="funcSubscribe()" type="submit" id="button-addon2" value="Subscribe" name="subscribe">Send </button>
                   
                </div>
                
              </div>
             <span class="text-primary" id="subMessage">Thank you!<br><span class="text-white">You're subscribed!</span></span>
            <span class="text-white" id="failMessage">Please enter a valid email address</span>
             


            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Dive Into Deep Learning<script>document.write(new Date().getFullYear());</script><!--| AI for everybody with <i class="icon-heart text-danger" aria-hidden="true"></i> -->
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>
 </section>


 
  </div> <!-- .site-wrap -->
</div>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  <script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: [" Deep Learning"," Machine Learning"," Artificial Intelligence"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>

    <script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words-portfolio', {
            strings: [" Convolutional Neural Network"," Natural Language Processing"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>

  <script src="js/main.js"></script>

<script  type="text/javascript">
// When the user clicks on div, open the popup
function funcSubscribe() {
 //var message = "<?PHP echo $message ?>"; 
 //   if(message == "success"){
        // var x = document.getElementById("subMessage");
          //   x.style.display = "inline-block";
//} else {
  //  var f = document.getElementById("failMessage");
    //    f.style.display = "inline-block";
//}
}
</script>
<script>
    var x = document.getElementById("subMessage");
    x.style.display = "none";
     
    var f = document.getElementById("failMessage");
    f.style.display = "none";

    var cx = document.getElementById("subContactMessage");
    cx.style.display = "none";
     
    var cf = document.getElementById("failContactMessage");
    cf.style.display = "none";
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script>
function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

$email = $("#email-form [name='email']").val();

$(document).ready(function(){
$("#email-form").on("submit",function(e){
e.preventDefault();
if(validateEmail($("#email-form [name='email']").val()))
{
    var x = document.getElementById("subMessage");
    x.style.display = "inline-block";

     var f = document.getElementById("failMessage");
    f.style.display = "none";

    var sendData = $( this ).serialize();

    $.ajax({
        type: "POST",
        url: "addemail.php",
        data: sendData,
        success: function(data){
            $("#contact-form").find("input[type=text], input[type=email]").val("");
        }
    });
}
else{
    var f = document.getElementById("failMessage");
    f.style.display = "inline-block";

     var x = document.getElementById("subMessage");
    x.style.display = "none";
}
});
});

</script>

<script>
function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

$email = $("#contact-form [name='email']").val();

$(document).ready(function(){
$("#contact-form").on("submit",function(e){
e.preventDefault();
if(validateEmail($("#contact-form [name='email']").val()))
{
    var x = document.getElementById("subContactMessage");
    x.style.display = "inline-block";

     var f = document.getElementById("failContactMessage");
    f.style.display = "none";

    var sendData = $( this ).serialize();

    $.ajax({
        type: "POST",
        url: "add_and_send_message.php",
        data: sendData,
        success: function(data){
            $("#contact-form").find("input[type=text], input[type=email], textarea").val("");
        }
    });


}
else{
    var f = document.getElementById("failContactMessage");
    f.style.display = "inline-block";

     var x = document.getElementById("subContactMessage");
    x.style.display = "none";
}
});
});

</script>


  </body>
</html>
