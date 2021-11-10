<?php
namespace controller;
include_once "view/View.php";
use view\View;
include_once "model/Questions.php";
use model\Model;

class Controller
{
    private $view;
    private $model;
    public function __construct(){
        $this->model = new Model();
        $this->view = new View($this->model);
    }

    public function getCurrentPage($page) {
        // We gebruiken een .htaccess file dat by default altijd index.php?p= pakt voor ons
        if(isset($_GET['p'])) {
            $parameter = $_GET['p'];
            // yes we think about security sir!
            $filtered = trim($parameter);
            $filtered = strip_tags($parameter);
            $filtered = htmlspecialchars($parameter);
            $filtered = htmlentities($parameter, ENT_QUOTES, "UTF-8");
            return $filtered;
        }
    }


function xss_clean($data){
    // Fix &entity\n;
    $data = str_replace(array('&amp;','&lt;','&gt;'), array('&amp;amp;','&amp;lt;','&amp;gt;'), $data);
    $data = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $data);
    $data = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $data);
    $data = html_entity_decode($data, ENT_COMPAT, 'UTF-8');

    // Remove any attribute starting with "on" or xmlns
    $data = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $data);

    // Remove javascript: and vbscript: protocols
    $data = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $data);
    $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $data);
    $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $data);

    // Only works in IE: <span style="width: expression(alert('Ping!'));"></span>
    $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
    $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
    $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $data);

    // Remove namespaced elements (we do not need them)
    $data = preg_replace('#</*\w+:\w[^>]*+>#i', '', $data);

    do
    {
        // Remove really unwanted tags
        $old_data = $data;
        $data = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $data);
    }
    while ($old_data !== $data);
// we are done...
return $data;
}


    public function showHeader(){
        $this->view->showHeader();
    }

    public function showAdminHeader() { 
        $this->view->showAdminHeader();
    }

    public function showDashBoard() {
        $this->view->showDashBoard();
    }

    public function showLogin() {
        $this->view->showLoginPage();
    }

    // public function showaddQuestions() {
    //     $this->view->addQuestions();
    // }


    public function show404(){
        $this->view->show404();
    }

    public function showPatienten() { 
        $this->view->showPatienten();
    }

    public function getMedicijnen() {
        $this->view->getMedicijnen();
        $this->model->getMedicijnen();
    }

    public function checkLogin($email, $password) {

                echo $this->model->checkLogin($email, $password);
    
    }

    // veelste veel arguments
    public function showRegister() {
        
        $this->view->showRegisterPage();


        if(@$_POST['RegisterSubmit']) {

            $VoorNaam = $this->xss_clean($_POST['Voornaam']);
            $AchterNaam = $this->xss_clean($_POST['Achternaam']);
            $WachtWoord = $this->xss_clean($_POST['Wachtwoord']);
            $WachtWoord1 = $this->xss_clean($_POST['Wachtwoord1']);
            $gender = $this->xss_clean($_POST['gender']);
            $email = $this->xss_clean($_POST['email']);
            $TelefoonNummer = $this->xss_clean($_POST['txtEmpPhone']);
            $alias = $this->xss_clean($_POST['Alias']);
            $nationality = $this->xss_clean($_POST['nationality']);
            $ip = $this->xss_clean($_SERVER['REMOTE_ADDR']);

            print_r($this->model->registerUser($VoorNaam, $AchterNaam, $WachtWoord, $WachtWoord1, $gender, $email, $TelefoonNummer, $alias, $nationality, $ip));
        }
    }


    public function checkSession() {
        @session_start();
        return isset($_SESSION['email']);   
    }



    public function CheckRole ($role) {
        if($role === "ADMIN"){
            return 'ADMIN';
        } elseif($role === "USER") {
            return 'USER';
        }
    }


    public function logoutUser() {
        @session_start();
        unset($_SESSION['email']);
        unset($_SESSION['quiz']);
        unset($_SESSION['ROLE']);
        session_destroy();
        header("Location: /");
    }


    public function showQuestions() {

        $questions = $this->model->getQuestions();

        // Loopt de data door in de view
        $this->view->displayQuestions($questions);

    
    }

    

 
    


}