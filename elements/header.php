<?php defined('C5_EXECUTE') or die("Access Denied.");

$this->inc('elements/header_top.php');

$as = new GlobalArea('Header Search');
$blocks = $as->getTotalBlocksInArea();
$displayThirdColumn = $blocks > 0 || $c->isEditMode();
?>

<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-xs-8">
                <?php
                $a = new GlobalArea('Header Site Title');
                $a->display();
                ?>
            </div>
            <div class="col-sm-9 col-xs-4">
                <?php
                $a = new GlobalArea('Header Navigation');
                $a->display();
                ?>
            </div>
        </div>
    </div>
</header>
