<?php

    require_once './Class/Entidade/Administrador.php';
    require_once './Class/DAO/AdministradorDao.php';
    
    $adm = new Administrador();
    $admDao = new AdministradorDao();
   
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

	<title>Estagiario</title>

	<meta charset="utf-8">


	<link rel="stylesheet" type="text/css" href="css/style.css"/>

	<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    

	

<script type="text/javascript">

    $(document).ready(function()
     {
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
			
			<li><a href="pgEmpresa.html">Empresa |</a></li>
			<li><a href="pgProfessor.html" > Professor | </a> </li>
			<li> <a href="pgCurso.html">Curso |</a></li>
			<li> <a href="pgEstagiario.html" class="ativa">Estágio | </a></li>
		</ul>




	</div>
	<div id="DivCorpo">

        <a href="pgCadastrarEst.html"> <button> Cadastrar</button></a>

	</div>

	<div id="divTabela">

		<table id="dtTableEst" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                
                <th>Nome</th>
                <th>Matrícula </th>
                <th>Modalidade</th>
                <th>Curso</th>
                <th>Mês /ano</th>
                <th>Excluir</th>
                <th>Editar </th>


            </tr>
        </thead>
        
        <tbody>
           
             <?php $conn = new Conexao();
            $conn->Conecta();

            $query = mysql_query("SELECT * FROM estagiario");
           
            while ($line=mysql_fetch_assoc($query)) { ?>
            <tr>
                <td><?php echo $line['nomeEst']; ?></td>
                <td><?php echo $line['matricula']; ?></td>
                <td><?php echo $line['modalidade']; ?></td>
                <td><?php echo $line['telEmpr']; ?></td>
            
                
                
                <td><a href="Excluir.php?from=empresa&id=<?php echo $line['id'] ?>&next=pgEmpresa"><img src="img/latLixo.png" id="ExcluirCurso"></a></td>
                <td><img src="img/editar.png" id="EditarCurso"></td>
            </tr>
            <?php } ?>
           
        </tbody>
    </table>


	</div>


</body>

</html>