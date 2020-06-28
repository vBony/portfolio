<?php
class User extends modelHelper{
    public function sendEmail($fname, $lname, $email, $msg){
        // $para = "%MEU EMAIL%";
        // $assunto = "Contato pelo site";
        // $corpo = "Nome: ".$fname."\r\nEmail: ".$email."\r\nMensagem: ".$msg; 
        // $cabeçalho = "From: %MEU EMAIL%"."\r\n".
        //              "Reply-To: ".$email."\r\n".
        //              "X-Maller: PHP/".phpversion();

        // mail($para, $assunto, $corpo, $cabeçalho);
        return true;
    }
}