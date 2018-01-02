<?php 

    require_once '../classes/EstagiarioBd.class.php';

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

	<title>Estagiário</title>

	<meta charset="utf-8">


	<link rel="stylesheet" type="text/css" href="css/style.css"/>

	

</head>

<body>

    <?php 
    
        $estagiario = new EstagiarioBd();
        
        if(isset($_POST['btCadastrarEst'])):
     
             
          
            $nomeC = $_POST['InpCursoEst'];
            $retornoC= $estagiario->selectIdC($nomeC);
            
            echo $retornoC ;
            
            
        /*    $nomeP=$_POST['InpProfessorEst'];
            $retornoP=$estagiario->selectIdP($nomeP);
            
            $nomeE=$_POST['InpEmpresaEst'];
            $retornoE=$estagiario->selectIdE($nomeE);
            
            
            $nomeEst=$_POST['inpNomeEst'];
            $cpfEst=$_POST['InpCpfEst'];
            $nascimento=$_POST['inpNascimentoEst'];
            $pis=$_POST['InpPisEst'];
            $modalidade=$_POST['InpModalidadeEst'];
            $matricula=$_POST['InpMatriculaEst'];
            $ano=$_POST['InpAnoEst'];
            $enderecoEst=$_POST['InpEnderecoEst'];
            $cidade=$_POST['InpCidadeEst'];
            $estado=$_POST['InpEstadoEst'];
            $telefone=$_POST['InpTelefoneEst'];
            $emailEst=$_POST['inpEmailEst'];
            $inicio=$_POST['inpInicioEst'];
            $termino=$_POST['inpTerminoEst'];
            $relatorio=$_POST['inpRelatorioEst'];
            
            $estagiario->setNome($nomeEst);
            $estagiario->setAno($ano);
            $estagiario->setCidade($cidade);
            $estagiario->setCpfEst($cpfEst);
            $estagiario->setEmailEst($emailEst);
            $estagiario->setEnderecoEst($enderecoEst);
            $estagiario->setEstado($estado);
            $estagiario->setIdCursoE($retornoC);
            $estagiario->setIdEmpresaE($retornoE);
            $estagiario->setIdProE($retornoP);
            $estagiario->setInicio($inicio);
            $estagiario->setMatricula($matricula);
            $estagiario->setModalidade($modalidade);
            $estagiario->setNascimento($nascimento);
            $estagiario->setPis($pis);
            $estagiario->setRelatorio($relatorio);
            $estagiario->setTelefone($telefone);
            $estagiario->setTermino($termino);
            
            $estagiario->insert();  */
            
           endif;
    
    ?>
	
    <div id="Divtopo">

        <img src="img/logoIf.png" id="logoIf">
        <span id="lbIfba">Instituto Federal da Bahia </span>

    </div>
	<div id="DivInicio">


		<input type="search" name="pesquisaEst" placeholder="Pesquisar" id="pesquisaEst">
		
		<div id="DivTitulos">

            <span id="titulo">SAEE</span>
            <h1 id="tituloCompleto" >Sistema de Acompanhamento de Estágio e Emprego</h1>
            <span id="tituloCoes">COORDEENAÇÃO DE ESTÁGIO</span>

         </div>    

	</div>
	<div id="DivMenu">
		
		<ul id="listaMenu">
			
			<li><a href="pgEmpresa.html">Empresa |</a></li>
			<li><a href="pgProfessor.html"> Professor | </a> </li>
			<li> <a href="pgCurso.html">Curso |</a></li>
			<li> <a href="pgEstagiario.html" class="ativa">Estágio | </a></li>
		</ul>




	</div>
	<div id="DivCorpo">
 
	
    <div id="divCabcalhoForm">

                <label id="lbCadEst">Cadastrar estagiário</label>
            </div>
        <div id="divFormEst">

            <div id="divOrgForm">

             <form action=" " method="POST">


                <label id="lbNome">Nome</label>
                <input type="text" name="inpNomeEst" id="inpNomeEst" autofocus >

                <label id="lbCpfEst">CPF</label>
                <input type="text" name="InpCpfEst" id="InpCpfEst" >

                <label id="lbNascimentoEst">Nascimento</label>
                <input type="date" name="inpNascimentoEst" id="inpNascimentoEst" >

                <label id="lbPisEst">PIS</label>
                <input type="text" name="InpPisEst" id="InpPisEst" ><br><br>

                <label id="lbEmailEst">Email</label>
                <input type="email" name="inpEmailEst" id="inpEmailEst">

                <label id="lbModalidadeEst">Modalidade</label>
                <input type="text" name="InpModalidadeEst" >

                <label id="lbMatriculaEst">Matrícula</label>
                <input type="text" name="InpMatriculaEst" id="InpMatriculaEst" >

                <label id="lbAnoEst">Curso</label>
                <input type="text" name="InpAnoEst" id="InpAnoEst" placeholder="Ano do curso" > <br><br>

                <label id="lbEndereco">Endereço</label>
                <input type="text" name="InpEnderecoEst" >

                <label id="lbCidadeEst">Cidade</label>
                <input type="text" name="InpCidadeEst" id="InpEnderecoEst" >

                <label id="lbEstadoEst"> Estado</label>
                <input type="text" name="InpEstadoEst" id="InpEstadoEst" > 

                <label id="lbTelefoneEst">Telefone</label>
                <input type="text" name="InpTelefoneEst"> <br><br>

                

                <label id="lbProfessorEst">Professor</label>
                <input type="text" name="InpProfessorEst" id="InpProfessorEst" placeholder="Nome do Professor" >

                <label id="lbNCurso">Curso</label>
                <input type="text" name="inpNCurso" id="inpNCurso" placeholder="Nome do curso" >

                <label id="lbEmpresaEst">Empresa</label>
                <input type="text" name="InpEmpresaEst" id="InpEmpresaEst" placeholder="Nome da empresa" >

                <label id="lbInicioEst">Início </label>
                <input type="date" name="inpInicioEst" id="inpInicioEst" ><br><br>

                <label id="lbTerminoEst">Termino</label>
                <input type="date" name="inpTerminoEst" id="inpTerminoEst" > 

                <label id="lbDtRelatorioEst">Relatorio</label>
                <input type="date" name="inpRelatorioEst" id="inpRelatorioEst" >

               <input type="submit" name="btCadastrarEst" value="Cadastrar" id="btCadastrarEst" >

                <button id="btVoltar"><a href="pgEstagiario.html">Voltar</a></button>
                

               


             </form>

             

         </div>

        </div>

		

	</div>

	

</body>

</html>