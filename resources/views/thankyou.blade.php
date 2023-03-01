<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            border: 1px solid gray; border-collapse:collapse;
        }
        th,td{
            border: 1px solid gray;
            padding: 5px;
        }
        
    </style>
</head>
<body>
<h1>Nous avons bien reçu votre mesaage merci.</h1>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Adresse</th>
            <th>Message</th>
        </tr>  
    </thead>
    <tbody>
        <tr>
            <td>{{$nom}}</td>
            <td>{{$email}}</td>
            <td>{{$adresse}}</td>
            <td>{{$message}}</td>
        </tr>
    </tbody>
</table>



</body>
</html>