<!doctype html>
<html lang="en">
    <?php
    session_start(); 
    include("../configure.php");
    include("../scambio.php");
    starter();
    ?>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Studente</title>
        <link rel="stylesheet" href="../stile.css">

        <!-- Font Awesome JS -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    </head>

    <body>

        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" id="mCSB_1_container"><!-- nav, menù -->
                <div class="sidebar-header">
                    <a href="" id="showHome"><img src="../immagini/logo.jpg" width="60px" class="img-fluid" alt="Logo"></a>
                </div>

                <ul class="list-unstyled components">
                    <p>Car's TRM</p>
                    <li>
                        <a id="showHause">Home</a>
                    </li>

                    <li>
                        <a id="showDoTest">Esegui test</a>
                    </li>
                    <li>
                        <a id="showStoricoTest">Storico test</a>
                    </li>
                    <li>
                        <a id="showAltro">Altro</a>
                    </li>


                </ul>
                <ul class="list-unstyled CTAs">
                    <li>
                        <a class="download" id="showmyaccount">My Account</a>
                    </li>
                    <li>
                        <a href="../login/login.html" class="article">Log out</a>
                    </li>


                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #6d7fcc">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="navbar-btn" style="background-color:#6d7fcc">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-align-justify"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="nav navbar-nav ml-auto">

                                <div class="nav-link active" href="#" style="margin-right: 10px">
                                    Benvenuto <a class="blu-text-top"><?php echo $_SESSION["nome"]; ?></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </nav>


                <!--INIZIO PAGINA --> 
                <div id="hometxt" >
                    <div class="card border-primary mb-3" style="max-width: 18rem; margin: 10px; float:left">
                        <div class="card-header">Test finiti</div>
                        <div class="card-body text-primary">
                            <h5 class="card-title"> <!-- php test rimanenti --> <?php 

                                ?> </h5>
                            <p class="card-text">Test completati con risultato </p>
                        </div>
                    </div>

                    <div class="card border-danger mb-3" style="max-width: 18rem; margin: 10px; float:left">
                        <div class="card-header">Test da esegiure</div>
                        <div class="card-body text-danger"> 
                            <h5 class="card-title"><!-- php test rimanenti --> <?php 

                                ?> </h5>

                            <p class="card-text">Test rimanenti da completare</p>
                        </div>
                    </div>
                </div> <!--home  -->
                <div id="dotesttxt" style="display: none">


                </div> <!-- eseguire un test -->
                <div id="storicotesttxt" style="display: none">


                </div> <!-- Storico test -->
                <div id="altrotxt" style="display: none">



                </div> <!-- Altre azioni -->
                <div id="myaccount" style="display: none">

                    <form class="needs-validation" novalidate>
                        <legend>Dati account corrente</legend>
                        <fieldset disabled>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Nome</label>
                                    <input type="text" class="form-control" id="validationCustom01" value="<?php echo $_SESSION["nome"]; ?>">

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">Cognome</label>
                                    <input type="text" class="form-control" id="validationCustom02" value="<?php echo $_SESSION["cognome"]; ?>" required>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom03">Password</label>
                                    <input type="text" class="form-control" id="validationCustom03" value="<?php echo $_SESSION["pw"]; ?>">

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationCustom04">State</label>
                                    <select class="custom-select" id="validationCustom04" required>
                                        <option selected disabled value="">Non impostato</option>
                                        <option>...</option>
                                    </select>

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationCustom05">ID universale</label>
                                    <input type="text" class="form-control" id="validationCustom05" value="<?php echo $_SESSION["ID"]; ?>">

                                </div>
                            </div>
                        </fieldset>
                    </form><br><br><br>
                    <div class="p-3 mb-2 bg-danger text-white">Questi campi non sono modificabili</div>


                </div><!-- Dati sccount log -->



            </div>

            <!-- jQuery CDN - Slim version (=without AJAX) -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <!-- Popper.JS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
            <!-- Bootstrap JS -->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

            <script type="text/javascript">
                $(document).ready(function() {
                    $('#sidebarCollapse').on('click', function() {
                        $('#sidebar').toggleClass('active');
                        $(this).toggleClass('active');
                    });
                });
            </script>
<!-- Mostra/nascondi le varie scehrmate del menù -->
            <script>
                $(document).ready(function() {
                    $("#showDoTest").click(function() {
                        $("#hometxt").hide();
                        $("#storicotesttxt").hide();
                        $("#altrotxt").hide();
                        $("#dotesttxt").show();
                        $("#myaccount").hide();

                    });

                    $("#showStoricoTest").click(function() {
                        $("#hometxt").hide();
                        $("#storicotesttxt").show();
                        $("#altrotxt").hide();
                        $("#dotesttxt").hide();
                        $("#myaccount").hide();
                    });

                    $("#showAltro").click(function() {
                        $("#hometxt").hide();
                        $("#storicotesttxt").hide();
                        $("#altrotxt").show();
                        $("#dotesttxt").hide();
                        $("#myaccount").hide();
                    });

                    $("#showHause").click(function() {
                        $("#hometxt").show();
                        $("#storicotesttxt").hide();
                        $("#altrotxt").hide();
                        $("#dotesttxt").hide();
                        $("#myaccount").hide();
                    });
                    $("#showmyaccount").click(function() {
                        $("#hometxt").hide();
                        $("#storicotesttxt").hide();
                        $("#altrotxt").hide();
                        $("#dotesttxt").hide();
                        $("#myaccount").show();
                    });
                });
            </script>
            </body>

        </html>