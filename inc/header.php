<!Doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Argonautes</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img
                        src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png"
                        alt="Wild Code School logo" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#ajout">Ajouter un argonautes</a>
                        <a class="nav-link" href="#liste">Listes des argonautes</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <!-- Contenu principal de la page -->

    <main class="container" style="min-height: 80vh;">
        <div class="row">
            <div class="col">




                <?php
                // Affichage des messages stockées dans la session de l'internaute
                //debug($_SESSION);

                // On affiche les messages de succès
                if (!empty($_SESSION['message']['success'])) { // Si n'est pas vide le tableau 'messages' de succès, alors on peut les afficher

                    foreach ($_SESSION['message']['success'] as $message) { // On parcourt le tableau contenant les messages succès et on recupère à chaque tour chaque message dans $message

                        echo '<div class="alert alert-success mt-4">' . $message . '</div>';
                    }

                    unset($_SESSION['message']['success']); // Puis on efface les messages de succès de la session que l'on vient d'afficher afin qu'il ne s'affiche plus

                }


                // On affiche les messages d'échec
                if (!empty($_SESSION['message']['danger'])) { 

                    foreach ($_SESSION['message']['danger'] as $message) { // On parcourt le tableau contenant les messages succès et on recupère à chaque tour chaque message dans $message

                        echo '<div class="alert alert-danger mt-4">' . $message . '</div>';
                    }

                    unset($_SESSION['message']['danger']); // Puis on efface les messages de succès de la session que l'on vient d'afficher afin qu'il ne s'affiche plus

                }


                ?>