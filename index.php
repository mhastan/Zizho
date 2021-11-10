<?php

use controller\Controller;
include_once 'controller/Controller.php';
$controller = new Controller();


if(isset($_GET['logout'])) {
    $controller->logoutUser();
}

if(isset($_GET['del'])) {
     header("Location: /patienten", true, 301);
}


$param = $controller->getCurrentPage($_GET['p']);


// De route geeft de request vervolgens door aan de controller, slordig maar kan nog beter!
if($controller->checkSession() === True) {
    $param = $controller->getCurrentPage($_GET['p']);
    
    
switch ($param) {
    case 'dashboard':
            $controller->showHeader();
            $controller->showDashBoard();
        break;
    case 'admin':
        if($controller->CheckRole($_SESSION['ROLE']) === "ADMIN") {
            $controller->showAdminHeader();
            @$page = $_GET['page'];
    
                switch($page) {
                    case 'vragen':
                        // echo 'wageslave';
                        $controller->showQuestions();
                    
                    break;

                    case 'users':
                        // echo 'users';
                        // $controller->
                    break;

                    default:
                    
                    $page = "";

                    
                }
        } else {
            header('Location: dashboard');
        }
        break;
        case 'create':
            $controller->showHeader();
            $controller->create();
        break;
        case 'medicijnen':
            $controller->showHeader();
            $controller->getMedicijnen();
        break;
        case 'patienten':
            $controller->showHeader();
            $controller->showPatienten();
            $id =  @$_GET['del'];
            if(isset($id)) {
                $controller->deletePatientAction($id);
            }
        break;
        case 'editPatient':
            $controller->showHeader();
            $controller->editPatient();
        break;  
    default:
        $controller->show404();
    break;

    }
} elseif($param === 'register') {
        $controller->showRegister();
}else { 
    $controller->showLogin();
}


if(isset($_POST['LoginSubmit'])){
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    if($email != "" && $password != "") {
        $controller->checkLogin($email, $password);
    } 
}
