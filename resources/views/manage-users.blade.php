<!--<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Manage Users - Admin Panel</title>
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
      width: 80%;
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
    .status-active {
      color: green;
      font-weight: bold;
    }
    .status-inactive {
      color: red;
      font-weight: bold;
    }
    .back-link {
      text-align: center;
      margin-top: 20px;
    }
    .back-link a {
      text-decoration: none;
      color: #007bff;
    }-->
  </style>
</head>
<body>


    @extends('layouts.app')
    @section('title','manage-users')
    @section('content')

    <h1>Manage Users</h1>

  <table>
    <thead>
      <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>admin</td>
        <td>admin@example.com</td>
        <td><span class="status-active">Active</span></td>
      </tr>
      <tr>
        <td>guest</td>
        <td>guest@example.com</td>
        <td><span class="status-inactive">Inactive</span></td>
      </tr>
      <tr>
        <td>Nassim</td>
        <td>Nassim@example.com</td>
        <td><span class="status-active">Active</span></td>
      </tr>
    </tbody>
  </table>

  <div class="back-link">
    <a href="{{route("adminpanel")}}">← Back to Admin Panel</a>
  </div>

  @endsection

</body>
</html>
