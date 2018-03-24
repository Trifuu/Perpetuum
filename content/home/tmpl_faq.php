<?php
/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */


defined("autorizare") or die("Nu aveti autorizare");
?>

<div class="container-fluid" style="z-index: 2;">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 70px;text-align: center;">
        <h1 >FAQ</h1>
    </div>
    <div class="another-for-card-faq col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <p style="margin-top: 50px; margin-bottom: 50px; font-size: 17px">
            <?php
            if ($limba == "en") {
                echo "Because we know that before a competition like this there are always lots "
                . "of questions about the methodology of the contest, this section is meant to "
                . "respond to all that doubt. Below are the most frequently asked questions, "
                . "alongside the associated answers.";
            } else {
                echo "Cum înaintea unei astfel de competiții există întotdeauna întrebări legate"
                . " de modul de desfășurare a concursului, această secțiune este menită să "
                . "rezolve eventualele neclarități . Mai jos se regăsesc ele mai frecvente "
                . "întrebări, alături de răspunsurile asociate acestora.";
            }
            ?>
        </p>
    </div>
<?php for ($i = 0; $i < count($mesaj); $i += 2) { ?>
        <div class="another-for-card-faq col-xs-12 col-sm-6 col-md-6 col-lg-4" style="margin-bottom: 65px;">
            <div class="card-faq ">

                <p class="accordion">
    <?php echo (($i + 2) / 2) . ". " . $mesaj[$i]; ?>
                </p>
                <div class="panel">
    <?php echo $mesaj[$i + 1]; ?>
                </div>
            </div>
        </div>
<?php } ?>
</div>