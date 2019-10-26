<?php
   include 'funcoes.php'
   $nome = tratanome($_POST["nome"];
   $email = $_POST["email"];
   $idade = $_POST["idade"];

 

 if(!empty($nome) &&!empty($email)){ 
 $arquivo = fopen("c://temp/dados.txt";"a+");
 "a+");     
 fwrite($arquivo, "/r/nNome: ".$nome);
 fwrite($arquivo, "/r/nIdade: "$idade);
 fwrite($arquivo, "/r/nE-mail: ".$email);    
 fwrite($arquivo, "/r/n-------------------/r/n"); 
     
 fclose($arqquivo);
     
    echo "Gravado com sucesso";
    }else{
    echo "Porfavor, preencha os campos obrigatórios!";
}    


?>

<br>
<a href="index.php">voltar</a> 

