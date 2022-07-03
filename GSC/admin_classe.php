<?php
session_start();
require 'connect.php';

if(!isset($_SESSION['user'])) {
    header('Location: Acceuil.php');
}
$req1 = false;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $req1 = $db->query("SELECT * FROM classe WHERE id = $id");
}

$req = $db->query("SELECT * FROM classe");


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
            
          <?php
          if ($req1)  {
            while ($classe = $req1->fetch()) {

                ?>
            <h2 class="h4 text-black mb-4" style="text-align:center; margin-top: 24px">Modifier Classe </h2>
            <div class="form-group">
            <input type="text" class="form-control" name="name" <?php if($classe['name'] != null) { ?> value="<?= $classe['name'];?>" <?php } ?> placeholder="Entrez le nom de la classe">
            </div>
            <div class="form-group">
                <input type="hidden" name="id" value="<?= $classe['id'];?>">
            <input type="submit" name="updateClasse" class="btn btn-primary btn-pill" value="Soumettre">
            </div>
           
            <?php
                    }
                    
          } else {
            ?>
            <h2 class="h4 text-black mb-4" style="text-align:center; margin-top: 24px">Nouvelle Classe </h2>
            <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Entrez le nom de la classe">
            </div>
            <div class="form-group">
            <input type="submit" name="addClasse" class="btn btn-primary btn-pill" value="Soumettre">
            </div>
            <?php

          }

          ?>
            
          </form>
    
        </div>           
        <div class="col-2"></div> 
        </div>
        </div>
        </div>
        <div class="container">
            <div class="card">
                <div class="card-header bg-white">
                    <h3>La liste  des Classes</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>-</th>
                                    <th>ID</th>
                                    <th>Classe</th>
                                    <th colspan="2" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            <?php
                            while ($data = $req->fetch()) {

                                ?>

                                <tr>
                                    <td>-</td>
                                    <td><?= $data['id'];?></td>
                                    <td><?= $data['name'];?></td>
                                    <td><a class="btn btn-success" href="admin_classe.php?id=<?= $data['id'];?>">Modif</a></td>
                                    <form action="code.php" method="post">
                                        <input type="hidden" name="id" value="<?= $data['id'];?>">
                                        <td><input class="btn btn-danger" type="submit" name="deleteClasse" Value="Supp" ></td>
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
