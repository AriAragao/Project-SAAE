<?php

    session_start();
    require_once '../classes/conexao.class.php';
    require_once '../classes/ProfessorBd.class.php';

    $conn = new conexao;
    $link = $conn->Conecta();

    
    $result_prof = "SELECT * FROM professor WHERE id = '3'";
    $resultado_prof = mysqli_query($link, $result_prof);
    $row_professor = mysqli_fetch_assoc($resultado_prof);

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

	<title>Professor</title>

	<meta charset="utf-8">


	<link rel="stylesheet" type="text/css" href="css/style.css"/>

	
</head>

<body>

    <?php 
    
        $professor = new ProfessorBd();
        if(isset($_POST['EditarProf'])){
          
            $nomeP = $_POST['inpNomeProf'];
            $emailP = $_POST['inpEmailProf'];
            $cpfP = $_POST['InpCpfProf'];
            $telP = $_POST['InpTelProf'];
            $areaP = $_POST['InpAreaProf'];
            $id = $_POST['InpIdProf'];
            
            $professor->setNomeProf($nomeP);
            $professor->setCpfProf($cpfP);
            $professor->setEmailProf($emailP);
            $professor->setTelProf($telP);
            $professor->setAreaProf($areaP);
            $professor->setIdProf($id);
            $professor->update($id);
            
            
    ?>
            
    <script>
    
    alert("Alteração realizada com sucesso!");
    
    </script>
            
        <?php }else if(isset($_POST['ExcluirProf'])){ ?>
        
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
			
                    <li><a href="pgEmpresa.php">Empresa |</a></li>
			<li><a href="pgProfessor.php" class="ativa"> Professor | </a> </li>
                        <li> <a href="pgCurso.php">Curso |</a></li>
                        <li> <a href="pgEstagiario.php">Estágio | </a></li>
		</ul>




	</div>
	<div id="DivCorpo">
 
	
    <div id="divCabcalhoFormP">

                <label id="lbDelProf">Dados do professor</label>
            </div>
        <div id="divFormP">

            <div id="divOrgFormC">

             <form action=" " method="POST">


                <label id="lbNomeProf">Nome</label>
                <input type="text" name="inpNomeProf" id="inpNomeProf" value="<?php echo $row_professor['nomeProf']; ?>">

                <label id="lbIdProf">Id</label>
                <input type="text" name="InpIdProf" id="InpIdProf" value="<?php echo $row_professor['id']; ?>"> <br><br>

                
                <label id="lbEmailProf">Email</label>
                <input type="email" name="inpEmailProf" id="inpEmailProf" value="<?php echo $row_professor['emailProf']; ?>">

                 <label id="lbCpfProf">CPF</label>
                <input type="text" name="InpCpfProf" id="InpCpfProf" value="<?php echo $row_professor['cpfProf']; ?>"><br><br>

                 <label id="lbTelProf">Tel</label>
                <input type="text" name="InpTelProf" id="InpTelProf" value="<?php echo $row_professor['telProf']; ?>"> 

                <label id="lbAreaEst">Area</label>
                <input type="text" name="InpAreaProf" id="InpAreaProf" value="<?php echo $row_professor['areaProf']; ?>">


               
                
               
                <button id="ExcluirEmp" name="ExcluirProf"> <a href="Excluir.php?from=professor&id=<?php echo $row_professor['id'] ?>&next=pgProfessor" >Deletar </a></button> 
                <button id="EditarEmp" name="EditarProf"> Atualizar</button>
                <button id="btVoltarEmp"><a href="PgProfessor.php" class="ativa">Voltar</a></button>

              


             </form>

         </div>

        </div>
+
		

	</div>

	

</body>

</html>
