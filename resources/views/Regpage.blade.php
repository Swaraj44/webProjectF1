

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
  <link rel="stylesheet" href="{{ asset('css/style reg.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">





  <header>
    <div class="logo">
      <img src="Pictures/University_of_Oxford-Logo.wine.svg" alt="University Logo" width="250px" height="100px">
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



    </div>




  </header>



  <main>

    <div class="registration-container">
        <h1>Registration</h1>
        <form action="{{ route('register-user') }}" method="post">
        @csrf
          <label for="fullname" >Full Name</label>
          <input type="text" id="fullname" name="fullname" class="form-control" required>

          <br>
          <label for="username" >Username</label>
          <input type="text" id="username" name="username" class="form-control" required>

          <br>

          <label for="email">Email</label>
          <input type="email" id="email" name="email" class="form-control" required>

          <br>

          <label for="password">Password</label>
          <input type="password" id="password" name="password" class="form-control" required>

          <br>

          <label for="role">Role</label>
          <select id="role" name="role" required>
            <option value="">-- Please select --</option>
            <option value="student">Student</option>
            <option value="teacher">Teacher</option>
          </select>

          <label ></label>


          <button type="submit">Register</button>
        </form>
      </div>

  </main>









  <footer>
    <p>© University of Oxford</p>
  </footer>












</body>

</html>