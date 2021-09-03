<?php
    require(ROUTE_DIR.'views/imc/nav.html.php');
 ?>
     <!-- -----------------------------------------------------------NAV BAR -->
     <div class="">
            <?php
            //require(ROUTE_DIR.'views/imc/jumbotron.html.php');
        ?>
    </div>
    <!-- -----------------------------------------------------------CONTAINER -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-offset-3">
                <form action="" class="form-inline" method="post">
                         <input type="hidden" name="controlleurs" value="bien">
                        <input type="hidden" name="action" value="test">
                    <div class="form-group ml-5">
                    <div class="form-group">
                      <label for="">Etat</label>
                      <select class="form-control" name="etat_bien" id="">
                        <option selected value="disponible">Disponible</option>
                        <option value="indisponible">Indisponible</option>
                      </select>
                    </div>
                    </div>
                    <div class="form-group ml-5">
                    <div class="form-group">
                      <label for="">Zone</label>
                      <select class="form-control" name="zone_bien" id="">
                        <option selected value="disponible">Dakar</option>
                        <option value="thies">Thies</option>
                        <option value="saint_louis">Saint_louis</option>
                        <option value="casamance">Casamance</option>
                        <option value="kaolack">Kaolack</option>
                      </select>
                    </div>
                    </div>
                    <button type="submit" name="ok" class="btn btn-primary ml-5">valider</button>
                    
                </form>
            </div>
        </div>
        <div class="row mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th>GESTIONNAIRE</th>
                            <th>ETAT_BIEN</th>
                            <th>BIEN</th>
                            <th>ZONE_BIEN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($bien_by_zone_or_etat as $bien):?>
                        <tr>
                            <td scope="row"><a href=""><?=$bien['nom'].' '.$bien['prenom'].' '.$bien['telephone']?></a></td>
                            <td><a href=""><?=$bien['etat_bien']?></a></td>
                            <td><a href=""><?=$bien['type_bien']?></a></td>
                            <td><?=$bien['nom_zone']?></td>
                        </tr>
                        <?php endforeach ?>
                       
                    </tbody>
                </table>
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
 
<?php
    require(ROUTE_DIR.'views/imc/footer.html.php');
 ?>