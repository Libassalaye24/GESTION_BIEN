
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
        <?php foreach($reservation_client as $reserve):?>
        <div class="col-sm-4 mb-4">
          <div class="card" style="width: 22rem">
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
              <a href="" class="btn btn-sm btn-outline-info float-right ml-3 "><i class="fas fa-ellipsis-h"></i><?=$reserve['prix_bien'].'FCFA '?></a>
              <a href="" class="btn btn-sm btn-outline-info float-right ml-3 "><i class="fas fa-ellipsis-h"></i>Reserver le<?=' '.$reserve['date_reservation']?></a>
              <a href="<?= WEB_ROUTE.'?controlleurs=bien&views=details'?>" class="btn btn-sm btn-outline-success float-right"
                ><?=$reserve['etat_reservation']?></a
              >
            </div>
          </div>
        </div>
        <?php endforeach ?>
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
 
  
<?php
    require(ROUTE_DIR.'views/imc/footer.html.php');
 ?>