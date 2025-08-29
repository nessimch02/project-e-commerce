<!--<!DOCTYPE html>
<html lang="en">

</html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>register form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fffaf0;
            margin: 0;
            padding: 0;
            display: block;
        }

        .navbar {
            background-color: #333;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 2rem;
            flex-wrap: wrap;
        }

        .navbar-links {
            display: flex;
            gap: 15px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 8px 12px;
        }

        .navbar a:hover {
            background-color: #545654;
        }

        .register-form {
            background-color: #fffaf0;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10 px rgba(0, 0, 0, 0);
            width: 100%;
            max-width: 400px;
            margin: 0 auto 60px;
        }

        .register-form input {
            width: 100%;
            padding: 12px;
            margin: 8px 0 16px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        .register-form button {
            width: 106.5%;
            padding: 12px;
            background-color: #007bff;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
        }

        .register-form button:hover {
            background-color: #0056b3;
        }

        .hero {
            background-image: url('images/hero-banner.jpg');
            background-size: cover;
            background-position: center;
            color: rgb(0, 0, 0);
            text-align: center;
            padding: 150px 20px;

        }

        .footer {
            background-color: #333;
            padding: 40px 20px;
            text-align: center;
            margin-top: 60px;
            color: white;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 25px;
            margin-bottom: 20px;
        }

        .footer a {
            color: white;
            text-decoration: none;
            padding: 10px 16px;
            background-color: #444;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .footer a:hover {
            background-color: #666;
        }

        .footer p {
            font-size: 14px;
            color: #ccc;
            margin: 0;
        }
    </style>-->
</head>

<body>

   <!-- <div class="navbar">
        <div class="navbar-links">
            <a href="mainpage.htm">Home</a>
            <a href="#">Options</a>
            <a href="#">Contacts</a>
        </div>
    </div>-->

    @extends('layouts.app')
    @section('title','register-form')
    @section('content')

    <div class="hero">
        <h1>Welcome to the Admin Area</h1>
        <p>Please sign in below</p>
    </div>

    <form class="register-form" action="register.php" method="post">
        <h2>Create an Account</h2>

        <input type="text" name="first_name" placeholder="First Name" required />
        <input type="text" name="last_name" placeholder="Last Name" required />
        <input type="text" name="address" placeholder="Address" required />
        <input type="email" name="email" placeholder="Email Address" required />
        <input type="password" name="password" placeholder="Password" required />
        <input type="password" name="confirm_password" placeholder="Confirm Password" required />

        <button type="submit">Register</button>
    </form>

    @endsection

    <!--<footer class="footer">
        <div class="footer-links">
            <a href="#">Contacts</a>
            <a href="#">More About Us</a>
            <a href="#">Shops</a>
            <a href="#">Support</a>
            <a href="#">Delivery Info</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Privacy Policy</a>
        </div>
        <p class="copyright">© 2025 HomeStyle. All rights reserved.</p>
    </footer>-->

</body>

</html>
