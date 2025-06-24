<?php
    include '../php/config.php';

    include ROOT . 'components/header.php';
    include ROOT . 'components/nav.php';
?>

<main>

    <div class="div-title">
        <img src="<?=URL?>images/cardapio/cardapio.svg" alt="">
    </div>

    <div id="div-list">
        <ul class="list-container" id="list-container">

        </ul>
    </div>
    <script> const URL = '<?=URL?>'; </script>
    <script src="<?=URL?>js/cardapio/script.js"></script>
</main>

<?php

    include ROOT . 'components/footer.php';
    
?>
