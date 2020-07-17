<?php
$email="";
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$conn=new mysqli("localhost","root","","mydata");
$cmd="INSERT into subscribe value('$email');";
if(mysqli_query($conn, $cmd))
{
echo "<script>$('#thankyouModal').modal('show')</script>"; // Show modal//
}
else{
echo "Not Save";
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-4.5.0-dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="Ulkit/css/uikit.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>V-food App
    </title>
  </head>
  <body>
    <!--Hero-Image-->
    <div class="hero-image">
      <div data-aos="zoom-in">
        <img src="assets/svg/logo.svg" class="image-fluid hero-logo">
        <div class="hero-text">
          <h1 class="h-text">Pick your ingredient, cook and get your favorite food delivered hot & fresh 
          </h1>
          <p class="p-text">
            quality Just As You Want It
          </p>
          <div data-aos="zoom-in-down">
            <h2 class="soon">Coming Soon
            </h2>
            <div id="clockdiv">
              <div>
                <span class="time pr-2" id="days">
                </span>
                <div class="smalltext">Days
                </div>
              </div>
              <div>
                <span class="time pr-2" id="hours">
                </span>
                <div class="smalltext">Hours
                </div>
              </div>
              <div>
                <span class="time pr-2" id="minutes">
                </span>
                <div class="smalltext">Minutes
                </div>
              </div>
              <div>
                <span class="time pr-2" id="seconds">
                </span> 
                <div class="smalltext">Seconds
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
<img src="assets/svg/Group 41.svg" class="logo2">
<!--App Screen-->
<h1 class="app-text">Application Screen
</h1>
</br>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div data-aos="fade-up" data-aos-duration="1500">
        <h1 class="features">Features to look out for
        </h1>
        <h2 class="view">View all features 
          <img src="assets/svg/Shape.svg">
        </h2>
      </div>
    </div>
    <div class="col-md-8">
      <div data-aos="zoom-in">
        <div class="uk-grid-large uk-grid-match" uk-grid>
          <div>
            <div class="uk-position-relative uk-visible-toggle" uk-slideshow="min-height: 300; max-height: 300">
              <ul class="uk-slideshow-items" uk-lightbox>
                <li>
                  <a href="assets/img/MOCK-UP FRONT 8.png" data-caption="0" uk-cover>
                    <img src="assets/img/MOCK-UP FRONT 8.png">
                  </a>
                </li>
                <li>
                  <a href="assets/img/MOCK-UP FRONT 8.png" data-caption="1" uk-cover>
                    <img src="assets/img/MOCK-UP FRONT 8.png">
                  </a>
                </li>
                <li>
                  <a href="assets/img/MOCK-UP FRONT 8.png" data-caption="2" uk-cover>
                    <img src="assets/img/MOCK-UP FRONT 8.png">
                  </a>
                </li>
                <li>
                  <a href="assets/img/MOCK-UP FRONT 8.png" data-caption="3" uk-cover>
                    <img src="assets/img/MOCK-UP FRONT 8.png">
                  </a>
                </li>
                <li>
                  <a href="assets/img/MOCK-UP FRONT 8.png" data-caption="4" uk-cover>
                    <img src="assets/img/MOCK-UP FRONT 8.png">
                  </a>
                </li>
              </ul>
              <div class="uk-position-bottom-center uk-position-small">
                <ul class="uk-thumbnav">
                  <li uk-slideshow-item="0">
                    <a href="#">
                      <img src="assets/img/MOCK-UP FRONT 8.png" width="60">
                    </a>
                  </li>
                  <li uk-slideshow-item="1">
                    <a href="#">
                      <img src="assets/img/MOCK-UP FRONT 8.png" width="60">
                    </a>
                  </li>
                  <li uk-slideshow-item="2">
                    <a href="#">
                      <img src="assets/img/MOCK-UP FRONT 8.png" width="60">
                    </a>
                  </li>
                  <li uk-slideshow-item="3">
                    <a href="#">
                      <img src="assets/img/MOCK-UP FRONT 8.png" width="60">
                    </a>
                  </li>
                  <li uk-slideshow-item="4">
                    <a href="#">
                      <img src="assets/img/MOCK-UP FRONT 8.png" width="60">
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--How It Works-->
    <div class="work">
      <h1 class="how">How It Works
      </h1>
      </br>
    <div data-aos="flip-left" data-aos-duration="1000">
      <p class="how2">
        Sign Up or Login In to your App.
        Select your ingredent, proportion them, select your food cooking duration and start cooking.
        The App has a list of all close-by restaurants for you to choose from. 
        Done cooking?
        Place an order and proceed to payment which covers the cost of ingredients used and delivery charges. 
        Have diet to follow? or health issue?
        Include it during your sign up and V-food App will detect the ingredients harmful for each ailment one has 
        and suggest an alternative.
      </p>
    </div>
  </div>
  <div class="container">
    <div data-aos="fade-down-right">
      <div class="row">
        <div class="col-sm">
          <div class="card">
            <img class="card-img-top" src="assets/svg/cheese (1) 1.svg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Pick Ingredients & proportion
              </h5>
              <p class="card-text">
                Pick your choice of ingredient and proportion them to your taste.                  
              </p>
            </div>
          </div>         
        </div>
        <div class="col-sm">
          <div class="card">
            <img class="card-img-top" src="assets/svg/click (1) 1.svg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Choose Location & delivery time
              </h5>
              <p class="card-text">
                Pick a restaurant close to you and set your delivery time.
              </p>           
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card">
            <img class="card-img-top" src="assets/svg/shipment 1.svg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Fast Deliveries 
              </h5>
              <p class="card-text">
                Within an hour your food is at your door step.
              </p>         
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Stay In Touch-->
  <h1 class="stay1">STAY IN TOUCH TO GET NOTIFIED ONCE WE LAUNCH
  </h1>
  </br>
<p class="stay2">Coupon Codes & Insider Tips to get the Best out of our Products
</p>
<div class="Subscribe2">
  <form method=post>
    <div class="form-group">
      <input type="email" class="email" id="email" placeholder="Enter Email Address" name="email">
    </div>
    <input type="submit" name="submit"placeholder="Subscribe" class="Subscribe">
  </form>
</div>
<div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
        </button>
        <h4 class="modal-title" id="myModalLabel">Thank you for pre-registering!
        </h4>
      </div>
      <div class="modal-body">
        <p>Thanks for getting in touch!
        </p>                     
      </div>    
    </div>
  </div>
</div>
<!--About The App-->
<div class="about">
  <div class="row">
    <div class="col"> 
      <h5 class="about-title">About The App
      </h5>
      <div data-aos="fade-right" data-aos-duration="2000">
        <p class="about-text">
          Our special Vitual-food App is a virtual and Augmented Technological Restaurant 
          app that allows you to cook virtually anywhere at anytime without visiting the restaurant 
          but by selecting the ingredients you need at the proportion you desire. 
          The app has a list of all close-by restaurants for you to choose from. 
          After cooking you place an order and proceed to payments which covers the ingredients used
          and delivery charges. 
          This app is useful in a situation where you already run out of food stuff and need to cook, 
          you can easily open the app and get the cooking done virtually then you get your food order. 
          V-food App detects the ingredients harmful for each ailment one has and suggest an alternative.
        </p>
      </div>
    </div>
    <div class="col">
      <div data-aos="zoom-in-left">
        <img src="assets/img/Group 28.png" class="image">
      </div>
    </div>
  </div>
</div>
</div>
<!--Delivery-->
<section class="deliver">
  <h1 class="deliver-title">Delivery
    </br>Get free and fast delivery with our app
  </h1>
<p class="deliver-text">We deliver from 6:00am to 9:00pm. 
  You will recieve your food 60 minuite after ordering.
</p>
<div class="app">
  <button type="button" class="btn btn-dark btn-lg">
    App Store 
    <img src="assets/svg/apple.svg">
  </button>
  <button type="button" class="btn btn-light btn-lg">
    Google Play 
    <img src="assets/svg/google-play 1.svg">
  </button>
</div>
<img src="assets/img/brooke-lark-08bOYnH_r_E-unsplash 2.png" class="bgimg">
<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
  <img src="assets/img/Add New Ingredient1 1.png" class="mockup8">
</div>
</section>
<img src="assets/svg/logo.svg" class="image-fluid logo3">
<script src="Ulkit/js/uikit.min.js">
</script>
<script src="Ulkit/js/uikit-icons.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js">
</script>     
<script src="assets/js/custom.js">
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js">
</script>
<script>  AOS.init();
</script>
</body>
</html>
