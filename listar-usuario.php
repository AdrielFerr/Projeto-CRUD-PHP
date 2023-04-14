<?php
//--------------------------------------------------------------#EM ATUALIZAÇÃO-------------------------------------------------------------------------------------------//
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
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td><button onclick= \"location.href='editar-usuario.php'".$row->id."';\"<a href='logout.php' class='btn btn-danger'>Editar</a>
                   
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