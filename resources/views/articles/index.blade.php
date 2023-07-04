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




     

    <h1>Articles</h1>
    <ul>
        @foreach ($articles as $article)
            <div class="article">
            <h2>{{ $article->article_title }}</h2>
            <p>{{ $article->article }}</p>
            <p>Author: {{ $article->user_name }} ({{ $article->email }})</p>
            <a href="https://www.researchgate.net/" class="button">Read More</a>
      </div>
        @endforeach

        
    </ul>

  
      <br>
      <br>
      <br>
      <br>
      <br>








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












</body>

</html>