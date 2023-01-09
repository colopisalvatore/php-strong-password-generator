<?php
session_start();
require_once __DIR__ . "/functions.php";

if( !empty($_GET['length']) ) {
    $result = get_password($_GET['length']);

    if( $result['password'] ) {
        $_SESSION['password'] = $result['password'];
        header("Location: ./success.php");
    } else {
        $_SESSION['error'] = $result['error'];
        header("Location: ../index.php");
    }
}
die();