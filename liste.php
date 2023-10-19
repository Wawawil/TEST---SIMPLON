<?php 
include 'config/database_connexion.php';
$req = $db->prepare("SELECT * FROM participants ORDER BY id ASC");
$req->execute();
$data = $req->fetchAll(PDO::FETCH_OBJ);
$participants = $data;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!--Bootstrap CSS link-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div>
    <ul class="nav nav-pills">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="Accueil.php">TEST-SIMPLON</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="Enregistrement.php">S'inscrire</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="liste.php">Consulter la liste des participants</a>
    </li>
    </ul>
</div>

<div class="liste" style="padding: 15px;">
    <table class="table table-success table-striped">
        <thead>
            <tr>
            <th scope="col">Identifiant</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Numéro</th>
            <th scope="col">Adresse</th>
            </tr>
        </thead>
        <?php
            foreach($participants as $participant){
                ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?= $participant->id ?></th>
                            <th><?= $participant->nom ?></th>
                            <th><?= $participant->prenom ?></th>
                            <th><?= $participant->numero ?></th>
                            <th><?= $participant->adresse ?></th>
                        </tr>
                    </tbody>
                <?php
            }
        ?>
    </table>
</div>
</body>
</html>