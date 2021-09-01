<?php 

    
    function find_user_by_login_password($login,$password):array{
        $pdo=ouvrir_connection_db();
        $sql='select * from user u ,role ro where 
        u.id_role=ro.id_role and
        u.loguin=? and u.password=?';
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array($login,$password));
        $user = $sth->fetch();
        fermer_connection_db($pdo);
       
        return $user;
    }
?>