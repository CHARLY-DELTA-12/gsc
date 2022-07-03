<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=salle_de_classe;charset=utf8", "root", "");
} catch (\Exception $e) {
    die("Erreur " . $e->getMessage());
}

?>