<?php 


if ($_SERVER['REQUEST_METHOD']=='GET') {
    if (isset($_GET['views'])) {
       if ($_GET['views']=='connexion') {
        require(ROUTE_DIR.'views/security/connexion.html.php');
       }elseif ($_GET['views']=='inscription') {
        require(ROUTE_DIR.'views/security/inscription.html.php');
       }elseif ($_GET['views']=='deconnexion') {
             deconnexion();
       }

    }else{
            require(ROUTE_DIR.'views/security/connexion.html.php');
        }
}elseif ($_SERVER['REQUEST_METHOD']=='POST') {
    if (isset($_POST['action'])) {
        if ($_POST['action']=='connexion') {
            connexion($_POST['login'],$_POST['password']);
        }elseif ($_POST['action']=='inscription') {
          inscription($_POST,$_FILES);
        }
    }
}


function connexion(string $login,string $password):void{
    $arrayError=array();
   valide_field_mail($login,'login',$arrayError);
    validation_password($password,$arrayError,'password');
  if (form_valid($arrayError)) {
   
    $user =  find_user_by_login_password($login,$password);
   
    if (count($user)==0) {
        $arrayError['invalide']='login ou password incorrecte';
        $_SESSION['arrayError']=$arrayError;
        header('location:'.WEB_ROUTE.'?controlleurs=security&views=connexion');
        exit();
    }else {
      $_SESSION['userConnect'] = $user;
        if ($user['nom_role']=='ROLE_CLIENT') {
          header('location:'.WEB_ROUTE);
          exit();
        }else {
          header('location:'.WEB_ROUTE.'?controlleurs=reservation&views=liste.reservation');
          exit();
        }
     
    }
  }else {
    $_SESSION['arrayError']=$arrayError;
    header('location:'.WEB_ROUTE.'?controlleurs=security&views=connexion');
    exit();
  }
    // if (//form_valid($arrayError)) {
        // appel du model
      //  $user = find_login_password($login , $password);
       
      /*   if (count($user)==0) {
          $arrayError['erreurConnexion']="login ou password incorrect ";
          $_SESSION['arrayError']= $arrayError;
          header('location:'.WEB_ROUTE.'?controlleurs=security&views=connexion');
        }else{
           // session_start();
            $_SESSION ['userConnect'] = $user;
            if ($user['role']=='ROLE_ADMIN') {
                header('location:'.WEB_ROUTE.'?controlleurs=admin&views=list.question');
            }elseif ($user['role']== 'ROLE_JOUEUR') {
                header('location:'.WEB_ROUTE.'?controlleurs=joueur&views=jeu');
            }
        } */
     }//else {
        /*  $_SESSION['arrayError']=$arrayError;
         header('location:'.WEB_ROUTE.'?controlleurs=security&views=connexion'); */
   //  }
//}

function inscription(array $data ,array $files):void{
    $arrayError=array();
    $target_dir = UPLOAD_DIR;
    $target_file = $target_dir . basename($files["image"]["name"]);       
    extract($data);
    valide_field_number($numero,VALIDE_NUMBER,'numero',$arrayError);
   validation_password($password,$arrayError,'password'); 
   valide_field_mail($login,'login',$arrayError);
   valide_user_name($nom,'nom',$arrayError);
   valide_user_name($prenom,'prenom',$arrayError);
   valide_user_name($adresse,'adresse',$arrayError);
   valide_image($files,'image',$arrayError,$target_file);
   if (form_valid($arrayError)) {
     
   }else {
    $_SESSION['arrayError']=$arrayError;
    header('location:'.WEB_ROUTE.'?controlleurs=security&views=inscription');
   }
   // valide_email($login,'login',$arrayError);      
   // validation_username($prenom,'prenom',$arrayError);
   // validation_username($name,'name',$arrayError);
     /* valide_avatar($avatar,'avatar',$arrayError); */  
     
      // if(empty($data['id']) and //login_exist($login)){
           // $arrayError['login'] = 'Ce login existe déjà';
           // $_SESSION['arrayError']=$arrayError;
            //header('location:'.WEB_ROUTE.'?controlleurs=security&views=inscription');
            
      //  } 
       
       
       //// if ($password != $password2){
           // $arrayError['password2'] = 'Les deux password ne sont pas identiques';
        } 
       /*  $extensions = ['jpg', 'png', 'jpeg', 'gif'];
        $file_ext=strtolower(end(explode('.',$files['file1']['name'])));
      if ($files['file1']['size'] > 500000) {
        $arrayError['fileSize'] = 'La taille est grande';
      }elseif(in_array($file_ext,$extensions)=== false){
          $arrayError['fiel']='le fichier n\'est pas une image';
      } */
       
       
/* 
    if(form_valid($arrayError)) {
       
                  // appel du model
                if ( to_uploads($files)) {
                  $data['file1'] = $files['file1']['name'];
                }
                  
                  unset($data['password2']);
                  unset($data['controlleurs']);

                  if (est_admin()) {
                    $data['role'] = 'ROLE_ADMIN';
                  }else {
                        $data['role'] = 'ROLE_JOUEUR';
                }   

                  if( isset($data['id'])){
                    if (est_admin()) {
                      modif_user($data);
                      header('location:'.WEB_ROUTE.'?controlleurs=admin&views=creer.admin');  
                    }
                    
                  }

                  if (empty($data['id']) ) {
                 
                      add_user($data); 
                      header('location:'.WEB_ROUTE.'?controlleurs=admin&views=list.admin');
  
                  }   
         }else {
            
             if (est_admin()) {
              $_SESSION['arrayError']=$arrayError;
              header('location:'.WEB_ROUTE.'?controlleurs=admin&views=creer.admin');
             }else {
              $_SESSION['arrayError']=$arrayError;
              header('location:'.WEB_ROUTE.'?controlleurs=security&views=inscription');
             }
         } */

function deconnexion():void{
    unset($_SESSION['userConnect']);
    header('location:'.WEB_ROUTE);
    exit();

}


?>