<?php

/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */


defined("autorizare") or die("Nu aveti autorizare");
?>
<div class="container-fluid row center-block" style="text-align: center;">
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h2 style="font-family:Font1;color: white;margin-bottom: 50px;margin-top: 35px;">
            <?php echo $limba == "en" ? "MAIN SPONSOR" : "SPONSOR PRINCIPAL"; ?>
        </h2>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="font-family:Font1;color: #018EBE;">
        <img src="<?php echo _SITE_CSS . "img/logo/".$sponsor_principal; ?>" style="height: 100%;width: 100%;max-height: 140px;max-width: 300px;text-align: center;">
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top:60px;">
        <h2 style="font-family:Font1;color: white;margin-bottom: 40px;">
            <?php echo $limba == "en" ? "Partners" : "Parteneri"; ?>
        </h2>
    </div>

    <div class="col-lg-2" style="margin-bottom:20px;"></div>
    <?php  for($i=0;$i<count($parteneri);$i++){ ?>
    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2" style="margin-bottom:20px;">
        <img src="<?php echo _SITE_CSS . "img/logo/".$parteneri[$i]; ?>" style="width: 90%">
    </div>
    <?php } ?>
    <div class="col-lg-2" style="margin-bottom:20px;"></div>
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h2 style="color: white;margin-bottom: 100px;margin-top: 40px;font-family:Font1;">
            <?php echo $limba == "en" ? "Media Partners" : "Parteneri Media"; ?>
        </h2>
    </div>
    
    <?php  for($i=0;$i<count($parteneri_media);$i++){ ?>
    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2" style="margin-bottom:20px;">
        <img src="<?php echo _SITE_CSS . "img/logo/".$parteneri_media[$i]; ?>" style="width: 90%">
    </div>
    <?php } ?>
    <div class="col-xs-3 col-sm-4 col-md-4 col-lg-5" style="margin-bottom:20px;"></div>
    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2" style="margin-bottom:20px;">
        <img src="<?php echo _SITE_CSS . "img/logo/T&T.png"; ?>" style="width: 90%">
    </div>
    <div class="col-xs-3 col-sm-4 col-md-5 col-lg-5" style="margin-bottom:20px;"></div>
</div>