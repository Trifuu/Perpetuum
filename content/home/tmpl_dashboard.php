<?php
/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */

defined("autorizare") or die("Nu aveti autorizare");
?>

<div class="row" style="text-align: center;">

    
    <div class="col-md-3 col-lg-3" style="margin-top:80px;">
        <img src="<?php echo _SITE_CSS . "img/home_stanga.png"; ?>" style="max-width: 440px;max-height: 230px;margin: auto;">
        <img src="<?php echo _SITE_CSS . "img/home_stanga2.png"; ?>" style="max-width: 150px;max-height: 230px;position: absolute;margin-top: 150px;margin-left: -90px;">
    </div>
    <div class="col-lg-1"></div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4" id="componente_mijloc" style="font-family: font1;">
        <img src="<?php echo _SITE_CSS . "img/Perpetuum.png"; ?>" style="max-width: 440px;max-height: 230px;margin: auto;margin-top: -20px;">
        <div style="font-size: 25px;margin-top:-65px;" class="timer">
            <?php echo $limba == "en" ? "Registration ends in:" : "Înregistrarea se termină în:"; //echo $limba=="en"? "Competition starts in:":"Competiția începe în:";?>
        </div>
        <div id="timer" class="timer" style="margin-bottom: -30px;">
            <span id="days"></span><span>:</span><span id="hours"></span><span>:</span><span id="minut"></span><span>:</span><span id="second"></span>
        </div>
    </div>
    <div class="col-lg-1"></div>
    <div class="col-md-3 col-lg-3" style="margin-top:80px;">
        <img src="<?php echo _SITE_CSS . "img/home_dreapta.png"; ?>" style="max-width: 440px;max-height: 214px;margin: auto;margin-top: 10px;">
        <img src="<?php echo _SITE_CSS . "img/home_dreapta2.png"; ?>" style="max-width: 150px;max-height: 230px;position: absolute;margin-top: 160px;margin-left: -250px;">
    </div>
    <div class="col-lg-1"></div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top:30px;">
        <img src="<?php echo _SITE_CSS . "img/moto1.png"; ?>" style="max-width: 240px;max-height: 230px;margin: auto;position: absolute;margin-top:80px;margin-left: -310px;">
        <img src="<?php echo _SITE_CSS . "img/moto2.png"; ?>" style="max-width: 240px;max-height: 230px;margin: auto;position: absolute;margin-left: -155px;">
        <img src="<?php echo _SITE_CSS . "img/moto3.png"; ?>" style="max-width: 240px;max-height: 230px;margin: auto;position: absolute;margin-top:80px;margin-right: -250px;">
    </div>
</div>