<?php

try {
    $db = new PDO("mysql:host=" . DB_HOST .";dbname=" . DB_NAME .";port=" . DB_PORT,DB_USER,DB_PASS);
    // invalid query errors
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // Character set
    $db->exec("SET NAMES 'utf8'");
} catch (Exception $e) {
    echo "Could not connect to the database.";
    exit;
}