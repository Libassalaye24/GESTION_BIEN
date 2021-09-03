<?php 

    
    function find_user_by_login_password($login,$password){
        $pdo=ouvrir_connection_db();
        $sql='select * from user u ,role ro where 
        u.id_role=ro.id_role and
        u.loguin=? and u.password=?';
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array($login,$password));
        $user = $sth->fetch(PDO::FETCH_ASSOC);
        //$user = $sth->fetchAll();
        fermer_connection_db($pdo);
       
        return $user;
    }

    function login_exist(string $login):array{
        $pdo=ouvrir_connection_db();
        $sql='select * from user u ,role ro where 
                u.loguin=?';
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array($login));
        $user = $sth->fetchAll();
        fermer_connection_db($pdo);
        return $user;
    }


    function insncrire_utilisateur(array $user):int{
       
        $pdo=ouvrir_connection_db();
        extract($user);
        $sql="  INSERT INTO user (nom, prenom,loguin,password,telephone,adress,id_role,id_user) 
                VALUES (?,?,?,?,?,?,?,?); ";
                if (est_gestionnaire()) {
                    $id_role=2;
                }elseif (!est_connect()) {
                    $id_role=1;
                }
                
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array($nom,$prenom,$login,$password,$numero,$adresse,$id_role,NULL));
        
        $user = $sth->fetch(PDO::FETCH_ASSOC);
        
        fermer_connection_db($pdo);
        return $user = $sth->rowCount();
    }


?>