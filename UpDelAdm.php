<?php 

    
     require_once 'Class/AdmBd.class.php';


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
        
       
        if(isset($_POST['altAdm'])){

            $cpf = $_POST['InpCpfAdm'];
            $senha=$_POST['inpSenhaAdm'];

            $adm->setCpf($cpf);
            $adm->VerificacaoCpf();
    
            
             
         }


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

                <label id="lbAltSenha"> Opções do administrador</label>
            </div>
        <div id="divFormP">

            <div id="divOrgFormP">

             <form action=" " method="POST">


                
                <label id="lbCpfAdm">CPF</label>
                <input type="text" name="InpCpfAdm" id="InpCpfAdm"  > <br><br>
                
                <label id="lbSenhaAdm">Senha</label>
                <input type="text" name="inpSenhaAdm" id="inpSenhaAdm" placeholder="Máximo 8 digitos">
                

               <button id="ExcluirEmp" name="ExcluirEmp"> <a href="Excluir.php?from=empresa&id=<?php echo $row_empresa['id'] ?>&next=pgEmpresa" >Deletar cadastro </a></button> 
               <button id="EditarEmp" name="altAdm"><a href="UpDelAdm.php?&next=UpDelAdm.php" > Alterar senha</a></button>
               <button id="btVoltarEmp"><a href="Index.php" class="ativa">Página inicial</a></button>


             </form>

         </div>

        </div>

		

	</div>

	

</body>

</html>