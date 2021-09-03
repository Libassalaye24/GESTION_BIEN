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
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#">E-221</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarColor01"
        aria-controls="navbarColor01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?= WEB_ROUTE.'?controlleurs=bien&views=catalogue'?>"
              >Accueil
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <?php if($_SESSION['userConnect']['nom_role']=='ROLE_CLIENT'):?>
            <li class="nav-item">
              <a class="nav-link" href="<?=WEB_ROUTE.'?controlleurs=reservation&views=reservation'?>">Mes Réservations</a>
            </li>
          <?php endif?>
          <?php if(est_gestionnaire()) :?>
            <li class="nav-item">
              <a class="nav-link" href="<?=WEB_ROUTE.'?controlleurs=reservation&views=liste.reservation'?>">Reservations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=WEB_ROUTE.'?controlleurs=bien&views=liste.bien'?>">Biens</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=WEB_ROUTE.'?controlleurs=bien&views=creer.bien'?>">Crer un bien</a>
            </li>
          <?php endif ?>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input
            class="form-control mr-sm-2"
            type="text"
            placeholder="Rechercher un article..."
          />
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">
            Rechercher
          </button>
        </form>
        <ul class="navbar-nav mr-o ml-4">
            
            <li class="nav-item dropdown mr-md-5">
              <a
                class="nav-link dropdown-toggle"
                data-toggle="dropdown"
                href="#"
                role="button"
                aria-haspopup="true"
                aria-expanded="false"
                >Utilisateur</a
              >
             <?php if(!est_connect()):?>
                <div class="dropdown-menu ">
                  <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleurs=security&views=connexion'?>"> Se Connecter</a>
                </div>
             <?php endif ?>
             <?php if(est_connect()):?>
                <div class="dropdown-menu ">
                  <a class="dropdown-item" href="<?=WEB_ROUTE.'?controlleurs=security&views=deconnexion'?>"> Se Deconnecter</a>
                </div>
             <?php endif ?>
            </li>
          </ul>
      </div>
    </nav>