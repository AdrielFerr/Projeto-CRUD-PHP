<?php
    session_start();
    if(empty($_SESSION)){
      print "<script>location.href='index.html';</script>";
    }
?>
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
            <a class="navbar-brand">Sistema de cadastro</a>
            <?php
                print "Olá,".' '.$_SESSION["nome"];
                print "<a href= 'listar-usuario.php' class='btn btn-info'>Lista de usuários</a>";
                print "<a href='logout.php' class='btn btn-danger'>Sair</a>";
            ?>

        </div>
    </nav>
            <style>
                body{
                    
                }

                .Salvar{
                    width: 100%;
                    height: 100vh;
                    align-items: left;
                    justify-content: center;
                    display: flex;
                }

                .Rodape{
                    grid-area: rodape;
                    background-color:#fff;
                    display: flex;
                    justify-content: flex-end;
                    align-items: center;
                    font-size: 1.2rem;
                    padding-right: 20px;
                    color: #444;
                }
            </style> 
    <div class= "Salvar">
        <div class="container-xl">
            <form action= "salvar-usuario.php" method = "POST">
                            <div class = "mb-3">
                                    <label class="form-label">Nome</label>
                                    <input type ="text" name = "nome" class = "form-control">
                            </div>
                            <div class="mb-3">
                                    <label  class="form-label">E-mail</label>
                                    <input type="email" name = "email" class="form-control"  aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">Nunca compartilharemos seu e-mail com mais ninguém.</div>
                            </div>
                            <div class = "mb-3">
                                    <label>Senha</label>
                                    <input type ="password" name = "senha" class = "form-control">
                            </div>
                            <div class = "mb-3">
                                    <button type = "submit" class = "btn
                                    btn-primary">Cadastrar</button>
                            </div>    
            </form>
        </div>         
    </div>
    <footer class="rodape">
     System Gym copyright ©
</body>            
</html>
