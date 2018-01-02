<?php 

    require_once '../classes/AdmBd.class.php';

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

	<title>Administrador</title>

	<meta charset="utf-8">


	<link rel="stylesheet" type="text/css" href="css/style.css"/>

</head>

<body>

	<?php
        
        $adm = new AdmBd();
            if(isset($_POST['btCadastrarEst'])):
                
                
                $nome= $_POST['inpNomeUs'];
                $cpf= $_POST['InpCpfUs'];
                $senha= $_POST['inpSenhaUs'];
                $permissao= $_POST['InpSenhaP'];
                
                $acesso=123456;
                if($permissao== $acesso){
                    
                    $adm->setNome($nome);
                    $adm->setCpf($cpf);
                    $adm->setSenha($senha);
                    $adm->insert();
                }
            endif;
             
        
        ?>
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
			
			<li><a href="pgEmpresa.html">Empresa |</a></li>
                        <li><a href="PgCadProfessor.php" > Professor | </a> </li>
                        <li> <a href="PgCadCurso.php">Curso |</a></li>
			<li> <a href="pgEstagiario.html">Estágio | </a></li>
		</ul>




	</div>
	<div id="DivCorpo">
 
	
    <div id="divCabcalhoFormP">

                <label id="lbCadProf">Cadastrar Administrador</label>
            </div>
        <div id="divFormP">

            <div id="divOrgFormP">

             <form action=" " method="POST">


                <label id="lbNomeUs">Nome</label>
                <input type="text" name="inpNomeUs" id="inpNomeProf" autofocus >

                <label id="lbCpfUs">CPF</label>
                <input type="text" name="InpCpfUs" id="InpIdProf" > <br><br>

                
                <label id="lbSenhaUs">Senha</label>
                <input type="text" name="inpSenhaUs" id="inpEmailProf" placeholder="Máximo 8 digitos">

                 <label id="lbSenhaP">Acesso</label>
                <input type="text" name="InpSenhaP" id="InpCpfProf" placeholder="Senha de permissão" ><br><br>

              
               <input type="submit" name="btCadastrarEst" value="Cadastrar" id="btCadastrarProf" >

               <button id="btVoltarProf"><a href="Index.php" >Voltar</a></button>

               


             </form>

         </div>

        </div>

		

	</div>

	

</body>

</html>