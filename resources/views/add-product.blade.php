<!--<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Add Product - Admin Panel</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fffaf0;
      margin: 0; padding: 20px;
    }
    h1 {
      text-align: center;
    }
    form {
      max-width: 400px;
      margin: 0 auto;
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 8px rgba(0,0,0,0.1);
    }
    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
    }
    input[type="text"],
    input[type="number"],
    textarea {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border-radius: 4px;
      border: 1px solid #ccc;
      font-size: 16px;
      resize: vertical;
    }
    button {
      margin-top: 20px;
      padding: 12px;
      width: 100%;
      background-color: #28a745;
      color: white;
      border: none;
      font-size: 18px;
      border-radius: 6px;
      cursor: pointer;
    }
    button:hover {
      background-color: #218838;
    }
    .back-link {
      text-align: center;
      margin-top: 15px;
    }
    .back-link a {
      text-decoration: none;
      color: #007bff;
    }
  </style>
</head>-->
<body>


@extends('layouts.app')
    @section('title','add-product')
    @section('content')


    <h1>Add New Product</h1>

  <form onsubmit="event.preventDefault(); alert('Product added!');">
    <label for="name">Product Name</label>
    <input type="text" id="name" name="name" required />

    <label for="description">Description</label>
    <textarea id="description" name="description" rows="4" required></textarea>

    <label for="price">Price (€)</label>
    <input type="number" id="price" name="price" min="0" step="0.01" required />

    <label for="dimensions">Dimensions (L x W x H in cm)</label>
    <input type="text" id="dimensions" name="dimensions" placeholder="e.g. 100 x 85 x 75" required />

    <label for="availability">Availability</label>
    <select id="availability" name="availability" required>
      <option value="in-stock">In Stock</option>
      <option value="out-of-stock">Out of Stock</option>
      <option value="pre-order">Pre-Order</option>
    </select>

    <button type="submit">Add Product</button>
  </form>

  <div class="back-link">
    <a href="{{route('adminpanel')}}">← Back to Admin Panel</a>
  </div>
@endsection
</body>
</html>
