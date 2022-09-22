<?php
    include('PHP/conn.php');

    if (isset($_POST['request'])) {
        $columns = 'Name';
        $values = '?';
        $data = [$_POST['name']];

        if ($_POST['count'] >= 2) {
            $columns = $columns . ', Name2';
            $values = $values . ', ?';
            array_push($data, $_POST['name2']);
        }
        if ($_POST['count'] >= 3) {
            $columns = $columns . ', Name3';
            $values = $values . ', ?';
            array_push($data, $_POST['name3']);
        }
        if ($_POST['count'] >= 4) {
            $columns = $columns . ', Name4';
            $values = $values . ', ?';
            array_push($data, $_POST['name4']);
        }
        if ($_POST['count'] >= 5) {
            $columns = $columns . ', Name5';
            $values = $values . ', ?';
            array_push($data, $_POST['name5']);
        }
        if ($_POST['count'] >= 6) {
            $columns = $columns . ', Name6';
            $values = $values . ', ?';
            array_push($data, $_POST['name6']);
        }
        if ($_POST['count'] == 7) {
            $columns = $columns . ', Name7';
            $values = $values . ', ?';
            array_push($data, $_POST['name7']);
        }

        $columns = $columns . ', Count, Cellphone';
        array_push($data, $_POST['count'], $_POST['cellphone']);
        $values = $values . ', ?, ?';
        
        $SQL = $conn->prepare('INSERT INTO presence ('.$columns.') VALUES ('.$values.')');
        $SQL->execute($data);
        header("location: presence.php?success");
    }
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
                <img id="gifts" src="IMG/Vector/confirmation.webp" alt="" loading="lazy">
            </div>
        </section>
        <main>
            <section class='container'>
                <?php
                    if (isset($_GET['success'])) {
                        header('location: https://api.whatsapp.com/send?phone=5561982030380&text=Olá%20Edson,%20como%20está?%20Passando%20para%20informar%20que%20acabei%20de%20solicitar%20a%20confirmação%20de%20presença%20do%20seu%20casamento%20no%20site.%20Por%20gentileza,%20pode%20verificar?');
                ?>
                    <img src='IMG/Vector/atention.webp' alt='Atention' loading='lazy' />
                    <article class="boxShadow">
                        <h2 class='txtBlack txtCenter txt400'>Agradecemos imensamente por solicitar confirmação de presença no nosso casamento.<br>
                            Em breve, nós (noivos) validaremos s solicitação através da mensagem enviada ao WhatsApp.<br>
                            Pedimos encarecidamente, que caso depois de confirmado, você não consiga comparecer ao evento, comunique imediatamente um de nós.<br>
                            Esperamos você na festa!</h2>
                    </article>
                    <a href="index.php" class="button btGreen txtWhite">Página Inicial</a>
                    <!-- <script>
                        window.open('https://api.whatsapp.com/send?phone=5561982030380&text=Olá%20Edson,%20como%20está?%20Passando%20para%20informar%20que%20acabei%20de%20solicitar%20a%20confirmação%20de%20presença%20do%20seu%20casamento%20no%20site.%20Por%20gentileza,%20pode%20verificar?',
                                    '_blank')
                    </script> -->
                <?php
                    } else {
                ?>
                <img src='IMG/Vector/requestConfirmation.webp' alt='Confirmation' loading='lazy' id='imgConfirmation' />
                <form method="post">
                    <label>
                        <input type="text" name="name" id='name' placeholder="Nome Completo" class="txt400" required>
                        <button type="button" class="button btGreen txtWhite txt500" id="btAddInput">+</button>
                    </label>
                    <input type="hidden" name='count' id="count" value='1'>
                    <div id='inputs'></div>
                    <label>
                        <input type="text" name="cellphone" id='cellphone' placeholder="Número de Celular" class="txt400" required>
                    </label>
                    <input type="submit" name="request" class="button btBlue txtWhite txt500" value="Solicitar Confirmação">
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