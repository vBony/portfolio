<?php
class Projeto extends modelHelper{
    public function getAllProjects(){
        $sql = "SELECT * FROM projetos";
        $sql = $this->db->query($sql);

        $data = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public function insertProject($nome, $keyname, $desc, $tags){
        $sql = "INSERT INTO projetos(keyname, id, nome, texto, tags) VALUES (:keyname, NULL, :nome, :texto, :tags)";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":keyname", $keyname);
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":texto", $desc);
        $sql->bindValue(":tags", $tags);
        $sql->execute();

        return true;
    }

    public function getProjeto($id){
        $sql = "SELECT * FROM projetos WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        $data = $sql->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getProjetoFromKeyname($keyname){
        $sql = "SELECT * FROM projetos WHERE keyname = :keyname";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":keyname", $keyname);
        $sql->execute();

        if($sql->rowCount() > 0){
            $data = $sql->fetch(PDO::FETCH_ASSOC);
            return $data;
        }else{
            return false;
        }
    }

    public function editProject($id, $nome, $keyname, $desc, $tags){
        $sql = "UPDATE projetos SET keyname= :keyname, nome= :nome, texto= :texto, tags= :tags WHERE id= :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":keyname", $keyname);
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":texto", $desc);
        $sql->bindValue(":tags", $tags);
        $sql->bindValue(":id", $id);
        $sql->execute();

        return true;
    }

    public function deleteProject($id){
        $sql = "DELETE FROM projetos WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        return true;
    }
}