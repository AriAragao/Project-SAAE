<?php 

    require_once '../classes/ProfessorBd.class.php';

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
            if(isset($_POST['btCadastrarProf'])):
                
                $nomeP= $_POST['inpNomeProf'];
                $cpfP= $_POST['InpCpfProf'];
                $emailP= $_POST['inpEmailProf'];
                $telP= $_POST['inpTelProf'];
                $areaP= $_POST['InpAreaProf'];
                
                 $professor->setNomeProf($nomeP);
                 $professor->setCpfProf($cpfP);
                 $professor->setEmailProf($emailP);
                 $professor->setTelProf($telP);
                 $professor->setAreaProf($areaP);
                 $professor->insert();
                
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
			
                    <li><a href="pgEmpresa.php">Empresa |</a></li>
                        <li><a href="PgProfessor.php" class="ativa"> Professor | </a> </li>
                        <li> <a href="PgCadCurso.php">Curso |</a></li>
                        <li> <a href="pgEstagiario.php">Estágio | </a></li>
		</ul>




	</div>
	<div id="DivCorpo">
 
	
    <div id="divCabcalhoFormP">

                <label id="lbCadProf">Cadastrar professor</label>
            </div>
        <div id="divFormP">

            <div id="divOrgFormP">

             <form action=" " method="POST">


                <label id="lbNomeProf">Nome</label>
                <input type="text" name="inpNomeProf" id="inpNomeProf" autofocus >

                <label id="lbIdProf">Id</label>
                <input type="text" name="InpIdProf" id="InpIdProf" > <br><br>

                
                <label id="lbEmailProf">Email</label>
                <input type="email" name="inpEmailProf" id="inpEmailProf">

                 <label id="lbCpfProf">CPF</label>
                <input type="text" name="InpCpfProf" id="InpCpfProf" ><br><br>

                 <label id="lbTelProf">Tel</label>
                <input type="text" name="InpTelProf" id="InpTelProf"> 

                <label id="lbAreaEst">Area</label>
                <input type="text" name="InpAreaProf" id="InpAreaProf" >


            
               <input type="submit" name="btCadastrarProf" value="Cadastrar" id="btCadastrarProf" >

                <button id="btVoltarProf"><a href="pgProfessor.html" class="ativa">Voltar</a></button>

               


             </form>

         </div>

        </div>

		

	</div>

	

</body>

</html>