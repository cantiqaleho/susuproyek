<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['nomor']) && isset($_POST['delivery']) && isset($_POST['notes'])) {
     
    $nama = htmlspecialchars($_POST['nama']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $nomor = htmlspecialchars($_POST['nomor']);
    $delivery = htmlspecialchars($_POST['delivery']);
    $notes = htmlspecialchars($_POST['notes']);
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Order Confirmation</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background: #f9f9f9;
                margin: 0;
                padding: 20px;
            }
            .container {
                max-width: 700px;
                margin: auto;
                background: white;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            }
            h1 {
                color: #4CAF50;
                text-align: center;
                margin-bottom: 20px;
            }
            h2 {
                margin-top: 20px;
                border-bottom: 2px solid #eee;
                padding-bottom: 5px;
            }
            p {
                font-size: 16px;
                margin: 8px 0;
            }
            strong {
                color: #333;
            }
            .btn {
                display: inline-block;
                margin-top: 20px;
                padding: 12px 20px;
                background: #4CAF50;
                color: white;
                text-decoration: none;
                border-radius: 6px;
                font-weight: bold;
            }
            .btn:hover {
                background: #45a049;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>✅ Order Received!</h1>
            <p style="text-align:center;">You will receive an invoice through WhatsApp in &lt;24 hours.</p>

            <h2>Order Information</h2>
            <p><strong>Full name:</strong> <?php echo $nama; ?></p>
            <p><strong>Address:</strong> <?php echo $alamat; ?></p>
            <p><strong>Whatsapp number:</strong> <?php echo $nomor; ?></p>
            <p><strong>Delivery method:</strong> <?php echo $delivery; ?></p>
            <p><strong>Notes:</strong> <?php echo $notes; ?></p>

            <h2>Order Details</h2>
            <p>(Here you can show products ordered, total price, etc.)</p>

            <a href="index.html" class="btn">⬅ Back to Home</a>
        </div>
    </body>
    </html>
    <?php
}
?>
