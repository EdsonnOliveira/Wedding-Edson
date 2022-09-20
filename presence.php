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
                <form method="post">
                    <label>
                        <input type="text" name="name" id='name' placeholder="Nome Completo" class="txt400" onKeyPress='keyPress(1)' required>
                        <button type="button" class="button btGreen txtWhite txt500" id="btAddInput">+</button>
                    </label>
                    <div id='inputs'></div>
                    <input type="button" name="request" class="button btBlue txtWhite txt500" value="Solicitar Confirmação">
                </form>
            </section>
        </main>
    </body>
    <?php include('Components/footer.php') ?>
    <script src="JS/request.js"></script>
</html>