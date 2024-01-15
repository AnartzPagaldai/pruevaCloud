<?php

$error = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    require "db.php";
    $id = select("SELECT id FROM users WHERE name = :nombre AND pass = :pass",
    ["nombre" => $_POST["nombre"], "pass" => $_POST["pass"]]);
    if ($id[0]) { 
        die("iniciado");
    } else {
        $error = "incorrecto";
    }
}

require "index.view.php";