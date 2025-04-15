<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Produk</h1>
    <ul>
        @foreach ($products as $id => $product)
            <li>
                <a href="{{ url('/product/' . $id) }}">
                    {{ $product['name'] }}- Rp. {{ Number_format($product['price'], 0, ',', '.') }}
                </a>
            </li>

        @endforeach
    </ul>

</body>

</html>