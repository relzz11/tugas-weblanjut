<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Detail produk</h1>

        @if ($products)
        <p>Nama produk : {{ $products['name'] }}</p>
        <p>Number produk : Rp{{ number_format($products['price'], 0, ',', '.')   }}<p>
        <p>Jenis bahan: {{ $products['material'] }}</p>
        <p>Merek: {{ $products['merek'] }}</p>
        @endif
   

</body>

</html>