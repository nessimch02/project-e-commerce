<!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel - HomeStyle</title>
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
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-right: 15px;
        }

        .navbar a:hover {
            background-color: #545654;
            padding: 8px 12px;
            border-radius: 4px;
        }

        .admin-container {
            padding: 40px 20px;
            text-align: center;
        }

        .admin-container h1 {
            font-size: 36px;
            margin-bottom: 30px;
        }

        .admin-actions {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .admin-actions a {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 14px 24px;
            text-decoration: none;
            border-radius: 6px;
            font-size: 18px;
            width: 250px;
            text-align: center;
            transition: background-color 0.3s;
        }

        .admin-actions a:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>-->

   @extends('layouts.app')
    @section('title','adminpanel')
    @section('content')


    <!--<div class="navbar">
        <a href="{{route("mainpage")}}">Home</a>
        <a href="#">Shop</a>
        <a href="#">Contacts</a>
        <a href="{{ route('sign-in') }}">Sign In</a>
    </div>-->

    <div class="admin-container">
        <h1>Admin Panel</h1>
        <div class="admin-actions">
            <a href="{{ route('addproducts') }}">➕ Add New Product</a>
            <a href="{{ route('manage-products') }}">🛠️ Manage Products</a>
            <a href="{{ route('manage-users') }}">👥 Manage Users</a>
        </div>
    </div>
    @endsection

<!--</body>

</html>-->
