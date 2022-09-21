<!DOCTYPE html>
<html>
    <head>
        <title>Amanda & Edson</title>
        <?php include('Components/meta.php') ?>
        <link rel="stylesheet" href="CSS/index.css">
    </head>
    <body>
        <section class="apresentation">
            <header>
                <nav id="navDesktop">
                    <a href="index.php">
                        <img src="IMG/Logo/Simples-2.webp" alt="" loading="lazy">
                    </a>
                    <ul>
                        <li><a href="index.php">Início</a></li>
                        <li><a onclick="scrollToElement('#they')">Noivos</a></li>
                        <li><a onclick="scrollToElement('#history')">História</a></li>
                        <li><a onclick="scrollToElement('#honor')">Pessoas</a></li>
                        <li><a href="list.php">Presentes</a></li>
                    </ul>
                </nav>
                <nav id="navMobile">
                    <a href="index.php">
                        <img src="IMG/Logo/Simples-2.webp" alt="" loading="lazy">
                    </a>
                    <figure>
                        <div></div>
                        <div></div>
                        <div></div>
                    </figure>
                    <ul>
                        <div>
                            <img src="IMG/Logo/Completa.webp" alt="" loading="lazy">
                        </div>
                        <li><a href="index.php">Início</a></li>
                        <li><a href="index.php#they">Noivos</a></li>
                        <li><a href="index.php#history">História</a></li>
                        <li><a href="index.php#honor">Pessoas</a></li>
                        <li><a href="list.php">Presentes</a></li>
                        <a id="closeMenu" class="button txtBluePrimary txt600">Fechar Menu</a>
                    </ul>
                </nav>
                <a href="presence.php" class="button txtWhite" id="btnConfirm">Confirmar Presença</a>
            </header>
            <div class="reception">
                <img id="saveTheDate" src="IMG/Vector/SaveTheDate.webp" alt="" loading="lazy">
                <img id="brideGroom" src="IMG/Vector/brideGroom.webp" alt="" loading="lazy">
                <h1 class="txtWhite">12 de Novembro de 2022</h1>
                <a href="presence.php" class="button txtWhite">Confirmar Presença</a>
            </div>
        </section>
        <main>
            <section class="container" id="count">
                <div id="boxCount">
                    <span>
                        <h1 class='txtBluePrimary txtItalic txt600' id='days'>0</h1>
                        <h3 class='txtBlack txtUpper txt500'>Dias</h3>
                    </span>
                    <span>
                        <h1 class='txtBluePrimary txtItalic txt600' id='hours'>0</h1>
                        <h3 class='txtBlack txtUpper txt500'>Horas</h3>
                    </span>
                    <span>
                        <h1 class='txtBluePrimary txtItalic txt600' id='minutes'>0</h1>
                        <h3 class='txtBlack txtUpper txt500'>Minutos</h3>
                    </span>
                    <span>
                        <h1 class='txtBluePrimary txtItalic txt600' id='seconds'>0</h1>
                        <h3 class='txtBlack txtUpper txt500'>Segundos</h3>
                    </span>
                </div>
            </section>
            <section class="container" id="they">
                <img src="IMG/Vector/alliances.webp" alt="Aliancas" class="icon medium" loading="lazy">
                <img src="IMG/Vector/brideGroomText.webp" alt="Noivos" loading="lazy">
                <h1 class="txtTitle txtBlack">Conheça mais um pouco<br>desse casal</h1>
                <img src="IMG/Persons/AmandaEdson.webp" alt="Noivos" loading="lazy" id="brideGroom">
                <section class="container noPadding" id="containerBrideGroom">
                    <article>
                        <img src="IMG/Vector/Amanda.webp" alt="Amanda" loading="lazy">
                        <h3 class="txtBlack txt500 txtCenter">Nossa noivinha Amanda tem 21 aninhos, está se formando em psicologia e atua como tech recruiter. Amanda sempre foi aquela menina sonhadora, encantada com clichês românticos, sonhava um dia viver o seu "felizes para sempre". Com doçura conquistava a pessoas ao seu redor. Apaixonada por servir e ajudar as pessoas, Amanda é o tipo de menina mulher que mesmo perdida entre decisões, se encontrou nos caminhos de Jesus. Amanda percebeu que tudo aprontava para Cristo, entendeu que ao se virar para Ele, as incertezas começariam a fazer sentido, e os sentidos vem se encontrando e encaixando através da luz que iluminava o seu caminho, e o caminho se chama Jesus Cristo!</h3>
                        <a href="https://www.instagram.com/amnds_jessy/" target='_blank'>
                            <img src="IMG/Vector/instagram.webp" alt="" loading="lazy">
                        </a>
                    </article>
                    <img src="IMG/Vector/hearth.webp" alt="" loading="lazy">
                    <article>
                        <img src="IMG/Vector/Edson.webp" alt="Edson" loading="lazy">
                        <h3 class="txtBlack txt500 txtCenter">Nosso noivo Edson tem 22 anos, desde cedo notou seu talento com lógica ligada a tecnologia, extremamente esforçado e inteligente, alcançou senioridade mesmo sendo jovem. Edson sempre foi um rapaz racional, questionador e direto. Sempre foi um rapaz preocupado e protetor com sua família e amigos. Edson tentou fugir da verdade que o esperava e transformaria todo o seu ser. Não demorou muito para que seu encontro genuíno com Cristo acontecesse, ainda muito questionador, foi cedendo ao amor que Jesus o oferecia a todo instante, e através dele toda a sua família foi alcançada. Ele entendeu que a principal fonte entre a razão, ciência e o amor era Cristo, e é só disso que ele precisava.</h3>
                        <a href="https://www.instagram.com/edsonoliveirap2/" target='_blank'>
                            <img src="IMG/Vector/instagram.webp" alt="" loading="lazy">
                        </a>
                    </article>
                </section>
            </section>
        </main>
        <main class="fullWidth">
            <section class="container background" id="history">
                <img src="IMG/Vector/history.webp" alt="" loading="lazy">
                <h1 class='txtTitle txtWhite txt300'>O que nos fez chegar<br>até aqui?</h1>
                <h4 class="txtWhite txtCenter txt300">Podemos dizer que essa história não teve lá um começo romântico igual aos filmes e contos de fadas. No começo de 2018, no aniversário de 17 anos de Amanda, através de amigos incomuns, Amanda e Edson se conheceram. Trocaram poucas palavras e por ironia, não sentiram nenhum tipo de interesse um pelo outro. Porém, não contavam que em pouco tempo seriam grandes amigos e acompanhariam toda a vida um do outro. O tempo passou, mas ainda assim, não havia interesse de nenhuma das partes... Até que surgiu uma oportunidade de trabalharem juntos, onde Edson foi aprovado na empresa onde Amanda trabalhava. A partir daí o convívio deles era diário. Edson como um bom cavalheiro, sempre levava e esperava a Amanda na parada de ônibus ao fim do expediente. A intimidade e amizade se fortaleceu e o interesse de ambos foi nascendo e regado como uma possível possibilidade.<br><br>
                    Cercados de receios, tentaram fugir do que estavam sentindo, mas Edson como um visionário e homem de fé, não desistiu de sua amada. Deixava chocolates em sua mesa de trabalho e mostrava sinais do quanto poderiam dar certo juntos. Amanda, ainda cheia de medos de perder seu melhor amigo, foi cedendo aos seus sentimentos que apontavam para um futuro com o Edson.<br><br>
                    Foram meses enrolando até que enfim, decidiram que fariam dar certo, entenderam que não existia a pessoa certa, mas tiveram o entendimento que com o direcionamento de Deus e disposição de ambos, não tinha como dar errado. Meses depois aqui se encontram, numa decisão extremamente importante e guiada debaixo dos propósitos de Deus.</h4>
            </section>
        </main>
        <main class="fullWidth">
            <section class="container background honor" id="honor">
                <img src="IMG/Vector/honor.webp" alt="" loading="lazy">
                <article class="person big">
                    <img src="IMG/Photos/yeshua.webp" alt="" loading="lazy">
                    <h1 class="txtWhite txtCenter txt500">Jesus</h1>
                    <h2 class="txtWhite txtCenter txt300">Irmão mais velho</h2>
                </article>
                <section class="container boxDivisor">
                    <div class="boxes">
                        <div>
                            <article class="person">
                                <img src="IMG/Persons/MariaR.webp" alt="" loading="lazy">
                                <h1 class="txtWhite txtCenter txt500">Maria R.</h1>
                                <h2 class="txtWhite txtCenter txt300">Avó da Noiva</h2>
                            </article>
                            <article class="person">
                                <img src="IMG/Persons/Cledyson.webp" alt="" loading="lazy">
                                <h1 class="txtWhite txtCenter txt500">Cledyson</h1>
                                <h2 class="txtWhite txtCenter txt300">Pastor</h2>
                            </article>
                        </div>
                        <div>
                            <article class="person">
                                <img src="IMG/Persons/Amilson.webp" alt="" loading="lazy">
                                <h1 class="txtWhite txtCenter txt500">Amilson</h1>
                                <h2 class="txtWhite txtCenter txt300">Pai da Noiva</h2>
                            </article>
                            <article class="person">
                                <img src="IMG/Persons/Eliana.webp" alt="" loading="lazy">
                                <h1 class="txtWhite txtCenter txt500">Eliana</h1>
                                <h2 class="txtWhite txtCenter txt300">Mãe da Noiva</h2>
                            </article>
                        </div>
                    </div>
                    <div class="boxes">
                        <div>
                            <article class="person">
                                <img src="IMG/Persons/Gladson.webp" alt="" loading="lazy">
                                <h1 class="txtWhite txtCenter txt500">Gladson</h1>
                                <h2 class="txtWhite txtCenter txt300">Pastor</h2>
                            </article>
                            <article class="person">
                                <img src="IMG/Persons/MariaPinheiro.webp" alt=""loading="lazy">
                                <h1 class="txtWhite txtCenter txt500">Maria P.</h1>
                                <h2 class="txtWhite txtCenter txt300">Avó do Noivo</h2>
                            </article>
                        </div>
                        <div>
                            <article class="person">
                                <img src="IMG/Persons/Edson.webp" alt=""loading="lazy">
                                <h1 class="txtWhite txtCenter txt500">Edson</h1>
                                <h2 class="txtWhite txtCenter txt300">Pai do Noivo</h2>
                            </article>
                            <article class="person">
                                <img src="IMG/Persons/Nalva.webp" alt=""loading="lazy">
                                <h1 class="txtWhite txtCenter txt500">Nalva</h1>
                                <h2 class="txtWhite txtCenter txt300">Mãe do Noivo</h2>
                            </article>
                        </div>
                    </div>
                </section>
            </section>
        </main>
        <main class="fullWidth">
            <section class="container background honor">
                <img src="IMG/Vector/godfathers.webp" alt="" loading="lazy">
                <section class="container boxDivisor">
                    <div class="boxes">
                        <div>
                            <article class="person">
                                <img src="IMG/Persons/LeticiaRibas.webp" alt="" loading="lazy">
                                <h1 class="txtWhite txtCenter txt500">Letícia & Ribas</h1>
                                <h2 class="txtWhite txtCenter txt300">Padrinhos</h2>
                            </article>
                            <article class="person">
                                <img src="IMG/Persons/CidaMagno.webp" alt="" loading="lazy">
                                <h1 class="txtWhite txtCenter txt500">Cida & Magno</h1>
                                <h2 class="txtWhite txtCenter txt300">Padrinhos</h2>
                            </article>
                            <article class="person">
                                <img src="IMG/Persons/GizelleHudson.webp" alt="" loading="lazy">
                                <h1 class="txtWhite txtCenter txt500">Gizelle & Hudson</h1>
                                <h2 class="txtWhite txtCenter txt300">Padrinhos</h2>
                            </article>
                            <article class="person">
                                <img src="IMG/Persons/RebecaLucas.webp" alt="" loading="lazy">
                                <h1 class="txtWhite txtCenter txt500">Rebeca & Lucas</h1>
                                <h2 class="txtWhite txtCenter txt300">Padrinhos</h2>
                            </article>
                        </div>
                        <div>
                            <article class="person">
                                <img src="IMG/Persons/KarenCoutinho.webp" alt="" loading="lazy">
                                <h1 class="txtWhite txtCenter txt500">Karen & Coutinho</h1>
                                <h2 class="txtWhite txtCenter txt300">Padrinhos</h2>
                            </article>
                            <article class="person">
                                <img src="IMG/Persons/GleyciLucas.webp" alt="" loading="lazy">
                                <h1 class="txtWhite txtCenter txt500">Gleyci & Lucas</h1>
                                <h2 class="txtWhite txtCenter txt300">Padrinhos</h2>
                            </article>
                            <article class="person">
                                <img src="IMG/Persons/MariaLucas.webp" alt="" loading="lazy">
                                <h1 class="txtWhite txtCenter txt500">Maria & Lucas</h1>
                                <h2 class="txtWhite txtCenter txt300">Padrinhos</h2>
                            </article>
                            <article class="person">
                                <img src="IMG/Persons/ColinsLucas.webp" alt="" loading="lazy">
                                <h1 class="txtWhite txtCenter txt500">Colins & Lucas</h1>
                                <h2 class="txtWhite txtCenter txt300">Padrinhos</h2>
                            </article>
                        </div>
                        <div>
                            <article class="person">
                                <img src="IMG/Persons/MaduVini.webp" alt="" loading="lazy">
                                <h1 class="txtWhite txtCenter txt500">Madu & Vinícius</h1>
                                <h2 class="txtWhite txtCenter txt300">Padrinhos</h2>
                            </article>
                            <article class="person">
                                <img src="IMG/Persons/GabiCallebe.webp" alt="" loading="lazy">
                                <h1 class="txtWhite txtCenter txt500">Gabriela & Callebe</h1>
                                <h2 class="txtWhite txtCenter txt300">Padrinhos</h2>
                            </article>
                            <article class="person">
                                <img src="IMG/Persons/BrendaDaniel.webp" alt="" loading="lazy">
                                <h1 class="txtWhite txtCenter txt500">Brenda & Daniel</h1>
                                <h2 class="txtWhite txtCenter txt300">Padrinhos</h2>
                            </article>
                            <article class="person">
                                <img src="IMG/Persons/ThaisEduardo.webp" alt="" loading="lazy">
                                <h1 class="txtWhite txtCenter txt500">Thais & Eduardo</h1>
                                <h2 class="txtWhite txtCenter txt300">Padrinhos</h2>
                            </article>
                        </div>
                </section>
            </section>
        </main>
        <main class="fullWidth">
            <section class="container background" id="kids">
                <img src="IMG/Vector/especials.webp" alt="" loading="lazy">
                <section class="container boxDivisor">
                    <div class="boxes">
                        <div>
                            <article class="person">
                                <img src="IMG/Persons/Jonathan.webp" alt="" loading="lazy">
                                <h1 class="txtWhite txtCenter txt500">Jonathan</h1>
                                <h2 class="txtWhite txtCenter txt300">Pajem</h2>
                            </article>
                            <article class="person">
                                <img src="IMG/Persons/Isabelly.webp" alt="" loading="lazy">
                                <h1 class="txtWhite txtCenter txt500">Isabelly</h1>
                                <h2 class="txtWhite txtCenter txt300">Daminha</h2>
                            </article>
                            <article class="person">
                                <img src="IMG/Persons/MariaEduarda.webp" alt="" loading="lazy">
                                <h1 class="txtWhite txtCenter txt500">Maria Eduarda</h1>
                                <h2 class="txtWhite txtCenter txt300">Daminha</h2>
                            </article>
                        </div>
                        <div>
                            <article class="person">
                                <img src="IMG/Persons/JoaoPedro.webp" alt="" loading="lazy">
                                <h1 class="txtWhite txtCenter txt500">João Pedro</h1>
                                <h2 class="txtWhite txtCenter txt300">Pajem</h2>
                            </article>
                            <article class="person">
                                <img src="IMG/Persons/Vallentina.webp" alt="" loading="lazy">
                                <h1 class="txtWhite txtCenter txt500">Vallentina</h1>
                                <h2 class="txtWhite txtCenter txt300">Daminha</h2>
                            </article>
                            <article class="person">
                                <img src="IMG/Persons/Isabela.webp" alt="" loading="lazy">
                                <h1 class="txtWhite txtCenter txt500">Isabela</h1>
                                <h2 class="txtWhite txtCenter txt300">Daminha</h2>
                            </article>
                        </div>
                </section>
            </section>
        </main>
    </body>
    <?php include('Components/footer.php') ?>
</html>