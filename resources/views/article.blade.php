<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
    $user_data2 = check_article($con);


?>

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
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="style com.css">
  <link rel="stylesheet" type="text/css" href="bootstrap.css" /> 







  <header>
    <div class="logo">
      <img src="Pictures/University_of_Oxford-Logo.wine.svg" alt="University Logo" width="150px" height="100px">
    </div>
    

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
            <li><a href="file:///C:/Users/DELL/Desktop/New%20folder%20(5)/test.html#">Support for researchers</a></li>
            <li><a href="file:///C:/Users/DELL/Desktop/New%20folder%20(5)/test.html#">Recognition</a></li>
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

      <a> <?php echo $user_data['username']; ?> </a>



    </div>





  </header>



  <main>
  










    <section class="news">
      <h2>Latest News</h2>
      <div class="article">
        <h3>Research project leads to breakthrough in cancer treatment</h3>
        <p>  <?php echo $user_data2['article']; ?>  </p>
        <a href="file:///C:/Users/DELL/Desktop/New%20folder%20(5)/test.html#" class="button">Read More</a>
      </div>




















      <div class="article">
        <h3>Alumni spotlight: John Doe, CEO of XYZ Corporation</h3>
        <p>John Doe, a graduate of our university's business program, is now the CEO of one of the fastest-growing
          companies...</p>
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