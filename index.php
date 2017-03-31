<?php
require('php/header.php');
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-3">
                <a href="#">
                    <img src="src/img/button-left.png" alt="Boutton Gauche" class="img-responsive logo-buttonLeft">
                </a>
            </div>
            <div class="col-xs-6">
                <img src="src/img/logo-only.png" alt="Logo du Festival" class="img-responsive">
            </div>
            <div class="col-xs-3">
                <div class="">
                    <a href="php/programmation.php">
                        <img src="src/img/button-right.png" alt="Boutton Droite" class="img-responsive logo-buttonRight">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br />
    <br />
    <!--
    <div class="separator-titleDiv text-center">
        <h1 class="separator-title font-dokyo">PROGRAMMATION</h1>
    </div>
    <div class="separator-div">
        <a href="#" class="separator-content"><img src="src/img/programmation.png" class="img-responsive"></a>
    </div>
    <div class="separator-titleDiv text-center">
        <h1 class="separator-title font-dokyo">BILLETERIE</h1>
    </div>
    <div class="separator-div">
        <div class="row">
            <div class="col-xs-12 col-xs-offset-0 col-sm-2 col-sm-offset-2 separator-content text-center">
                <img src="http://placehold.it/200x200">
                <h2>Titre</h2>
                <p>Principium autem unde latius se funditabat, emersit ex negotio tali. Chilo ex vicario et coniux eius Maxima nomine, questi apud Olybrium ea tempestate urbi praefectum, vitamque suam venenis petitam adseverantes inpetrarunt ut hi, quos suspectati sunt, ilico rapti conpingerentur in vincula, organarius Sericus et Asbolius palaestrita et aruspex Campensis.</p>
            </div>
        </div>
    </div>
    -->
    <div class="separator-titleDiv text-center">
        <h1 class="separator-title font-dokyo">ACTUALITES</h1>
    </div>
    <br />
    <br />
    <div class="container-fluid">
        <div class="row">
            <?php
            for($i=0;$i<3;$i++){
                ?>
                <div class="col-xs-12 col-xs-offset-0 col-sm-4">
                    <div class="content-div text-left">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-6 col-xs-offset-3">
                                    <img src="src/img/la_jungle.jpg" class="img-responsive">
                                </div>
                            </div>
                        </div>
                        <h2 class="news-title font-circula">La Jungle</h2>
                        <hr class="hr">
                        <p>Une six-cordes et un casio. Il n’en faut parfois pas plus pour faire péter le mercure et irriter les yeux de sueur après deux breaks et trois accords. Deux singes rouquins, un très grand et un plus petit, vous emmènent dans leur milieu naturel : La Jungle !</p>
                        <a href="php/artiste.php">En savoir plus</a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <br />
    <br />
    <br />
    <br />
    <div class="modal fade" tabindex="-1" role="dialog" id="modal-news">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Annulation</h4>
                </div>
                <div class="modal-body">
                    <p>Le groupe La Jungle ne pourra pas assurer ses concerts ce week-end. Nous faisons tout notre possible pour trouver une solution de remplacement.</p>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
<?php
require('php/footer.php');
$alert = 0;
if($alert==1){
    echo '<script> $("#modal-news").modal("show");</script>';
}
?>