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

<?php $this->inc('elements/scripts.php');?>

</body>
</html>
