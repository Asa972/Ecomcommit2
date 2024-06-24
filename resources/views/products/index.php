<!DOCTYPE html>
<html>
<head>
    <title>Liste des Produits</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="my-4">Liste des Produits</h1>
    <table class="table table-bordered">
        <thead>
            <tr>

                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>

                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
