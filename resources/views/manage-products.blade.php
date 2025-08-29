<!--<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Manage Products - Admin Panel</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fffaf0;
      margin: 0; padding: 20px;
    }
    h1 {
      text-align: center;
      margin-bottom: 20px;
    }
    table {
      width: 90%;
      margin: 0 auto;
      border-collapse: collapse;
      background: #fff;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 0 8px rgba(0,0,0,0.1);
    }
    th, td {
      padding: 12px 15px;
      border-bottom: 1px solid #ddd;
      text-align: left;
    }
    th {
      background-color: #007bff;
      color: white;
    }
    tr:hover {
      background-color: #f1f1f1;
    }
    button {
      padding: 6px 12px;
      margin-right: 5px;
      font-size: 14px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .edit-btn {
      background-color: #ffc107;
      color: #333;
    }
    .edit-btn:hover {
      background-color: #e0a800;
    }
    .delete-btn {
      background-color: #dc3545;
      color: white;
    }
    .delete-btn:hover {
      background-color: #b02a37;
    }
    .back-link {
      text-align: center;
      margin-top: 20px;
    }
    .back-link a {
      text-decoration: none;
      color: #007bff;
    }
  </style>-->
</head>
<body>

  @extends('layouts.app')
    @section('title','manage-products')
    @section('content')

    <h1>Manage Products</h1>

  <table>
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Price (€)</th>
        <th>Availability</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Fabric Armchair</td>
        <td>249.99</td>
        <td>In Stock</td>
        <td>
          <button class="edit-btn" onclick="alert('Edit functionality not implemented')">Edit</button>
          <button class="delete-btn" onclick="alert('Delete functionality not implemented')">Delete</button>
        </td>
      </tr>
      <tr>
        <td>Corner Sofa</td>
        <td>799.99</td>
        <td>In Stock</td>
        <td>
          <button class="edit-btn" onclick="alert('Edit functionality not implemented')">Edit</button>
          <button class="delete-btn" onclick="alert('Delete functionality not implemented')">Delete</button>
        </td>
      </tr>
      <tr>
        <td>Full-Sized Bed</td>
        <td>499.99</td>
        <td>Out of Stock</td>
        <td>
          <button class="edit-btn" onclick="alert('Edit functionality not implemented')">Edit</button>
          <button class="delete-btn" onclick="alert('Delete functionality not implemented')">Delete</button>
        </td>
      </tr>
    </tbody>
  </table>

  <div class="back-link">
    <a href="{{route('adminpanel')}}">← Back to Admin Panel</a>
  </div>

  @endsection

</body>
</html>
