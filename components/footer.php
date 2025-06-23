<footer>
    <svg class='top' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
        <path fill="var(--color2)" fill-opacity="1" d="M0,96L30,128C60,160,120,224,180,218.7C240,213,300,139,360,133.3C420,128,480,192,540,186.7C600,181,660,107,720,96C780,85,840,139,900,133.3C960,128,1020,64,1080,80C1140,96,1200,192,1260,218.7C1320,245,1380,203,1410,181.3L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
    </svg>
    <div class="content">
        <div class="div-1">
            <img src="<?=URL?>/images/logo.svg" alt="">
            <form action="<?=URL?>/php/footer-qst.php" method="post">
                <label for="sugs">Envie sua sugestão ao nosso SAC:</label>
                <div class="inline">
                    <input type="text" placeholder="Escreva Aqui" name="footer-qst" id="footer-qst">
                    <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                        </svg></button>
                </div>
            </form>

        </div>
        <div class="div-2">
            <ul>
                <li>Suporte</li>
                <li><a href="#">Central de ajudaa</a></li>
                <li><a href="#">Informações da contaa</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </div>
        <div class="div-3">
            <ul>
                <li>Ajuda e Soluções</li>
                <li><a href="#">Fale com suporte</a></li>
                <li><a href="#">Dúvidas Frequentes</a></li>
                <li><a href="#">Status do sistema</a></li>
                <li><a href="#">IA de suporte</a></li>
            </ul>
        </div>
        <div class="div-4">
            <ul>
                <li>Produto</li>
                <li><a href="#">Atualizações</a></li>
                <li><a href="#">Segurança</a></li>
                <li><a href="#">Beta test</a></li>
                <li><a href="#">Conversor de moeda</a></li>
            </ul>
        </div>
        <div class="div-5">© 2022 Mr Cookies Inc. Copyright and rights reserved</div>
        <div class="div-6">
            <ul>
                <li><a href="#">Terms and Conditions</a></li>
                <hr>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>
    </div>
</footer>
<?php

if (isset($_SESSION['flash_msg'])) {
    $msg = htmlspecialchars($_SESSION['flash_msg']);
    echo "<script>alert('Sua Mensagem foi enviada:\\n{$msg}');</script>";

    // Apaga a mensagem da sessão depois de exibir (flash)
    unset($_SESSION['flash_msg']);
}
?>