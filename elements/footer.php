<?php defined('C5_EXECUTE') or die("Access Denied.");

$footerSiteTitle = new GlobalArea('Footer Site Title');
$footerSiteTitleBlocks = $footerSiteTitle->getTotalBlocksInArea();

$footerSocial = new GlobalArea('Footer Social');
$footerSocialBlocks = $footerSocial->getTotalBlocksInArea();

$displayFirstSection = $footerSiteTitleBlocks > 0 || $footerSocialBlocks > 0 || $c->isEditMode();
?>

<footer id="footer-theme">
    <?php
    if ($displayFirstSection) {
        ?>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-xs-8">
                        <?php
                        $a = new GlobalArea('Footer Site Title');
                        $a->display();
                        ?>
                    </div>
                    <div class="col-xs-4">
                        <?php
                        $a = new GlobalArea('Footer Social');
                        $a->display();
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
    ?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <?php
                    $a = new GlobalArea('Footer Legal');
                    $a->display();
                    ?>
                </div>
            </div>
        </div>
    </section>
</footer>

<!-- Login page button -->
<!--<footer id="concrete5-brand">-->
<!--    --><?php //echo Core::make('helper/navigation')->getLogInOutLink() ?>
<!--</footer>-->

<?php $this->inc('elements/footer_bottom.php');?>
