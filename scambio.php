<?php

include("configure.php");

global $conn;

if(isset($_POST['okdoc'])){

    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $pw = $_POST['password'];




    // if (isset($_POST['classe1'])) {
    //  $ID = 1;  È DA FARE L UPGRADE e da fare anche materie!
    //     $query = "INSERT INTO classi_doc (ID, id_doc) VALUES('".$ID."',)"
    //         mysqli_query($conn, $addRisp);   
    // }

    $query = "INSERT INTO docenti (nome,cognome,pw) VALUES ('".$nome."','".$cognome."','".$pw."');";
    mysqli_query($conn, $query);   

}

if(isset($_POST['okstu'])){

    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $pw = $_POST['password'];




    // if (isset($_POST['classe1'])) {
    //  $ID = 1;  È DA FARE L UPGRADE e da fare anche materie!
    //     $query = "INSERT INTO classi_doc (ID, id_doc) VALUES('".$ID."',)"
    //         mysqli_query($conn, $addRisp);   
    // }

    $query = "INSERT INTO studenti (nome,cognome,pw) VALUES ('".$nome."','".$cognome."','".$pw."');";
    mysqli_query($conn, $query);   

}

function deletetask($i){
    global $conn;
    $query = "UPDATE domande SET eliminata = 1 WHERE CODICE_DOM = ".$i.";";
    mysqli_query($conn, $query);
    echo "<script type='text/javascript'>alert('Domanda eliminata con successo');</script>";
}

function recoverytask($i){
    global $conn;
    $query = "UPDATE domande SET eliminata = 0 WHERE CODICE_DOM = ".$i.";";
    mysqli_query($conn, $query);
    echo "<script type='text/javascript'>alert('Domanda recuperata con successo');</script>";

}




function starter(){
    global $conn;
    for ($i = 1; $i <= 9; $i++) {
        $query = "SELECT classe FROM classi WHERE id = ".$i.";";
        $rs = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($rs);
        $_SESSION['classe'.$i] = $row['classe'];
    }

    for ($i = 1; $i <= 6; $i++) {
        $query = "SELECT materia FROM materie WHERE id = ".$i.";";
        $rs = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($rs);
        $_SESSION['materia'.$i] = $row['materia'];
    }
}


if(isset($_POST['materiadd'])){
    $query = "INSERT INTO materie(materia) VALUES ('".$_POST['materiaddtxt']."');";
    $rs = mysqli_query($conn,$query);
    echo "<script type='text/javascript'>alert('Materia aggiunta');</script>";
}

if(isset($_POST['classeadd'])){
    $query = "INSERT INTO classi(classe) VALUES ('".$_POST['classeaddtxt']."');";
    mysqli_query($conn,$query);
    echo "<script type='text/javascript'>alert('Classe aggiunta');</script>";
}


function getDocentiAttivi(){
    global $conn;
    $query = "SELECT Count(*) AS num FROM docenti;";
    $rs = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($rs);
    echo $row['num'];
}

function getStudentiAttivi(){
    global $conn;
    $query = "SELECT Count(*) AS num FROM studenti;";
    $rs = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($rs);
    echo $row['num'];
}


function returndomanda($indice){
    echo "<script type='text/javascript'>alert(".$indice.");</script>";
    global $conn;
    $query = "SELECT testo FROM domande WHERE CODCE_DOM =".$indice."; ";
    $rs = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($rs);
    return $row['testo'];
}

function supp($i){
    return $i;
}

?>