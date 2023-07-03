<!DOCTYPE html>

<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>University of Oxford</title>
</head>

<body>






<title>University Homepage</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">







  <header>
    <div class="logo">
    <img src="{{ asset('Pictures/University_of_Oxford-Logo.wine.svg') }}" alt="University Logo"  width="150px" height="100px">
    
    </div>
    <style>
      
headdrop {
  background-color: rgb(0, 0, 0);
}

div a {
  text-decoration: none;
  color: white;
  font-size: 15px;
  padding: 15px;
  display: inline-block;
}

ul {
  display: inline;
  margin: 0;
  padding: 0;
}

ul li {
  display: inline-block;
}

ul li:hover {
  background: #555;
}

ul li:hover ul {
  display: block;
}

ul li ul {
  position: absolute;
  width: 200px;
  display: none;
}

ul li ul li {
  background: #555;
  display: block;
}

ul li ul li a {
  display: block !important;
}

ul li ul li:hover {
  background: #666;
}
    </style>


<div class="headdrop">

<a href="http://127.0.0.1:8000/home">Home</a>
<a href="http://127.0.0.1:8000/about">About Us</a>




<ul>
  <li>
    <a>Admissions</a>
    <ul>
      <li><a href="http://127.0.0.1:8000/base">Undergraduate</a></li>
      <li><a href="http://127.0.0.1:8000/base">Graduate</a></li>
      <li><a href="http://127.0.0.1:8000/base">Continuing Education</a></li>
    </ul>
  </li>
</ul>


<ul>
  <li>
    <a >Academics</a>
    <ul>
      <li><a href="http://127.0.0.1:8000/base">Undergraduate</a></li>
      <li><a href="http://127.0.0.1:8000/base">Graduate</a></li>
      <li><a href="http://127.0.0.1:8000/base">Post Graduate</a></li>
      </ul>
  </li>
</ul>



<ul>
  <li>
    <a>Research</a>
    <ul>
      <li><a href="http://127.0.0.1:8000/base">Engage With us</a></li>
      <li><a href="http://127.0.0.1:8000/articles/create">Publish Papers</a></li>
      <li><a href="http://127.0.0.1:8000/articles">Research Papers</a></li>
    </ul>
  </li>
</ul>


<ul>
    <li>
        <a>Authenticate</a>
        <ul>
            <li><a href="http://127.0.0.1:8000/login">Log in</a></li>
            <li><a href="http://127.0.0.1:8000/reg">Create Account</a></li>
           
        </ul>
    </li>
</ul>

  <a href="http://127.0.0.1:8000/contactus">Contact Us</a>


  {{--     <a>{{ Auth::user()->name }}</a>       --}}


  @php
    try {
        $userName = Auth::user()->name;
    } catch (\Throwable $e) {
        $userName = '(None)';
    }
@endphp

<a>{{ $userName }}</a>



  </div>


 </header>




     <!--

    <div class="article">
        <h3>Page Under Maintanance!</h3>
       
        <a href="http://127.0.0.1:8000/home" class="button">Back To Home</a>
      </div>



  --> 

  
  <style>
        body {
            background-image: url('');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .article {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            margin: 20px;
            text-align:;
        }

        .article h3 {
            font-size: 24px;
            font-weight: bold;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            border-radius: 4px;
            margin-top: 20px;
        }

        .button:hover {
            background-color: #555;
        }
    </style>



<h1 text-align="center" align="center">Notices</h1>


        <ul>
        @foreach ($notices as $notice)
        <div class="article">
            <li>
                <h3>Notice Of: {{$notice->created_at}}</h3>
                <p>Notice: {{$notice->notice}}</p>
                <p>Published by: {{ $notice->publisher }} </p>
            
            </li>

            <br>
          </div>
        @endforeach

        
    </ul>




      

      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>








      <!--

  <footer>

    <div width="100%" height="100px">
      <p>© University of Oxford</p>
    </div>
    

    <style>
      divff1{
  
  width: 33%;
  height: 200px;
  border: 3px solid #73AD21;
}
divff2 {
 
  width: 50%;
  height: 200px;
  border: 3px solid #73AD21;
}
divff3 {
  
  height: 200px;
  border: 3px solid #73AD21;
}
    </style>


    <div width="100%" height="100px" display="flex">
      <div class="divff1">
        INFORMATION ABOUT
      </div>

      <div class="divff2">
        INFORMATION FOR
      </div>

      <div class="divff3">
        QUICK LINKS
      </div>

    </div>
  </footer>

--> 
<footer>
    <div class="footer-container">
        <div class="footer-column">
            <h4>Contact Us</h4>
            <p>University of Oxford</p>
            <p>Oxfordshire, OX1 2JD, UK</p>
            <p>Email: info@oxford.ac.uk</p>
            <p>Phone: +44 (0)123 456 7890</p>
        </div>
        <div class="footer-column">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Admissions</a></li>
                <li><a href="#">Academics</a></li>
                <li><a href="#">Research</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h4>Social Media</h4>
            <ul class="social-media-icons">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
    <p class="footer-bottom">© 2023 University of Oxford. All rights reserved.</p>
</footer>

<style>

footer {
    background-color: #333;
    color: #fff;
    padding: 40px 0;
}

.footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    max-width: 1200px;
    margin: 0 auto;
}

.footer-column {
    width: 250px;
}

.footer-column h4 {
    font-size: 18px;
    font-weight: bold;
}

ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

ul li {
    margin-bottom: 10px;
}

ul li a {
    color: #fff;
    text-decoration: none;
}

.social-media-icons {
    display: flex;
}

.social-media-icons li {
    margin-right: 10px;
}

.footer-bottom {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
}


</style>











</body>

</html>