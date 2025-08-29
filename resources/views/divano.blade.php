<!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fabric Armchair - HomeStyle</title>
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

        .product-container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .product-image {
            text-align: center;
            margin-bottom: 30px;
        }

        .product-image img {
            max-width: 100%;
            border-radius: 10px;
        }

        .product-details h1 {
            font-size: 32px;
            margin-bottom: 10px;
            text-align: center;
        }

        .product-details p.description {
            font-size: 18px;
            margin-bottom: 20px;
            text-align: center;
        }

        .product-details .price {
            font-size: 24px;
            color: #007bff;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .product-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        .product-table th,
        .product-table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        .product-table th {
            background-color: #f0f0f0;
        }

        .add-to-cart {
            display: block;
            margin: 0 auto;
            padding: 12px 24px;
            font-size: 16px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .add-to-cart:hover {
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
    </style>-->
</head>

<body>

    <!--<div class="navbar">
        <a href="mainpage.htm">Home</a>
        <a href="#">Shop</a>
        <a href="#">Contacts</a>
        <a href="sign-in.htm">Sign in</a>
    </div>-->

      @extends('layouts.app')
    @section('title','divano')
    @section('content')

    <div class="product-container">
        <div class="product-image">
           <img src="{{ asset('pnj/divano.jpg') }}" alt="Full-Sized Bed">

        </div>

        <div class="product-details">
            <h1>Fabric Armchair</h1>
            <p class="description">
                A stylish and comfortable fabric armchair perfect for any living room. Designed with cozy cushions and
                durable fabric, it brings both elegance and comfort to your space.
            </p>
            <p class="price">€249.00</p>

            <table class="product-table">
                <tr>
                    <th>Material</th>
                    <td>Fabric cover, wooden frame, soft foam padding</td>
                </tr>
                <tr>
                    <th>Dimensions</th>
                    <td>100 x 85 x 75 cm</td>
                </tr>
                <tr>
                    <th>Color</th>
                    <td>Grey</td>
                </tr>
                <tr>
                    <th>Availability</th>
                    <td>In Stock</td>
                </tr>
                <tr>
                    <th>Shipping</th>
                    <td>Free delivery within 2-4 business days</td>
                </tr>
            </table>

            <button class="add-to-cart" onclick="location.href='{{ route('cart-divano')}}'">Add to Cart 🛒</button>
        </div>
    </div>

    <div class="reviews-section" style="max-width: 900px; margin: 60px auto; padding: 0 20px;">
        <h2 style="font-size: 28px; margin-bottom: 20px;">Customer Reviews</h2>

        <div class="review" style="background-color: #f5f5f5; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
            <p style="margin: 0; font-size: 18px;"><strong>⭐️⭐️⭐️⭐️⭐️</strong></p>
            <p style="margin: 10px 0;">"Amazing quality! The fabric is soft and the design fits perfectly in my living
                room."</p>
            <p style="font-size: 14px; color: #777;">– Anna R.</p>
        </div>

        <div class="review" style="background-color: #f5f5f5; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
            <p style="margin: 0; font-size: 18px;"><strong>⭐️⭐️⭐️⭐️</strong></p>
            <p style="margin: 10px 0;">"Comfortable and looks good, but delivery took a bit longer than expected."</p>
            <p style="font-size: 14px; color: #777;">– Luca B.</p>
        </div>

        <div class="review" style="background-color: #f5f5f5; padding: 20px; border-radius: 8px;">
            <p style="margin: 0; font-size: 18px;"><strong>⭐️⭐️⭐️⭐️⭐️</strong></p>
            <p style="margin: 10px 0;">"Really happy with this purchase. Great value for the price."</p>
            <p style="font-size: 14px; color: #777;">– Martina P.</p>
        </div>

        <div class="leave-review" style="margin-top: 50px;">
            <h3 style="font-size: 22px; margin-bottom: 10px;">Leave a Review</h3>
            <form onsubmit="alert('Thanks for your review! (Feature not implemented)'); return false;"
                style="display: flex; flex-direction: column; gap: 15px;">
                <input type="text" placeholder="Your Name" required
                    style="padding: 10px; font-size: 16px; border-radius: 6px; border: 1px solid #ccc;">
                <select required style="padding: 10px; font-size: 16px; border-radius: 6px; border: 1px solid #ccc;">
                    <option value="">Rating</option>
                    <option>⭐️⭐️⭐️⭐️⭐️</option>
                    <option>⭐️⭐️⭐️⭐️</option>
                    <option>⭐️⭐️⭐️</option>
                    <option>⭐️⭐️</option>
                    <option>⭐️</option>
                </select>
                <textarea rows="4" placeholder="Your review..." required
                    style="padding: 10px; font-size: 16px; border-radius: 6px; border: 1px solid #ccc;"></textarea>
                <button type="submit"
                    style="padding: 12px; font-size: 16px; background-color: #28a745; color: white; border: none; border-radius: 6px; cursor: pointer;">
                    Submit Review
                </button>
            </form>
        </div>
    </div>

    @endsection


    <!--<footer class="footer">
        <p>© 2025 HomeStyle. All rights reserved.</p>
        <div>
            <a href="#">Privacy Policy</a> |
            <a href="#">Terms & Conditions</a> |
            <a href="#">Support</a>
        </div>
    </footer>-->

</body>

</html>
