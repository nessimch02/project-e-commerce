<!--<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Admin Area</title>
  <style>
    body {
      font-family: sans-serif;
      padding: 20px;
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

    .admin-panel,
    .unauthorized {
      display: none;
    }

    /* Hero Banner */
    .hero {
      background-image: url('images/hero-banner.jpg');
      background-size: cover;
      background-position: center;
      color: rgb(0, 0, 0);
      text-align: center;
      padding: 150px 20px;
    }

    .nav-button {
      font-size: 18px;
      padding: 12px 24px;
      margin: 10px;
      background-color: #333;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .nav-button:hover {
      background-color: #555;
    }

    .user-choice {
      text-align: center;
      margin-top: 60px;
      font-size: 20px;
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
  </style>
</head>

<body>

  <div class="navbar">
    <div class="navbar-links">
      <a href="mainpage.htm">Home</a>
      <a href="#">Options</a>
      <a href="#">Contacts</a>
    </div>
  </div>-->

@extends('layouts.app')
@section('title', 'display')
@section('content')

    <div class="user-choice">
        <p>Choose user type to simulate access:</p>
        <a href="{{ route('sign-in') }}" class="nav-button">Sign In</a>
        <a href="{{ route('register-form') }}" class="nav-button">Register</a>
    </div>

    <!-- Admin Panel -->
    <div class="admin-panel">
        <h2>Admin Dashboard</h2>
        <p>Only visible to authorized users (admins).</p>
    </div>

    <!-- Access Denied -->
    <div class="unauthorized">
        <h2>Access Denied</h2>
        <p>You are not authorized to view this resource.</p>
    </div>

@endsection

<div class="hero">
    <div class="hero-content">
        <h1>Welcome to HomeStyle Admin Panel</h1>
        <p>Manage your furniture store – products, orders, and more.</p>
        <a href="{{route('mainpage')}}" class="cta-button">Back to Store</a>
    </div>
</div>

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


<script>
    function login(role) {
        if (role === 'admin') {
            document.querySelector('.admin-panel').style.display = 'block';
            document.querySelector('.unauthorized').style.display = 'none';
        } else {
            document.querySelector('.admin-panel').style.display = 'none';
            document.querySelector('.unauthorized').style.display = 'block';
        }
    }
</script>
</body>

</html>
