<?php
    include('PHP/conn.php');

    if (isset($_GET['idProduct'])) {
        $data = [$_GET['name'], $_GET['message'], $_GET['btType'], $_GET['idProduct']];
        $SQL = $conn->prepare('UPDATE list SET GiverName=?, GiverMessage=?, GiverType=? WHERE ID=?');
        $SQL->execute($data);
        header("location: list.php?success");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lista de Presentes | Amanda & Edson</title>
        <meta http-equiv="refresh" content="120">
        <?php include('Components/meta.php') ?>
        <link rel="stylesheet" href="CSS/list.css">
    </head>
    <body>
        <section class="apresentation medium">
            <?php include('Components/header.php') ?>
            <div class="recepetion">
                <img id="gifts" src="IMG/Vector/gifts.webp" alt="" loading="lazy">
            </div>
        </section>
        <main>
            <section class='container' id='pallete'>
                    <img src='IMG/Vector/pallete.webp' alt='pallete' loading='lazy' />
                    <div>
                        <article style='background: #000000'>
                            <h1 class='txt500 txtWhite'>Preto</h1>
                        </article>
                        <article style='background: #6B5245'>
                            <h1 class='txt500 txtWhite'>Marrom / Madeira</h1>
                        </article>
                        <article style='background: #686868'>
                            <h1 class='txt500 txtWhite'>Cinza / Inox</h1>
                        </article>
                        <article style='background: #FFF; border: 1px solid var(--black);'>
                            <h1 class='txt500 txtBlack'>Branco / Transparente</h1>
                        </article>
                    </div>
            </section>
            <section class="container list">
                <article class="listItem">
                    <img src="IMG/Products/pix.png" alt="" loading='lazy'>
                    <h1 class="txtBlack txt800 txtCenter">Preferência<br>dos Noivos</h1>
                    <h2 class="txtBlack txt600 txtCenter">PIX de qualquer valor</h2>
                    <a class="button btPix txtWhite txt500" onclick="showModal(0, 'Qualquer valor no PIX', '0')">Presentear</a>
                </article>
                <?php
                    $SQL = $conn->prepare('SELECT * FROM list');
                    $SQL->execute();
                
                    $SQList = $SQL->fetchAll();
                    foreach ($SQList as $value) {
                        $id = $value['ID'];
                        $name = $value['Name'];
                        $image = $value['Image'];
                        $price = $value['Price'];
                        $showModal = "showModal($id, '$name', '$price')";
                        
                        $type = $value['GiverType'] == 0 ? '' : 'disabled';
                        $text = $value['GiverType'] == 0 ? 'Presentear' : 'Presenteado!';
                        $color = $value['GiverType'] == 0 ? 'btBlue' : 'btGreen';
                        
                        echo "<article class='listItem $type'>";
                            echo "<img src='IMG/Products/$image.webp' alt='$name' loading='lazy'>";
                            echo "<h2 class='txtBlack txt600 txtCenter'>$name</h2>";
                            echo "<h1 class='txtBlack txt800 txtCenter'>R$ $price</h1>";
                            echo '<a class="button ' . $color . ' txtWhite txt500" onclick="' . $showModal . '">' . $text . '</a>';
                        echo "</article>";
                    }
                ?>
            </section>
            <section class="modalContainer">
                <div class="backdrop"></div>
                <section class="modal">
                    <form>
                        <section id="form">
                            <h1 class="txtBlack txtCenter txt500" id="nameProduct">Cafeteira Philco </h1>
                            <input type="hidden" name="idProduct" value="" id="idProduct">
                            <input type="hidden" name="valueProduct" value="" id="valueProduct">
                            <input type="text" name="name" id='name' placeholder="Nome Completo" class="txt400" required>
                            <textarea name="message" id='message' placeholder="Mensagem" rows="5" required></textarea>
                            <button type="button" name="btType" value="1" class="button btBlueSecondary txtWhite" id="btInPerson">Comprar Pessoalmente</button>
                            <button type="button" name="btType" value="2" class="button btGreen txtWhite" id="btPix">Valor no Pix</button>
                        </section>
                        <section id="inPerson">
                            <img src="IMG/Logo/Simples.webp" alt="Logo" class="imgLogo" loading='lazy'>
                            <h3 class="txtBlack txtCenter txt500" style="max-width: 400px; padding: 50px 0;">Olá,<br>
                                Vimos que você selecionou este
                                item para comprar pessoalmente.
                                Fique a vontade para comprar na loja que desejar.
                                Pedimos que contate os noivos para combinarem como será o ato de entrega.</h3>
                            <div>
                                <button type="button" name="btType" value="1" class="button btBlueSecondary txtWhite btBack">Voltar</button>
                                <button name="btType" value="1" class="button btGreen txtWhite" id="btPix">Confirmar</button>
                            </div>
                        </section>
                        <section id="pix">
                            <img src="IMG/Logo/Simples.webp" alt="Logo" class="imgLogo" loading='lazy'>
                            <h3 class="txtBlack txtCenter txt500">Para transferir o valor<span id='spanPricePix'> de <b>R$ 0,00</b></span>, leia o QR CODE abaixo,<br>
                                ou se desejar, utilize a chave Pix descrita.</h3>
                            <img src="IMG/PIX.jpeg" alt="PIX" class="imgPix" loading='lazy'>
                            <h2 class="txtBlack txtCenter txt600">Chave Pix: (61) 98411-1397</h2>
                            <h3 class="txtBlack txtCenter txt600" style="margin-top: -20px">C6 Bank | Amanda Jessy Dantas Martins</h3>
                            <div>
                                <button type="button" name="btType" value="1" class="button btBlueSecondary txtWhite btBack">Voltar</button>
                                <button name="btType" value="2" class="button btGreen txtWhite" id="btPix">Confirmar</button>
                            </div>
                        </section>
                    </form>
                </section>
            </section>
            <?php
                if (isset($_GET['success'])) {
            ?>
            <section class="modalContainer show">
                <div class="backdrop"></div>
                <section class="modal">
                    <form>
                        <section id="form" style="align-items: center; gap: 20px;">
                            <img src="IMG/Logo/Simples.webp" alt="Logo" class="imgLogo" loading='lazy'>
                            <img src="IMG/Vector/ty.png" alt="" id="ty" loading='lazy'>
                            <img src="IMG/Vector/brideGroom2.png" alt="" id="brideGroom" loading='lazy'>
                            <div>
                                <a type="button" href="list.php" class="button btBlueSecondary txtWhite btBack">Continuar na Lista</a>
                                <a name="btType" href="index.php" class="button btGreen txtWhite" id="btPix">Página Inicial</a>
                            </div>
                        </section>
                    </form>
                </section>
            </section>
            <?php } ?>
        </main>
    </body>
    <?php include('Components/footer.php') ?>
</html>