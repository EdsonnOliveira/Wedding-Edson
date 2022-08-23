<?php
    date_default_timezone_set('Brazil/east');

    try {
        $conn = new PDO('mysql:host=mysql995.umbler.com;port=41890;dbname=amandaeedson','amandaeedson','jedbiw-6fitmu-myHnuz');

    } catch (PDOException $e) {
        echo $e;
        die();
    }
?>