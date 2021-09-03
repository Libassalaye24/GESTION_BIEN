<?php 
    if (isset($_SESSION['arrayError'])) {
        $arrayError=$_SESSION['arrayError'];
        unset($_SESSION['arrayError']);
    }
  
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php
    require(ROUTE_DIR.'views/imc/nav.html.php');
 ?>
    <!-- -----------------------------------------------------------NAV BAR -->
    <!-- -----------------------------------------------------------CONTAINER -->
    <div class="container">
        <div class="row ">
            <div class="col-md-9 my-5 offset-1 ">
        
                <div class="card alert-secondary ">
        
                    <form method="post" action="" enctype="multipart/form-data">
                        <input type="hidden" name="controlleurs" value="security">
                        <input type="hidden" name="action" value="inscription">
                        <div class="card-body text-center ">
                            <img src="" alt="" srcset="">
                         <h3 class="card-title">S'inscrire</h3>
                            <p class="slogan">pour acceder aux fonctionnalités</p>
                            <?php if (isset($arrayError['loginExist'])):?>
                                <p class="slogan alert alert-danger"><?=$arrayError['loginExist']?></p>
                                <?php endif ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="">Prenom</label>
                                          <input type="text" name="prenom" id="" class="form-control" placeholder="Saisir votre prenom" aria-describedby="helpId">
                                          <small class="text-danger">  
                                            <?= isset($arrayError['prenom']) ? $arrayError['prenom'] : ""; ?>
                                        </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="">Nom</label>
                                          <input type="text" name="nom" id="" class="form-control" placeholder="Saisir votre nom" aria-describedby="helpId">
                                          <small class="text-danger">  
                                                <?= isset($arrayError['nom']) ? $arrayError['nom'] : ""; ?>
                                            </small>
                                        </div>
                                    </div>
                                </div>

                          
                                <div class="form-group">
                                <label for="username">Email</label>
                                    <input type="text" id="" name="login" class="form-control" placeholder="Entrer votre email">
                                    <small class="text-danger">  
                                        <?= isset($arrayError['login']) ? $arrayError['login'] : ""; ?>
                                    </small>
                                </div>
                         
                           
                            <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="password">Password</label>
                                            <input type="password" id="password" name="password" class="form-control" placeholder="entrer votre mot de passe">
                                            <small class="text-danger">  
                                                <?= isset($arrayError['password']) ? $arrayError['password'] : ""; ?>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="">Adresse</label>
                                          <input type="text" name="adresse" id="adresse" class="form-control" placeholder="entrer votre adresse" aria-describedby="helpId">
                                          <small class="text-danger">  
                                            <?= isset($arrayError['adresse']) ? $arrayError['adresse'] : ""; ?>
                                        </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="password">Numero</label>
                                            <input type="text" id="" name="numero" class="form-control" placeholder="entrer votre numero telephone">
                                            <small class="text-danger">  
                                                <?= isset($arrayError['numero']) ? $arrayError['numero'] : ""; ?>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                       <div class="form-group">
                                           <label for="">Choisir une image</label>
                                         <input type="file" class="form-control-file" name="image" id="" placeholder="" aria-describedby="fileHelpId">
                                         <small class="text-danger">  
                                            <?= isset($arrayError['image']) ? $arrayError['image'] : ""; ?>
                                        </small>
                                       </div>
                                    </div>
                                </div>
        
                            <div class="card-foter text-right">
                                <button type="submit" name="inscription" class="btn btn-primary btn-sm" style="width: 140px;">Connexion</button>
                            </div>
        
                        </div>
                    </form>
        
                </div>
        
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>