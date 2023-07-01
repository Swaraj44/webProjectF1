

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











  <main>

    <div class="registration-container">
        <h1>Registration</h1>

      

        <form method="POST" action="{{ route('register.post') }}">
        @csrf
          <label for="fullname" >Full Name</label>
          <input type="text" id="full_name" name="full_name" class="form-control" required>

                                    
          <br>
          <label for="name" >Username</label>

            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
          

      <br>
          
            <label for="u_id">ID Number</label>
            <input type="text" name="u_id" class="form-control @error('password') is-invalid @enderror" id="u_id" required>

      <br>
        

          <label for="email">Email</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

      <br>


          <label for="mobile">Mobile</label>
          <input type="text" name="mobile" class="form-control @error('password') is-invalid @enderror" id="mobile" required>

      <br>


      <label for="dept">Department</label>
      <input type="text" name="dept" class="form-control @error('password') is-invalid @enderror" id="dept" required>

      <br>

      <label for="type">Academic Level (Only for Students)</label>
          <select id="type" name="type" class="form-control @error('password') is-invalid @enderror" required>
            <option value="teacher">-- Please select --</option>
            <option value="Undergraduate">Undergraduate</option>
            <option value="Graduate">Graduate</option>
            <option value="Post Graduate">Post Graduate</option>
          </select>
      
      <br>
       

          <label for="password">Password</label>
           <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

          <br>

          <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                                
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
          <br>

          <label for="role">Role</label>
          <select id="role" name="role" class="form-control @error('password') is-invalid @enderror" required>
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