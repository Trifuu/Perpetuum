<?php
/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */


defined("autorizare") or die("Nu aveti autorizare");
?>
<div class="container-fluid row" style="margin-top: 60px; margin-bottom: 20px; text-align: center;">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 40px;">
        <h1>CONTACT</h1>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div id="casuta_contact_persoana" class="card" style="display:inline-block;height: 155px;padding: 15px">
            <img src="<?php echo _SITE_CSS . "img/Grajdeanu_Adrian.jpg"; ?>" style="width: 100px;height: 100px;float: left;">
            <div style="text-align:left;margin-left: 0px;float: right">
                <p style="margin-bottom:0px;margin-top:15px;font-size: 25px;">Grăjdeanu Adrian</p>
                <p style="margin-bottom:0px;margin-top:10px;font-size: 15px;">Project Manager</p>
                <p id="email_about" style="margin-bottom:0px;margin-top:5px;font-size: 12px;">adrian.grajdeanu@lsacbucuresti.ro</p>
                <p style="margin-bottom:0px;margin-top:0px;font-size: 12px;">+40 747 673 635</p>
            </div>
        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8" style="margin: 0 auto;">
        <div class="card">
            <div id="email_contact" style="text-align: left;"><i class="fa fa-envelope-o fa-2x"></i> <span style="font-size: 30px;"> contact @ lsacbucuresti.ro</span></div>
            <form action="javascript:void(0);" id="contact_form">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                    <label for="nume" class="mdl-textfield__label" style="color:#37C4EC;"><?php echo $limba == "en" ? "Name" : "Nume"; ?><span class="obligatoriu">*</span></label>
                    <input style="color:black" type="text" name="nume" id="nume" class="mdl-textfield__input" >
                    <div class="mdl-tooltip" data-mdl-for="nume" style="font-size:14px;"><?php echo $limba == "en" ? "Complet name" : "Numele complet"; ?></div>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                    <label for="email" class="mdl-textfield__label" style="color:#37C4EC;"><?php echo $limba == "en" ? "Email" : "Email"; ?><span class="obligatoriu">*</span></label>
                    <input style="color:black" type="email" name="email" id="email" class="mdl-textfield__input" >
                    <div class="mdl-tooltip" data-mdl-for="email" style="font-size:14px;"><?php echo $limba == "en" ? "Your Email adress" : "Email-ul dumneavoastra"; ?></div>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                    <label for="comentariu" class="mdl-textfield__label" style="color:#37C4EC;"><?php echo $limba == "en" ? "Mesaj" : "Mesaj"; ?><span class="obligatoriu">*</span></label>
                    <textarea class="mdl-textfield__input" name="comentariu" id="comentariu" rows="3"></textarea>
                    <div class="mdl-tooltip" data-mdl-for="comentariu" style="font-size:14px;"><?php echo $limba == "en" ? "Enter your questions" : "Scrieti intrebarile"; ?></div>
                </div>
                <button id="submit_contact" style="background: #00b4e5" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"><?php echo $limba == "en" ? "Send" : "Trimite"; ?></button>
            </form>
        </div>
    </div>
</div>

