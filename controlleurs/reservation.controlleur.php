<?php 
    if ($_SERVER['REQUEST_METHOD']=='GET') {
        if (isset($_GET['views'])) {
          if ($_GET['views']=='reservation') {
            require(ROUTE_DIR.'views/reservation/reservation.html.php');
          }elseif($_GET['views']=='liste.reservation') {
            require(ROUTE_DIR.'views/gestionnaire/liste.reservation.html.php');
          }
    
        }else {
            require(ROUTE_DIR.'views/bien/catalogue.html.php');
        }
        
    }
    
    function lister_reservation(int $id_client):array{
        
        return [];
    }
    function traiter_reservation(int $id_reservation,string $etat_reservation='annuler'):bool{
        return false;
    }

    function reservation_bien(int $id_client,int $id_bien):bool{
        return false;
    }


?>
