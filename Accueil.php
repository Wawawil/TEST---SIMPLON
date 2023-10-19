<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!--Bootstrap CSS link-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Sweet alert link--> 
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <?php
        if( isset($_GET['success']) && $_GET['success'] == 1 )
        {
            ?>
                <script>
                    Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: "Inscription éffectuée !",
                    showConfirmButton: false,
                    timer: 2500
                })
                </script>
            <?php
        }
    ?>

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

</body>
</html>