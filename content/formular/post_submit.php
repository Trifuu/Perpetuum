<?php

/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */
$content = "";
if (!isset($_POST["cv"]) ||
        !isset($_POST["nume1"]) || !isset($_POST["prenume1"]) || !isset($_POST["email1"]) || !isset($_POST["telefon1"]) ||
        !isset($_POST["nume2"]) || !isset($_POST["prenume2"]) || !isset($_POST["email2"]) || !isset($_POST["telefon2"]) ||
        !isset($_POST["nume3"]) || !isset($_POST["prenume3"]) || !isset($_POST["email3"]) || !isset($_POST["telefon3"]) ||
        !isset($_POST["nume4"]) || !isset($_POST["prenume4"]) || !isset($_POST["email4"]) || !isset($_POST["telefon4"])
){
    $_SESSION["message_register"]="Parametri post incorecti!";
    $_SESSION["status"]="nok";
    redirect(getUrl("formular", "dashboard", false));
}elseif (strlen($_POST["cv"]) == 0 ||
        strlen($_POST["nume1"]) == 0 || strlen($_POST["prenume1"]) == 0 || strlen($_POST["email1"]) == 0 || strlen($_POST["telefon1"]) == 0 ||
        strlen($_POST["nume2"]) == 0 || strlen($_POST["prenume2"]) == 0 || strlen($_POST["email2"]) == 0 || strlen($_POST["telefon2"]) == 0 ||
        strlen($_POST["nume3"]) == 0 || strlen($_POST["prenume3"]) == 0 || strlen($_POST["email3"]) == 0 || strlen($_POST["telefon3"]) == 0
) {
    $_SESSION["message_register"]="Nu ai completat toate campurile obligatorii!";
    $_SESSION["status"]="nok";
    redirect(getUrl("formular", "dashboard", false));
} elseif (strlen($_POST["nume_echipa"]) < 3) {
    $_SESSION["message_register"]="Numele echipei trebuie sa aiba minim 3 caractere!";
    $_SESSION["status"]="nok";
    redirect(getUrl("formular", "dashboard", false));
} elseif (!filter_var($_POST["cv"], FILTER_VALIDATE_URL)) {
    $_SESSION["message_register"]="Nu ati introdus un link valid pentru CV.!";
    $_SESSION["status"]="nok";
    redirect(getUrl("formular", "dashboard", false));
} else {
    $echipa = htmlspecialchars($_POST["nume_echipa"], ENT_QUOTES);
    $nume1 = htmlspecialchars($_POST["nume1"], ENT_QUOTES);
    $prenume1 = htmlspecialchars($_POST["prenume1"], ENT_QUOTES);
    $email1 = htmlspecialchars($_POST["email1"], ENT_QUOTES);
    $telefon1 = htmlspecialchars($_POST["telefon1"], ENT_QUOTES);
    $nume2 = htmlspecialchars($_POST["nume2"], ENT_QUOTES);
    $prenume2 = htmlspecialchars($_POST["prenume2"], ENT_QUOTES);
    $email2 = htmlspecialchars($_POST["email2"], ENT_QUOTES);
    $telefon2 = htmlspecialchars($_POST["telefon2"], ENT_QUOTES);
    $nume3 = htmlspecialchars($_POST["nume3"], ENT_QUOTES);
    $prenume3 = htmlspecialchars($_POST["prenume3"], ENT_QUOTES);
    $email3 = htmlspecialchars($_POST["email3"], ENT_QUOTES);
    $telefon3 = htmlspecialchars($_POST["telefon3"], ENT_QUOTES);
    $nume4 = isset($_POST["nume4"])? htmlspecialchars($_POST["nume4"], ENT_QUOTES):"";
    $prenume4 = isset($_POST["prenume4"])? htmlspecialchars($_POST["prenume4"], ENT_QUOTES):"";
    $email4 = isset($_POST["email4"])? htmlspecialchars($_POST["email4"], ENT_QUOTES):"";
    $telefon4 = isset($_POST["telefon4"])? htmlspecialchars($_POST["telefon4"], ENT_QUOTES):"";
    $link_cv = htmlspecialchars($_POST["cv"], ENT_QUOTES);
    $comentariu = isset($_POST["comentariu"]) ? htmlspecialchars($_POST["comentariu"], ENT_QUOTES) : "";
    
    $raspuns_email=verify_echipa_email($email1,$email2,$email3,$email4);
    
    $raspuns_telefon=  verify_echipa_telefon($telefon1, $telefon2, $telefon3,$telefon4);
    
    if($raspuns_email!=false) {
        $_SESSION["message_register"]="Email-ul ".$raspuns_email." a mai fost folosit, va rugam sa introduceti altul.";
        $_SESSION["status"]="nok";
        redirect(getUrl("formular", "dashboard", false));
    }elseif($raspuns_telefon!=false){
        $_SESSION["message_register"]="Numarul de telefon ".$raspuns_telefon." a mai fost folosit, va rugam sa introduceti altul.";
        $_SESSION["status"]="nok";
        redirect(getUrl("formular", "dashboard", false));
    }else {
        add_participanti($echipa, $nume1, $prenume1, $email1, $telefon1, $nume2, $prenume2, $email2, $telefon2, $nume3, $prenume3, $email3, $telefon3, $nume4, $prenume4, $email4, $telefon4, $link_cv, $comentariu);
        $_SESSION["message_register"]="V-ati inscris cu succes.";
        $_SESSION["status"]="ok";
        redirect(getUrl("formular", "dashboard", false));
    }
}