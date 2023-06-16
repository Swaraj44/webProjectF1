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
            <li><a href="loginpage.php">Log in</a></li>
            <li><a href="Regpage.php">Create Account</a></li>
           
        </ul>
    </li>
</ul>

<a href="contact_us.php">Contact Us</a>

<a> {{ Auth::user()->name }} </a>



</div>



  </header>



  <main>
    <section class="hero">
      <h2>Welcome to Our University</h2>
      <p>Discover the power of knowledge and transform your future with our world-class education.</p>
      <a href="About us.html" class="button">Learn More</a>
    </section>


    <section class="news">
      <h2>Latest News</h2>
      <div class="article">
        <h3>Research project leads to breakthrough in cancer treatment</h3>
        <p>A team of researchers at our university have made a significant breakthrough in cancer treatment...</p>
        <a href="file:///C:/Users/DELL/Desktop/New%20folder%20(5)/test.html#" class="button">Read More</a>
      </div>



      <div class="article">
        <h3>Alumni spotlight: John Doe, CEO of XYZ Corporation</h3>
        <p>John Doe, a graduate of our university's business program, is now the CEO of one of the fastest-growing
          companies...</p>
        <a href="file:///C:/Users/DELL/Desktop/New%20folder%20(5)/test.html#" class="button">Read More</a>
      </div>


      <div class="article">
        <h3>Student wins national award for innovation in engineering</h3>
        <p>Jane Smith, a junior in our university's engineering program, has been awarded a national prize for her
          innovative design...</p>
        <a href="file:///C:/Users/DELL/Desktop/New%20folder%20(5)/test.html#" class="button">Read More</a>
      </div>


      
    </section>
  </main>









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