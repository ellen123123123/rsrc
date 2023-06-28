<!-- resources/views/products/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Produto</title>
</head>
<body>
    <h1>Detalhes do Produto</h1>
    <p><strong>ID:</strong> {{ $product->id }}</p>
    <p><strong>Nome:</strong> {{ $product->name }}</p>
    <p><strong>Descrição:</strong> {{ $product->description }}</p>
    <a href="{{ route('products.index') }}">Voltar</a>
</body>
</html>
