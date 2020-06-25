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

    public function getAtt($id){
        $sql = "SELECT atualizacoes.id, atualizacoes.titulo, atualizacoes.descricao, atualizacoes.data_att, atualizacoes.hora, projetos.nome as nome_projeto FROM atualizacoes INNER JOIN projetos ON atualizacoes.id_projeto = projetos.id";
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

    public function editAtt($id_att, $titulo, $desc, $date, $time){
        $sql = "UPDATE atualizacoes SET titulo= :titulo, descricao= :descricao, data_att= :data_att, hora= :hora WHERE id= :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":titulo", $titulo);
        $sql->bindValue(":descricao", $desc);
        $sql->bindValue(":data_att", $date);
        $sql->bindValue(":hora", $time);
        $sql->bindValue(":id", $id_att);
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

    public function deleteAtt($id){
        $sql = "DELETE FROM atualizacoes WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        return true;
    }

    public function insertAtt($id_projeto, $titulo, $desc, $date, $time){
        $sql = "INSERT INTO atualizacoes(id, id_projeto, titulo, descricao, data_att, hora) VALUES (NULL, :id_projeto, :titulo, :descricao, :data_att, :hora)";

        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id_projeto", $id_projeto);
        $sql->bindValue(":titulo", $titulo);
        $sql->bindValue(":descricao", $desc);
        $sql->bindValue(":data_att", $date);
        $sql->bindValue(":hora", $time);
        $sql->execute();

        return true;
    }

    public function getAllAtts(){
        $sql = "SELECT atualizacoes.id, atualizacoes.id_projeto, atualizacoes.titulo, atualizacoes.descricao, atualizacoes.data_att, atualizacoes.hora, projetos.nome as nome_projeto FROM atualizacoes INNER JOIN projetos ON atualizacoes.id_projeto = projetos.id";
        $sql = $this->db->query($sql);

        $data = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
}