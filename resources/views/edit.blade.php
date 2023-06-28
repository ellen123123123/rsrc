<!-- resources/views/products/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Editar Produto</title>
</head>
<body>
    <h1>Editar Produto</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" value="{{ $product->name }}" required><br>
        <label for="description">Descrição:</label>
        <textarea name="description" id="description" required>{{ $product->description }}</textarea><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
