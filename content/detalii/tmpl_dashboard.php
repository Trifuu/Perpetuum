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
            În așteptare
            <?php //echo traducere_stare($echipa["stare_echipa"])=="Acceptat"? "Acceptat":"Respins"; ?>
        </h5>


        <div style="text-align: left;" class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                <div class="card"  style="font-size: 18px">
                    <br>
                    Vă recomandam să schimbați parola de la cont! - în colt dreapta sus Opțiuni->Editează Profilul
                    <br>Ai la dispoziție exact 48 de ore pentru a rezolva problemele.
                    Acceseaza documentul de mai jos pentru a vedea toate informațiile 
                    necesare pentru a rezolva task-urile propuse și încarcă rezultatul 
                    final până la deadline.
                    <br/>
                    <b>START: 6 aprilie, ora 14:00 </b><br/>
                    <b>DEADLINE: 8 aprilie, ora 14:00 </b><br/><br/>
                    <a <?php  echo $time>1523012400? 'target="_blank" href="/Perpetuum.pdf" class="btn btn-success"':'class="btn btn-success disabled"' ?>   style="width:104px;">Problema</a>
                    <?php if($time<1523185200) { ?>
                        <form action="<?php getUrl("detalii", "upload", true); ?>" method="post" enctype="multipart/form-data">
                            Select fisierul/arhiva:
                            <input type="file" name="fileToUpload" id="fileToUpload">
                            <input type="submit" value="Upload" name="submit">
                        </form>
                        <p>
                            În cazul în care nu ai reușit să faci Upload, trimite proiectul 
                            la adresa perpetuum@lsacbucuresti.ro menționând numele echipei din 
                            care faci parte.
                        </p>
                    <?php } ?>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 ">
                <div class="card"  style="font-size: 20px">
                    În urma problemei rezolvate și a CV-urilor, există posibilitatea să ne vedem în 
                    ziua de 22 aprilie. Astfel, dorim să știm câteva lucruri despre tine și 
                    echipa ta.
                </div>
            </div>

            <div  class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                <div class="card" style="margin-left: 5%;margin-right:5%;">
                    <h4 style="">Mărime tricouri:</h4>
                    
                        <div style="margin-left: 30px;">
                            &bull; Membru 1<span style="font-size: 20px;">
                                <input type="radio" <?php echo $detalii_echipa["tricou1"] == "S" ? 'checked=""' : ""; ?> checked="" name="membru1" value="S">S
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
                            <?php if($echipa["email4"]!=""){ ?>
                                <br> &bull; Membru 4
                                <span style="font-size: 20px;">
                                    <input type="radio" <?php echo $detalii_echipa["tricou4"] == "S" ? 'checked=""' : ""; ?> checked="" name="membru4" value="S">S
                                    <input type="radio" <?php echo $detalii_echipa["tricou4"] == "M" ? 'checked=""' : ""; ?> name="membru4" value="M">M
                                    <input type="radio" <?php echo $detalii_echipa["tricou4"] == "L" ? 'checked=""' : ""; ?> name="membru4" value="L">L
                                    <input type="radio" <?php echo $detalii_echipa["tricou4"] == "XL" ? 'checked=""' : ""; ?> name="membru4" value="XL">XL
                                </span>
                            <?php } ?>
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
                        
                        <h4>Doriți să ne mai transmiteți ceva?</h4>
                        <div style="max-width: 428px; margin-bottom: 30px">
                            <input value="<?php echo $detalii_echipa["mesaj"]; ?>" id="mesaj" type="text" style="width:100%;">
                        </div>
                    <div>
                        <button id="detalii_submit" type="submit" class="btn btn-primary" style="margin-left: 80%;">Submit</button>
                    </div>
                </div> </div>

        </div>
    </div>
</div>


<script>var id_echipa =<?php echo $echipa["id"]; ?>;</script>