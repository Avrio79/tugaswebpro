<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Restoran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .menu-item {
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }
        .menu-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }
        .menu-item h2 {
            margin-bottom: 5px;
            color: #666;
        }
        .menu-item p {
            margin: 5px 0;
        }
        .menu-item .price {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Menu Restoran</h1>

        <div class="menu-item">
            <h2>Nasi Goreng Special</h2>
            <p>Mi goreng dengan telur, ayam, udang, sayuran</p>
            <p class="price">Rp 25.000</p>
        </div>

        <div class="menu-item">
            <h2>Mie Ayam Bakso</h2>
            <p>Mie ayam dengan bakso, pangsit, daun bawang</p>
            <p class="price">Rp 20.000</p>
        </div>

        <div class="menu-item">
            <h2>Gado-gado</h2>
            <p>Assortment of vegetables served with peanut sauce</p>
            <p class="price">$5.00</p>
        </div>

        <div class="menu-item">
            <h2>Sate Ayam</h2>
            <p>Chicken skewers served with peanut sauce and rice cakes</p>
            <p class="price">$8.00</p>
        </div>

    </div>
</body>
</html>
