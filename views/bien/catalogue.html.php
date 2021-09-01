
<?php
    require(ROUTE_DIR.'views/imc/nav.html.php');
 ?>
    <!-- -----------------------------------------------------------NAV BAR -->
    <div class="">
    <?php
         require(ROUTE_DIR.'views/imc/jumbotron.html.php');
       ?>
    </div>
    <!-- -----------------------------------------------------------CONTAINER -->
    <div class="container">
      <div class="row">
        <?php 
         foreach($biens as $bien): ?>
        <div class="col-sm-4 mb-4">
          <div class="card" style="width: 22rem">
            <img
              class="card-img-top"
              src="https://source.unsplash.com/1080x720/?product"
              alt="Annonce 1"
            />
            <div class="card-body">
              <h5 class="card-title">
                <span class="badge badge-success"><?=$bien['type_bien']?></span>
                <span class="badge badge-info"><?=$bien['prix_bien']." CFA"?></span>
              </h5>
              <hr />
              <span class="float-left btn btn-sm text-center disabled"
                ></span
              >
              <a href="" class="btn btn-sm btn-outline-info float-right ml-3"><i class="fas fa-ellipsis-h"></i>Reserver</a>
              <a href="<?= WEB_ROUTE.'?controlleurs=bien&views=details&id_bien='.$bien['id_bien']?>" class="btn btn-sm btn-outline-success float-right"
                >Details</a
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