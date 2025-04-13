<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>Modification du livre </h2>
    <form action="{{ route('livres.update', $livre) }}" method="post">
        @csrf
        @method('PUT')
        <label for="titre">Titre du livre</label>
        <input type="text" name="titre" value="{{ $livre->titre }}" id="titre" required>
        <label for="auteur">auteur du livre</label>
        <input type="text" name="auteur" value="{{ $livre->auteur }}" id="auteur" required>
        <label for="prix">prix du livre</label>
        <input type="number" name="prix" value="{{ $livre->prix }}" id="prix" required>
        <button type="submit">enregistrer</button>
    </form>
</body>
</html>
