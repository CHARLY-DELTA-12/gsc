<?php
session_start();
require 'connect.php';

// if(isset($_POST['enregistrer'])){

//     $nom= mysqli_real_escape_string($con, $_POST['nom']);
//     $prenom= mysqli_real_escape_string($con, $_POST['prenom']);
//     $email= mysqli_real_escape_string($con, $_POST['email']);
//     $filière= mysqli_real_escape_string($con, $_POST['filière']);
//     $niveau= mysqli_real_escape_string($con, $_POST['niveau']);
//     $phone= mysqli_real_escape_string($con, $_POST['phone']);
//     $course= mysqli_real_escape_string($con, $_POST['course']);

//     $query = "INSERT INTO etudiants (nom, prenom, email,filière, niveau, phone, course) VALUES('$nom', '$prenom','$email', '$filière', '$niveau', '$phone', '$course')";

//     $query_run= mysqli_query($db, $query);
//     if ($query_run) {

//         $_SESSION['message'] = "Student Created Successfuly";
//         header("Location: form.php");
//         exit(0);
        
//     }
// }

if (isset($_POST['connect'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $req = $db->prepare("SELECT * FROM utilisateur WHERE email = ? AND password = ?");
    $exec = $req->execute(array($email, $password));

    while ($data = $req->fetch()) {
        if ($data['profil'] == "admin") {
            $_SESSION['user'] = $data['name'];
            header('Location: admin.php');
        } elseif ($data['profil'] == "etudiant") {
            $_SESSION['user'] = $data['name'];
            header('Location: etudiants.php');
        }
    }
    // header('Location: Acceuil.php');
}

if (isset($_POST['addClasse'])) {
    $name = htmlspecialchars($_POST['name']);

    $req = $db->prepare("INSERT INTO classe (name) VALUES (?)");
    $exec = $req->execute(array($name));

    if ($exec) {
        $_SESSION['success'] = "Classe ajoutée avec succès";
        header('Location: admin_classe.php');
    } else {
        $_SESSION['error'] = "Erreur d'ajout";
        header('Location: admin_classe.php');
    }
}

if (isset($_POST['updateClasse'])) {
    $name = htmlspecialchars($_POST['name']);
    $id = $_POST['id'];

    // var_dump($_POST); die;

    $req = $db->prepare("UPDATE classe SET name = ? WHERE id = ?");
    $exec = $req->execute(array($name, $id));

    if ($exec) {
        $_SESSION['success'] = "Classe modifiée avec succès";
        header('Location: admin_classe.php');
    } else {
        $_SESSION['error'] = "Erreur de modification";
        header('Location: admin_classe.php');
    }
}

if (isset($_POST['deleteClasse'])) {
    $id = $_POST['id'];
    // echo $id ; die;
    $req = $db->prepare("DELETE FROM classe WHERE id = ?");
    $exec = $req->execute(array($id));

    if ($exec) {
        $_SESSION['success'] = "Classe supprimée avec succès";
        header('Location: admin_classe.php');
    } else {
        $_SESSION['error'] = "Erreur de suppression";
        header('Location: admin_classe.php');
    }
}

if (isset($_POST['addEtu'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $classe = htmlspecialchars($_POST['classe']);
    $password = htmlspecialchars($_POST['password']);
    $profil = "etudiant";

    $req = $db->prepare("INSERT INTO utilisateur (name, email, password, profil, classe_id) VALUES (?, ?, ?, ?, ?)");
    $exec = $req->execute(array($name, $email, $password, $profil, $classe_id));

    if ($exec) {
        $_SESSION['success'] = "utilisateur ajouté avec succès";
        header('Location: admin_etudaint.php');
    }
}

?>