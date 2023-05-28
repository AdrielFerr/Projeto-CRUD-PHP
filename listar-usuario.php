
<body>

                <?php
                    include("config.php");

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