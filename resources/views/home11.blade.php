<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <style>
        /* CSS styles for the home page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        
        nav {
            background-color: #f4f4f4;
            padding: 10px;
            text-align: center;
        }
        
        nav a {
            color: #333;
            text-decoration: none;
            padding: 5px 10px;
            margin: 0 5px;
        }
        
        section {
            padding: 20px;
            text-align: center;
        }
        
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Our Website!</h1>
        @auth
            <p>Hello, {{ Auth::user()->name }}</p>
        @endauth
    </header>
    
    <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
    </nav>
    
    <section>
        <h2>About Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac est at lacus ultricies commodo.</p>
    </section>
    
    <footer>
        <p>&copy; 2023 Your Website. All rights reserved.</p>
    </footer>
</body>
</html>
