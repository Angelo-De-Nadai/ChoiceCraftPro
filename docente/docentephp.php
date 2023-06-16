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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../stile.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Nav laterale -->
        <nav id="sidebar" id="mCSB_1_container">
            <div class="sidebar-header">
                <a id="showHomeimg"><img src="../immagini/logo.jpg" width="60px" class="img-fluid" alt="Logo"></a>
            </div>
            <ul class="list-unstyled components">
                <p>Car's TRM</p>
                <li class="active">
                    <a id="showHome">Home</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Domande</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a id="showlistadomande">Lista Domande</a>
                        </li>
                        <li>
                            <a id="showadddomanda">Aggiungi domanda</a>
                        </li>
                        <li>
                            <a id="showdeletedask">Domande eliminate</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a id="showshowtest">Visualizza test</a>
                </li>
                <li>
                    <a id="showcreatest">Crea test</a>
                </li>
            </ul>
            <ul class="list-unstyled CTAs">
                <li>
                    <a id="showmyaccount" class="download">My Account</a>
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
                            <div class="nav-link active" href="#">
                                Le tua classe è <a class="blu-text-top"><?php echo $_SESSION["classi"]; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div id="myhome"></div>
            <!-- Visualizzazione home -->
            <div id="adddomanda" style="display: none">
                <form method="post">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Domanda</h5>
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" name="domanda" required>
                                </div>
                                <footer class="blockquote-footer">Specifica la domanda del quesito</footer>
                            </blockquote>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Risposta 1</h5>
                                    <blockquote class="blockquote mb-0">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input type="checkbox" aria-label="Checkbox for following text input" value="risposta1" name="risp1">
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Text input with checkbox" name="risposta1" required>
                                        </div>
                                        <footer class="blockquote-footer">Specifica la prima possibile risposta</footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Risposta 2</h5>
                                    <blockquote class="blockquote mb-0">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input type="checkbox" aria-label="Checkbox for following text input" value="risposta2" name="risp2">
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Text input with checkbox" name="risposta2" required>
                                        </div>
                                        <footer class="blockquote-footer">Specifica la seconda possibile risposta</footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Risposta 3</h5>
                                    <blockquote class="blockquote mb-0">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input type="checkbox" aria-label="Checkbox for following text input" value="risposta3" name="risp3">
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Text input with checkbox" name="risposta3">
                                        </div>
                                        <footer class="blockquote-footer">Specifica la terza possibile risposta</footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Risposta 4</h5>
                                    <blockquote class="blockquote mb-0">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input type="checkbox" aria-label="Checkbox for following text input" value="risposta" name="risp4">
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Text input with checkbox" name="risposta4">
                                        </div>
                                        <footer class="blockquote-footer">Specifica la quarta possibile risposta</footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <input type="submit" id="okask1" name="ok" value="Ok"><br><br><br>
                </form>
                <?php  
                  global $conn;
                  if(isset($_POST['ok'])){
                      $addDomanda = "INSERT INTO domande (testo) VALUES('".$_POST['domanda']."');";
                      mysqli_query($conn, $addDomanda);
                      $last_id = mysqli_insert_id($conn);
                  
                  
                      for($i = 1; $i<5; $i++){
                          if($_POST["risposta".$i]!=""){
                              echo $i;
                              if (isset($_POST['risp'.$i])){ 
                                  $addRisp = "INSERT INTO risposte (CODICE_DOM, testo, corretto) VALUES('".$last_id."','".$_POST["risposta".$i]."',1);";
                              }
                              else{ 
                                  $addRisp = "INSERT INTO risposte (CODICE_DOM, testo, corretto) VALUES('".$last_id."','".$_POST["risposta".$i]."',0);";
                              }
                              mysqli_query($conn, $addRisp);                       
                          }
                      }   
                  }
                  ?>
            </div>
            <!-- Aggiungere una domanda -->
            <div id="listadomande">
                <form method="post" id="listdomande">
                    <!--
                    <div id="search_box" style=" padding-top: 10px;padding-bottom: 10px; background-color: #f5f5f5;">
                        <center>
                            <form method='get' action='fetch.php'>
                                <input type="text" name="get_val" id="find" placeholder="Enter Your Text Here">
                                <input type="submit" name="search" id="search" value="Search">
                            </form>
                            <div id="search_items">
                            </div>
                        </center>
                    </div>
                    -->

                    <!--print elenco domande e risposte + logo delete e edit-->
                    <div class="row" style="margin-top: 10px;margin-bottom: 10px">
                        <div class="col-1 text-center">
                            #
                        </div>
                        <div class="col-10">
                            Domande
                        </div>
                        <div class="col-1 text-right">
                            Actions
                        </div>
                    </div>

                    <div id="accordion">
                        <?php    
                     $query = "SELECT MAX(CODICE_DOM) FROM domande;";
                     $result= mysqli_query($conn,$query);
                     $row = mysqli_fetch_assoc($result); 
                     $maximum = $row['MAX(CODICE_DOM)'];
                     $x=1;
                   
                     //ciclo domande e risposte 
                     for($i = 1; $i <= $maximum; $i++){
                     
                         $stampaDom = "SELECT testo FROM domande WHERE CODICE_DOM = ".$i." AND eliminata = 0;";
                         $rs = mysqli_query($conn, $stampaDom);
                     
                         if($rs and mysqli_num_rows($rs)>0){
                             $print = mysqli_fetch_assoc($rs); 
                            //stampa riga domanda
                             echo ' 
                             <div id="domanda-'.$i.'">
                                <div class="card">
                                    <div class="card-header" id="heading'.$i.'" style="padding:0px; border-bottom:0px;">
                             
                                        <div class="row" style=" background-color: #f5f5f5;border-bottom: 1px solid #e1e1e1; padding-top:10px; padding-bottom:10px;">
                                            <div class="col-1 text-center" > 
                                                '.$x++.'
                                            </div> 
                                        <div class="col-10">                                 
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse'.$i.'" aria-expanded="true" aria-controls="collapse'.$i.'">
                                            <div class=" domanda-value">'
                                                .$print['testo'].'
                                            </div>
                                        </div> 
                                        <div class="col-1 text-right"> 
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" data-backdrop="false" onclick="fetchpopupdata('.$i.')" name="popup'.$i.'" id='.$i.' style="background-color: #6d7fcc">
                                            &#9998;
                                            </button>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div id="collapse'.$i.'" class="collapse" aria-labelledby="heading'.$i.'" data-parent="#accordion">
                            <div class="card-body" style="padding:0px">
                            <div class="row" style="padding-top:10px; padding-bottom:10px;"><div class="col-1"> 
                            </div>';
                             
                             $stampaRisp = "SELECT testo, ID_RISP FROM risposte WHERE CODICE_DOM = ".$i.";";
                             $rs = mysqli_query($conn, $stampaRisp);
                             $j = 0;
                             //ciclo print risposte
                             while ( $print = mysqli_fetch_assoc($rs)) {
                                 $j++;
                                 echo '<div class="col row"> &nbsp'.$j.')<div class="risposta">'.$print['testo'].'</div></div> ';
                             }
                             echo "</div></div></div></div>";
                             $stampaRisp = "SELECT testo, ID_RISP FROM risposte WHERE CODICE_DOM = ".$i.";";
                             $rs = mysqli_query($conn, $stampaRisp);
                             $print= mysqli_fetch_assoc($rs);
                             echo "<input type='hidden' value=".$print['ID_RISP']." name='id-1risposta' id='risposta-$i'>";
                         }
                     }
                     ?>
                    </div>
                    
                    
                    <br><br><br><br>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" name="search_box" id="search_box" class="form-control" placeholder="Testo Domanda" /><br><br>
                            </div>
                            <div class="table-responsive" id="dynamic_content"></div>
                        </div>
                    </div>
                   







                    <!-- ----------------Simulazione codice reale lista domande --------------- 
                  <div id="accordion">
                      <div class="card">
                          <div class="card-header" id="heading'.$i.'">
                              <h5 class="mb-0">
                          <div class="row  id='domanda-$i'" style="background-color: #E0E0E0; padding-top:10px; padding-bottom:10px;">
                              <div class="col-1" >
                                  #
                              </div>
                              <div class="col-10">
                                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapse" aria-expanded="true" aria-controls="collapse">
                                      doamnda</button>
                              </div>
                              <div class="col-1" >
                                  <button>bottone</button>
                              </div>
                              </div>
                              </h5>
                          </div>
                      </div>
                      <div id="collapse" class="collapse show" aria-labelledby="heading'.$i.'" data-parent="#accordion">
                          <div class="card-body">
                              <div class="row" style="padding-top:10px; padding-bottom:10px;">
                                  <div class="col-1"> </div>
                                  <div class="col" style="font-weight:lighter";>
                                      risposta1
                                  </div>
                                  <div class="col" style="font-weight:lighter";>
                                      risposta2
                                  </div>
                              </div>
                          </div>
                       </div>
                  </div>
                  -->

                </form>
            </div>
            <!--  Visualizzazione delle domande -->
            <div id="listadomandeEliminate" style="display: none">
                <form method="post">

                    <!--print elenco domande eliminate + pulsante recovery-->
                    <div class="row" style="margin-top: 10px;margin-bottom: 10px">
                        <div class="col-1 text-center">
                            #
                        </div>
                        <div class="col-10">
                            Domande
                        </div>
                        <div class="col-1 text-right">
                            Recovery
                        </div>
                    </div>


                    <?php    
                     $query = "SELECT MAX(CODICE_DOM) FROM domande;";
                     $result= mysqli_query($conn,$query);
                     $row = mysqli_fetch_assoc($result); 
                     $maximum = $row['MAX(CODICE_DOM)'];
                     $x = 1;
                     
                     for($i = 1; $i <= $maximum; $i++){
                     
                         $stampaDom = "SELECT testo FROM domande WHERE CODICE_DOM = ".$i." AND eliminata = 1;";
                         $rs = mysqli_query($conn, $stampaDom);
                     
                         if($rs and mysqli_num_rows($rs)>0){
                           
                            $print = mysqli_fetch_assoc($rs); 
            
                             echo ' 
                             
                                <div class="row" style=" background-color: #f5f5f5;border-bottom: 1px solid #e1e1e1; padding-top:10px; padding-bottom:10px;">
                                    <div class="col-1 text-center" > 
                                        '.$x++.'
                                    </div> 
                                    <div class="col-10" style="color: #007bff">                                 
                                        '
                                                .$print['testo'].
                                            '
                                        
                                    </div> 
                                    <div class="col-1 text-right"> 
                                        <input type= "submit" name="recoverytask'.$i.'" value="&#10226" style="background-color:#6d7fcc">
                                        </div>
                                    </div>
                            
                            <div class="row" style="padding-top:10px; padding-bottom:10px;"><div class="col-1"> 
                            </div>';
                             
                             $stampaRisp = "SELECT testo FROM risposte WHERE CODICE_DOM = ".$i.";";
                             $rs = mysqli_query($conn, $stampaRisp);
                             $j = 0;
                             while ( $print = mysqli_fetch_assoc($rs)) {
                                 $j++;
                                 echo '<div class="col row"> &nbsp'.$j.')<div class="risposta">'.$print['testo'].'</div></div> ';
                             }
                             echo "</div>";

                         }
                         if(isset($_POST['recoverytask'.$i])){
                             recoverytask($i);
                         }
                     
                     }
                     
                     ?>

                </form>
            </div>
            <!-- Visualizzazione domande eliminate -->
            <div id="createst" style="display: none">
                <form method="post">
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Titolo Test</label>
                        <input class="form-control" id="exampleFormControlInput1" placeholder="Prima Guerra Mondiale" name="titoloTest">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Descrizione Test</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descrizione Test (Max 250 caratteri)" name="descrizioneTest"></textarea>
                    </div>
                    <?php 
                     $query = "SELECT MAX(CODICE_DOM) AS maximo FROM domande;";
                     $result= mysqli_query($conn,$query);
                     $row = mysqli_fetch_assoc($result); 
                     $maximum = $row['maximo'];
                     for($i = 1; $i <= $maximum; $i++){
                         $stampaDom = "SELECT testo FROM domande WHERE CODICE_DOM = ".$i.";";
                         $rs = mysqli_query($conn, $stampaDom);
                         if($rs and mysqli_num_rows($rs)>0){
                             echo "<div class=\"form-check\">
                         <input class=\"form-check-input\" type=\"checkbox\" id=\"flexCheckDefault\" name=\"checkbox".$i."\">
                         <label class=\"form-check-label\" for=\"flexCheckDefault\">";
                             $print = mysqli_fetch_assoc($rs); 
                             echo "---> ".$print['testo'];
                             echo "<br>";
                             echo "</label> 
                     </div>";
                         }
                     }
                     ?>
                    Seleziona Materia: &nbsp;
                    <select name="materie" id="materie">
                        <?php
                     $query = "SELECT * FROM materie;";
                     $rs = mysqli_query($conn, $query);
                     while($row = mysqli_fetch_assoc($rs)){
                         echo "<option value=" . $row['materia'] . ">" . $row['materia'] . "</option>";
                     }
                     //tiri giù materie
                     ?>
                    </select>
                    <br><br>
                    <input type="submit" name="creaTest" value="Crea Test" />
                    <?php
                     if(isset($_POST['creaTest'])){
                     
                         $materia=$_POST["materie"];
                         $titoloTest=$_POST["titoloTest"];
                         $descrizioneTest=$_POST["descrizioneTest"];
                     
                         //seleziona l'id della materia
                         $selectIDMateria="SELECT id FROM materie WHERE materia = '".$materia."';";
                         $array=mysqli_fetch_assoc(mysqli_query($conn, $selectIDMateria));
                         $idMateria = $array['id'];
                     
                     
                         //seleziona l'id del docente
                         $selectIDDocente="SELECT id FROM docenti WHERE nome = '".$_SESSION["nome"]."';";
                         $array=mysqli_fetch_assoc(mysqli_query($conn, $selectIDDocente));
                         $idDocente = $array['id'];
                     
                     
                         //crea il test
                         $createTest="INSERT INTO TEST(nome,descrizione,id_docente,id_materia) VALUES('".$titoloTest."','".$descrizioneTest."','".$idDocente."','".$idMateria."');";
                         $creaTest = mysqli_query($conn,$createTest);
                     
                         //recupera l'ultimo id test
                         $lastTestID=mysqli_insert_id($conn);
                     
                         //inserisce le domande selezionate nel test
                         for($j = 1; $j <= $maximum; $j++){
                             if(isset($_POST['checkbox'.$j])){
                                 $domandeTest="INSERT INTO DOMANDE_TEST(id_test,id_domande) VALUES('".$lastTestID."','".$j."');";
                                 $addDomandaTest=mysqli_query($conn, $domandeTest);
                             }
                         }
                     }
                     ?>
                </form>
            </div>
            <!-- Creare un test -->
            <div id="showtest" style="display: none">
                <form method="post">
                    <?php
                     $id_doc="SELECT ID FROM docenti WHERE nome = '".$_SESSION["nome"]."';";
                     $x=mysqli_fetch_assoc(mysqli_query($conn,$id_doc));    
                     
                     $sql = "SELECT nome, descrizione FROM test WHERE id_docente=".$x['ID'].";";
                     $rs = mysqli_query($conn,$sql);
                     
                     
                     
                     echo "<div class=\"row row-cols-1 row-cols-md-3\">";
                     
                     while($row = mysqli_fetch_assoc($rs)){
                         $y=rand(1,3);
                         //session di nomeTest e la sua descrizione
                         $supp = $row['nome'];
                         $_SESSION['nomeTest'] = $supp;
                         $supp2 = $row['descrizione'];
                         $_SESSION['descrizioneTest'] = $supp2;
                         //mette a video la card col bottone
                         echo "<div class=\"col mb-4\">    <div class=\"card h-10\">  <img src=\"../immagini/random_test/img".$y.".jpg\" class=\"card-img-top\" alt=\"test\">  <div class=\"card-body\">    <h5 class=\"card-title\">".$row['nome']."</h5>  <p class=\"card-text\">".$row['descrizione']."</p> <div align=\"center\"><a href=\"visualizzaTest.php\" class=\"btn btn-primary\">Visualizza Test</a>    </div> </div> </div> </div> <br>";
                     }
                     echo "</div>";
                     ?>
                </form>
            </div>
            <!-- vedere i test disponibili -->
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
                </form>
                <br><br><br>
                <div class="p-3 mb-2 bg-danger text-white">Questi campi non sono modificabili</div>
            </div>
            
            <!-- Visualizzazione dati account log -->
            <div id="editdomanda" hidden>
                <div class="jumbotron">
                    <h3>Edit domanda</h3>
                    <p class="lead">Modifica i campi presenti per modificare la domanda</p>
                    <hr class="my-4">
                    <!--- campi presenti nell edit --->
                    <form method="post" id="popup">
                        <input type="hidden" name="id-domanda" id="id-domanda">
                        <input type="hidden" name="id-risposta" id="id-risposta">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Domanda</h5>
                            </div>
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control domanda" id="floatingInput" name="domanda" required>
                                    </div>
                                    <footer class="blockquote-footer">Specifica la domanda del quesito</footer>
                                </blockquote>
                            </div>
                        </div>
                        <br>
                        <div class="p-2 mb-2 bg-danger text-white">Riassegnare le risposte corrette!</div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Risposta 1</h5>
                                        <blockquote class="blockquote mb-0">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input type="checkbox" aria-label="Checkbox for following text input" value="risposta1" name="risp1">
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control popup-risposta" aria-label="Text input with checkbox" name="risposta1" required>
                                            </div>
                                            <footer class="blockquote-footer">Specifica la prima possibile risposta</footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Risposta 2</h5>
                                        <blockquote class="blockquote mb-0">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input type="checkbox" aria-label="Checkbox for following text input" value="risposta2" name="risp2">
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control popup-risposta" aria-label="Text input with checkbox" name="risposta2" required>
                                            </div>
                                            <footer class="blockquote-footer">Specifica la seconda possibile risposta</footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Risposta 3</h5>
                                        <blockquote class="blockquote mb-0">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input type="checkbox" aria-label="Checkbox for following text input" value="risposta3" name="risp3">
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control popup-risposta" aria-label="Text input with checkbox" name="risposta3">
                                            </div>
                                            <footer class="blockquote-footer">Specifica la terza possibile risposta</footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Risposta 4</h5>
                                        <blockquote class="blockquote mb-0">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input type="checkbox" aria-label="Checkbox for following text input" value="risposta" name="risp4">
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control popup-risposta" aria-label="Text input with checkbox" name="risposta4">
                                            </div>
                                            <footer class="blockquote-footer">Specifica la quarta possibile risposta</footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="modal-footer">
                            <input type="submit" id="deleteask" name="delete" value="Elimina">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="okclose" onclick="(function() {document.getElementById('editdomanda').setAttribute('hidden','hidden')})()">Close</button>
                            <input type="submit" id="okupask1" name="okupask1" value="Salva">
                        </div>
                    </form>
                    <pre>
                        <?php  
                     global $conn;
                     
                     
                     if(isset($_POST['okupask1'])){
                         $id_domanda = $_POST['id-domanda'];
                     
                         $addDomanda = "UPDATE domande SET testo = '".$_POST['domanda']."' WHERE CODICE_DOM = ".$id_domanda." ;"  ;
                     
                         mysqli_query($conn, $addDomanda);
                         $last_id = mysqli_insert_id($conn);
                     
                         for($k = 1, $i = $_POST['id-risposta'];$k<5; $k++, $i++) {
                             $addRisp = "UPDATE risposte SET CODICE_DOM = ".$id_domanda.", testo = '".$_POST["risposta".$k]."' WHERE ID_RISP = $i;";
                     
                             mysqli_query($conn, $addRisp);                       
                             if (isset($_POST['risp'.$i])) {
                                 $rispCorr = "UPDATE risposte SET corretto = 1 WHERE testo = '".$_POST['risposta'.$k]."' AND CODICE_DOM=".$last_id.";";
                                 mysqli_query($conn, $rispCorr);
                             } else { 
                                 $setFalse = "UPDATE risposte SET corretto = 0 WHERE corretto IS NULL;";
                                 mysqli_query($conn, $setFalse);
                             } 
                         }   
                     }
                     
                     if(isset($_POST['delete'])){
                         $id_domanda = $_POST['id-domanda'];
                     
                         
                     
                        deletetask($id_domanda);
                         
                         
                     }
                     
                     
                     
                     ?></pre>
                </div>
            </div>
            <!-- PopUp per editare la domanda -->
        </div>
    </div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });

    </script>
    <!-- Script per visualizzazione del menù -->
    <script>
        $(document).ready(function() {
            $("#showHome").click(function() {
                $("#myhome").show();
                $("#adddomanda").hide();
                $("#listadomande").hide();
                $("#createst").hide();
                $("#showtest").hide();
                $("#myaccount").hide();
                $("#listadomandeEliminate").hide();
            });

            $("#showHomeimg").click(function() {
                $("#myhome").show();
                $("#adddomanda").hide();
                $("#listadomande").hide();
                $("#createst").hide();
                $("#showtest").hide();
                $("#myaccount").hide();
                $("#listadomandeEliminate").hide();
            });

            $("#showlistadomande").click(function() {
                $("#myhome").hide();
                $("#adddomanda").hide();
                $("#listadomande").show();
                $("#createst").hide();
                $("#showtest").hide();
                $("#myaccount").hide();
                $("#listadomandeEliminate").hide();
            });
            $("#showadddomanda").click(function() {
                $("#myhome").hide();
                $("#adddomanda").show();
                $("#listadomande").hide();
                $("#createst").hide();
                $("#showtest").hide();
                $("#myaccount").hide();
                $("#listadomandeEliminate").hide();
            });


            $("#showshowtest").click(function() {
                $("#myhome").hide();
                $("#adddomanda").hide();
                $("#listadomande").hide();
                $("#createst").hide();
                $("#showtest").show();
                $("#myaccount").hide();
                $("#listadomandeEliminate").hide();

            });
            $("#showcreatest").click(function() {
                $("#myhome").hide();
                $("#adddomanda").hide();
                $("#listadomande").hide();
                $("#createst").show();
                $("#showtest").hide();
                $("#myaccount").hide();
                $("#listadomandeEliminate").hide();

            });
            $("#showmyaccount").click(function() {
                $("#myhome").hide();
                $("#adddomanda").hide();
                $("#listadomande").hide();
                $("#createst").hide();
                $("#showtest").hide();
                $("#myaccount").show();
                $("#listadomandeEliminate").hide();
            });

            $("#showdeletedask").click(function() {
                $("#myhome").hide();
                $("#adddomanda").hide();
                $("#listadomande").hide();
                $("#createst").hide();
                $("#showtest").hide();
                $("#myaccount").hide();
                $("#listadomandeEliminate").show();


            });

        });

    </script>
    <script>
        var currentid;

        function fetchpopupdata(id) {



            var editdomanda = document.getElementById("editdomanda");
            var temp = document.getElementById("domanda-" + id);
            var content = document.getElementById("content");
            try {


                content.removeChild(editdomanda);
            } catch (err) {
                var refdomanda = document.getElementById("listdomande");
                //  refdomanda.removeChild(editdomanda);
            }

            temp.after(editdomanda);
            editdomanda.removeAttribute("hidden");
            var risposte = temp.getElementsByClassName("risposta");
            var popup = document.getElementById("popup");
            var rispostepopup = popup.getElementsByClassName("popup-risposta");
            var domanda = temp.getElementsByClassName("domanda-value")[0];
            var domandapopup = popup.getElementsByClassName("domanda")[0];
            domandapopup.setAttribute("value", domanda.innerHTML);
            console.log(domanda);
            for (var i = 0; i < risposte.length; i++) {
                console.log(risposte[i]);
                rispostepopup[i].setAttribute("value", risposte[i].innerHTML);
            }
            currentid = id;
            document.getElementById("id-domanda").setAttribute("value", id);
            temp = document.getElementById("risposta-" + id);
            document.getElementById("id-risposta").setAttribute("value", temp.value);

        }

    </script>
    
    <!-- script visualizza domande -->
    <script>
        $(document).ready(function() {

            load_data(1);

            function load_data(page, query = '') {
                $.ajax({
                    url: "fetch.php",
                    method: "POST",
                    data: {
                        page: page,
                        query: query
                    },
                    success: function(data) {
                        $('#dynamic_content').html(data);
                    }
                });
            }

            $(document).on('click', '.page-link', function() {
                var page = $(this).data('page_number');
                var query = $('#search_box').val();
                load_data(page, query);
            });

            $('#search_box').keyup(function() {
                var query = $('#search_box').val();
                load_data(1, query);
            });

        });

    </script>
</body>

</html>
