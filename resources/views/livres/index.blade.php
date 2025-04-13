<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>vous avez la liste des livres</h1>
    <a href="{{ route('livres.create') }}">Ajouter un livre</a>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>titre</th>
                <th>auteur</th>
                <th>prix</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($livres as $livre)
                <tr>
                    <td>{{$livre->id}}</td>
                    <td>{{$livre->titre}}</td>
                    <td>{{$livre->auteur}}</td>
                    <td>{{$livre->prix}}</td>
                    <td>
                        <a href="{{route('livres.edit', $livre)}}">Modifier</a>
                        <form action="{{route('livres.destroy', $livre)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</body>

</html>
