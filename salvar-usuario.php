<?php

    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome  =  $_POST["nome"];
            $email =  $_POST["email"];
            $senha =  $_POST["senha"];

            $sql = "INSERT INTO usuarios (nome,
            email, senha) VALUES (
            '{$nome}', '{$email}', '{$senha}')";

            $res = $conn->query($sql);
            break;

        case 'editar':
        
        break;

        case 'excluir':
          
        break;  
        
        default:
        print"<h1>Usuário não cadastrado</h1>";  
    }



?>