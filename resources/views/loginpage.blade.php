



  
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>University of Oxford</title>
</head>

<body>






   <link rel="stylesheet" href="{{ asset('css/style login.css') }}">
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">




  <header>
    <div class="logo">
      <img src="{{ asset('Pictures/University_of_Oxford-Logo.wine.svg') }}" alt="University Logo" width="250px" height="100px">
      
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
      <a href="home.html">Home</a>

      <a href="About us.html">About Us</a>




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
                  <li><a href="loginpage.html">Log in</a></li>
                  <li><a href="Regpage.html">Create Account</a></li>
                 
              </ul>
          </li>
      </ul>

      <a href="contact_us.html">Contact Us</a>



    </div>





  </header>







  <main>

    <div class="login-container">
      <h1>Login</h1>
      <form >
    
        <label for="username">Username</label> 
        <input type="text" id="username" name="username" class="form-control" required>


        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control" required>

        <label for="username"></label> 

        <button type="submit">Log In</button>
      </form>
    </div>

  </main>









  <footer>
    <p>© University of Oxford</p>
  </footer>












</body>

</html>