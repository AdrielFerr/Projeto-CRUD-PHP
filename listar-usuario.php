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

                <?php
                    include("Config.php");

                    $sql = "Select * from usuarios";

                    $res = $conn->query($sql);

                    $qtd = $res->num_rows;

                    if($qtd > 0)
                    {
                        print "<table class= 'table table-hover'
                        table-striped table-bordered'>";
                        print "<tr>";
                        print "<th>Código</th>";
                        print "<th>Nome</th>";
                        print "<th>E-mail</th>";
                        print "<th>Ações</th>";
                        print "</tr>";
                        

                        while($row = $res->fetch_object()){
                            // var_dump();
                            print "<tr>";
                            print "<td>".$row->id."</td>";
                            print "<td>".$row->nome."</td>";
                            print "<td>".$row->email."</td>";
                            print "<td><a href='editar-usuario.php?id=$row->id' class='btn btn-primary'>Editar</a>
                                
                                <button onclick= \" 
                                if(confirm('Tem certeza que deseja excluir?'))
                                {
                                    location.href='?page=salvar&acao=excluir&id=".$row->id."';
                                }else{
                                    false;
                                }\" 
                                class = 'btn btn-danger'>Excluir</button>
                                </td>";
                            print "</tr>";   
                            
                            
                            
                        }
                        print "</table>";
                    }else{
                        print "<p class='alert alert-danger'>
                        Não encontrou resultados!</p>";
                    }
                ?>

                

</body>            
</html>