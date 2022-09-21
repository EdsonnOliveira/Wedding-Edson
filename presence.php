<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Confirmar Presença | Amanda & Edson</title>
        <?php include('Components/meta.php') ?>
        <link rel="stylesheet" href="CSS/presence.css">
    </head>
    <body>
        <section class="apresentation medium" id="confirmation">
            <?php include('Components/header.php') ?>
            <div class="reception">
                <img id="gifts" src="IMG/Vector/gifts.webp" alt="" loading="lazy">
            </div>
        </section>
        <main>
            <section class='container'>
                <img src='IMG/Vector/requestConfirmation.webp' alt='pallete' loading='lazy' />
                <?php
                    if (!isset($_POST['confirm'])) {
                ?>
                <form method="post">
                    <input type="password" name="password" placeholder="Insira a Senha" class="txt400" required>
                    <input type="submit" name="confirm" class="button btBlue txtWhite txt500" value="Confirmar">
                </form>
                <?php
                    } else if ($_POST['password'] == 'AJDM&EPO22') {
                ?>
                <form method="post">
                    <label>
                        <input type="text" name="name" id='name' placeholder="Nome Completo" class="txt400" onKeyPress='keyPress(1)' required>
                        <button type="button" class="button btGreen txtWhite txt500" id="btAddInput">+</button>
                    </label>
                    <div id='inputs'></div>
                    <input type="submit" name="request" class="button btBlue txtWhite txt500" value="Solicitar Confirmação">
                </form>
                <?php
                    } else {
                ?>
                <form method="post">
                    <input type="password" name="password" placeholder="Insira a Senha" class="txt400" required>
                    <h3 class="txtRed txt500">* Senha incorreta, tente novamente</h3>
                    <input type="submit" name="confirm" class="button btBlue txtWhite txt500" value="Confirmar">
                </form>
                <?php
                    }
                ?>
            </section>
        </main>
    </body>
    <?php include('Components/footer.php') ?>
    <script src="JS/request.js"></script>
</html>