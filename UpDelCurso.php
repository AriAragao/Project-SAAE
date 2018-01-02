<?php

    session_start();
    require_once '../classes/conexao.class.php';
    require_once '../classes/CursoBd.class.php';

    $conn = new conexao;
    $link = $conn->Conecta();

    
    $result_curso = "SELECT * FROM curso WHERE id = '4'";
    $resultado_curso = mysqli_query($link, $result_curso);
    $row_curso = mysqli_fetch_assoc($resultado_curso);

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

	<title>Curso</title>

	<meta charset="utf-8">


	<link rel="stylesheet" type="text/css" href="css/style.css"/>

	
</head>

<body>

    <?php 
    
        $curso = new CursoBd();
        if(isset($_POST['EditarC'])){
          
            $nome = $_POST['inpNomeC'];
            $modalidade = $_POST['InpModalC'];
           
            $curso->setNome($nome);
            $curso->setModalidade($modalidade);
            $curso->setId($id);
            $curso->update($id);
            
            ?>
            
    <script>
    
    alert("Alteração realizada com sucesso!");
    
    </script>
            
        <?php }else if(isset($_POST['ExcluirC'])){ ?>
        
            <script>

            alert("Cadastro deletado com sucesso!");

            </script>
                
        <?php }?>
   
	
	
    <div id="Divtopo">

        <img src="img/logoIf.png" id="logoIf">
        <span id="lbIfba">Instituto Federal da Bahia </span>

    </div>
	<div id="DivInicio">


		
		<div id="DivTitulos">

            <span id="titulo">SAEE</span>
            <h1 id="tituloCompleto" >Sistema de Acompanhamento de Estágio e Emprego</h1>
            <span id="tituloCoes">COORDEENAÇÃO DE ESTÁGIO</span>

         </div>    

	</div>
	<div id="DivMenu">
		
		<ul id="listaMenu">
			
                    <li><a href="pgEmpresa.php" class="ativa">Empresa |</a></li>
			<li><a href="pgProfessor.php"> Professor | </a> </li>
                        <li> <a href="pgCurso.php">Curso |</a></li>
                        <li> <a href="pgEstagiario.php">Estágio | </a></li>
		</ul>




	</div>
	<div id="DivCorpo">
 
	
    <div id="divCabcalhoFormP">

                <label id="lbDelProf">Dados do curso</label>
            </div>
        <div id="divFormP">

            <div id="divOrgFormC">

             <form action=" " method="POST">

                <label id="lbNomeC">Nome</label>
                <input type="text" name="inpNomeC" id="inpNomeC" autofocus value="<?php echo $row_curso['nomeC']; ?>"><br><br>

                <label id="lbModC">Modalidade</label>
                <input type="text" name="InpModalC" id="InpModalC" value="<?php echo $row_curso['modalidadeC']; ?>">

                <button id="ExcluirEmp" name="ExcluirC"> <a href="Excluir.php?from=curso&id=<?php echo $row_curso['id'] ?>&next=pgCurso" >Deletar </a></button> 
                <button id="EditarEmp" name="EditarC"> Atualizar</button>
                <button id="btVoltarEmp"><a href="pgCurso.php" class="ativa">Voltar</a></button>

              


             </form>

         </div>

        </div>
+
		

	</div>

	

</body>

</html>
