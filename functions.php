<?php

require_once __DIR__ . '/config.php';

function connectDb()
{
    try {
        return new PDO (
        DSN,
        USER,
        PASSWORD,
        [PDO::ATTR_ERRMODE =>
        PDO::ERRMODE_EXCEPTION]
    );
    } catch (PDOException $e2) {
        echo $e2->getMessage();
        exit;
    }
}

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}