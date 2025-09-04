<!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Your Cart - HomeStyle</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fffaf0;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333;
            display: flex;
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


        .cart-container {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        .cart-item {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .cart-item img {
            width: 150px;
            border-radius: 8px;
        }

        .cart-details {
            flex-grow: 1;
        }

        .cart-details p {
            margin: 4px 0;
        }

        .checkout-btn {
            background-color: #28a745;
            color: white;
            padding: 12px 24px;
            border: none;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            margin-top: 20px;
        }

        .checkout-btn:hover {
            background-color: #218838;
        }

        .footer {
            background-color: #333;
            padding: 40px 20px;
            text-align: center;
            color: white;
            margin-top: 60px;
        }

        .footer a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>-->



    <!--<div class="navbar">
        <a href="mainpage.htm">Home</a>
        <a href="#">Shop</a>
        <a href="#">Contacts</a>
        <a href="sign-in.htm">Sign in</a>
    </div>-->

      @extends('layouts.app')

@section('title','cart-divano')

@section('content')

<div class="container my-5 cart-container">
    <h1 class="mb-4">Your Shopping Cart</h1>

    <!-- Cart Item -->
    <div class="cart-item row align-items-center mb-4 p-3 border rounded">
        <!-- Immagine prodotto -->
        <div class="col-md-4 text-center">
            <img src="{{ asset('pnj/divano.jpg') }}" alt="Sofa" class="img-fluid product-image">
        </div>
        <!-- Dettagli prodotto -->
        <div class="col-md-8 cart-details">
            <h2>Fabric Armchair</h2>
            <p>Price: €299.99</p>
            <p>Quantity: 1</p>
        </div>
    </div>

    <!-- Pulsante Checkout -->
    <div class="text-end">
        <button class="btn btn-primary checkout-btn">Proceed to Checkout</button>
    </div>
</div>

@endsection


   <!-- <footer class="footer">
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
