<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('thanks')}}" method="POST">
        @csrf
        <label for="nom">Nom</label><br>
        <input type="text" name="nom" id="nom"><br>
        <label for="email">Email</label><br>
        <input type="text" name="email" id="email"><br>
        <label for="adresse">Adresse</label><br>
        <input type="text" name="adresse" id="adresse"><br>
        <label for="message">Message</label><br>
        <input type="text" name="message" id="message"><br>
        <button type="submit">Envoyer</button>

    </form>
    
</body>
</html>