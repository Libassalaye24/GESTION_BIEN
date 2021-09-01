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
    <div class="">
      <div class="jumbotron text-center p-3">
        <h1 class="display-3">Réservez un Bien</h1>
        <p class="lead">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit
          culpa eaque ad blanditiis voluptatem. Iste dicta atque quas temporibus
          deserunt!
        </p>
        <hr class="my-4" />
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora,
          sapiente?
        </p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="<?=WEB_ROUTE.'?controlleurs=security&views=inscription'?>" role="button"
            >Créer un compte</a
          >
        </p>
      </div>
    </div>
    <!-- -----------------------------------------------------------CONTAINER -->
    <div class="container">
      <div class="row">
        <div class="col-sm-4 mb-4">
          <div class="card" style="width: 18rem">
            <img
              class="card-img-top"
              src="https://source.unsplash.com/1080x720/?product"
              alt="Annonce 1"
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <hr />
              <span class="float-left btn btn-sm text-center disabled"
                ></span
              >
              <a href="" class="btn btn-sm btn-outline-info float-right ml-3"><i class="fas fa-ellipsis-h"></i>Reserver</a>
              <a href="<?= WEB_ROUTE.'?controlleurs=bien&views=details'?>" class="btn btn-sm btn-outline-success float-right"
                >Details</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-4">
          <div class="card" style="width: 18rem">
            <img
              class="card-img-top"
              src="https://source.unsplash.com/1080x720/?computer"
              alt="Annonce 1"
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <hr />
              
              <span class="float-left btn btn-sm text-center disabled"
                >Revervé il y a : 49mn</span
              >
              <a href="" class="btn btn-sm btn-outline-info float-right ml-3"><i class="fas fa-ellipsis-h"></i></a>
              <a href="#" class="btn btn-sm btn-outline-danger float-right"
                >Annuler</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-4">
          <div class="card" style="width: 18rem">
            <img
              class="card-img-top"
              src="https://source.unsplash.com/1080x720/?smart"
              alt="Annonce 1"
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <hr />
              <span class="float-left btn btn-sm text-center disabled"
                >Revervé il y a : 1h</span
              >
              <a href="#" class="btn btn-sm btn-outline-info float-right ml-3"><i class="fas fa-ellipsis-h"></i></a>
              <a href="#" class="btn btn-sm btn-outline-danger float-right"
                >Annuler</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-4">
          <div class="card" style="width: 18rem">
            <img
              class="card-img-top"
              src="https://source.unsplash.com/1080x720/?house"
              alt="Annonce 1"
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <hr />
              <span class="float-left btn btn-sm text-center disabled"
                >Revervé il y a : 1j</span
              >
              <a href="#" class="btn btn-sm btn-outline-info float-right ml-3"><i class="fas fa-ellipsis-h"></i></a>
              
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-4">
          <div class="card" style="width: 18rem">
            <img
              class="card-img-top"
              src="https://source.unsplash.com/1080x720/?food"
              alt="Annonce 1"
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <hr />
              <span class="float-left btn btn-sm text-center disabled"
                >Revervé il y a : 12j</span
              >
              <a href="#" class="btn btn-sm btn-outline-info float-right ml-3"><i class="fas fa-ellipsis-h"></i></a>
              
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-4">
          <div class="card" style="width: 18rem">
            <img
              class="card-img-top"
              src="https://source.unsplash.com/1080x720/?tv,watch "
              alt="Annonce 1"
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <hr />
              <span class="float-left btn btn-sm text-center disabled"
                >Revervé il y a : 2m</span
              >
              <a href="#" class="btn btn-sm btn-outline-info float-right ml-3"><i class="fas fa-ellipsis-h"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="row text-center">
        <div class="col-sm-4 offset-sm-4">
          <ul class="pagination pl-4">
              <li class="page-item disabled">
                <a class="page-link" href="#">&laquo;</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">4</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">5</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">&raquo;</a>
              </li>
            </ul>
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