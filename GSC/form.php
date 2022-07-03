<?php 
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container mt-5" >
       <?php include('message.php') ?>

   
       <div class="row">
           <div class="col-md-12">
               <div class="card">
                   <div class="car-header">
                     <h4>Ajouter Etudiant
                     <a href="index.php" class="btn btn-danger float-end">RETOUR</a> 
                     </h4> 
                   </div>
                   <div class="card-body">
                       <form action="code.php" method="POST">

                         <div class="mb-3">
                            <label >Nom</label>
                            <input type="text" name="nom" class="form-control" placeholder="Votre Nom">
                         </div>

                         <div class="mb-3">
                            <label >Prenom</label>
                            <input type="text" name="prenom" class="form-control" placeholder="Votre prenom">
                         </div>

                         <div class="mb-3">
                            <label >Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Votre email">
                         </div>

                         <class class="mb-3">
                             
                             <label for="">Filière</label>
                             <select name="filière" class="form-control">
                             <option value="isitec">ISITEC</option>
                             <option value="mercure">MERCURE</option>
                             <option value="gestion">GESTION</option>
                         </class>
                         </select>

                         
                         <class class="mb-3">
                             
                             <label for="">Niveau</label>
                             <select name="niveau" class="form-control">
                             <option value="l1">Licence1</option>
                             <option value="l2">Licence2</option>
                             <option value="l3">Licence3</option>
                             <option value="master">Master1</option>
                             <option value="master">Master2</option>
                         </class>
                         </select>

                         <div class="mb-3">
                            <label >Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Votre num">
                         </div>

                         <div class="mb-3">
                            <label >Course</label>
                            <input type="text" name="course" class="form-control" placeholder="Votre course">
                         </div>

                         <div class="mb-3">
                             <button type="submit" name="enregistrer" class="btn btn-primary">Enregistrer</button>
                         </div>

                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>