<!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fffaf0;
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

        .hero {
            background-image: url('images/hero-banner.jpg');
            background-size: cover;
            background-position: center;
            color: rgb(0, 0, 0);
            text-align: center;
            padding: 150px 20px;
        }

        .signin-container {
            background-color: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            margin: 40px auto;
        }

        .signin-container h1 {
            text-align: center;
            margin-bottom: 24px;
        }

        .signin-container input[type="email"],
        .signin-container input[type="password"] {
            width: 100%;
            padding: 14px;
            margin: 10px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        .signin-container button {
            width: 100%;
            padding: 14px;
            background-color: #007bff;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
        }

        .signin-container button:hover {
            background-color: #0056b3;
        }

        .signin-container p {
            text-align: center;
            margin-top: 16px;
        }

        .signin-container a {
            color: #007bff;
            text-decoration: none;
        }

        .signin-container a:hover {
            text-decoration: underline;
        }

        .register-redirect {
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
        }

        .register-button {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #333;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }

        .register-button:hover {
            background-color: #555;
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

    <!--<div class="navbar">
        <div class="navbar-links">
            <a href="mainpage.htm">Home</a>
            <a href="#">Options</a>
            <a href="#">Contacts</a>
        </div>-->
    </div>

    @extends('layouts.app')
    @section('title','sign-in-form')
    @section('content')

    <div class="hero">
        <h1>Welcome to the Admin Area</h1>
        <p>Please sign in below</p>
    </div>

    <div class="signin-container">
        <h1>Login</h1>
        <form>
            <label for="email">Email Address:</label>
            <input type="email" id="email" placeholder="user@email.com" required>

            <label for="password">Password:</label>
            <input type="password" id="password" placeholder="*******" required>

            <button type="submit">Connect</button>
        </form>
    </div>

    <div class="register-redirect">
        <p>If you don't have an account, please register:</p>
        <a href="{{ route('registerform') }}" class="register-button">Register</a>
    </div>

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
