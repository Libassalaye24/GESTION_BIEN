<?php 
    if ($_SERVER['REQUEST_METHOD']=='GET') {
        if (isset($_GET['views'])) {
          if ($_GET['views']=='reservation') {
            lister_reservation();
          }elseif($_GET['views']=='liste.reservation') {
            liste_reservation_encours();
          }elseif ($_GET['views']=='reserver.bien') {
            reservation_bien();
            lister_reservation();
          } 
    
        }else {
            require(ROUTE_DIR.'views/bien/catalogue.html.php');
        }
        
    }elseif ($_SERVER['REQUEST_METHOD']=='POST') {
        if (isset($_POST['action'])) {
          if ($_POST['action']=='reservations') {
            if (isset($_POST['date'])) {
              $_SESSION['datefiltreReservation'] = $_POST['date'];
            }
            $_SESSION['etat_reservation'] = $_POST['etat_reservation'];
            liste_reservation_encours();
          }
        }
    }

  /*   function filtre_bien(){
      $bien_by_zone_or_etat =  filtre_bien_by_zone_or_etat();
      require(ROUTE_DIR.'views/gestionnaire/liste.bien.html.php');
   } */
    function liste_reservation_encours(){
      $etat_reservation=$_SESSION['etat_reservation'];
      $date_filtre= $_SESSION['datefiltreReservation'];
      if (isset($_POST['valider'])) {
            $encours_reservation=find_all_reservation_by_date_or_etat($etat_reservation,$date_filtre);
            require(ROUTE_DIR.'views/gestionnaire/liste.reservation.html.php');
        
      }else {
        $encours_reservation=find_all_reservation_cours();
        require(ROUTE_DIR.'views/gestionnaire/liste.reservation.html.php');
      }
    
    }
    
   /*  function liste_reservation_gest(){
      $reservations = find_all_reservation();
      require(ROUTE_DIR.'views/gestionnaire/liste.reservation.html.php');
    } */
    function lister_reservation(){
      $reservation_client=lister_reservation_by_client($_SESSION['userConnect']['id_user']);
      require(ROUTE_DIR.'views/reservation/reservation.html.php');
       
    }
    function traiter_reservation(int $id_reservation,string $etat_reservation='annuler'):bool{
        return false;
    }

    function reservation_bien(){
    $id_bien = $_GET['id_bien'];
      $id_user= $_SESSION['userConnect']['id_user'];
        ajout_reservation_bien($id_bien,$id_user);
        
    }

   
?>
