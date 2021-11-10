<?php


echo <<<EOF
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> ZiZho - Login </title> 
<link rel="stylesheet" href="../css/registerStyle.css">
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/headerStyle.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/mdb.min.css">
<link rel="stylesheet" href="../css/headerStyle.css">
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/mdb.min.js"></script>
<script src="https://kit.fontawesome.com/c60bb5196a.js" crossorigin="anonymous"></script>




</head>

<body style="background-color: #f8f9fa;">
<form method="POST">
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://freeiconshop.com/wp-content/uploads/edd/heart-outline-filled.png" alt=""/>
                        <h3 id="Heading-Text">ZiZho</h3>
                        <p style="font-style: italic;"> "The quiz that wil connecting your interests and feelings!" </p>
                        <a href="register">
                        <input type="button" name="" value="Register"/><br/>
                        </a> 
                        </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified">
                        <!--   
                        <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
                            </li>
                        --!>
                        </ul>
                        <div class="tab-content" id="myTabContent">


                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <h3 class="register-heading"> Welcome on ZiZho </h3>
                        
                                <div class="row register-form">
                                
                                    <div class="col-md-12 profile_card">
                                    
                                    <form class="form-inline">
                                    
                                    <div class="form-group input-wrapper">
                                        <input type="email" class="form-control" placeholder="Email" value="" id="password" name="email" required/>
                                      </div>
                                    
                                      <div class="form-group input-wrapper">
                                        <input type="password" class="form-control" placeholder="Password *" value="" name="password" id="password" required/>
                                      </div>
                                      <input type="submit" class="btnRegister" value="Login" name="LoginSubmit" id="password" />
                                    </div>

                                    </form>
                                  </div>
                          </div>
                      </div>
            </div>
            </form>
            </body>
</html>

EOF;

?>