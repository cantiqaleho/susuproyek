<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = isset($_POST['nama']) ? htmlspecialchars(trim($_POST['nama'])) : '';
    $alamat = isset($_POST['alamat']) ? htmlspecialchars(trim($_POST['alamat'])) : '';
    $nomor = isset($_POST['nomor']) ? htmlspecialchars(trim($_POST['nomor'])) : '';
    $delivery = isset($_POST['delivery']) ? htmlspecialchars(trim($_POST['delivery'])) : '';
    $notes = isset($_POST['notes']) ? htmlspecialchars(trim($_POST['notes'])) : '';


    $cart_json = isset($_POST['cart_data']) ? $_POST['cart_data'] : '[]';
    $cart = json_decode($cart_json, true);
    if (!is_array($cart)) $cart = [];

    $cart_total = isset($_POST['cart_total']) ? (int)$_POST['cart_total'] : 0;
    if ($cart_total === 0) {
        foreach ($cart as $c) {
            $cart_total += (isset($c['price']) ? (int)$c['price'] : 0) * (isset($c['qty']) ? (int)$c['qty'] : 0);
        }
    }

    function formatRp($n) {
        return number_format($n, 0, ',', '.');
    }
    ?>
    <!doctype html>
    <html>
    <head>
      <meta charset="utf-8">
      <title>Order Received</title>
      <style>
        body { font-family: Arial, sans-serif; background:#f9f9f9; padding:20px; }
        .card { max-width:800px; margin:20px auto; background:#fff; padding:24px; border-radius:12px; box-shadow:0 2px 10px rgba(0,0,0,0.08); }
        h1 { color:#2f9d58; }
        table { width:100%; border-collapse:collapse; margin-top:12px; }
        th, td { text-align:left; padding:10px; border-bottom:1px solid #eee; }
        .total { font-weight:800; text-align:right; margin-top:12px; }
        .btn-back { display:inline-block; margin-top:14px; padding:10px 14px; background:#2f9d58; color:#fff; border-radius:8px; text-decoration:none; }
      </style>
    </head>
    <body>
      <div class="card">
        <h1>✅ Order received!</h1>
        <p>You will receive an invoice via WhatsApp in &lt;24 hours.</p>

        <h2>Customer info</h2>
        <p><strong>Name:</strong> <?= $nama ?></p>
        <p><strong>Address:</strong> <?= $alamat ?></p>
        <p><strong>WhatsApp:</strong> <?= $nomor ?></p>
        <p><strong>Delivery:</strong> <?= $delivery ?></p>
        <p><strong>Notes:</strong> <?= $notes ?></p>

        <h2>Order details</h2>
        <?php if (count($cart) === 0): ?>
          <p>No cart data received.</p>
        <?php else: ?>
          <table>
            <thead>
              <tr><th>Product</th><th>Qty</th><th>Price</th><th>Subtotal</th></tr>
            </thead>
            <tbody>
              <?php foreach ($cart as $c): 
                $p = isset($c['price']) ? (int)$c['price'] : 0;
                $q = isset($c['qty']) ? (int)$c['qty'] : 0;
                $subtotal = $p * $q;
              ?>
                <tr>
                  <td><?= htmlspecialchars($c['product'] ?? '—') ?></td>
                  <td><?= $q ?></td>
                  <td>Rp<?= formatRp($p) ?></td>
                  <td>Rp<?= formatRp($subtotal) ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

          <p class="total">Total: Rp<?= formatRp($cart_total) ?></p>
        <?php endif; ?>

        <a href="products.html" class="btn-back">← Back to shop</a>
      </div>
    </body>
    </html>
    <?php
    exit;
}
?>
