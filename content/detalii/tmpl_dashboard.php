<?php
/*
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */

defined("autorizare") or die("Nu aveti autorizare");
?>

<div class="container-fluid standard-container container-page row" style="top:0px;height:100%;">

    <div style="margin-top: 30px;text-align: center;z-index: 10;">
        <?php if (isset($_SESSION["error"])) { ?>
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <i class="fa fa-exclamation-triangle"></i> <?php echo htmlspecialchars($_SESSION["error"], ENT_QUOTES); ?>
            </div>
            <?php
            $_SESSION["error"] = null;
            unset($_SESSION["error"]);
            ?>
        <?php } ?>
        <h2><?php echo $echipa["echipa"]; ?></h2>
        <h5>

            Status:
            <?php echo traducere_stare($echipa["stare_echipa"])=="Acceptat"? "Acceptat":"Respins"; ?>
        </h5>


        <div style="text-align: left;" class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                <div class="card"  style="font-size: 18px">
                    Ai la dispoziție exact 72 de ore pentru a duce la bun sfârșit proba de selecție, propusă de Avira!
                    Acceseaza documentul de mai jos pentru a vedea toate informațiile 
                    necesare pentru a rezolva task-urile propuse și încarcă rezultatul 
                    final până la deadline.
                    <br/>
                    <b>START: 12 martie, ora 10:00 AM</b><br/>
                    <b>DEADLINE: 15 martie, ora 10:00 AM</b><br/><br/>
<!--                    <a <?php // echo $time>1520841600? 'target="_blank" href="/Preselectie-Hackaton.pdf" class="btn btn-success"':'class="btn btn-success disabled"' ?>   style="width:104px;">Problema</a>
                    <form action="<?php // getUrl("detalii", "upload", true); ?>" method="post" enctype="multipart/form-data">
                        Select fisierul/arhiva:
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <input type="submit" value="Upload" name="submit">
                    </form>
                    <p>
                        În cazul în care nu ai reușit să faci Upload, trimite proiectul 
                        la adresa hack@lsacbucuresti.ro menționând numele echipei din 
                        care faci parte.
                    </p>-->
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 ">
                <div class="card"  style="font-size: 20px">
                    În urma problemei rezolvate și a CV-urilor, există posibilitatea să ne vedem în 
                    weekend-ul 24-25 martie. Astfel, dorim să știm câteva lucruri despre tine și 
                    echipa ta.
                </div>
            </div>

            <div  class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                <div class="card" style="margin-left: 5%;margin-right:5%;">
                    <h4 style="">Mărime tricouri:</h4>
                    <?php if ($detalii_echipa == null) { ?>
                        <div style="margin-left: 30px;">
                            &bull; Membru 1<span style="font-size: 20px; margin-top: 10px">
                                <input type="radio" checked="" name="membru1" value="S">S
                                <input type="radio" name="membru1" value="M">M
                                <input type="radio" name="membru1" value="L">L
                                <input type="radio" name="membru1" value="XL">XL
                            </span><br>
                            &bull; Membru 2<span style="font-size: 20px; margin-top: 10px">
                                <input type="radio" checked="" name="membru2" value="S">S
                                <input type="radio" name="membru2" value="M">M
                                <input type="radio" name="membru2" value="L">L
                                <input type="radio" name="membru2" value="XL">XL
                            </span><br>
                            &bull; Membru 3<span style="font-size: 20px; margin-top: 10px">
                                <input type="radio" checked="" name="membru3" value="S">S
                                <input type="radio" name="membru3" value="M">M
                                <input type="radio" name="membru3" value="L">L
                                <input type="radio" name="membru3" value="XL">XL
                            </span>
                        </div>
                        <h4>Există preferințe legate de mâncare?</h4>
                        <table style="margin-left: 30px;">
                            <tbody>
                                <tr style="margin-top: 10px">
                                    <td>&bull; Vegetarieni</td>
                                    <td><input id="vegetarieni" type="text" style="max-width:35px;"></td>
                                </tr>
                                <tr style="margin-top: 10px">
                                    <td>&bull; Vegani</td>
                                    <td><input id="vegani" type="text" style="max-width:35px;"></td>
                                </tr>
                                <tr style="margin-top: 10px">
                                    <td>&bull; Nu există preferințe</td>
                                    <td><input id="preferinte" type="text" style="max-width:35px;"></td>
                                </tr>
                                <tr style="margin-top: 10px">
                                    <td>&bull; Alte observații</td>
                                    <td><input id="observatii" type="text" style="max-width:200px;"></td>
                                </tr>
                            </tbody>
                        </table>
                        <h4>Cu ce echipamente veți veni?</h4>
                        <div style="margin-left: 30px;">
                            <table>
                                <tbody>
                                    <tr style="margin-top: 10px">
                                        <td>&bull; Membru 1 &nbsp;&nbsp;</td>
                                        <td>&nbsp;<input id="laptop1" type="checkbox">Laptop</td>
                                        <td>&nbsp;<input id="unitate1" type="checkbox">Unitate PC</td>
                                        <td>&nbsp;<input id="monitor1" type="checkbox">Monitor</td>
                                    </tr>
                                    <tr style="margin-top: 10px">
                                        <td>&bull; Membru 2 &nbsp;&nbsp;</td>
                                        <td>&nbsp;<input id="laptop2" type="checkbox">Laptop</td>
                                        <td>&nbsp;<input id="unitate2" type="checkbox">Unitate PC</td>
                                        <td>&nbsp;<input id="monitor2" type="checkbox">Monitor</td>
                                    </tr>
                                    <tr style="margin-top: 10px">
                                        <td>&bull; Membru 3 &nbsp;&nbsp;</td>
                                        <td>&nbsp;<input id="laptop3" type="checkbox">Laptop</td>
                                        <td>&nbsp;<input id="unitate3" type="checkbox">Unitate PC</td>
                                        <td>&nbsp;<input id="monitor3" type="checkbox">Monitor</td>
                                    </tr>
                                    <tr style="margin-top: 10px">
                                        <td>&bull; Alte echipamente</td>
                                        <td colspan="3">
                                            <input id="echipamente" type="text">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h4>Doriți să ne mai transmiteți ceva?</h4>
                        <div style="max-width: 428px;">
                            <input id="mesaj" type="text" style="width:100%;">
                        </div>
                    <?php } else { ?>
                        <div style="margin-left: 30px;">
                            &bull; Membru 1<span style="font-size: 20px;">
                                <input type="radio" <?php echo $detalii_echipa["tricou1"] == "S" ? 'checked=""' : ""; ?> name="membru1" value="S">S
                                <input type="radio" <?php echo $detalii_echipa["tricou1"] == "M" ? 'checked=""' : ""; ?> name="membru1" value="M">M
                                <input type="radio" <?php echo $detalii_echipa["tricou1"] == "L" ? 'checked=""' : ""; ?> name="membru1" value="L">L
                                <input type="radio" <?php echo $detalii_echipa["tricou1"] == "XL" ? 'checked=""' : ""; ?> name="membru1" value="XL">XL
                            </span><br>
                            &bull; Membru 2<span style="font-size: 20px;">
                                <input type="radio" <?php echo $detalii_echipa["tricou2"] == "S" ? 'checked=""' : ""; ?> checked="" name="membru2" value="S">S
                                <input type="radio" <?php echo $detalii_echipa["tricou2"] == "M" ? 'checked=""' : ""; ?> name="membru2" value="M">M
                                <input type="radio" <?php echo $detalii_echipa["tricou2"] == "L" ? 'checked=""' : ""; ?> name="membru2" value="L">L
                                <input type="radio" <?php echo $detalii_echipa["tricou2"] == "XL" ? 'checked=""' : ""; ?> name="membru2" value="XL">XL
                            </span><br>
                            &bull; Membru 3<span style="font-size: 20px;">
                                <input type="radio" <?php echo $detalii_echipa["tricou3"] == "S" ? 'checked=""' : ""; ?> checked="" name="membru3" value="S">S
                                <input type="radio" <?php echo $detalii_echipa["tricou3"] == "M" ? 'checked=""' : ""; ?> name="membru3" value="M">M
                                <input type="radio" <?php echo $detalii_echipa["tricou3"] == "L" ? 'checked=""' : ""; ?> name="membru3" value="L">L
                                <input type="radio" <?php echo $detalii_echipa["tricou3"] == "XL" ? 'checked=""' : ""; ?> name="membru3" value="XL">XL
                            </span>
                        </div>
                        <h4>Există preferințe legate de mâncare?</h4>
                        <table style="margin-left: 30px;">
                            <tbody>
                                <tr>
                                    <td>&bull; Vegetarieni</td>
                                    <td><input value="<?php echo $detalii_echipa["vegetarieni"]; ?>" id="vegetarieni" type="text" style="max-width:35px;"></td>
                                </tr>
                                <tr>
                                    <td>&bull; Vegani</td>
                                    <td><input value="<?php echo $detalii_echipa["vegani"]; ?>" id="vegani" type="text" style="max-width:35px;"></td>
                                </tr>
                                <tr>
                                    <td>&bull; Nu există preferințe</td>
                                    <td><input value="<?php echo $detalii_echipa["preferinte"]; ?>" id="preferinte" type="text" style="max-width:35px;"></td>
                                </tr>
                                <tr>
                                    <td>&bull; Alte observații</td>
                                    <td><input value="<?php echo $detalii_echipa["observatii"]; ?>" id="observatii" type="text" style="max-width:200px;"></td>
                                </tr>
                            </tbody>
                        </table>
                        <h4>Cu ce echipamente veți veni?</h4>
                        <div >
                            <table>
                                <tbody>
                                    <tr>
                                        <td>&bull; Membru 1 &nbsp;&nbsp;</td>
                                        <td style="margin-left: 10px;">&nbsp;<input <?php echo $detalii_echipa["laptop"] > 0 ? 'checked=""' : ""; ?> id="laptop1" type="checkbox">Laptop</td>
                                        <td style="margin-left: 10px;">&nbsp;<input <?php echo $detalii_echipa["unitate"] > 0 ? 'checked=""' : ""; ?> id="unitate1" type="checkbox">Unitate PC</td>
                                        <td style="margin-left: 10px;">&nbsp;<input <?php echo $detalii_echipa["monitor"] > 0 ? 'checked=""' : ""; ?> id="monitor1" type="checkbox">Monitor</td>
                                    </tr>
                                    <tr>
                                        <td>&bull; Membru 2 &nbsp;&nbsp;</td>
                                        <td style="margin-left: 10px;">&nbsp;<input <?php echo $detalii_echipa["laptop"] > 1 ? 'checked=""' : ""; ?> id="laptop2" type="checkbox">Laptop</td>
                                        <td style="margin-left: 10px;">&nbsp;<input <?php echo $detalii_echipa["unitate"] > 1 ? 'checked=""' : ""; ?> id="unitate2" type="checkbox">Unitate PC</td>
                                        <td style="margin-left: 10px;">&nbsp;<input <?php echo $detalii_echipa["monitor"] > 1 ? 'checked=""' : ""; ?> id="monitor2" type="checkbox">Monitor</td>
                                    </tr>
                                    <tr>
                                        <td style="margin-left: 10px;">&bull; Membru 3 &nbsp;&nbsp;</td>
                                        <td style="margin-left: 10px;">&nbsp;<input <?php echo $detalii_echipa["laptop"] > 2 ? 'checked=""' : ""; ?> id="laptop3" type="checkbox">Laptop</td>
                                        <td style="margin-left: 10px;">&nbsp;<input <?php echo $detalii_echipa["unitate"] > 2 ? 'checked=""' : ""; ?> id="unitate3" type="checkbox">Unitate PC</td>
                                        <td style="margin-left: 10px;">&nbsp;<input <?php echo $detalii_echipa["monitor"] > 2 ? 'checked=""' : ""; ?> id="monitor3" type="checkbox">Monitor</td>
                                    </tr>
                                    <tr>
                                        <td>&bull; Alte echipamente</td>
                                        <td colspan="3">
                                            <input value="<?php echo $detalii_echipa["echipamente"]; ?>" id="echipamente" type="text">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h4>Doriți să ne mai transmiteți ceva?</h4>
                        <div style="max-width: 428px; margin-bottom: 30px">
                            <input value="<?php echo $detalii_echipa["mesaj"]; ?>" id="mesaj" type="text" style="width:100%;">
                        </div>


                    <?php } ?>

                    <div>
                        <button id="detalii_submit" type="submit" class="btn btn-primary" style="margin-left: 80%;">Submit</button>
                    </div>
                </div> </div>

        </div>
    </div>
</div>


<script>var id_echipa =<?php echo $echipa["id"]; ?>;</script>