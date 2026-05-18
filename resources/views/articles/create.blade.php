<!DOCTYPE html>
<html>
<head>
    <title>Ajouter Article</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h1>Créer un article</h1>

    <form  method="POST" action="{{ route('articles.store') }}" >// Formulaire pour créer un nouvel article



        @csrf // Protection contre les attaques CSRF

        <div>
            <label>Titre :</label>
            <input type="text" name="title">
        </div>

        <br>

        <div>
            <label>Contenu :</label>
            <textarea name="content"></textarea>
        </div>

        <br>

        <div>
            <label>Auteur :</label>
            <input type="text" name="author">
        </div>

        <br>

        <button type="submit">
            Ajouter
        </button>

    </form>

</body>
</html>
