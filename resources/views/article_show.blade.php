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

<a href="home.php">Home</a>
<a href="About us.php">About Us</a>




<ul>
  <li>
    <a>Admissions</a>
    <ul>
      <li><a href="file:///C:/Users/DELL/Desktop/New%20folder%20(5)/test.html#">Undergraduate</a></li>
      <li><a href="file:///C:/Users/DELL/Desktop/New%20folder%20(5)/test.html#">Graduate</a></li>
      <li><a href="file:///C:/Users/DELL/Desktop/New%20folder%20(5)/test.html#">Continuing Education</a></li>
    </ul>
  </li>
</ul>


<ul>
  <li>
    <a >Academics</a>
    <ul>
      <li><a href="file:///C:/Users/DELL/Desktop/New%20folder%20(5)/test.html#">Undergraduate</a></li>
      <li><a href="file:///C:/Users/DELL/Desktop/New%20folder%20(5)/test.html#">Graduate</a></li>
      <li><a href="file:///C:/Users/DELL/Desktop/New%20folder%20(5)/test.html#">Post Graduate</a></li>
      </ul>
  </li>
</ul>



<ul>
  <li>
    <a>Research</a>
    <ul>
      <li><a href="file:///C:/Users/DELL/Desktop/New%20folder%20(5)/test.html#">Engage With us</a></li>
      <li><a href="Publish_paper.php">Publish Papers</a></li>
      <li><a href="article.php">Research Papers</a></li>
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





     

    <h1>Articles</h1>
    <ul>
        @foreach ($articles as $article)
            <li>
                <h2>{{ $article->article_title }}</h2>
                <p>{{ $article->article }}</p>
                <p>Author: {{ $article->user_name }} ({{ $article->email }})</p>
            </li>
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