<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      background: #f9f9f9;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .checkout-container {
      display: flex;
      justify-content: space-between;
      gap: 20px;
      max-width: 900px;
      margin: auto;
    }

    .checkout-form {
      flex: 2;
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    .checkout-form label {
      display: block;
      margin: 10px 0 5px;
      font-weight: bold;
    }

    .checkout-form input,
    .checkout-form select {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    .checkout-form input[type="submit"] {
      background: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
      font-size: 16px;
    }

    .checkout-form input[type="submit"]:hover {
      background: #45a049;
    }

    .order-summary {
      flex: 1;
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    .order-summary h3 {
      margin-bottom: 15px;
    }

    .order-summary ul {
      list-style: none;
      padding: 0;
    }

    .order-summary li {
      margin-bottom: 10px;
      border-bottom: 1px solid #eee;
      padding-bottom: 5px;
    }

    .order-summary .total {
      font-weight: bold;
      margin-top: 15px;
    }
  </style>
</head>
<body>
  <h2>Checkout</h2>

  <div class="checkout-container">
    <!-- Left: Form -->
    <form class="checkout-form" action="proses_signup.php" method="POST">
      <label for="nama">Full Name</label>
      <input type="text" name="nama" id="nama">

      <label for="alamat">Address</label>
      <input type="text" name="alamat" id="alamat">

      <label for="nomor">WhatsApp Number</label>
      <input type="number" name="nomor" id="nomor">

      <label for="delivery">Delivery Method</label>
      <select name="delivery" id="delivery">
        <option value="Delivery">Delivery</option>
        <option value="Pick up">Pick up</option>
      </select>

      <label for="notes">Notes</label>
      <input type="text" name="notes" id="notes">

      <input type="submit" value="Place Order">
    </form>

    <div class="order-summary">
      <h3>Order Summary</h3>
      <ul>
        <li>Chocolate Milk x1 — $2.50</li>
        <li>Strawberry Milk x2 — $5.00</li>
      </ul>
      <p class="total">Total: $7.50</p>
    </div>
  </div>
</body>
</html>
