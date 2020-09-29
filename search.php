


<?php

$homePageNameArray = array( "index.html","blog.html","index.html#work-section","training_tf_js_model_in_browser.html","training_fashion_mnist_model_in_browser.html", "blog1.html", "blog2.html", "blog3.html","blog4.html","blog5.html","blog6.html" );
$homePageArray = array( "<li>Home <br>",
                        "<li>Blog <br>",
                        "<li>Portfolio <br>",
                        "<li>Image classification with TensorFlow JS and transfer learning using MobileNet for <br> Rock, Paper, Scissors, Lizard, Spock classification model <br>",
                        "<li>Image classification with TensorFlow JS and transfer learning using MobileNet for <br> Fashion Drawing Classification <br>",
                        "<li>Generative Adversarial Networks to make 8-bit Pixel art <br>",
                         "<li>How DCGANs work <br> ",
                         "<li>DCGAN for Video games <br> ",
                         "<li>12 Amazing Deep Learning breakthroughs <br> ",
                         "<li>Deep learning and convolutional neural networks <br>",
                         "<li>Emotion AI <br>" );
$homePageDescriptionArray = array( "Dive Into Deep Learning team can help you to create, develop, traind and optimize deep learning models.</li>",
                        "Dive Into Deel Learning Blog </li>",
                        "This portfolio has Convolutional Neural Network and Sequence Models.   
                        <ul class='list-unstyled ul-check primary'>
                        <li>Image classification with TensorFlow JS and transfer learning using MobileNet for Rock, Paper, Scissors, Lizard, Spock classification model </li> 
                        <li> Fashion Drawing Classification.</li> 
                        <li>Face Recognition</li>
                        <li>Car Detection For Autonomous Driving</li>
                        <li>Neural Style Transfer</li> 
                        <li>Chatbot</li>
                        <li>Nueral Machine Translation</li>
                        <li>Jazz Improvisation With LSTM </li></ul></li>",
                        "In this web application, you are able to train your model in the browser using your webcam. You will train your model in exactly the same way as in the Rock, Paper, Scissors example but now you will include the Lizard and Spock hand gestures.</li>",
                        "This web application will automatically build and train a neural network that can classify the images in the Fashion MNIST dataset.</li>",
                        "Generative models are deep learning models that are able to create data such as photos, movies or music by itself. </li>",
                         "To build a DCGAN, you create two deep neural networks that will fight against each other. So, these deep neural networks will fight endlessly to become stronger.</li> ",
                         "DCGAN can be used to generate new artwork for old video games. In this tutorial, we are going to build a DCGAN to generate screenshots of imaginary video games for Nintendo Entertainment System based on screenshots of real-old games. </li> ",
                         "The last year many AI engineers aimed to create a real artificial intelligence system. A real machine that thinks is what every AI geek wants. Machine learning is the most successful application of artificial intelligence. For example, machine learning is able to win a human Go player. </li>",
                         "In this article, you will learn how to create your convolutional neural network (ConvNet) for recognizing objects in images. In fact, Google Photos uses deep learning to search your photos based on what is in the picture.</li>",
                         "Nowadays, Artificial Intelligence can be used for making our electronic devices more personal. AI can be used for many things such as simplify the daily task and increase productivity. Emotion AI (or affective computing) is a new technology to make electronic devices understand our moods.</li>" );



$search = $_POST['findMe'];


$findMeList="";

for ($i = 0; $i <= 7; $i++) {
  if (stripos($homePageArray[$i].$homePageDescriptionArray[$i], $search) !== false) {
    //USING EXAMPLE.COM TO SHOW IT WORKS   
    $findMeList=$findMeList.'<a href="'.$homePageNameArray[$i].'">'.$homePageArray[$i].'</a>'.$homePageDescriptionArray[$i].'<br>';
}
}

if($findMeList===""){  $findMeList= "No result found" ; }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Drive Into Deep Learning</title>
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


    <script src="http://code.jquery.com/jquery-1.6.4.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function () {
                $.get("myScripts.html", function (data) {
                    $("head").append(data);
                });
            });
    </script>



    <link rel="shortcut icon" type="image/jpg" href="images/ico.jpg">
   
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" onLoad="loadDIDL(),loadFooter(),loadHome(),loadSubscribe()">
 
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="border-bottom top-bar py-2 bg-dark" id="home-section"> <!--bg-dark--></div>

    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner" id="header-section">
         <div class="container">
        <div class="row align-items-center">
          
         <div class="col-11 col-xl-2" id="diveintodl-section"></div>
         
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="index.html#work-section" class="nav-link">Portfolio</a></li>
                <li>
                  <a href="#services-section" class="nav-link">Services</a>
                </li>
                <li class="has-children">
                  <a href="#about-section" class="nav-link">About</a>
                  <ul class="dropdown">
                    <li><a href="#about-section">Specialties</a></li>
                    <li><a href="#team-section">Our Team</a></li>
                    <li><a href="#certificates-section">Certificates</a></li>
                  </ul>
                </li>
                <li class="has-children">
                    <a href="#blog-section" class="nav-link">Blog</a>
                    <ul  class="dropdown">
                        <li><a href="#blog-section">Latest Blog</a></li>
                        <li><a href="blog.html">Blog</a></li>
                    </ul>
                </li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>



    </header>






   

<div class="col-md-12 col-lg-12">
     
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md10"><h2 class="text-white"></h2></div>  
        </div>
      </div>
    </a>
     
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md10"><h2 class="text-white"></h2></div> 
        </div>
      </div>
    </a>
    </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md10"><h2 class="text-white"></h2></div> 
        </div>
      </div>
    </a>
    </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md10"><h2 class="text-white"></h2></div> 
        </div>
      </div>
    </a>
    </div>
  
  <div class="container">
        <div class="row justify-content-center">
          <div class="col-md10"><h2 class="text-white"></h2></div> 
        </div>
      </div>
    </a>
    </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md10"><h2 class="text-white"></h2></div> 
        </div>
      </div>
    </a>
    </div>



    <section class="site-section">
      <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-12">
            
              
              <h2 class="text-white"></h2>
               <h2 class="text-white"></h2>
               <h2 class="text-white"></h2>
               <h2 class="text-white"></h2>
               <h2 class="text-white"></h2>
               <h2 class="text-white"></h2>
               <h2 class="text-white"></h2>
               <h2 class="text-white"></h2>
              <ul class="list-unstyled primary">
              

            <br>
            
            <form class="form-group has-search" action="search.php" method="post">
                <span class="fa fa-search form-control-feedback "></span>
                <input class="form-control" type="text" name="findMe"  id="search" value = <?php echo json_encode($search) ?>>
            </form>

              
                <li><?php echo $findMeList ?></li> 
                
              </ul>
            
          </div>
        
     
       
      </div>
      </div>

    </section>

    




   <section  id="subscribe-section"></section>
   <section  id="newsletter-section"></section>


 
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

  <script src="js/main5.js"></script>

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script>
function loadDIDL() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("diveintodl-section").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "diveintodl.txt", true);
  xhttp.send();
}

function loadFooter() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("newsletter-section").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "footer.txt", true);
  xhttp.send();
}

function loadHome() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("home-section").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "home.txt", true);
  xhttp.send();
}

function loadHeader() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("header-section").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "header.txt", true);
  xhttp.send();
}

function loadSubscribe() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("subscribe-section").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "subscribe.txt", true);
  xhttp.send();
}

</script>



  </body>
</html>
