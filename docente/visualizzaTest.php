<!doctype html>
<html lang="en">
<?php
    session_start(); 
    include("../configure.php");
    include("../scambio.php");


    ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Studente</title>
    <link rel="stylesheet" href="../stile.css">

</head>

<body>

    <!--inizio navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="docentephp.php"><img src="../immagini/logo.jpg" width="60px" class="img-fluid" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills">
                <li class="nav-item active">
                    <a class="nav-link navbar-name" href="./docentephp.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="../index.html">Log out</a>
                </li>

            </ul>

        </div>
    </nav>
    <!--fine navbar -->

    <div class="container">
        <div class="blu blu-text">
            <br>
            <a class="blu-text-top"><?php echo $_SESSION['nomeTest']; ?></a>
            <br><br>
            <a class="blu-text-top"><?php echo $_SESSION['descrizioneTest']; ?></a>
            <br><br>
        </div>
        <?php 
               
            $selectIDTest = "SELECT test.ID FROM test WHERE nome='".$_SESSION['nomeTest']."';";
            $rs = mysqli_query($conn, $selectIDTest);
            $idTest = mysqli_fetch_assoc($rs);

            
            $selectDom = "SELECT * FROM domande_test WHERE id_test=".$idTest['ID'].";";
            $rs = mysqli_query($conn, $selectDom);
            $maximo = mysqli_affected_rows($conn);
            $i=0;

            while ($selectIDTest = mysqli_fetch_assoc($rs)) {
                $i++;
                $stampaDom="SELECT testo FROM domande WHERE CODICE_DOM = ".$selectIDTest['id_domande'].";";
                $x = mysqli_query($conn, $stampaDom);
                
                if($x and mysqli_num_rows($x)>0){
                    $print = mysqli_fetch_assoc($x); 
                    echo $i."---> ".$print['testo']."<br>";
                    
                    $stampaRisp = "SELECT testo FROM risposte WHERE CODICE_DOM = ".$selectIDTest['id_domande'].";";
                    $y = mysqli_query($conn, $stampaRisp);

                    $j=0;
                    while ($print = mysqli_fetch_assoc($y)) {
                        $j++;
                        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$j.") ".$print['testo']." <br>";
                    }
                }
                echo "<br>";
            }
        ?>
        <div align="center">
            <button id="goBack">Torna Indietro</button>
        </div>
        
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/a0430bb508.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
    <script>
        $(document).ready(function(){
            $("#goBack").click(function() {
                history.go(-1);
            });
        });
    </script>
</body>

</html>
