<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

</div>

<?php View::element('footer_required'); ?>

<aside>
    <div style="position: fixed; right: 0; top: 100px; display: flex;flex-direction: column; z-index: 95;">
        <button onclick="change_size()" type="button" id="font_size" class="btn btn-outline-secondary">
            <img src="<?php if ($_COOKIE["dark-mode"] == 1) {echo "/concrete/themes/elemental/images/bigger_icon.svg";} else if ($_COOKIE["dark-mode"] == 0 ) {echo "/concrete/themes/elemental/images/bigger_icon.svg";} else {echo "/concrete/themes/elemental/images/bigger_icon.svg";} ?>"
        </button>
        <button onclick="change_theme()" type="button" class="btn btn-outline-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
            </svg>
        </button>
    </div>
</aside>

<button type="button" class="btn btn-secondary btn-floating btn-lg" style="position: fixed; z-index: 95; bottom: 20px;right: 20px; display: none; border: 1px solid #000;" id="btn-back-to-top">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
    </svg>
</button>

<?php $this->inc('elements/scripts.php');?>

</body>
</html>
