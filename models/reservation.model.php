<?php 

    function filtrer_reservation_by_date():array{
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
    function find_all_reservation():array{
        $pdo=ouvrir_connection_db();
        $sql=" SELECT * FROM reservation 
                ";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $reservation_bien = $sth->fetchAll();
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

    function filtrer_reservation_by_client():array{
        $pdo=ouvrir_connection_db();
        $sql=" SELECT re.* FROM reservation re
                GROUP BY re.id_user";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        fermer_connection_db($pdo);
        $reservation_bien = $sth->fetchAll();
        return  $reservation_bien;
    }

?>