<?php
// index.php

session_start();
include_once 'config/db.php';
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    //pilihan
    case 'home':
        include 'bagian/template/navbar.php';
        include 'pilihan/home.php';
        break;

    case 'nasional':
        include 'bagian/template/navbar.php';
        include 'pilihan/home.php';
        break;
    
    case 'internasional':
        include 'bagian/template/navbar.php';
        include 'pilihan/home.php';
        break;



    //kategori
    case 'politik':
        include 'bagian/template/navbar.php';
        include 'kategori/politik.php';
        break;



    //detail
    case 'respon':
        include 'bagian/template/navbar.php';
        include 'pages/respon.php';
        break;


    //administrator
    case 'login':
        include 'administrator/login.php';
        break;

    case 'regis':
        include 'administrator/register.php';
        break;

    case 'admin':
        if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
            include 'administrator/dashboard.php';
        } else {
            echo "<script>alert('Anda harus login terlebih dahulu!');window.location.href='index.php?page=login';</script>";
        }
        break;
        
    case 'logout':
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION = array();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();

        header("Location: login.php");
        exit();

    case 'unggah' :
        include 'administrator/upload-berita.php';
        break;

    case 'perbaikan' :
        include 'administrator/maintenance.php';
        break;
        
    default:
        include 'pages/404.php'; 
        break;
}
?>