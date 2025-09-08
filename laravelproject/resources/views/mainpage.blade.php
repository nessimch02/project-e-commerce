<!--<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Online shop</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
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

    .search-bar {
      display: flex;
      align-items: center;
    }

    .search-bar input[type="text"] {
      padding: 6px;
      border: none;
      border-radius: 4px 0 0 4px;
      outline: none;
    }

    .search-bar button {
      padding: 6px 10px;
      border: none;
      background-color: #575757;
      color: rgb(255, 255, 255);
      border-radius: 0 4px 4px 0;
      cursor: pointer;
    }

    .search-bar button:hover {
      background-color: #777;
    }

    .hero {
      background-image: url('images/hero-banner.jpg');
      background-size: cover;
      background-position: center;
      color: rgb(0, 0, 0);
      text-align: center;
      padding: 150px 20px;
      width: 100%;
    }

    .hero h1 {
      font-size: 48px;
      margin-bottom: 20px;
    }

    .hero p {
      font-size: 20px;
      max-width: 600px;
      margin: auto;
    }

    .hero-content {
      position: relative;
    }

    .search-section {
      display: none;
      padding: 30px;
      text-align: center;
    }

    .search-section input[type="text"] {
      padding: 10px;
      width: 300px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .search-section button {
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #333;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }

    .search-section button:hover {
      background-color: #555;
    }

    .advanced-table {
      display: none;
      margin: 30px auto;
      width: 90%;
      border-collapse: collapse;
    }

    .advanced-table th,
    .advanced-table td {
      border: 1px solid #999;
      padding: 10px;
      text-align: left;
    }

    .advanced-table th {
      background-color: #ddd;
    }

    .advanced-table {
      display: none;
    }

    .divano {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-top: 70px;
      gap: 40px;
      padding: 40px 20px;
      text-align: center;
    }

    .testo {
      text-align: center;
    }

    .testo h1 {
      margin: 0;
      font-size: 32px;
    }

    .divano-angolato {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 40px;
      padding: 40px 20px;
    }

    .divano-angolato img {
      flex-shrink: 0;
    }

    .testo1 {
      text-align: left;
    }

    .testo1 h1 {
      margin: 0;
      font-size: 32px;
    }

    .letto {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-top: 70px;
      gap: 40px;
      padding: 40px 20px;
      text-align: center;
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
</head>-->

<body>

    <!-- Navigation Bar
  <div class="navbar">
    <div class="navbar-links">
      <a href="#" id="search-link">Search</a>
      <a href="#">Home</a>
      <a href="#">Options</a>
      <a href="#">Contacts</a>
      <a href="display-resource.htm">Sign in</a>
    </div>-->


@extends('layouts.app')
    @section('title', 'mainpage')
    @section('content')

            <!--<form class="search-bar" onsubmit="event.preventDefault(); alert('you searched: ' + this.search.value);">
              <input type="text" name="search" placeholder="Search..." />
              <button type="submit">🔍</button>
            </form>
          </div>-->

          <!-- Search section
        <div class="search-section" id="search-section">
            <h2>Search Products</h2>
            <input type="text" placeholder="Enter product name..." />
            <br>
            <button id="advanced-search-btn">Search with Filters</button>
        </div>-->

        <!-- Simulated advanced search table -->
        <table class="advanced-table" id="advanced-table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Wooden Chair</td>
                    <td>Chairs</td>
                    <td>$120</td>
                </tr>
                <tr>
                    <td>Modern Sofa</td>
                    <td>Sofas</td>
                    <td>$450</td>
                </tr>
                <tr>
                    <td>Queen Bed</td>
                    <td>Beds</td>
                    <td>$390</td>
                </tr>
            </tbody>
        </table>


          <div class="hero">
            <div class="hero-content">
              <h1>Welcome to HomeStyle</h1>
              <p>From living rooms to bedrooms, make every space beautiful.</p>
            </div>
        </div>

        <div class="divano">
            <div class="testo">
                <h1><a href="{{ route('divano')}}" style="text-decoration: none; color: inherit;">Fabric Armchair</a></h1>
                <p>Comfort and style come together in this fabric armchair, perfect for any modern living room..</p>
                <p><strong>€249.00</strong></p>
            </div>
            <a href="{{ route('divano')}}">">
                <img src="{{ asset('pnj/divano.jpg') }}" alt="divano" height="300" width="450">
            </a>
        </div>

        <div class="divano-angolato">
            <a href="{{ route('divano-angolato')}}">
                <img src="{{ asset('pnj/divano-angolato.jpg') }}" alt="divano" height="300" width="450">
            </a>
            <div class="testo1">
                <h1><a href="{{ route('divano-angolato')}}" style="text-decoration: none; color: inherit;">Corner Sofa</a></h1>
                <p>A spacious and modern corner sofa, ideal for families or shared environments.</p>
                <p><strong> €699.00</strong></p>
            </div>
        </div>

        <div class="letto">
            <div class="testo">
                <h1><a href="{{ route('letto')}}" style="text-decoration: none; color: inherit;">Full-Sized Bed</a></h1>
                <p>Elegant double bed with sturdy structure, perfect for a restful sleep.</p>
                <p><strong>€449.00</strong></p>
            </div>
            <a href="{{ route('letto')}}">
                <img src="{{ asset('pnj/letto.jpg') }}" alt="letto" height="300" width="450">
            </a>
        </div>

    @endsection

    @auth
    @if (auth()->user()->is_admin)
        <a href="{{ route('admin-panel') }}">Admin Panel</a>
    @endif
    @endauth



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchLink = document.getElementById('search-link');
            const searchSection = document.getElementById('search-section');
            const advancedSearchBtn = document.getElementById('advanced-search-btn');
            const advancedTable = document.getElementById('advanced-table');

            if (searchLink && searchSection) {
                searchLink.addEventListener('click', function(e) {
                    e.preventDefault();
                    searchSection.style.display = 'block';
                    if (advancedTable) {
                        advancedTable.style.display = 'none';
                    }
                    searchSection.scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            }

            if (advancedSearchBtn && advancedTable) {
                advancedSearchBtn.addEventListener('click', function() {
                    advancedTable.style.display = 'table';
                    advancedTable.scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            }
        });
    </script>

</body>

</html>
