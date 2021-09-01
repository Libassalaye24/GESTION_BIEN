<?php 
    if (isset($_SESSION['arrayError'])) {
        $arrayError=$_SESSION['arrayError'];
        unset($_SESSION['arrayError']);
    }
  
?>


  <?php
    require(ROUTE_DIR.'views/imc/nav.html.php');
 ?>
    <!-- -----------------------------------------------------------NAV BAR -->
    <!-- -----------------------------------------------------------CONTAINER -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 my-5 offset-3">
        
                <div class="card alert-secondary mt-5">
        
                    <form method="post">
                        <input type="hidden" name="controlleurs" value="security">
                        <input type="hidden" name="action" value="connexion">
                        <div class="card-body text-center">
        
<!--                             <img src="https://raw.githubusercontent.com/douvewane85/cours_webmasteringII_2021/master/templates/front/user.png" width="50%" class="logo" />
 -->                            <h3 class="card-title">Se connexion</h3>
                            <p class="slogan">pour acceder aux fonctionnalités</p>
                              <?php if (isset($arrayError['invalide'])):?>
                                <p class="slogan alert alert-danger"><?=$arrayError['invalide']?></p>
                                <?php endif ?>
                            <div class="form-group">
                            <label for="username">Email</label>
                                <input type="text" id="username" name="login" class="form-control" placeholder="Entrer votre email">
                                <small class="text-danger">  
                                     <?= isset($arrayError['login']) ? $arrayError['login'] : ""; ?>
                                </small>
                            </div>
        
                            <div class="form-group">
                            <label for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="entrer votre mot de passe">
                                <small class="text-danger">  
                                     <?= isset($arrayError['password']) ? $arrayError['password'] : ""; ?>
                                </small>
                            </div>
        
                            <div class="card-foter text-right">
                                <button type="submit" name="connexion" class="btn btn-primary btn-sm" style="width: 140px;">Connexion</button>
                            </div>
        
                        </div>
                    </form>
        
                </div>
        
            </div>
        </div>
    </div>
    <?php
    require(ROUTE_DIR.'views/imc/footer.html.php');
 ?>