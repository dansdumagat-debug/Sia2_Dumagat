<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #1f2937;
        }

        main {
            max-width: 760px;
            margin: 48px auto;
            padding: 0 20px;
        }

        h1 {
            margin-bottom: 24px;
            font-size: 32px;
        }

        .product {
            margin-bottom: 12px;
            padding: 16px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            background: #ffffff;
        }

        .empty {
            padding: 16px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            background: #ffffff;
        }
    </style>
</head>
<body>
    <main>
        <h1>Product List</h1>

        @if($products->count() > 0)
            @foreach($products as $product)
                <p class="product">
                    {{ $product->name }} - Quantity: {{ $product->quantity }} - Price: ₱{{ number_format($product->price, 2) }}
                </p>
            @endforeach
        @else
            <p class="empty">No products available.</p>
        @endif
    </main>
</body>
</html>
