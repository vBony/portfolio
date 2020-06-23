<?php
class Admin extends modelHelper{
    public function registerAdmin($email, $senha){
        $sql = "INSERT INTO admin(id, email, senha) VALUES (NULL, :email, :senha)";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $senha);
        $sql->execute();
    }

    public function loginAdmin($email, $senha){
        $sql = "SELECT * FROM admin WHERE email = :email";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();

        if($sql->rowCount() > 0){
            $data = $sql->fetchAll(PDO::FETCH_ASSOC);
            if(password_verify($senha, $data[0]['senha'])){
                return 'done';
            }else{
                return 'pass-invalid';
            }
            
        }else{
            return 'email-invalid';
        }
    }
}