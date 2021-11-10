<?php

namespace model;
use PDO;
include_once ('model/Questions.php');
include_once ('model/Medicijn.php');

class Model
{
    private $database;

    private function makeConnection(){
        try {
            $this->database = new \PDO('mysql:host=localhost;dbname=stage', "root", "");
        }

        catch(PDOException $e) {        
            echo "[-] Cant connect to MySQL Database! " + $e->getMessage(); 

        }
    }


    
public function checkLogin($email, $password)
{

    $this->makeConnection();

    try {
        
        $sql = "SELECT * FROM users WHERE Email=:Email LIMIT 1";

        $query = $this->database->prepare($sql);

        $query->bindParam(":Email", $email);

        $query->execute();

        $returned_row = $query->fetch(PDO::FETCH_ASSOC);

        if ($query->rowCount() > 0) {
            if (password_verify($password, $returned_row['WachtWoord'])) {

                // maak een systeem om te defineren of een gebruiker de quiz heeft gemaakt && verwijs door naar potentiele dates!
                if($returned_row['ROLE'] === "USER") {
                    $_SESSION['email'] = $returned_row['Email'];
                    $_SESSION['quiz'] = $returned_row['quiz'];
                    $_SESSION['ROLE'] = $returned_row['ROLE'];

                    header("Location: /dashboard");
                
                }
                
                elseif($returned_row['ROLE'] === "ADMIN") {
                    $_SESSION['email'] = $returned_row['Email'];
                    $_SESSION['ROLE'] = $returned_row['ROLE'];

                    header("Location: /admin");

            } else {
                return "Verkeerde wachtwoord!";
            }
        } else {
            return "Geen account gevonden met deze gebruikersnaam!";
        }
    } 
}

catch (PDOException $e) {
    return $e->getMessage();
}
}



    public function registerUser($VoorNaam, $AchterNaam, $WachtWoord, $WachtWoord1, $gender, $email, $TelefoonNummer, $alias, $nationality, $ip) {
        $this->makeConnection();

        if(empty($VoorNaam)) {
            $errorMsg[] = "Voer voornaam in";
        }

        elseif(empty($AchterNaam)) {
            $errorMsg[] = "Voer achternaam in";
        }

        if(ctype_space($email)) {
            $errorMsg[] = "Geen spaties in email!";
        }

        elseif(empty($WachtWoord)) {
            $errorMsg[] = "Voer een wachtwoord in";
        }

        elseif(empty($WachtWoord1)) {
            $errorMsg[] = "Voer ter controle wachtwoord opnieuw in";
        }

        elseif($WachtWoord !== $WachtWoord1) {
            $errorMsg[] = "Wachtwoorden komen niet overeen";
        }

        elseif(strlen($WachtWoord) <= 4) {
            $errorMsg[] = "Wachtwoorden moet over de 4 karakters zijn";
        }

        elseif(empty($email)) {
            $errorMsg[] = "Voer email in";
        }


        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorMsg[] = "Email is ongeldig";
        }

        elseif(empty($TelefoonNummer)) {
            $errorMsg[] = "Voer een telefoonnummer in";
        } else {
            try {

                $select_stmt = $this->database->prepare('SELECT `Email`, `TelefoonNummer` FROM `users` WHERE Email=:Email OR TelefoonNummer=:TelefoonNummer');

                $select_stmt->execute(array(':Email' => $email,
                                            ':TelefoonNummer' => $TelefoonNummer));

                $row = $select_stmt->fetch(PDO::FETCH_ASSOC);



                if($row["Email"] == @$email) {
                    $errorMsg[] = "Deze email heeft al een account gekoppeld";
                }


                if($row["TelefoonNummer"] === @$TelefoonNummer) {
                    $errorMsg[] = "Deze telefoonnummer heeft al een account gekoppeld";

                }


                // Als er geen error message is geset run de volgende code:
                elseif(!isset($errorMsg)) {

                    $new_password = password_hash($WachtWoord, PASSWORD_DEFAULT);

                    $insert_stmt = $query = $this->database->prepare ("INSERT INTO `users` 
                        (`id`, `VoorNaam`, `AchterNaam`, `WachtWoord`, `Gender`, `Email`, `TelefoonNummer`, `Alias`, `NationaliTeit`, `ROLE`, `IpAddress`, `quiz`) 
                        VALUES (NULL, :VoorNaam, :AchterNaam, :WachtWoord, :Gender, :Email, :TelefoonNummer, :Alias, :NationaliTeit, :ROLE, :IpAddress, :quiz)");

                    if($insert_stmt->execute(array(
                        ":VoorNaam" => $VoorNaam,
                        ":AchterNaam" => $AchterNaam,
                        ":WachtWoord" => $new_password,
                        ":Gender" => $gender,
                        ":Email" => $email,
                        ":TelefoonNummer" => $TelefoonNummer,
                        ":Alias" => $alias,
                        ":NationaliTeit" => $nationality,
                        ":ROLE" => "USER",
                        ":IpAddress" =>  $ip,
                        ":quiz" =>  0,
                    )));

                        $registerMsg = "Gefeliciteerd je registratie is succesvol afgerond, je word doorverwezen!";
                
                }
            }
        

        catch(PDOExceptioon $e)
        {
            return $e->getMessage();
        }
        }  

    
        // Als er problemen ondervonden worden, stuur deze door naar de controller en echo ze daar!
        if(@$errorMsg) {
            return $errorMsg;
        } else {
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Succesvol geregistreerd, uw kunt aanmelden!');
            window.location.href='../';
            </script>");

        }
      }     


    public function insertPatient($naam,$adres,$woonplaats,$geboortedatum,$zknummer,$soortverzekering){
        $this->makeConnection();
        if($naam !='')
        {
            $query = $this->database->prepare (
                "INSERT INTO `patienten` (`id`, `naam`, `adres`, `woonplaats`, `zknummer`, `geboortedatum`, `soortverzekering`) 
                VALUES (NULL, :naam, :adres, :woonplaats, :zknummer, :geboortedatum, :soortverzekering)");
            $query->bindParam(":naam", $naam);
            $query->bindParam(":adres", $adres);
            $query->bindParam(":woonplaats",$woonplaats);
            $query->bindParam(":zknummer", $zknummer);
            $query->bindParam(":geboortedatum", $geboortedatum);
            $query->bindParam(":soortverzekering",$soortverzekering);
            $result = $query->execute();
            return $result;
        }
        return -1;
        // id hoeft niet te worden toegevoegd omdat de id in de databse op autoincrement staat.


    }
    public function updatePatient($id,$naam,$adres,$woonplaats,$geboortedatum,$zknummer,$soortverzekering){
        $this->makeConnection();

        // id moet worden toegevoegd omdat de id in de databse wordt gezocht
        $query = $this->database->prepare (
            "UPDATE `patienten` SET `naam` = :naam, `adres`=:adres, `woonplaats` = :woonplaats,
            `zknummer`=:zknummer, `geboortedatum`=:geboortedatum, `soortverzekering`=:soortverzekering 
            WHERE `patienten`.`id` = :id ");
        $query->bindParam(":id", $id);
        $query->bindParam(":naam", $naam);
        $query->bindParam(":adres", $adres);
        $query->bindParam(":woonplaats",$woonplaats);
        $query->bindParam(":zknummer", $zknummer);
        $query->bindParam(":geboortedatum", $geboortedatum);
        $query->bindParam(":soortverzekering",$soortverzekering);
        $result = $query->execute();
        return $result;
    }

    public function getQuestions(){

        $this->makeConnection();
        $selection = $this->database->query('SELECT * FROM `emotionele_vragen`');
        if($selection){
            $result = $selection->fetchAll(\PDO::FETCH_CLASS,\Model\Questions::class);
            return $result;
        }
        return null;
    }


    public function getMedicijnen() { 
        $this->makeConnection();
        $selection = $this->database->query('SELECT * FROM `medicijnen`');
        if($selection){
            $result=$selection->fetchAll(\PDO::FETCH_CLASS,\model\Medicijn::class);
            return $result;
        }
        return $result;
        
    }

    public function selectPatient($id){

        $this->makeConnection();
        $selection = $this->database->prepare(
            'SELECT * FROM `patienten` 
            WHERE `patienten`.`id` =:id');
        $selection->bindParam(":id",$id);
        $result = $selection ->execute();
        if($result){
            $selection->setFetchMode(\PDO::FETCH_CLASS, \model\Patient::class);
            $patient = $selection->fetch();
            return $patient;
        }
        return null;
    }
    public function deletePatient($id){
        $this->makeConnection();
        $selection = $this->database->prepare(
            'DELETE FROM `patienten` 
            WHERE `patienten`.`id` =:id');
        $selection->bindParam(":id",$id);
        $result = $selection ->execute();
        return $result;
    }

}