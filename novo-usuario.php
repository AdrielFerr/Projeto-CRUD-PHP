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
    <!-- INCLUSÃO DO HEADER DO PROJETO -->
    <?php include('header.php'); ?>

</head>
<body>

    <style>
        

        .Salvar{
            width: 100%;
            height: 100vh;
            align-items: left;
            justify-content: center;
            display: flex;
            margin-top: 100px;
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
        <div class="">
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
