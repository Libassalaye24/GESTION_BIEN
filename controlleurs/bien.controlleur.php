<?php 

if ($_SERVER['REQUEST_METHOD']=='GET') {
    if (isset($_GET['views'])) {
      if ($_GET['views']=='catalogue') {
         catalogue();
      }elseif ($_GET['views'] == 'details') {
        details_bien();
      }elseif($_GET['views'] == 'liste.bien') {
        filtre_bien();
      }

    }else {
        catalogue();
    }
    
}elseif ($_SERVER['REQUEST_METHOD']=='POST') {
    if (isset($_POST['action'])) {
        if ($_POST['action']=='test') {
      
          $_SESSION['zone'] = $_POST['zone_bien'];
          $_SESSION['etat'] = $_POST['etat_bien'];
          filtre_bien();
        }
    }
}



function filtre_bien(){
  if (isset($_POST['ok'])) {
    $etat= $_SESSION['etat'];
    $zone= $_SESSION['zone'];
    $bien_by_zone_or_etat =  filtre_bien_by_zone_or_etat($etat,$zone);
    require(ROUTE_DIR.'views/gestionnaire/liste.bien.html.php');
  }else {
    $bien_by_zone_or_etat =  filtre_bien_by_zone_or_etat();
    require(ROUTE_DIR.'views/gestionnaire/liste.bien.html.php');
  }

}
    function add_bien(array $bien):bool{
        return true;
    }
    function modiy_bien(array $bien):bool{
        return true;
    }
   
    function catalogue(){

       $biens= find_bien_disponible();
       require(ROUTE_DIR.'views/bien/catalogue.html.php');
     
    }
    function details_bien(){
        if (!isset($_GET['id_bien']) || !is_numeric($_GET['id_bien'])) {
          header("location:".WEB_ROUTE);
          exit;
        }elseif ($_GET['id_bien']) {
          $id=$_GET['id_bien'];
          $bien=find_bien_by_id($id);
          require(ROUTE_DIR.'views/bien/details.html.php');
        }
       
    }

    function change_etat_bien_where_bien_reserver(){
      
    }

?>