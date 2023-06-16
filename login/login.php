<?php
include("../configure.php");
session_start();
global $conn;


if(isset($_POST['button'])){
    $myusername = $_POST['username'];
    $mypassword = $_POST['password']; 
    $type = cercaUtente($myusername,$mypassword);
    $header = "Location: ";

    if($type>0){
        switch($type){
            case 1:

                $header.= "../admin/adminphp.php";
                SessionTable($myusername,$mypassword,$type);
                break;
            case 2:
                $header.= "../docente/docentephp.php";
                SessionTable($myusername,$mypassword,$type);
                break;

            case 3:
                $header.= "../studente/studentephp.php";
                SessionTable($myusername,$mypassword,$type);
                break;
        }
    }

    header($header);

}  




function cercaUtente($myusername,$mypassword){
    global $conn;
    $query1 = "SELECT * FROM admin WHERE nome = '".$myusername."' and pw = '".$mypassword."';";
    $query2 = "SELECT * FROM docenti WHERE nome = '".$myusername."' and pw = '".$mypassword."';";
    $query3 = "SELECT * FROM studenti WHERE nome = '".$myusername."' and pw = '".$mypassword."';";

    if($rs = mysqli_query($conn,$query1) and mysqli_num_rows($rs)>0){

        return 1;
    }
    if($rs = mysqli_query($conn,$query2) and mysqli_num_rows($rs)>0){
        return 2;
    }
    if($rs = mysqli_query($conn,$query3) and mysqli_num_rows($rs)>0){
        return 3;
    }
    return -1;
}

function SessionTable($myusername,$mypassword, $type){
    global $conn;

    if($type == 1){
        $query = "SELECT * FROM admin WHERE nome = '$myusername' and pw = '$mypassword';";
        $rs = mysqli_query($conn,$query);

    }
    if($type == 2){
        $query = "SELECT * FROM docenti WHERE nome = '$myusername' and pw = '$mypassword';";
        $rs = mysqli_query($conn,$query);
    }
    if($type == 3){
        $query = "SELECT * FROM studenti WHERE nome = '$myusername' and pw = '$mypassword';";
        $rs = mysqli_query($conn,$query);
    }
    
   $row = mysqli_fetch_assoc($rs);


        $ID = $row['ID'];
        $cognome = $row['cognome'];
        $classi = $row['classi'];
        $materie = $row['materie'];




    $_SESSION["ID"] =  $ID;
    $_SESSION["cognome"] =  $cognome;
    $_SESSION["classi"] =  $classi;
    $_SESSION["materie"] =  $materie;
    $_SESSION["nome"] =  $myusername;
    $_SESSION["pw"] =  $mypassword;

    
   










}

?>


