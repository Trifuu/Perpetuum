<?php

/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */



defined("autorizare") or die("Nu aveti autorizare");


$js[] = "app/home/partners.js";

$title_app_title = "Partners";


$parteneri=["","","","",
            "","","","",
            "","","","",
            "","","","",
            "","","","",
            "","","","",
            "","","","",
            ];
$sponsor_principal="NXP.png";

$parteneri=["pizza_hut.png","robo.png","escape.png","first_copy.png"];

$parteneri_media=["iqads.png","romania_pozitiva.png","scoala_de_valori.jpg",
                  "softlead.png","rosedu.png","codette.png","complex_regie.png",
                  "evo_it.png","girls_in_tech.png","girls_who_code.png",
                  "restart.png","agore.png"];

$content = _ROOT_CONTENT . $page . "/tmpl_partners.php";