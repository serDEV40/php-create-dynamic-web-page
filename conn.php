<?php
    try {
        $db = new PDO("mysql:host=localhost;dbname=blog;charset=utf8","root","123456789");
    } catch (PDOExpection $e) {
        $e->getMessage();
    }
?>