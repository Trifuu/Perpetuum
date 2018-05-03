<?php

ob_start();
/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */

define("autorizare", 1);

chdir('../../');
define("_ROOT", getcwd() . "/");

include "includes/config.php";

if (!isset($_POST["id_echipa"]) && !isset($_POST["tricou1"]) && !isset($_POST["tricou2"]) &&
        !isset($_POST["tricou3"]) && !isset($_POST["tricou4"]) && !isset($_POST["vegetarieni"]) && !isset($_POST["vegani"]) && !isset($_POST["preferinte"]) && !isset($_POST["obseravtii"]) && !isset($_POST["mesaj"])) {
    die("post missing");
}
$id_echipa = $_POST["id_echipa"];
$tricou1 = $_POST["tricou1"];
$tricou2 = $_POST["tricou2"];
$tricou3 = $_POST["tricou3"];
$tricou4 = $_POST["tricou4"] == null ? "" : $_POST["tricou4"];
$vegetarieni = $_POST["vegetarieni"];
$vegani = $_POST["vegani"];
$preferinte = $_POST["preferinte"];
$observatii = $_POST["observatii"] == null ? "" : $_POST["observatii"];
$mesaj = $_POST["mesaj"];

if (get_detalii_echipa($id_echipa) == null) {
    insert_detalii($id_echipa, $tricou1, $tricou2, $tricou3, $tricou4, $vegetarieni, $vegani, $preferinte, $observatii, $mesaj);
} else {
    update_detalii_echipa($id_echipa, $tricou1, $tricou2, $tricou3, $tricou4, $vegetarieni, $vegani, $preferinte, $observatii, $mesaj);
}