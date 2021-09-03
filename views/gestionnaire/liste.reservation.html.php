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
                    <input type="hidden" name="controlleurs" value="reservation">
                    <input type="hidden" name="action" value="reservations">
                    <div class="form-group">
                      <label for="">Date</label>
                      <input type="date" name="date" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted"></small>
                    </div>
                    <div class="form-group ml-5">
                    <div class="form-group">
                      <label for="">Etat</label>
                      <select class="form-control" name="etat_reservation" id="">
                        <option value="valider">Valider</option>
                        <option value="annuler">Annuler</option>
                        <option selected value="en_cours">En cours</option>
                      </select>
                    </div>
                    </div>
                    <button type="submit" name="valider" class="btn btn-primary ml-5">valider</button>
                    
                </form>
            </div>
        </div>
        <div class="row mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th>CLIENT</th>
                            <th>BIEN</th>
                            <th>DATE</th>
                            <th>ETAT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($encours_reservation as $reservation):?>
                        <tr>
                            <td scope="row"><a href=""><?=$reservation['nom'].' '.$reservation['prenom'].' '.$reservation['telephone']?></a></td>
                            <td><a href=""><?=$reservation['nom_zone'].' '.$reservation['type_bien']?></a></td>
                            <td><?=  date_format(date_create($reservation['date_reservation']),'d-m-Y');?></td>
                            <td><?=$reservation['etat_reservation']?></td>
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