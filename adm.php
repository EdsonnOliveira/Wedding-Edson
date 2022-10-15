<?php
    include('PHP/conn.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Administrador | Amanda & Edson</title>
        <?php include('Components/meta.php') ?>
        <link rel="stylesheet" href="CSS/table.css">
    </head>
    <body>
        <section class="apresentation medium" id="confirmation">
            <?php include('Components/header.php') ?>
            <div class="reception">
                <img id="gifts" src="IMG/Vector/confirmation.webp" alt="" loading="lazy">
            </div>
        </section>
        <main>
            <section class='container' style="align-items: initial">
                <h1 class='txtBlack txtCenter'>Lista de Convidados</h1>
                <?php
                    $SQL = $conn->prepare('SELECT sum(count) as qt FROM presence');
                    $SQL->execute();

                    $sum = $SQL->fetchAll();
                    foreach($sum as $value) {
                        echo "<h3 class='txtBlack txtCenter'>Total: " . $value['qt'] . "</h3>";
                    }
                ?>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome 1</th>
                            <th>Nome 2</th>
                            <th>Nome 3</th>
                            <th>Nome 4</th>
                            <th>Nome 5</th>
                            <th>Nome 6</th>
                            <th>Nome 7</th>
                            <th>Telefone</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $SQL = $conn->prepare('SELECT * FROM presence ORDER BY ID');
                        $SQL->execute();

                        $List = $SQL->fetchAll();
                        $i = 0;
                        foreach($List as $value) {
                            $i++;
                            echo "<tr>";
                                echo "<td>" . $i . "</td>";
                                echo "<td>" . $value['Name'] . "</td>";
                                echo "<td>" . $value['Name2'] . "</td>";
                                echo "<td>" . $value['Name3'] . "</td>";
                                echo "<td>" . $value['Name4'] . "</td>";
                                echo "<td>" . $value['Name5'] . "</td>";
                                echo "<td>" . $value['Name6'] . "</td>";
                                echo "<td>" . $value['Name7'] . "</td>";
                                echo "<td>" . $value['Cellphone'] . "</td>";
                            echo "</tr>";
                        }
                    ?>
                    </tbody>
                </table>
                <br><br><br>
                <h1 class='txtBlack txtCenter'>Lista de Presentes</h1><?php
                    $SQL = $conn->prepare('SELECT count(*) as qt FROM list WHERE GiverType <> 0');
                    $SQL->execute();

                    $sum = $SQL->fetchAll();
                    foreach($sum as $value) {
                        echo "<h3 class='txtBlack txtCenter'>Doados: " . $value['qt'] . "</h3>";
                    }
                ?>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Item</th>
                            <th>Preço</th>
                            <th>Nome</th>
                            <th>Mensagem</th>
                            <th>Tipo</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $SQL = $conn->prepare('SELECT * FROM list WHERE GiverType in (1,2) ORDER BY ID, GiverType DESC');
                        $SQL->execute();

                        $List = $SQL->fetchAll();
                        $i = 0;
                        foreach($List as $value) {
                            $i++;
                            echo "<tr>";
                                echo "<td>" . $i . "</td>";
                                echo "<td>" . $value['Name'] . "</td>";
                                echo "<td>" . $value['Price'] . "</td>";
                                echo "<td>" . $value['GiverName'] . "</td>";
                                echo "<td>" . $value['GiverMessage'] . "</td>";
                                echo "<td>" . $value['GiverType'] . "</td>";
                            echo "</tr>";
                        }
                    ?>
                    </tbody>
                </table>
            </section>
        </main>
    </body>
    <?php include('Components/footer.php') ?>
    <script src="JS/request.js"></script>
</html>