<style>
  .search-form {
    max-width: 600px;
    margin: 50px auto;
    padding: 30px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .search-form h1 {
    text-align: center;
    margin-bottom: 30px;
  }

  .search-form label {
    display: block;
    margin-top: 15px;
    font-weight: bold;
  }

  .search-form input,
  .search-form select {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border-radius: 6px;
    border: 1px solid #ccc;
  }

  .search-form button {
    width: 100%;
    margin-top: 25px;
    padding: 12px;
    background-color: #007bff;
    color: white;
    border: none;
    font-size: 16px;
    border-radius: 6px;
    cursor: pointer;
  }

  .search-form button:hover {
    background-color: #0056b3;
  }
</style>

<form class="search-form">
  <h1>Search Products</h1>

  <label for="name">Product Name</label>
  <input type="text" id="name" name="name" placeholder="e.g. Sofa, Bed">

  <label for="category">Category</label>
  <select id="category" name="category">
    <option value="">-- Select --</option>
    <option value="sofa">Sofa</option>
    <option value="bed">Bed</option>
    <option value="chair">Chair</option>
  </select>

  <label for="min-price">Minimum Price (€)</label>
  <input type="number" id="min-price" name="min-price" min="0">

  <label for="max-price">Maximum Price (€)</label>
  <input type="number" id="max-price" name="max-price" min="0">

  <button type="submit">Search 🔍</button>
</form>
