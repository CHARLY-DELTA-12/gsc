<?php
    session_start();
    // require 'connect.php';

    try {
        $db = new PDO("mysql:host=localhost;dbname=etude;charset=utf8", 'root', '');
    } catch (\Exception $e) {
        die("Erreur " . $e->getMessage());
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Update_etudiant</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Modifier Etudiant
                            <a href="Acceuil.php" class="btn btn-danger float-end">RETOUR</a>
                        </h4>
                    </div>
                    <div class="card-body">

                    <?php
                    if(isset($_GET['id']))
                    
                    $id = $_GET['id'];
                    echo $id;
                    $req = $db->prepare("SELECT * FROM etudiants WHERE id = ?");
                    $exec = $req->execute(array($id));

                        while ($etudiants = $req->fetch()) {

                            // var_dump($etudiants); die;
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="id_etudiants" value="<?= $etudiants['id_etudiants'];?>">

                                    <div class="mb-3">
                                            <label>NOM</label>
                                            <input type="text" name="nom"value="<?=$etudiants['nom'];?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label>PRENOM</label>
                                            <input type="time" name="prenom"value="<?=$etudiants['prenom'];?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label>EMAIL</label>
                                            <input type="text" name="email"value="<?=$etudiants['email'];?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label>FILIERE</label>
                                            <input type="text" name="filière"value="<?=$etudiants['filière'];?>" class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label>NIVEAU</label>
                                            <input type="text" name="niveau"value="<?=$etudiants['niveau'];?>" class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label>TEL</label>
                                            <input type="text" name="tel"value="<?=$etudiants['tel'];?>" class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label>DIPLOMES</label>
                                            <input type="text" name="diplome"value="<?=$etudiants['diplome'];?>" class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label>TYPE</label>
                                            <input type="text" name="type" value="<?=$etudiants['type'];?>" class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label>MOT DE PASSE</label>
                                            <input type="password" name="password"value="<?=$etudiants['password'];?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" name="modifier" class="btn btn-primary">Modifier</button>
                                        </div>

                                    </form>
                                    <?php
                        
                            
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
