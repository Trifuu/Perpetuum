<?php

/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */



defined("autorizare") or die("Nu aveti autorizare");


$js[] = "app/home/about.js";

$title_app_title = "About";

$organizatori["nume"]=["","",
    "","Trifu Marius-Constantin","",
    "","",""];
$organizatori["departament"]=["Project Manager","Manager Public Relations",
    "Manager Fund Raising","Manager IT","Manager Logistica",
    "Manager Human Resources","Manager Design","Manager Multimedia"];
$organizatori["poza"]=["","",
    "","Trifu_Marius.jpg","",
    "","",""];

$content = _ROOT_CONTENT . $page . "/tmpl_about.php";