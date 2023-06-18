

<!DOCTYPE html>

<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>University of Oxford</title>
</head>

<style>

body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    color: #333;
}

header {
    background-color: #1e3c72;
    padding: 20px;
    color: #fff;
    text-align: center;
}

h1 {
    margin-top: 0;
}

main {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

form {
    width: 100%;
    max-width: 400px;
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

input,
textarea {
    display: block;
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-size: 16px;
}

button {
    background-color: #1e3c72;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #15405e;
}

.contact-info {
    flex-basis: 100%;
    margin-bottom: 20px;
}

.contact-info h2 {
    margin-top: 0;
    margin-bottom: 10px;
    font-size: 24px;
    font-weight: bold;
}

.contact-info ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.contact-info li {
    margin-bottom: 5px;
}
</style>




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

<a href="http://127.0.0.1:8000/">Home</a>
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



  <main>


	<main>
		<form>


    <style>
    h1 {
        text-align: center;
    }
     </style>

        <h1>Contact Us</h1>

      
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required>
			
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>
			
			<label for="subject">Subject:</label>
			<input type="text" id="subject" name="subject" required>
			
			<label for="message">Message:</label>
			<textarea id="message" name="message" required></textarea>

      <br>
			
      <input type="submit" value="Submit" class="white-submit-button">

      
		</form>

    <style>
    .white-submit-button {
        color: white;
        background-color: green;
    }
   
    </style>

		<div class="contact-info">
			<h2>Contact Information</h2>
			<ul>
				<li><strong>Address:</strong> 123 Main St, Anytown, UK</li>
				<li><strong>Phone:</strong> (123) 456-7890</li>
				<li><strong>Email:</strong> info@university_of_oxford.edu</li>
			</ul>
		</div>
	</div>
</main> 


      
   
  </main>









  <footer>
    <p>© University of Oxford</p>
  </footer>












</body>

</html>