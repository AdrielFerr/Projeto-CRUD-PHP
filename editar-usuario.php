<!-- PÁGINA EM ATUALIZAÇÃO -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
    crossorigin="anonymous">
    
</head>
<body>

<nav class="navbar navbar-danger bg-warning">
        <div class= "container-fluid">
            <a class="navbar-brand">Alteração de usuários</a>
            <?php
                print "<a href='logout.php' class='btn btn-danger'>Sair</a>";
            ?>
        </div>
</nav>

            <?php
                            include("Config.php");
                            
                            $idUsuario = $_GET['id'];

                            $res = $conn->query("Select * from usuarios
                            where id = $idUsuario");

                            $qtd = $res->num_rows;

                            $row = $res->fetch_object();

                            // $qtd = $res->num_rows;
                            
                            print "<table class= 'table table-hover'
                            table-striped table-bordered'>";
                            print "<tr>";
                            print "<th>Código</th>";
                            print "<th>Nome</th>";
                            print "<th>E-mail</th>";
                            print "<th>Ações</th>";
                            print "</tr>";

                            // while($row = $res->fetch_object()){
                                // var_dump();
                                print "<tr>";
                                print "<td >".$row->id."</td>";
                                print "<td><input type='text' value = $row->nome contenteditable='true'></td>";
                                print "<td><input type='text' value = $row->email contenteditable='true' width:'200%' height:500% ></td>";
                                print "<td><a href='editar-usuario.php?id=$row->id' class='btn btn-warning'>Salvar</a></td>";
                                print "</tr>"; 
                                
                            //}
                            print "</table>";

                            // $nome  =  $_POST["nome"];          
                            // $email =  $_POST["email"];
                            // $senha = md5($_POST["senha"]);            
                        
                            // $sql = "UPDATE usuarios SET
                            //             nome   ='{$nome}',
                            //             email ='{$email}',
                            //             senha ='{$senha}'
                            //         WHERE
                            //             id=".$_GET["id"];    

                            // $res = $conn->query($sql);
                            
                            // if($res ==true){
                            //     print "<script>alert('Editado com sucesso');</script>";
                            //     print "<script>location.href='?page=listar';</script>";
                            // }else{
                            //     print "<script>alert('Não foi possível editar o usuário');</script>";
                            //     print "<script>location.href='?page=listar';</script>";
                            // }

            ?>
            
</body>            
</html>
