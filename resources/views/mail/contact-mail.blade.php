<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 class="fw-bold text-center display-2 text-danger">
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