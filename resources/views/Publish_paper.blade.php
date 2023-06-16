<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $role=$_POST['role'];

    //echo $role;

		if(!empty($username) && !empty($password) && !is_numeric($username)&& !empty($email)&& !empty($role) && !empty($fullname))
		{

			                    //save to database
			$user_id = random_num(20);
			$query = "insert into users (username,password,fullname,email,role) values ('$username','$password','$fullname','$email','$role')";

			mysqli_query($con, $query);

			//header("Location: login.php");
			//die;

      
		}else
		{
			echo "Please enter some valid information!";
		}
	}
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
  <link rel="stylesheet" type="text/css" href="style reg.css">
  <link rel="stylesheet" type="text/css" href="style com.css">
  <link rel="stylesheet" type="text/css" href="bootstrap.css" /> 






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
        <h1>Publish Article</h1>
        <form method="post">
          <label for="title" >Title</label>
          <input type="text" id="title" name="title" class="form-control" required>

          <br>


          <label for="article1" >Write Here</label>
          <input type="text" id="article1" name="article1" class="form-control" required>

          <br>

          

     

          <label ></label>


          <button type="submit">Publish</button>
        </form>
      </div>

  </main>









  <footer>
    <p>© University of Oxford</p>
  </footer>












</body>

</html>