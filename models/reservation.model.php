<?php 

    function filtrer_reservation():array{
        $pdo=ouvrir_connection_db();
        $sql=" SELECT * FROM reservation 
                GROUP BY date_reservation
               ";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $reservation_bien = $sth->fetchAll();
        fermer_connection_db($pdo);
        return $reservation_bien;
    }
    function find_all_reservation_cours($etat_reservation='en cours'):array{
        $pdo=ouvrir_connection_db();
        $sql=" SELECT * FROM reservation re,bien b,user u,zone z
               WHERE re.id_bien=b.id_bien 
               and re.id_user=u.id_user
               and z.id_zone=b.id_zone
                and re.etat_reservation like ? ";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array($etat_reservation));
        $reservation_bien = $sth->fetchAll();
        fermer_connection_db($pdo);
        return $reservation_bien;
    }

  /*   function find_all_bien_by_etat_disponible_or_zone($etat_bien='disponible',$zone='dakar'):array{
        $pdo=ouvrir_connection_db();
        $params = array($etat_bien);
        $sql=" SELECT * FROM  bien b,user u,zone z
               WHERE re.id_bien=b.id_bien 
               and re.id_user=u.id_user
               and z.id_zone=b.id_zone
                and re.etat_reservation like ? ";
                if (!is_null($date)) {
                    $sql.= 'and re.date_reservation like ?';
                    $params[]=$date;
                }
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute($params);
        $reservation_bien = $sth->fetchAll();
        fermer_connection_db($pdo);
        return $reservation_bien;
    } */

    function find_all_reservation_by_date_or_etat($etat_reservation='en cours',$date=''):array{
        $pdo=ouvrir_connection_db();
        $params = array($etat_reservation);
        $sql=" SELECT * FROM reservation re,bien b,user u,zone z
               WHERE re.id_bien=b.id_bien 
               and re.id_user=u.id_user
               and z.id_zone=b.id_zone
                and re.etat_reservation like ? ";
                if (!is_null($date)) {
                    $sql.= 'and re.date_reservation like ?';
                    $params[]=$date;
                }
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute($params);
        $reservation_bien = $sth->fetchAll(PDO::FETCH_ASSOC);
        fermer_connection_db($pdo);
        return $reservation_bien;
    }
    function filtrer_reservation_by_bien():array{
        $pdo=ouvrir_connection_db();
        $sql=" SELECT re.* FROM reservation re
                GROUP BY re.id_bien";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        fermer_connection_db($pdo);
        $reservation_bien = $sth->fetchAll();
        return  $reservation_bien;
    }

    function filtrer_reservation_by_etat():array{
        $pdo=ouvrir_connection_db();
        $sql=" SELECT re.* FROM reservation re
                GROUP BY re.etat_reservation";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        fermer_connection_db($pdo);
        $reservation_bien = $sth->fetchAll();
        return  $reservation_bien;
    }

    function lister_reservation_by_client(int $id_client):array{
        $pdo=ouvrir_connection_db();
        $sql=" SELECT * FROM reservation re,bien b
               WHERE re.id_bien=b.id_bien and re.id_user=?";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array($id_client));
        fermer_connection_db($pdo);
        $reservation_bien = $sth->fetchAll();
        return  $reservation_bien;
    }

    function ajout_reservation_bien(int $id_bien,int $id_user){
        $pdo=ouvrir_connection_db();
        $sql="INSERT INTO reservation (date_reservation,etat_reservation,description_reservation,id_bien,id_user,id_reservation)
         VALUES (?, ?, ?, ?, ?, ?)";
          $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
           $now=date_create();
           $now=date_format($now,'Y-m-d H:i:s');
           $sth->execute(array($now,'en cours','description',$id_bien,$id_user,NULL));
           fermer_connection_db($pdo);
    }

    
?>