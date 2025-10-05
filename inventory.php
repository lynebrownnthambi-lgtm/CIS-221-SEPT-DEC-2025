<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Fashion Store Inventory</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f8f8f8;
      color: #333;
    }
    table {
      width: 80%;
      margin: 30px auto;
      border-collapse: collapse;
      background: #fff;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    th, td {
      border: 1px solid #ccc;
      padding: 12px;
      text-align: center;
    }
    th {
      background: #2C3E50;
      color: #fff;
    }
    h1 {
      text-align: center;
      margin-top: 20px;
    }
  </style>
</head>
<body>
<div style="text-align:center; margin-top:20px;">
  <a href="fashion store.html" style="
      background:#2C3E50;
      color:white;
      padding:8px 15px;
      border-radius:6px;
      text-decoration:none;
  ">← Back to Home</a>
</div>

  <h1><u>Store Inventory<u></h1>
  <table>
    <tr>
      <th>ID</th>
      <th>Product</th>
      <th>Price (Ksh)</th>
      <th>Bought</th>
      <th>Sold</th>
      <th>In Stock</th>
      <th>Revenue (Ksh)</th>
    </tr>

    <?php
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['price']}</td>
                <td>{$row['bought']}</td>
                <td>{$row['sold']}</td>
                <td>{$row['in_stock']}</td>
                <td>{$row['revenue']}</td>
              </tr>";
      }
    } else {
      echo "<tr><td colspan='7'>No products found</td></tr>";
    }
    ?>
  </table>

</body>
</html>
