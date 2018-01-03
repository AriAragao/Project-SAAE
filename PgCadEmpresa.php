<?php 

    require_once '../classes/EmpresaBd.class.php';

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

	<title>Empresa</title>

	<meta charset="utf-8">


	<link rel="stylesheet" type="text/css" href="css/style.css"/>

	
</head>

<body>

     <?php 
    
        $empresa = new EmpresaBd();
        if(isset($_POST['btCadastrarEmp'])):
          
            $telE = $_POST['InpTelEmp'];
            $nomeE = $_POST['inpNomeEmp'];
            $respE= $_POST['InpRespEmp'];
            
            $empresa->setNome($nomeE);
            $empresa->setResponsavel($respE);
            $empresa->setTel($telE);
            $empresa->insert();
            
            
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
			
                    <li><a href="pgEmpresa.php" class="ativa">Empresa |</a></li>
			<li><a href="pgProfessor.php"> Professor | </a> </li>
                        <li> <a href="pgCurso.php">Curso |</a></li>
                        <li> <a href="pgEstagiario.php">Estágio | </a></li>
		</ul>




	</div>
	<div id="DivCorpo">
 
	
    <div id="divCabcalhoFormP">

                <label id="lbCadProf">Cadastrar Empresa</label>
            </div>
        <div id="divFormP">

            <div id="divOrgFormC">

             <form action=" " method="POST">


               
                <label id="lbNomeEmp">Empresa</label>
                <input type="text" name="inpNomeEmp" id="inpNomeEmp"  > <br> <br>
                
                <label id="lbNomeEmp">Responsavel</label>
                <input type="text" name="InpRespEmp" id="InpRespEmp"> <br><br>

                 <label id="lbTelEmp">Telefone</label>
                <input type="text" name="InpTelEmp" id="InpTelEmp" > 


                <label id="lbIdEmp">Id</label>
                <input type="text" name="InpIdEmp" id="InpIdEmp" >

               

               <input type="submit" name="btCadastrarEmp" value="Cadastrar" id="btCadastrarEmp" >

               <button id="btVoltarEmp"><a href="pgEmpresa.php" class="ativa">Voltar</a></button>

               


             </form>

         </div>

        </div>

		

	</div>

	

</body>

</html>
