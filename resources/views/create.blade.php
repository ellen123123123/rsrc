<!-- resources/views/products/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Produto</title>
</head>
<body>
    <h1>Adicionar Produto</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" required><br>
        <label for="description">Descrição:</label>
        <textarea name="description" id="description" required></textarea><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
