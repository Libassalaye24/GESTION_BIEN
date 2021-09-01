<?php 

       
        function find_all_bien():array{
            $pdo=ouvrir_connection_db();
            $sql="select * from bien";
            $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $sth->execute();
            $bien = $sth->fetchAll();
            fermer_connection_db($pdo);
            return $bien;
        }

        function find_bien_by_id(int $id_bien):array{
            $pdo=ouvrir_connection_db();
            //requete non preparee
            //$sql="select * from bien where b.id_bien='$id_bien'";
            //requete preparee avec joker non nomme
            $sql="select * from bien b where b.id_bien=?";
            $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $sth->execute(array($id_bien));
            $bien = $sth->fetch();
           
           /*  requete preparee avec joker nomme
            $sql="select * from bien where b.id_bien=:x";
            $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $sth->execute(array(':x' => $id_bien));
            $bien = $sth->fetch(); */
            fermer_connection_db($pdo);
            return $bien;
        }

        function find_bien_disponible():array{
            $pdo=ouvrir_connection_db();
            $sql="select * from bien b where b.etat_bien=?";
            $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $sth->execute(array('disponible'));
            $biendispo = $sth->fetchAll();
           // var_dump($biendispo);die();
            fermer_connection_db($pdo);
            return $biendispo;
        }

        function find_bien_reserver_by_client(int $id_user):array{
            $pdo=ouvrir_connection_db();
            $sql="select b.* from bien b,reservation r, where b.id_bien=r.id_bien and r.id_user=?";
            $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $sth->execute(array($id_user));
            $reservation_bien = $sth->fetchAll();
            fermer_connection_db($pdo);
            return $reservation_bien;
        }


        function insert_bien(array $bien):int{
            $pdo=ouvrir_connection_db();
            extract($bien);
            $sql="INSERT INTO `bien` (`id_bien`, `etat_bien`, `type_bien`, `reference`
            , `prix`, `description_bien`, `id_zone`, `date_creation`, `addresse`, `id_user`) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";
            $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $now=date_create();
            $now=date_format($now,'Y-m-d H:i:s');
            $sth->execute(array($id_bien,$etat_bien,$type_bien,$reference,$prix,$description,$id_zone,$now,$adresse,$id_user));
            fermer_connection_db($pdo);
            return $sth->rowCount();
        }

        function update_bien(array $bien):int{
            $pdo=ouvrir_connection_db();
            extract($bien);
            $sql="UPDATE `bien` SET `etat_bien` = ?, `type_bien` = ?, `reference` = '0001',
             `prix` = ?, `description_bien` = ?, `id_zone` = ?,`id_user` = ?,
             , `addresse` = ? WHERE `id_bien` = ?  ";
            $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $now=date_create();
            $now=date_format($now,'Y-m-d H:i:s');
            $sth->execute(array($etat_bien,$type_bien,$prix,$description,$id_zone,$adresse,$id_user));
            fermer_connection_db($pdo);
            return $sth->rowCount();
        }

        function delete_bien(int $id_bien):int{
            $pdo=ouvrir_connection_db();
            $sql="DELETE from bien b where b.id_bien=?";
            $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $sth->execute(array($id_bien));
            fermer_connection_db($pdo);
            return $sth->rowCount();
        }
        
        function archiver_bien(int $id_bien):int{
            $pdo=ouvrir_connection_db();
            extract($bien);
            $sql=" UPDATE `bien` SET `etat_bien` = 'indisponible' WHERE `bien`.`id_bien` = ?";
            $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $sth->execute(array($id_bien));
            fermer_connection_db($pdo);
            return $sth->rowCount();
        }

        function filtrer_bien_par_zone():array{
            $pdo=ouvrir_connection_db();
            $sql=" SELECT b.* FROM bien b
                    GROUP BY b.id_zone ";
            $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $sth->execute();
            $biendispo = $sth->fetchAll();
            fermer_connection_db($pdo);
            return $biendispo;
        }


        function filtrer_bien_par_etat():array{
            $pdo=ouvrir_connection_db();
            $sql=" SELECT b.* FROM bien b
                    GROUP BY b.id_zone ";
            $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $sth->execute();
            $biendispo = $sth->fetchAll();
            fermer_connection_db($pdo);
            return $biendispo;
        }


?>