<?php
defined('C5_EXECUTE') or die("Access Denied.");

$this->inc('elements/header.php');
?>

    <main>
        <?php
        $a = new Area('Main');
        $a->enableGridContainer();
        $a->display($c);
        ?>

        <hr/>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="ccm-custom-style-container" style="border-width: 2px; border-style: dashed; border-color: rgb(0, 95, 204);">
                        <h5 style="text-align: center;">AUTOR: <a href="https://pl-pl.facebook.com/Zbigniew.S.Grzyb" target="_blank">Zbigniew S. Grzyb</a></h5>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="ccm-custom-style-container" style="margin-top: 40px;">
                        <p style="text-align: center; color: #004799 !important;"><strong><a href="https://www.narama.org.pl/index.php/historia/opracowania-historyczne">Opracowania historyczne - spis treści</a></strong></p>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php
$this->inc('elements/footer.php');
