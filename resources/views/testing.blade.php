


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

      

        <form>

        

    
        @foreach ($userInfos as $userInfo)

@if ($userInfo->user_name === Auth::user()->name)


@if ($userInfo->role == 'student')
<!-- Content for student role -->
<div class="article">
<h1>User Information</h1>
<p>User Name: {{ $userInfo->user_name }}</p>
<p>Name     : {{ $userInfo->full_name }}</p>
<p>Email : {{ $userInfo->email }}</p>
<p>Role  : {{ $userInfo->role }}</p>

<a href="{{ route('user_info.edit', ['id' => $userInfo->id]) }}"><button>Update</button></a>

</div>


 @else
<!-- Content for other roles -->
<div class="article">
<h1>User Information</h1>
<p>User Name: {{ $userInfo->user_name }}</p>
<p>Name     : {{ $userInfo->full_name }}</p>
<p>Email    : {{ $userInfo->email }}</p>
<p>Designation : {{ $userInfo->role }}</p>

<a href="{{ route('user_info.edit', ['id' => $userInfo->id]) }}"><button>Update</button></a>

</div>


 @endif



@endif
@endforeach


    
        </form>
      </div>

  </main>









  <footer>
    <p>© University of Oxford</p>
  </footer>












</body>

</html>