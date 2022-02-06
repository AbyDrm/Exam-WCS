<?php
require_once 'inc/init.php'; // inclusion du fichier init.php
$notif = ''; // On déclare une variable pour y mettre les messages d'erreur pour l'internaute

// ----------------
//  Traitement PHP 
// ----------------

// 2- Si le formulaire est envoyé on traite ses données :

if(!empty($_POST)) { // Si n'est pas vide $_POST, c'est que le formulaire a été envoyé

    // Contrôle du formulaire
    if (!isset($_POST['name']) || strlen($_POST['name']) < 3 || strlen($_POST['name']) > 20) { // Si n'existe pas champ 'name' ou la longueur du nom est inférieur 3 ou la longueur du nom est supérieur à 20
        $notif .= '<div class="alert alert-danger"> Le nom doit contenir entre 4 et 20 caractères </div>'; // On utilise ".=" pour ajouter chaque message au précédent dans $notif   
    }

    // Si il n'y a pas de message d'erreur dans $notif, on insère l'Argonaute en BDD :
    if(empty($notif)) { // Si la variable est vide, y a pas de message d'erreur
        $resultat = $pdo->prepare('INSERT INTO argonautes (nom, date_entree) VALUES (:nom, NOW())'); // On met des marqueurs pour chacun des champs car les valeurs proviennent du formulaire de l'internaute. Il faudra donc lier ces marqueurs à leur valeur juste après.

        $resultat->execute(array(':nom' => $_POST['name'],
    ));

        // Message pour l'internaute
        // Rappel: il y a un session_start() dans init.php qui est inclus en début de cette page. On peut donc y mettre le message destiné à l'internaute qui ajoute un Argonaute.
        $_SESSION['message']['success'][] = 'Votre Argonaute a bien été enregistré';

        header('location:index.php'); // On redirige à nouveau l'internaute vers la page index.php après avoir ajouté son Argonaute et mis le message dans sa session
        exit;

    } // Fin du (empty($notif))

} // Fin du if(!empty($_POST))


require_once 'inc/header.php'; //inclusion du haut de la page
?>

<h2 id="ajout" class="my-4"><i class="fas fa-file-alt"></i> Ajouter un(e) Argonaute</h2>
<!-- 1. Formulaire HTML pour publier un argonaute -->

<?php  echo $notif; // Affiche la variable dans laquelle on mettra les messages pour l'internaute  ?>

<form class="row g-3" action="" method="post">
    <label for="name">Nom de l'Argonaute</label>
    <div class="col-auto">
        <input type="text" class="form-control" id="name" name="name" placeholder="Nom">
    </div>

    <div class="col-auto">
        <button type="submit" class="btn btn-outline-secondary mb-3">Envoyer</button>
    </div>
</form>


<?php
// On fait une requête de sélection des Argonautes en BDD 
$resultat = $pdo->query("SELECT * FROM argonautes");
?>

<hr>

<h2 id="liste" class="my-4 "><i class="fas fa-user-shield"></i> Les Argonautes</h2>

<div class="row animated slideInLeft">

    <?php
    while ($argonaute = $resultat->fetch(PDO::FETCH_ASSOC)) {
         //debug($argonaute);// Tableau associatif qui contient 1 argonaute à chaque tour
    ?>

    <div class="col-sm-4">
        <p><?php echo ucfirst($argonaute['nom'])?></p>
    </div>


    <?php
    }
    ?>

</div>






<?php
require_once 'inc/footer.php'; //inclusion du bas de la page