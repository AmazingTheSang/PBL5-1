<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Quan ly chuong</title>

</head>

<body>

</body>

</html>

<?php
    if (isset($_GET['controller'])){
        $controller = $_GET['controller'];
    }
    else{
        $controller='';
    }

    switch ($controller) {
        case 'admin':
            include_once ('Model/Truyen/M_binhluan.php');
            $datacmt=new m_binhluan;
            $datacmt->connect();
            include_once "Model/Truyen/M_truyen.php";
            $datatruyen=new m_truyen;
            $datatruyen->connect();
            require_once('Controller/admin/index.php');
            
            break;
        case 'user':
            include_once "Model/User/M_user.php";
            $db=new m_user;
            $db->connect();
            require_once('Controller/user/index.php');
            break;
        case 'truyen':
            include "Model/Truyen/M_truyen.php";
            $db = new m_truyen();
            $db->connect();
            require_once('Controller/truyen/index.php');
            break;

        case 'chuong':
            include "Model/Truyen/M_truyen.php";
            $dbtruyen=new m_truyen();
            $dbtruyen->connect();
            include "Model/Truyen/M_chuong2.php";
            $db = new m_chuong2();
            $db->connect();

            require_once('Controller/chuong/index.php');
            break;
        default:
        //   require_once('');
            break;
    }
?>