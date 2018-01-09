
<?php

    require_once './Class/DAO/CursoDao.php';

    $curso = new CursoDao();

    var_dump($curso->SelecionarTodos());

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <title>Curso</title>

    <meta charset="utf-8">


    <link rel="stylesheet" type="text/css" href="css/style.css"/>

    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    

    <script type="text/javascript">

    $(document).ready(function(){

        $('#dtTableEst').DataTable( {

       "language": {

        "sSearch":  "Pesquisar:",
        "lengthMenu": "Mostrando _MENU_ registro por página ", 
        "zeroRecords": "Nenhum registro encontrado",
        "info": "exibindo pagina _PAGE_ de _PAGES_",
        "infoEmpty": "Nenhum registro disponível",
        "infoFiltered": "(filtrado de _MAX_ registros totais)" 
        
    }
     } ); 

  } );
</script>

</head>

<body> 
    
    <div id="Divtopo">

        <img src="img/logoIf.png" id="logoIf">
        <span id="lbIfba">Instituto Federal da Bahia </span>

    </div>

    <div id="DivInicio">

        
        <div id="DivTitulosPrincipal">

            <span id="titulo">SAEE</span>
            <h1 id="tituloCompleto" >Sistema de Acompanhamento de Estágio e Emprego</h1>
            <span id="tituloCoes">COORDEENAÇÃO DE ESTÁGIO</span>

         </div>  
    </div>
    <div id="DivMenu">
        
        <ul id="listaMenu">
            
            <li><a href="pgEmpresa.php">Empresa |</a></li>
            <li><a href="pgProfessor.php" > Professor | </a> </li>
            <li> <a href="pgCurso.php" class="ativa">Curso |</a></li>
            <li> <a href="pgEstagiario.php">Estágio | </a></li>
        </ul>




    </div>
    <div id="DivCorpo">
 
   
        
        <a href="pgCadCurso.php"> <button> Cadastrar</button></a>

        <div id="divTabela">

        <table id="dtTableEst" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Modalidade</th>
                <th>Opções</th>


            </tr>
        </thead>

        <tbody>
            <tr>
                <?php 
                
                    foreach($curso->SelecionarTodos() as $curso)
                    {
                        echo "<td>".$curso["curso_codigo"]."</td>";
                        echo "<td>".$curso["curso_nome"]."</td>";
                        echo "<td>".$curso["curso_modalidade"]."</td>";
                        echo '<td><a href="Editar.php?id='.$curso["curso_codigo"].'"> Editar </a>';
                        
                    }                    
           
                ?>             
                

            <tr>
            
        </tbody>

         
            
            
           
        
    </table>


    </div>

    </div>

    

</body>

</html>