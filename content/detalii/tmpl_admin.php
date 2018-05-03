<?php
/*
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */

defined("autorizare") or die("Nu aveti autorizare");
?>
<div class="container-fluid standard-container container-page row" style="top:44px;height:100%;">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-left: 30px;margin-top: 10px;text-align: center;">

        <div style="text-align: left;">
            
            <button id="download_csv" type="submit" style="cursor: pointer;">Download</button>
            
        </div>
    </div>

</div>
<script>
    var detalii_echipe =<?php echo json_encode($detalii_echipe); ?>;
    var echipe =<?php echo json_encode($echipe); ?>;
</script>