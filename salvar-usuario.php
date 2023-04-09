<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome  =  $_POST["nome"];
            $email =  $_POST["email"];
            $senha = md5($_POST["senha"]);

            var_dump($nome);

            $sql = "INSERT INTO usuarios (nome,
            email, senha) VALUES (
            '{$nome}', '{$email}', '{$senha}')";

            $res = $conn->query($sql);
            
            if($res ==true){
                print "<script>alert('Cadastro com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar o usuário');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'editar':
            $nome  =  $_POST["nome"];
            $email =  $_POST["email"];
            $senha = md5($_POST["senha"]);            
        
            $sql = "UPDATE usuarios SET
                        nome='{$nome}',
                        email='{$email}',
                        senha='{$senha}'
                    WHERE
                        id=".$_REQUEST["id"];    

            $res = $conn->query($sql);
            
            if($res ==true){
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível editar o usuário');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        break;

        case 'excluir':
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);
            
            if($res ==true){
                print "<script>alert('Excluído com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível excluir o usuário');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        break;   
    }



?>