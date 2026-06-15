<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progetto_Invio_e-mail</title>
    <!-- Asset per il css importati con aiuto file vite.config per copiare ed incollare rapidamente la riga scritta -->

    <!-- font dei testi -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">



    <!-- IMPORTO IL CSS VIA ASSET -->
    @vite(['resources/css/app.css', 'resources/css/style.css', 'resources/js/app.js'])

</head>

<body>




    <x-navbar />


    <!-- Mettere lo slot  che serve a mostra  del contenuto ad altre pagine dentro un div contenitore per meglio prender intera struttura -->

    <div class="container-fluid min-vh-100 bg-custom">

        {{$slot}}
    </div>


























































    <!-- IKONE DA FONTOSO -->

    <script src="https://kit.fontawesome.com/daf6ff33d9.js" crossorigin="anonymous"></script>




</body>

</html>