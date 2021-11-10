<?php
    
$url =  $_SERVER['REQUEST_URI'];
$urlTitle = substr($url, 1);
$urlTitle =  ucfirst($urlTitle);

echo <<<EOF

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/headerStyle.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/mdb.min.css">
    <link rel="stylesheet" href="../css/headerStyle.css">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <title> ZiZho - Admin </title>


        <style>

            nav {
            
                background-color: white;

            }



        </style>


    </head>
<header>
<nav class="navbar navbar-expand-lg navbar-blue blue">
<div class="container">
    <a class="navbar-brand" href="admin">
        <strong>
            <b><i style="    font-family: 'Anton', sans-serif; font-size: 2.5vw;">Admin</i></b>
        </strong> 
   </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
        <i class="fa fa-bars" style="color:#fff; font-size:28px;"></i>
        </span>
    </button>   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Right -->
        <ul class="nav navbar-nav  ml-auto"> 
        
            <li class="nav-item">
            <a class="nav-link" href="admin">Dashboard</a>
            </li>
            <li class="nav-item"> <!-- active -->
                <a class="nav-link" href="?page=vragen"> Vragen </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=users">Users</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?logout" style="color: red;"><b>Logout</b></a>
        </li>
        </ul>
    </div>
    </div>
    </nav>
  </header>
EOF;