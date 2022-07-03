<?php
session_start();
require 'connect.php';

if(!isset($_SESSION['user'])) {
    header('Location: Acceuil.php');
}

$req = $db->query("SELECT * FROM classe");
$req1 = $db->query("SELECT u.name as etudiant, u.email, u.id, c.name FROM utilisateur u, classe c WHERE u.classe_id = c.id and u.profil = 'etudiant'");

include('includes/head.php');
include('includes/header.php');

?>


<div class="site-section" id="programs-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center"  data-aos="fade-up" data-aos-delay="">
            <!-- <h2 class="section-title">Connexion</h2> -->
          </div>
        </div>
        <div class="row justify-content-center">
        <div class="col-2"></div>
        <div class="col-lg-8 text-center " data-aos="fade-up" data-aos-delay="500">
                  
          <form action="code.php" method="post" class="form-box justify-content-center align-item-center">
            
    
            <h2 class="h4 text-black mb-4" style="text-align:center; margin-top: 24px">Nouveau Etudiant </h2>
            <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="name">
            </div>
            <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="email">
            </div>
            <div class="form-group">
            <select class="form-control" name="classe">
                <option value="...">Choisir Classes</option>
                <?php 
                    while ($data = $req->fetch()) {
                        ?>

                        <option value="<?= $data['id']; ?>"><?= $data['name']; ?></option>

                        <?php
                    }
                ?>
            </select>
            </div>
            <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Mot de Passe">
            </div>
            <div class="form-group">
            <input type="submit" name="addEtu" class="btn btn-primary btn-pill" value="Soumettre">
            </div>
           
          </form>
    
        </div>           
        <div class="col-2"></div> 
        </div>
        </div>
        </div>
        <div class="container">
            <div class="card">
                <div class="card-header bg-white">
                    <h3>La liste  des Etudiants</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>-</th>
                                    <th>Etudiant</th>
                                    <th>Email</th>
                                    <th>Classe</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            while ($data = $req1->fetch()) {

                                ?>

                                <tr>
                                    <td>-</td>
                                    <td><?= $data['etudiant'];?></td>
                                    <td><?= $data['email'];?></td>
                                    <td><?= $data['name'];?></td>
                                    <td><a class="btn btn-success" href="admin_classe.php?id=<?= $data['id'];?>">Modif</a></td>
                                    <form action="code.php" method="post">
                                        <input type="hidden" name="id" value="<?= $data['id'];?>">
                                        <td><input class="btn btn-danger" type="submit" name="deleteUser
                                        
                                          !\¤^" Value="Supp" ></td>
                                    </form>
                                    
                                </tr>

                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

       
<?php
include('includes/script.php');
?>
