<?php

include '../php/config.php'; // constants

include ROOT . 'components/header.php'; // header

include ROOT . 'components/nav.php' //navbar

?>

<main>

    <div class="div-1">
        <div class="column-1">
            <span>Bem-vindos a nosso site.</span>
            <h2>Quem nós somos</h2>
            <p>A Mister Cookies nasceu de um forno caseiro, com receitas simples, feitas com amor e aquele cheirinho irresistível. O que começou como uma paixão pela gastronomia logo virou algo maior — uma marca feita para adoçar momentos e conquistar corações.</p>
            <button>Saiba mais</button>
        </div>
        <div class="interseccao" style="display: none;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path fill="#b55c00" fill-opacity="1" d="M0,288L17.1,256C34.3,224,69,160,103,160C137.1,160,171,224,206,240C240,256,274,224,309,181.3C342.9,139,377,85,411,96C445.7,107,480,181,514,197.3C548.6,213,583,171,617,160C651.4,149,686,171,720,192C754.3,213,789,235,823,218.7C857.1,203,891,149,926,112C960,75,994,53,1029,74.7C1062.9,96,1097,160,1131,170.7C1165.7,181,1200,139,1234,138.7C1268.6,139,1303,181,1337,176C1371.4,171,1406,117,1423,90.7L1440,64L1440,0L1422.9,0C1405.7,0,1371,0,1337,0C1302.9,0,1269,0,1234,0C1200,0,1166,0,1131,0C1097.1,0,1063,0,1029,0C994.3,0,960,0,926,0C891.4,0,857,0,823,0C788.6,0,754,0,720,0C685.7,0,651,0,617,0C582.9,0,549,0,514,0C480,0,446,0,411,0C377.1,0,343,0,309,0C274.3,0,240,0,206,0C171.4,0,137,0,103,0C68.6,0,34,0,17,0L0,0Z"></path>
            </svg>
        </div>
        <div class="column-2">
            <div class="background">
                <img src="<?=URL?>images\Home\cookie-1.png" class="image" />
            </div>
        </div>
    </div>

    <div class="div-2">
        <div class="content">
            <div class="column-1">
                <div class="background">
                    <img src="<?=URL?>images\Home\cookie-2.png" class="image" />
                </div>
            </div>
            <div class="column-2 highlight-top">
                <article>
                    <h3>Novidades para você!</h3>
                    <p>Os mais aguardados voltaram pra você!</p>
                    <p>Depois de muitos pedidos, eles voltaram pro cardápio!</p>
                    <p>Os nossos irresistíveis Cookies Red Velvet! Uma combinação perfeita de massa macia, toque de chocolate e aquele sabor clássico do red velvet, com pedacinhos de chocolate branco derretendo a cada mordida.</p>
                    <p>Perfeitos para adoçar seu dia, surpreender seu paladar e se apaixonar!</p>
                    <p>Corre experimentar, é por tempo limitado!</p>
                </article>
            </div>
        </div>
    </div>

    <div class="div-3 div-2">
        <div class="content">
            <div class="column-1">
                <div class="background">
                    <img src="<?=URL?>images\Home\cookie-3.png" class="image" />
                </div>
            </div>
            <div class="column-2">
                <article>
                    <h3>Nossa Massa!</h3>
                    <p>O segredo está na massa, mas não é só os ingredientes de qualidade que fazem os nossos cookies serem os mais gostosos!</p>
                    <p>Nossos cookies são feitos com muito carinho, usando uma massa macia por dentro, levemente crocante por fora e cheia de sabor. Cada mordida é uma explosão de felicidade para o seu dia!</p>
                    <p>Feitos com ingredientes selecionados, nossos cookies são perfeitos para quem ama aquele sabor caseiro, fresquinho e irresistível.</p>
                    <p><strong>(Dentre todos os ingredientes, contém ovos, trigo, leite e derivados, portanto, alérgicos, tomem cuidado!)</strong></p>
                </article>
            </div>
        </div>
    </div>

    <div class="div-4 div-3 div-2">
        <!-- <svg class='top' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path background-color='var(--color1)' fill="var(--color5)" fill-opacity="1" d="M0,256L30,218.7C60,181,120,107,180,90.7C240,75,300,117,360,160C420,203,480,245,540,218.7C600,192,660,96,720,69.3C780,43,840,85,900,117.3C960,149,1020,171,1080,149.3C1140,128,1200,64,1260,69.3C1320,75,1380,149,1410,186.7L1440,224L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
        </svg> -->
        <div class="content">
            <div class="column-1">
                <div class="background">
                    <img src="<?=URL?>images\Home\cookie-4.png" class="image" />
                </div>
            </div>
            <div class="column-2">
                <article>
                    <h3>Nossa Massa!</h3>
                    <p>O segredo está na massa, mas não é só os ingredientes de qualidade que fazem os nossos cookies serem os mais gostosos!</p>
                    <p>Nossos cookies são feitos com muito carinho, usando uma massa macia por dentro, levemente crocante por fora e cheia de sabor. Cada mordida é uma explosão de felicidade para o seu dia!</p>
                    <p>Feitos com ingredientes selecionados, nossos cookies são perfeitos para quem ama aquele sabor caseiro, fresquinho e irresistível.</p>
                    <p><strong>(Dentre todos os ingredientes, contém ovos, trigo, leite e derivados, portanto, alérgicos, tomem cuidado!)</strong></p>
                </article>
            </div>
        </div>
        <!-- <svg class='bottom' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="var(--color1)" fill-opacity="1" d="M0,256L30,218.7C60,181,120,107,180,90.7C240,75,300,117,360,160C420,203,480,245,540,218.7C600,192,660,96,720,69.3C780,43,840,85,900,117.3C960,149,1020,171,1080,149.3C1140,128,1200,64,1260,69.3C1320,75,1380,149,1410,186.7L1440,224L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
        </svg> -->
    </div>

        <div class="div-5 div-2">
        <div class="content">
            <div class="column-1">
                <div class="background">
                    <img src="<?=URL?>images\Home\cookie-5.png" class="image" />
                </div>
            </div>
            <div class="column-2 highlight-top">
                <article>
                    <h3>Qual seu cookie favorito?</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Euismod egestas odio sapien dis massa massa massa. Accumsan, cras tristique adipiscing consectetur. Laoreet ante quisque in nulla eleifend neque sed rutrum donec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Euismod egestas odio sapien dis massa massa massa. Accumsan, cras tristique adipiscing consectetur. Laoreet ante quisque in nulla eleifend neque sed rutrum donec.</p>
                    </article>
            </div>
        </div>
    </div>
</main>


<?php

include ROOT . 'components/footer.php' //footer

?>