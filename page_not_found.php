<?php
defined('C5_EXECUTE') or die("Access Denied.");

$this->inc('elements/header.php');
?>

<main>
    <div class="container">
        <div class="row">
            <hr>
            <div class="col-sm-9 col-sm-offset-3">
                <div class="jumbo">
<!--                    <h1>--><?php //echo t('404 Error') ?><!--</h1>-->
<!--                    <p>--><?php //echo t('Page not found.') ?><!--</p>-->
                    <h1>Błąd 404</h1>
                    <p>Nie ma takiej strony</p>
                </div>
                <hr>
            </div>
        </div>
    </div>
</main>

<?php
$this->inc('elements/footer.php');
