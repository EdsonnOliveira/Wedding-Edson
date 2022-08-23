<?php include('PHP/conn.php') ?>
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
                <img id="saveTheDate" src="IMG/Vector/SaveTheDate.webp" alt="" loading="lazy">
            </div>
        </section>
        <main>
            <section class="container list">
                <article class="listItem">
                    <img src="IMG/Products/cafeteira.png" alt="">
                    <h1 class="txtBlack txt800 txtCenter">Preferência<br>dos Noivos</h1>
                    <h2 class="txtBlack txt600 txtCenter">PIX de qualquer valor</h2>
                </article>
                <?php
                    $SQL = $conn->prepare('SELECT * FROM list WHERE GiverType=0');
                    $SQL->execute();
                
                    $SQList = $SQL->fetchAll();
                    foreach ($SQList as $value) {
                        $id = $value['ID'];
                        $name = $value['Name'];
                        $image = $value['Image'];
                        $price = $value['Price'];
                        $showModal = "showModal($id, '$name', '$price')";
                        
                        echo "<article class='listItem'>";
                            echo "<img src='IMG/Products/$image.webp' alt='$name'>";
                            echo "<h2 class='txtBlack txt600 txtCenter'>$name</h2>";
                            echo "<h1 class='txtBlack txt800 txtCenter'>R$ $price</h1>";
                            echo '<a class="button btBlue txtWhite txt500" onclick="' . $showModal . '">Presentear</a>';
                        echo "</article>";
                    }
                ?>
            </section>
            <section class="modalContainer">
                <div class="backdrop"></div>
                <section class="modal">
                    <h1 class="txtBlack txtCenter txt500" id="nameProduct">Cafeteira Philco </h1>
                    <form>
                        <input type="hidden" name="idProduct" value="" id="idProduct">
                        <input type="hidden" name="valueProduct" value="" id="valueProduct">
                        <input type="text" name="name" placeholder="Nome Completo" class="txt400">
                        <textarea name="message" placeholder="Mensagem" rows="5"></textarea>
                        <button class="button btBlueSecondary txtWhite" id="btInPerson">Comprar Pessoalmente</button>
                        <button class="button btGreen txtWhite">Valor no Pix</button>
                    </form>
                </section>
            </section>
        </main>
    </body>
    <?php include('Components/footer.php') ?>
</html>