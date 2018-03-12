<?php

// Connect to the database. Returns a PDO object
function getDb() {
    // Local deployment
    $server = "localhost";
    $username = "testutilisateur";
    $password = "test";
    $db = "pollux";
    
    return new PDO("mysql:host=$server;dbname=$db;charset=utf8", "$username", "$password",
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

// Check if someone is connected
function isConnected() {
    return isset($_SESSION['login']);
}

function isUserConnected(){
    if(isConnected()){
        $login = $_SESSION['login'];
        $password = $_SESSION['password'];
        $stmt = getDb()->prepare('select * from participant where mail_participant=:mail and mdp_participant=:mdp');
        $stmt->execute(array(':mail' => $login,':mdp' => $password));
        return($stmt->rowCount() == 1);
    }
    return false;
}

function isExpConnected(){
    if(isConnected()){
        $login = $_SESSION['login'];
        $password = $_SESSION['password'];
        $stmt = getDb()->prepare('select * from experimentateur where mail_experimentateur=:mail and mdp_experimentateur=:mdp');
        $stmt->execute(array(':mail' => $login,':mdp' => $password));
        return($stmt->rowCount() == 1);
    }
    return false;
}

// Redirect to a URL
function redirect($url) {
    header("Location: $url");
}

// Escape a value to prevent XSS attacks
function escape($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8', false);
}