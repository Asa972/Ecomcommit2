<!DOCTYPE html>
<html>
<head>
    <title>Détails du Produit</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="my-4">Détails du Produit</h1>
    <a href="{{ route('products.index') }}" class="btn btn-secondary mb-3">Retour à la liste</a>
    <div class="card">
        <div class="card-header">
            <h2>{{ $product->name }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Description:</strong> {{ $product->description }}</p>
            <p><strong>Prix:</strong> {{ $product->price }}</p>
        </div>
    </div>
</div>
</body>
</html>
