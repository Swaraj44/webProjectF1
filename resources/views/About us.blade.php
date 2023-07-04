<!DOCTYPE html>

<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>University of Oxford</title>
</head>


<body>




 
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


<a href="http://127.0.0.1:8000/admission">Admissions</a>



<ul>
  <li>
    <a >Academics</a>
    <ul>
      <li><a href="http://127.0.0.1:8000/dash_ug">Undergraduate</a></li>
      <li><a href="http://127.0.0.1:8000/dash_g">Graduate</a></li>
      <li><a href="http://127.0.0.1:8000/dash_pg">Post Graduate</a></li>
      <li><a href="http://127.0.0.1:8000/info_te">Teacher's Info</a></li>
      </ul>
  </li>
</ul>


@php
    try {
        $userName = Auth::user()->name;
    } catch (\Throwable $e) {
        $userName = '(None)';
    }
@endphp

<ul>
  <li>
    <a>Research</a>
    <ul>
      <li><a href="http://127.0.0.1:8000/contactus">Engage With us</a></li>

      <li>
      @if ($userName === '(None)')
    <a href="http://127.0.0.1:8000/login">Publish Papers</a>
       @else
    <a href="http://127.0.0.1:8000/articles/create">Publish Papers</a>
       @endif

      </li>
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



@if ($userName === '(None)')
    <a href="http://127.0.0.1:8000/login">{{ $userName }}</a>
@else
    <a href="http://127.0.0.1:8000/profile">{{ $userName }}</a>
@endif




  </div>


 </header>


    <main>
        <section class="hero">

            <style>
                .circular {
                    width: 200px;
                    height: 200px;
                    border-radius: 50%;
                    object-fit: cover;
                }
            </style>

            



<style>
  .bordered-text {
    color: black;
  
  }

  .bordered-text11 {
    color: white;
    text-shadow: -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black, 1px 1px 0 black;
  }
</style>







            
            <section class="vc">

                <div class="vc-photo">
                    <img src="Pictures/vc.jpg" alt="Picture of the Vice Chancellor" class="circular">
    
    
                </div>

                <div class="vc-info">
                    <h3 class="bordered-text11">Prof. Jane Doe</h3>
                    <p class="bordered-text11">Vice Chancellor</p>
                </div>
            </section>

            <section class="about">

     <div class="article">

     <h2 class="bordered-text">About Us</h2>
                <p class="bordered-text">Welcome to the University of Oxford, a world-class institution dedicated to advancing knowledge and
                    transforming lives. With a history dating back over a century, our university has a proud tradition
                    of academic excellence and community engagement.</p>
                <p class="bordered-text">At University of Oxford, we offer a wide range of undergraduate, graduate, and professional programs
                    across a variety of fields, including business, engineering, education, health sciences, and the
                    arts and humanities. Our faculty are leaders in their respective fields, and our students benefit
                    from a rich and diverse learning environment that fosters critical thinking, creativity, and
                    innovation.</p>
                <p class="bordered-text">In addition to our academic programs, we are committed to making a positive impact on our local and
                    global communities through research, outreach, and service. Our students, faculty, and staff are
                    actively engaged in addressing some of the most pressing social, economic, and environmental
                    challenges of our time.</p>
                <p class="bordered-text">Thank you for considering University of Oxford for your educational and professional goals. We look
                    forward to welcoming you to our community.</p>

       
      </div>
               
            </section>
           
    </main>
    </section>




    </section>
    </main>









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
                <li><a href="http://127.0.0.1:8000/home">Home</a></li>
                <li><a href="http://127.0.0.1:8000/about">About Us</a></li>
                <li><a href="http://127.0.0.1:8000/base">Admissions</a></li>
                <li><a href="http://127.0.0.1:8000/base">Academics</a></li>
                <li><a href="http://127.0.0.1:8000/base">Research</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h4>Social Media</h4>
            <ul class="social-media-icons">
                <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
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