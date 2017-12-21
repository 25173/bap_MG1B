<?php

    // KLASGENOOT-DATA BINNENHALEN
    $voornaam = $_POST['voornaam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $woonplaats =$_POST['woonplaats'];
    $klas = $_POST['klas'];
    $email =$_POST['email'];
    $trn_date = date("Y-m-d H:i:s");

    // DATABASE-VARIABELEN AANMAKEN (LET OP: VERANDER JE DATABASENAAM)
    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $database = '25173_db';

    // CONNECTIE MAKEN
    $dbc = mysqli_connect($host,$user,$password,$database,3306) or die ('Er is geen connectie met de database. Check je databasevariabelen.');

    // QUERY (OPDRACHT) SCHRIJVEN
    $query = "INSERT into 25173_db.klasgenoten (naam,tussenvoegsel,achternaam,woonplaats,klas,klasgenoot_id,email)
              VALUES ('$voornaam','$tussenvoegsel','$achternaam','$woonplaats','$klas',0,'$email')";

    // QUERY UITVOEREN
    $result = mysqli_query($dbc,$query) or die("error querying database");
    // CONNECTIE SLUITEN
    $dbc_closed = $dbc;

    // GEBRUIKER TERUG STUREN NAAR DE INDEX-PAGINA
    header("Location: index.php");
