<!DOCTYPE html>
<html>
<head>
    <title>Visualizar Produto</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Produto</h1>
        <p><strong>Nome:</strong> {{ $product->name }}</p>
        <p><strong>Descrição:</strong> {{ $product->description }}</p>
        <p><strong>Preço:</strong> R$ {{ number_format($product->price, 2, ',', '.') }}</p>
        <a href="{{ route('products.index') }}">Voltar</a>
    </div>
</body>
</html>
