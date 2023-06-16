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
        <nav id="sidebar" id="mCSB_1_container">
            <div class="sidebar-header">
                <a href="" id="showHome"><img src="../immagini/logo.jpg" width="60px" class="img-fluid" alt="Logo"></a>
            </div>

            <ul class="list-unstyled components">
                <p>Car's TRM</p>
                <li>
                    <a id="showHome">Home</a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Modifiche sistema</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a id="showAddDoc">Aggiungi docente</a>
                        </li>
                        <li>
                            <a id="showAddStu">Aggiungi Studente</a>
                        </li>
                        <li>
                            <a id="showAddAltro">Altro</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="list-unstyled CTAs">
                <li>
                    <a class="download" id="showmyaccount">My Account</a>
                </li>
                <li>
                    <a href="../login/login.html" class="article">Log out</a>
                </li>
                
                <li>
                    <a href="hack.html" class="article down" >Hack!</a>
                </li>
            </ul>
        </nav>

        <!-- Menù benvenuto -->
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

            <!-- Pagina home -->
            <div id="hometxt" >
                <div class="card text-white bg-success mb-3" style="margin: 10px; float:left">
                    <div class="card-header">Docenti attivi</div>
                    <div class="card-body">
                        <h5 class="card-title"> <?php 
                                getDocentiAttivi();
                                ?> </h5>
                        <p class="card-text" style="color: white">Numero di docenti attualmente registrati</p>
                    </div>
                </div>


                <div class="card text-white bg-danger mb-3" style="margin: 10px; float:left">
                    <div class="card-header">Studenti attivi </div>
                    <div class="card-body">
                        <h5 class="card-title"> <?php 
                                getStudentiAttivi();
                                ?> </h5>
                        <p class="card-text" style="color: white">Numero di studenti attualmente registrati</p>
                    </div>
                </div>

            </div>
            <!-- Aggiungere un docente -->
            <div id="addDoctxt" style="display: none">
                <form method="post">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Nome</h5>
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome del docente" required>
                                </div>

                            </blockquote>
                        </div>
                    </div><br>


                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Cognome</h5>
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="cognome" name="cognome" placeholder="Cognome del docente" required>
                                </div>

                            </blockquote>
                        </div>
                    </div><br>

                    <label for="floatingInput">Classi</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="classe1">
                        <label class="form-check-label" for="inlineCheckbox1"><?php echo $_SESSION["classe1"]; ?></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="classe2">
                        <label class="form-check-label" for="inlineCheckbox1"><?php echo $_SESSION["classe2"]; ?></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="classe3">
                        <label class="form-check-label" for="inlineCheckbox1"><?php echo $_SESSION["classe3"]; ?></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="classe4">
                        <label class="form-check-label" for="inlineCheckbox1"><?php echo $_SESSION["classe4"]; ?></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="classe5">
                        <label class="form-check-label" for="inlineCheckbox1"><?php echo $_SESSION["classe5"]; ?></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="classe6">
                        <label class="form-check-label" for="inlineCheckbox1"><?php echo $_SESSION["classe6"]; ?></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="classe7">
                        <label class="form-check-label" for="inlineCheckbox1"><?php echo $_SESSION["classe7"]; ?></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="classe8">
                        <label class="form-check-label" for="inlineCheckbox1"><?php echo $_SESSION["classe8"]; ?></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="classe9">
                        <label class="form-check-label" for="inlineCheckbox1"><?php echo $_SESSION["classe9"]; ?></label>
                    </div>

                    <br> <label for="floatingInput">Materie</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="materia1">
                        <label class="form-check-label" for="inlineCheckbox1"><?php echo $_SESSION["materia1"]; ?></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="materia2">
                        <label class="form-check-label" for="inlineCheckbox1"><?php echo $_SESSION["materia2"]; ?></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="materia3">
                        <label class="form-check-label" for="inlineCheckbox1"><?php echo $_SESSION["materia3"]; ?></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="materia4">
                        <label class="form-check-label" for="inlineCheckbox1"><?php echo $_SESSION["materia4"]; ?></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="materia5">
                        <label class="form-check-label" for="inlineCheckbox1"><?php echo $_SESSION["materia5"]; ?></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="materia6">
                        <label class="form-check-label" for="inlineCheckbox1"><?php echo $_SESSION["materia6"]; ?></label>
                    </div>



                    <div><br></div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Password</h5>
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="password" name="password" placeholder="Password" required>
                                </div>

                            </blockquote>
                        </div>
                    </div><br>

                    <input type="submit" name="okdoc" value="Ok"><br><br><br>



                </form>

            </div>
            <!-- Aggiungere uno studente -->
            <div id="addStutxt" style="display: none">

                <form method="post">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Nome</h5>
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome dello studente" required>
                                </div>

                            </blockquote>
                        </div>
                    </div><br>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Cognome</h5>
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="Cognome" name="Cognome" placeholder="Cognome dello studente" required>
                                </div>

                            </blockquote>
                        </div>
                    </div><br>




                    <div><br></div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Paswword</h5>
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Password dello studente" required>
                                </div>

                            </blockquote>
                        </div>
                    </div><br>
                    <!-- Default dropright button -->
                    <select name="classi">
                        <?php

                            $query = "SELECT * FROM classi;";
                            $rs = mysqli_query($conn, $query);
                            while($row = mysqli_fetch_assoc($rs)){
                                echo "<option value=" . $row['ID'] . ">" . $row['classe'] . "</option>";
                            }
                            //tiri giù classi e ti da l id della classe selezionata

                            ?>
                    </select><br><br>




                    <input type="submit" name="okstu" value="Ok"><br><br><br>



                </form>

            </div>
            <!-- Aggiungere materie o classi -->
            <div id="altrotxt" style="display: none">


                <form method="POST">

                    <div class="col-sm-6" style="float:left">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Aggiungi materia</h5>
                                <blockquote class="blockquote mb-0">
                                    <div class="input-group mb-3">
                                        <input class="form-control" type="text" placeholder="Materia" name="materiaddtxt" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="materiadd">ADD</button>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </form>



                <form method="post" action="../scambio.php">
                    <div class="col-sm-6" style="float: left">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Aggiungi classe</h5>
                                <blockquote class="blockquote mb-0">
                                    <div class="input-group mb-3">
                                        <input class="form-control" type="text" placeholder="Classe" name="classeaddtxt" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="classeadd">ADD</button>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </form>


            </div>
            <!-- Visualizzazione account -->
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


            </div>


        </div>

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
<!-- script per far comparire scomparire oggetti dei menù -->
    <script>
        $(document).ready(function() {
            $("#showAddDoc").click(function() {
                $("#hometxt").hide();
                $("#addStutxt").hide();
                $("#altrotxt").hide();
                $("#addDoctxt").show();
                $("#myaccount").hide();

            });

            $("#showAddStu").click(function() {
                $("#hometxt").hide();
                $("#addStutxt").show();
                $("#altrotxt").hide();
                $("#addDoctxt").hide();
                $("#myaccount").hide();
            });

            $("#showAddAltro").click(function() {
                $("#hometxt").hide();
                $("#addStutxt").hide();
                $("#altrotxt").show();
                $("#addDoctxt").hide();
                $("#myaccount").hide();
            });

            $("#showHome").click(function() {
                $("#hometxt").show();
                $("#addStutxt").hide();
                $("#altrotxt").hide();
                $("#addDoctxt").hide();
                $("#myaccount").hide();
            });
            $("#showmyaccount").click(function() {
                $("#hometxt").hide();
                $("#addStutxt").hide();
                $("#altrotxt").hide();
                $("#addDoctxt").hide();
                $("#myaccount").show();
            });
        });
    </script>
</body>

</html>