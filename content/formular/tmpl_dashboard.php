<?php
/*
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */

defined("autorizare") or die("Nu aveti autorizare");
?>

<main class = "mdl-layout__content" style="padding:15px">       
    <?php
    if (isset($_SESSION["message_register"])) {
        if (isset($_SESSION["status"]) && $_SESSION["status"] == "ok") {
            ?>
            <div class="alert alert-success">
                <a href="<?php getUrl("$page", "$view", true); ?>" class="close">&times;
                </a>
                <strong><i class="fa fa-check-circle"></i></strong> <?php echo $_SESSION["message_register"]; ?>
            </div>
            <?php
        } else if (isset($_SESSION["status"]) && $_SESSION["status"] == "nok") {
            ?>
            <div class="alert alert-danger">
                <a href="<?php getUrl("$page", "$view", true); ?>" class="close">&times;
                </a>
                <strong><i class="fa fa-exclamation-circle"></i></strong> <?php echo $_SESSION["message_register"] ?>
            </div>
            <?php
        }
        $_SESSION["message_register"] = null;
        $_SESSION["status"] = null;
        unset($_SESSION["message_register"]);
        unset($_SESSION["status"]);
    }
    ?>
    <button id="go_back" class="back_home back_style" title="Go home">Home</button>
    <form action="<?php getUrl("formular", "post_submit", true); ?>" method="post" id="validate_formular">

        <div class="card">
            <h4 style="text-align:center;">
                <?php echo $limba == "en" ? "TEAM REGISTRATION" : "ÎNSCRIEREA ECHIPEI"; ?>	
            </h4>
            <div class = "mdl-grid" style="margin-top:-10px;">
                <div class="mdl-cell mdl-cell--2-col"></div>
                <div class="mdl-cell mdl-cell--8-col">
                    <div style="width:100%; text-align: center" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                        <label for="nume_echipa" class="mdl-textfield__label"><?php echo $limba == "en" ? "Team Name" : "Nume echipă"; ?><span class="obligatoriu">*</span></label>
                        <input style="color:black; font-size: 60px" type="text" name="nume_echipa" id="nume_echipa" class="mdl-textfield__input">
                        <div class="mdl-tooltip" data-mdl-for="nume_echipa" style="font-size:14px;"><?php echo $limba == "en" ? "Team Name (minimum 3 characters)" : "Numele echipei (minim 3 caractere)"; ?></div>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--2-col"></div>
            </div>
            <div class = "mdl-grid" style="margin-top:-30px;">
                <div id="member1" class="mdl-cell mdl-cell--6-col">
                    <h4 style=""><?php echo $limba == "en" ? "TEAM CAPTAIN" : "CĂPITANUL ECHIPEI"; ?></h4>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                        <label for="nume1" class="mdl-textfield__label"><?php echo $limba == "en" ? "Last Name" : "Nume"; ?><span class="obligatoriu">*</span></label>
                        <input type="text" name="nume1" id="nume1" class="mdl-textfield__input">
                        <div class="mdl-tooltip" data-mdl-for="nume1" style="font-size:14px;"><?php echo $limba == "en" ? "Last Name" : "Nume"; ?></div>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                        <label for="prenume1" class="mdl-textfield__label"><?php echo $limba == "en" ? "First Name" : "Prenume"; ?><span class="obligatoriu">*</span></label>
                        <input type="text" name="prenume1" id="prenume1" class="mdl-textfield__input">
                        <div class="mdl-tooltip" data-mdl-for="prenume1" style="font-size:14px;"><?php echo $limba == "en" ? "First Name" : "Prenume"; ?></div>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                        <label for="email1" class="mdl-textfield__label"><?php echo $limba == "en" ? "Email" : "Email"; ?><span class="obligatoriu">*</span></label>
                        <input type="email" name="email1" id="email1" class="mdl-textfield__input">
                        <div class="mdl-tooltip" data-mdl-for="email1" style="font-size:14px;"><?php echo $limba == "en" ? "Email" : "Email"; ?></div>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                        <label for="telefon1" class="mdl-textfield__label"><?php echo $limba == "en" ? "Phone" : "Telefon"; ?><span class="obligatoriu">*</span></label>
                        <input type="tel" name="telefon1" id="telefon1" class="mdl-textfield__input">
                        <div class="mdl-tooltip" data-mdl-for="telefon1" style="font-size:14px;"><?php echo $limba == "en" ? "Phone" : "Telefon"; ?></div>
                    </div>
                </div>
                <div id="member2" class="mdl-cell mdl-cell--6-col">
                    <h4 style=""><?php echo $limba == "en" ? "MEMBER 2" : "MEMBRU 2"; ?></h4>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                        <label for="nume2" class="mdl-textfield__label"><?php echo $limba == "en" ? "Last Name" : "Nume"; ?><span class="obligatoriu">*</span></label>
                        <input type="text" name="nume2" id="nume2" class="mdl-textfield__input">
                        <div class="mdl-tooltip" data-mdl-for="nume2" style="font-size:14px;"><?php echo $limba == "en" ? "Last Name" : "Nume"; ?></div>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                        <label for="prenume2" class="mdl-textfield__label"><?php echo $limba == "en" ? "First Name" : "Prenume"; ?><span class="obligatoriu">*</span></label>
                        <input type="text" name="prenume2" id="prenume2" class="mdl-textfield__input">
                        <div class="mdl-tooltip" data-mdl-for="prenume2" style="font-size:14px;"><?php echo $limba == "en" ? "First Name" : "Prenume"; ?></div>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                        <label for="email2" class="mdl-textfield__label"><?php echo $limba == "en" ? "Email" : "Email"; ?><span class="obligatoriu">*</span></label>
                        <input type="email" name="email2" id="email2" class="mdl-textfield__input">
                        <div class="mdl-tooltip" data-mdl-for="email2" style="font-size:14px;"><?php echo $limba == "en" ? "Email" : "Email"; ?></div>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                        <label for="telefon2" class="mdl-textfield__label"><?php echo $limba == "en" ? "Phone" : "Telefon"; ?><span class="obligatoriu">*</span></label>
                        <input type="tel" name="telefon2" id="telefon2" class="mdl-textfield__input">
                        <div class="mdl-tooltip" data-mdl-for="telefon2" style="font-size:14px;"><?php echo $limba == "en" ? "Phone" : "Telefon"; ?></div>
                    </div>
                </div>
                <div id="member3" class="mdl-cell mdl-cell--6-col">
                    <h4 style=""><?php echo $limba == "en" ? "MEMBER 3" : "MEMBRU 3"; ?></h4>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                        <label for="nume3" class="mdl-textfield__label"><?php echo $limba == "en" ? "Last Name" : "Nume"; ?><span class="obligatoriu">*</span></label>
                        <input type="text" name="nume3" id="nume3" class="mdl-textfield__input">
                        <div class="mdl-tooltip" data-mdl-for="nume3" style="font-size:14px;"><?php echo $limba == "en" ? "Last Name" : "Nume"; ?></div>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                        <label for="prenume3" class="mdl-textfield__label"><?php echo $limba == "en" ? "First Name" : "Prenume"; ?><span class="obligatoriu">*</span></label>
                        <input type="text" name="prenume3" id="prenume3" class="mdl-textfield__input">
                        <div class="mdl-tooltip" data-mdl-for="prenume3" style="font-size:14px;"><?php echo $limba == "en" ? "First Name" : "Prenume"; ?></div>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                        <label for="email3" class="mdl-textfield__label"><?php echo $limba == "en" ? "Email" : "Email"; ?><span class="obligatoriu">*</span></label>
                        <input type="email" name="email3" id="email3" class="mdl-textfield__input">
                        <div class="mdl-tooltip" data-mdl-for="email3" style="font-size:14px;"><?php echo $limba == "en" ? "Email" : "Email"; ?></div>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                        <label for="telefon3" class="mdl-textfield__label"><?php echo $limba == "en" ? "Phone" : "Telefon"; ?><span class="obligatoriu">*</span></label>
                        <input type="tel" name="telefon3" id="telefon3" class="mdl-textfield__input">
                        <div class="mdl-tooltip" data-mdl-for="telefon3" style="font-size:14px;"><?php echo $limba == "en" ? "Phone" : "Telefon"; ?></div>
                    </div>
                    <br>
                </div>
                <div id="member4" class="mdl-cell mdl-cell--6-col">
                    <h4 style=""><?php echo $limba == "en" ? "MEMBER 4(Optional)" : "MEMBRU 4(Optional)"; ?></h4>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                        <label for="nume4" class="mdl-textfield__label"><?php echo $limba == "en" ? "Last Name" : "Nume"; ?></label>
                        <input type="text" name="nume4" id="nume4" class="mdl-textfield__input">
                        <div class="mdl-tooltip" data-mdl-for="nume4" style="font-size:14px;"><?php echo $limba == "en" ? "Last Name" : "Nume"; ?></div>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                        <label for="prenume4" class="mdl-textfield__label"><?php echo $limba == "en" ? "First Name" : "Prenume"; ?></label>
                        <input type="text" name="prenume4" id="prenume4" class="mdl-textfield__input">
                        <div class="mdl-tooltip" data-mdl-for="prenume4" style="font-size:14px;"><?php echo $limba == "en" ? "First Name" : "Prenume"; ?></div>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                        <label for="email4" class="mdl-textfield__label"><?php echo $limba == "en" ? "Email" : "Email"; ?></label>
                        <input type="email" name="email4" id="email4" class="mdl-textfield__input">
                        <div class="mdl-tooltip" data-mdl-for="email4" style="font-size:14px;"><?php echo $limba == "en" ? "Email" : "Email"; ?></div>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                        <label for="telefon4" class="mdl-textfield__label"><?php echo $limba == "en" ? "Phone" : "Telefon"; ?></label>
                        <input type="tel" name="telefon4" id="telefon4" class="mdl-textfield__input">
                        <div class="mdl-tooltip" data-mdl-for="telefon4" style="font-size:14px;"><?php echo $limba == "en" ? "Phone" : "Telefon"; ?></div>
                    </div>
                    <br>
                </div>
            </div>
        </div>

        <div class="card" style="margin-top: 20px">
            <div class = "mdl-grid" style="width:100%;"> 
                <div class="mdl-cell mdl-cell--6-col">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular" style="width:100%;">
                        <label for="cv" class="mdl-textfield__label"><?php echo $limba == "en" ? "Link CV" : "Link CV"; ?><span class="obligatoriu">*</span></label>
                        <input type="url" name="cv" id="cv" class="mdl-textfield__input" placeholder="<?php echo $limba == "en" ? "Link with the CVs of each member" : "Introduceți un link către CV-urile echipei"; ?>">
                        <div class="mdl-tooltip" data-mdl-for="cv" style="font-size:14px;"><?php echo $limba == "en" ? "Enter a valid link that contain the CVs of each member (ex: Google Drive)" : "Introduceți un link valid care să conțină CV-urile fiecărui membru al echipei (ex: Google Drive)"; ?></div>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--6-col">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular" style="width:100%;">
                        <label for="comentariu" class="mdl-textfield__label"><?php echo $limba == "en" ? "Notifications" : "Observații"; ?></label>
                        <input type="text" name="comentariu" id="comentariu" class="mdl-textfield__input" placeholder="<?php echo $limba == "en" ? "Other questions?" : "Doriți să ne mai transmiteți ceva?"; ?>">
                        <div class="mdl-tooltip" data-mdl-for="comentariu" style="font-size:14px;"><?php echo $limba == "en" ? "Other problems or questions" : "Scrieți despre orice problemă sau nelămurire"; ?></div>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--12-col" style="text-align: center;">
                    <input id="regulament" type="checkbox" name="regulament" value="regulament">
                    <label for="regulament"><?php echo $limba == "en" ? "By register I accept the" : "Prin această înregistrare accept"; ?> <a target="_blank" href="<?php echo $limba == "en" ? _SITE_BASE . "Regulament_EN.pdf" : _SITE_BASE . "Regulament_RO.pdf"; ?>"><?php echo $limba == "en" ? "the competition rules" : "regulamentul concursului"; ?> </a>.<span class="obligatoriu">*</span></label>
                </div>
                <div class="mdl-cell mdl-cell--12-col" style="text-align: center;">
                    <input id="facultate" type="checkbox" name="facultate" value="facultate">
                    <label for="facultate"><?php echo $limba == "en" ? "The team members are from the Faculty of Automatic Control and Computer Science." : "Membri echipei sunt de la Facultatea de Automatică și Calculatoare."; ?><span class="obligatoriu">*</span></label>
                </div>
            </div>

            <button id="submit_formular" type="submit" class="btn btn-primary" style="width:200px;margin-bottom: 50px;align-self: center; font-size: 40px">Submit</button>
        </div>

    </form>

</main>