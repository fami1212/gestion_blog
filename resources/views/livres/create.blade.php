<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>formulaire de creation d'un livre</h1>
    <form action="{{ route('livres.store')}}" method="POST">
        @csrf
        <label for="titre">Titre du livre</label>
        <input type="text" name="titre" id="titre" required>
        <label for="auteur">auteur du livre</label>
        <input type="text" name="auteur" id="auteur" required>
        <label for="prix">prix du livre</label>
        <input type="number" name="prix" id="prix" required>
        <button type="submit">enregistrer</button>
    </form>
</body>
</html>
