
<?php 

    //require_once '../classes/CursoBd.class.php';
 #require_once 'Class/AdmBd.class.php'; 
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

	<title>Curso</title>

	<meta charset="utf-8">


	<link rel="stylesheet" type="text/css" href="css/style.css"/>

</head>

<body>
	
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
                        <li><a href="PgCadProfessor.php" > Professor | </a> </li>
			<li> <a href="PgCurso.php" class="ativa">Curso |</a></li>
                        <li> <a href="pgEstagiario.php">Estágio | </a></li>
		</ul>




	</div>
	<div id="DivCorpo">
 
	
    <div id="divCabcalhoFormP">

        <label id="lbCadCurso">Cadastrar Curso</label>
            </div>
        <div id="divFormP">

            <div id="divOrgFormC">

             <form action="" method="POST">


                <label id="lbNomeC">Nome</label>
                <input type="text" name="inpNomeC" id="inpNomeC" autofocus required><br><br>

                <label id="lbModC">Modalidade</label>
                <input type="text" name="InpModalC" id="InpModalC" required>


               <input type="submit" name="btCadastrarC" value="Cadastrar" id="btCadastrarC" >

               <button id="btVoltarC"><a href="pgCurso.php" class="ativa">Voltar</a></button>

               


             </form>

         </div>

        </div>

		

	</div>
    
</body>

</html>
