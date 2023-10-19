
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST SIMPLON - ENREGISTREMENT</title>
    <link rel="stylesheet" href="assets/css/style.css">

    <!--Bootstrap CSS link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Toaster link--> 
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

</head>
<body>

<?php

 include 'config/database_connexion.php'; 
 global $db;
 
    if(isset($_POST['login'])){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $numero=$_POST['numero'];
        $adresse=$_POST['adresse'];
    
        $request = $db->prepare('select adresse FROM participants WHERE adresse=:adresse');
        $request -> execute([
            'adresse'=>$adresse
        ]);
        $result = $request->rowCount();
        if($result == 0){
            $requeste = $db->prepare("insert into participants (nom, prenom, numero, adresse) values(:nom,:prenom,:numero,:adresse)");
            $requeste -> execute([
                'nom' => $nom,
                'prenom' => $prenom,
                'numero' => $numero,
                'adresse'=> $adresse
            ]);
            header("Location: http://localhost/TEST_SIMPLON/Accueil.php?success=1");
            die();
            echo ("<script>toastr.success('Inscription effectuée !')</script>");
        }else{
            echo ("<script>toastr.warning('Participant déja inscrit !')</script>");
        }
    
    }
?>
<div class="content">
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-6 contents mt-3 mb-3">
        <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="form-block">
                <div class="mb-4">
                <h1 class="text-center">Enregistrer vous</h1>
            </div>
            <form action="#" method="post">
                <div class="form-group first">
                <input type="text" name="nom" class="form-control" placeholder="nom" required>

                </div>
                <div class="form-group first">
                <input type="text" name="prenom" class="form-control" placeholder="prenom" required>

                </div>
                <div class="form-group first">
                <input type="text" name="numero" class="form-control" placeholder="xx-xx-xx-xx-xx" required>

                </div>
                <div class="form-group first">
                <input type="email" name="adresse" class="form-control" placeholder="adresse" required>

                </div>

                <input type="submit" name="login" value="S'inscrire" class="btn btn-pill text-white btn-block btn-primary">
            </form>
            </div>
        </div>
        </div>
        
    </div>
    
    </div>
</div>
</div>
    <!--Bootstrap Java Script link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>