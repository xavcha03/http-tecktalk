<?php
$method = $_SERVER['REQUEST_METHOD'];

if($method == "GET" && empty($_GET)){ //METHOD GET ET $_GET EST VIDE
    echo "<h1>GET - /</h1>";
    echo "<h2>Le titre de mon site</h2>";
    echo "<p>Aucun paramètres</p>";
}///////////////////////////////////////////
else if($method == "GET" && !empty($_GET)){//METHOD GET ET $_GET N'EST PAS VIDE
    echo "<h1>GET + params</h1>";
    echo "<h1>Le titre de mon site => " . $_GET["title"] . "</h1>";
    echo "<p>".$_GET["textContent"]."</p>";
}///////////////////////////////////////////
else if($method == "POST"){//METHOD POST ET $_GET EST VIDE
    echo "<h1>POST + params</h1>";
    $json = file_get_contents('php://input');
    $datas = json_decode($json);
    echo "<h2>Datas postées sur le serveur</h2>";
    echo "<p>Le serveur a enregistré ces données</p>";
    foreach($datas as $data){
        echo "<p>$data</p>";
    }
}///////////////////////////////////////////
else if($method == "DELETE"){//METHOD POST ET $_GET EST VIDE
    $json = file_get_contents('php://input');
    $datas = json_decode($json);
    //Enregistrement des datas en BDD
    echo "<h1>DELETE</h1>";
    echo "<h2>Suprpession de fruits</h2>";
    echo "<p>Le serveur a supprimé ces données en BDD</p>";
    foreach($datas as $data){
        echo "<p>$data</p>";
    }
}///////////////////////////////////////////
else if($method == "PATCH"){//METHOD POST ET $_GET EST VIDE
    $json = file_get_contents('php://input');
    $datas = json_decode($json);
    //Enregistrement des datas en BDD
    echo "<h1>UPDATE</h1>";
    echo "<h2>Le prix de ces fruits ont été mis à jour</h2>";
    foreach($datas as $data){
        echo "<p>$data</p>";
    }
}///////////////////////////////////////////

