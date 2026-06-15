<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 style="color: #333; border-bottom: 2px solid #007bff; padding-bottom: 10px;">
        ciao {{$username}}
    </h1>
    <p>Questi i tuoi dati personali; </p>
    <ul>

        <li> Nome : {{$username}}</li>
        <li>email {{$useremail}}</li>
        <li>messaggio: {{$usermessage}}</li>
    </ul>
    <!-- Dati mittente -->


    <!-- corspo messaggio -->
</body>

</html>