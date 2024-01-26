<?php
use App\Http\Controllers\AuthController;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
$getCartNumber = AuthController::getCartNumber();
$countWishList = AuthController::countWishList();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('./images/favicon.png') }}">
    <link rel="stylesheet" href="{{ url('./css/style.css') }}">
    <link rel="stylesheet" href="{{ url('./css/form_style.css') }}">
    <link rel="stylesheet" href="{{ url('./css/inner_style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="{{ url('./js/script.js') }}" defer></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Create your Delmart Account and shop right now | Delmart</title>
</head>
<body>
   <!-- header start -->
   <div id="header">
    <div class="header-container">
        <div>
            <p>
                <i class="fa fa-clock" aria-hidden="true"></i> We are operating <span>9:00AM - 10:00PM</span>
            </p>
            <ul>
                <li><a href=""><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                <li><a href=""><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <hr>
        <nav class="navbarmain">
            <img src="{{ asset('./images/logo.png') }}" class="logo">
            <ul id="sidemenu">
                <li><a href="{{ url('/')}}" class="activepage">Home</a></li>
                <li><a href="">Shop</a></li>
                @guest
                <li><a href="{{ url('login')}}">my account</a></li>
                @else
                <li><a href="{{ url('account')}}">my account</a></li>
                @endguest
                <li><a href="./about_us.html">about us</a></li>
                <li><a href="">News</a></li>
                <li><a href="./contact.html">contact us</a></li>
                
            </ul>
            <ul id="">
                @guest
                <li><a href="{{ url('login')}}"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                <li><a href="{{ url('show_cart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    
                </a></li>
                
                @else
                <li><a href=""><i class="fa fa-file-text" aria-hidden="true"></i></a></li>
                <li><a href="{{ url('show_cart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <span class="">{{$getCartNumber}}</span>
                </a></li>
                <li><a href="{{ url('showWishList')}}"><i class="fa fa-heart" aria-hidden="true"></i>
                    <span class="">{{$countWishList}}</span>
                </a></li>
                
                <li><a href="{{ url('logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                @endguest
            </ul>
            <ul id="sidemenu-mobile">
                <li><a href="./index.html" class="activepage">Home</a></li>
                <li><a href="">Shop</a></li>
                <li><a href="{{ url('login')}}">my account</a></li>
                <li><a href="./about_us.html">about us</a></li>
                <li><a href="">News</a></li>
                <li><a href="./contact.html">contact us</a></li>
       
                <li><a href="./login.html"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                <li><i class="fa fa-shopping-cart" aria-hidden="true"></i></li>
                
                
                  

                <i class="fas fa-times" onclick="closemenu()"></i>
            </ul>
            <i class="fas fa-bars" onclick="openmenu()"></i>


        </nav>
        
    </div>
   </div> 

    @yield('content')


    <!-- footer start -->
    <div id="footer">
        <div class="footer-left"  data-aos="fade-right" data-aos-duration="2000">
            <img src="{{ asset('./images/logo.png') }}" alt="Delmart-logo">
            <h4>OUR LOCATION</h4>
            <p>Delmart, No.631, tangalle road, meddawatta, matara, sri lanka</p>

            <h4>24/7 hotline</h4>
            <p>070-528-2405 / 074-128-2405</p>
        </div>
        <div class="footer-right"  data-aos="fade-left" data-aos-duration="2000">
            <ul class="footer-nav">
                <li><a href="">Home</a></li>
                <li><a href="">Privacy policy</a></li>
                <li><a href="">terms & conditions</a></li>
                <li><a href="">contact</a></li>
            </ul>
            <ul class="footer-social">
                    <li><a href=""><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
            <ul>
                <img class="payment" src="./images/payments.png" alt="" srcset="">
            </ul>
            <ul>
                <li><img src="{{ asset('./images/playstore.png') }}" alt=""></li>
                <li><img src="{{ asset('./images/appstore.png') }}" alt=""></li>
            </ul>

            <p>Copyright © 2023 Delmart | <a href="">Built with Nova Tech Zone (Pvt) Ltd.</a></p>
        </div>
    </div>
    
    

    
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>



</body>
</html>