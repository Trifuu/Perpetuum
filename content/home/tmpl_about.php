<?php
/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */

defined("autorizare") or die("Nu aveti autorizare");
?>


<div class="container-fluid row" style="margin-top: 10px;text-align: center;">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <img src="<?php echo _SITE_CSS . "img/Perpetuum.png"; ?>" style="max-width: 440px;max-height: 230px;margin: auto;margin-top: -20px;">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="font-size:48px;font-family: font1;">
        <span style="position:absolute;margin-left: 108px;margin-top:-56px;">22</span>
        <span style="position:absolute;margin-left: 89px;margin-top:-8px;">April</span>
        <img src="<?php echo _SITE_CSS . "img/about_stanga.png"; ?>" style="max-width: 350px;max-height: 200px;margin: auto;margin-top: -58px;">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="font-size:48px;font-family: font1;">
        <a target="_blank" style="text-decoration: none;color:white;" href="https://www.google.ro/maps/place/Biblioteca+Central%C4%83/@44.441065,26.0492465,17z/data=!3m1!4b1!4m5!3m4!1s0x40b201c1c2998f79:0x1acb42f08800db7a!8m2!3d44.441065!4d26.0514352?shorturl=1">
            <span style="position:absolute;margin-left: 174px;margin-top:-56px;">UPB</span>
            <span style="position:absolute;margin-left: 148px;margin-top:-10px;">Library</span>
            <img src="<?php echo _SITE_CSS . "img/about_dreapta.png"; ?>" style="max-width: 318px;max-height: 200px;margin: auto;margin-top: -43px;">
        </a>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 view_numar1" style="font-family:font1;">
        <div class="scris_about2">
            <p class="numere_about" id="participanti">0</p> <br>
            <p class="scris_about_numere">
                <?php echo $limba == "en" ? "Participants" : "Participanți"; ?> 
            </p>
        </div>

        <div class="scris_about2">
            <p class="numere_about" id="ore">0</p> <br>
            <p class="scris_about_numere">
                <?php echo $limba == "en" ? "Hours" : "Ore"; ?>    
            </p>
        </div>

        <div class="scris_about2">
            <p class="numere_about" id="echipe">0</p> <br>
            <p class="scris_about_numere">
                <?php echo $limba == "en" ? "Teams" : "Echipe"; ?> 
            </p>
        </div>

        <div class="scris_about2">
            <p class="numere_about" id="castigatori">0</p> <br>
            <p class="scris_about_numere">
                <?php echo $limba == "en" ? "Winners" : "Câștigători"; ?>    
            </p>
        </div>
    </div>

    <div class="col-lg-1"></div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="margin-top:130px;">
        <img id="img1" src="<?php echo _SITE_CSS . "img/about_perpetuum.jpg"; ?>" style="max-width: 440px;max-height: 230px;margin: auto;">
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="text-align: left;margin: 30px;">
        <img src="<?php echo _SITE_CSS . "img/home_becuri.png"; ?>" style="max-width: 100%;max-height: 170px;margin: auto;margin-top: -20px;">
        <p style="margin-top: 10px; font-size: 20px">
            <?php
            if ($limba == "en") {
                echo "The engineering contest Perpetuum represents a challenge for
                students from University Politehnica of Bucharest in which they have 
                to make a chain-reaction mechanism and to use an Arduino board and 
                other resources that each team receives at the beginning of the 
                competition.";
            } else {
                echo "Concursul de Inginerie Perpetuum reprezintă o provocare adresată
                studenților din Universitatea Politehnica București, predominant celor 
                din Facultatea de Automatică și Calculatoare, ce constă în realizarea 
                unui mecanism de reacție în lanț care  trebuie să încorporeze o plăcuță 
                Arduino, alături de alte resurse materiale primite la începutul 
                competiției de către fiecare echipă.";
            }
            ?>
        </p>
    </div>
    <div class="col-lg-1"></div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="text-align: left;margin: 10px;margin-top:50px;">
        <img src="<?php echo _SITE_CSS . "img/home_becuri.png"; ?>" style="max-width: 100%;max-height: 170px;margin: auto;margin-top: -20px;">
        <p style="margin-top: 10px; font-size: 20px">
            <?php
            if ($limba == "en") {
                echo "The first edition of the Perpetuum - Think Fast, make it last, 
                took place in the hallway of the Faculty of Automation Control and 
                Computer Science and gathered 7 teams of 4 or 5 students who fought 
                for the prizes that could be won. The theme of last year's edition 
                was \"a wiping mouth device\", a theme according to the date of the event, 
                April 1st, which tested the limits of the imagination of the 
                participants.";
            } else {
                echo "Prima ediție a concursului de inginerie Perpetuum - Think fast, 
                make it last s-a desfășurat în holul Facultății de Automatică și 
                Calculatoare și a adunat 7 echipe a câte 4 sau 5 studenți care s-au 
                luptat pentru premiile puse la bătaie. Tema ediției de anul trecut a 
                fost: „un dispozitiv care te șterge la gură”, o temă în concordanță cu 
                data evenimentului, 1 aprilie și care a testat limitele imaginației 
                participanților.";
            }
            ?>
        </p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="margin-top:160px;">
        <img id="img2" src="<?php echo _SITE_CSS . "img/editia_2017.jpg"; ?>" style="max-width: 440px;max-height: 230px;margin: auto;">
    </div>
    <div class="col-lg-1"></div>


    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="height:150px;"></div>

    <!--    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin: 50px;text-align: center;font-size: 38px;color: white;">
    <?php // echo $limba=="en"? "THE ORGANIZING TEAM":"ECHIPA DE ORGANIZARE"; ?>
        </div>-->

    <?php // for ($i = 0; $i < 8; $i++) { ?>
<!--        <div class="col-xs-6 col-sm-6<?php // echo ($i==0 ||$i==1)? "col-md-6 col-lg-6":"col-md-4 col-lg-4";   ?> " style="margin-top:30px; margin-bottom: 50px">
            <div style="margin: auto;width: 355px;height: 150px;padding: 15px; display: inline-block;" class="card organizatori_casute">
                <img src="<?php // echo _SITE_CSS . "img/".$organizatori["poza"][$i];   ?>" style="float:left;width: 120px;height: 120px;margin: auto;">
                <div style="text-align:left;margin-left: 125px;">
                    <p style="margin-bottom:0px;margin-top:10px;color:black;font-size: 20px;"><?php echo $organizatori["nume"][$i]; ?></p>
                    <p style="margin-bottom:0px;margin-top:15px;color:#37C4EC;font-size: 18px;"><?php echo $organizatori["departament"][$i]; ?></p>
                </div>
            </div>
        </div>-->
    <?php // } ?>
</div>
