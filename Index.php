<?php

   require_once 'Class/AdmBd.class.php'; 

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

	<title>Login</title>

	<meta charset="utf-8">


	<link rel="stylesheet" type="text/css" href="css/style.css"/>

</head>

<body>

    <?php
     //$adm = new AdmBd;

       if(isset($_POST['btLogar'])){
           
      
          $nome = $_POST['inpNomeAdm']; 
          $senha = $_POST['inpSenhaLogin'];
         
          $adm->setNome($nome);
          $adm->setSenha($senha);
          $retornoTeste= $adm->Verificacao();
        
        
          echo $retornoTeste;
          
       }
        ?>
            
    <div id="Divtopo">
        
         <img src="img/logoIf.png" id="logoIf">
        <span id="lbIfba">Instituto Federal da Bahia </span>
        
    </div>
	<div id="DivInicio">
		
		<div id="DivTitulos">

		    <span id="titulo">IFBA</span>
            <h1 id="tituloCompleto" >Instituto Federal da Bahia</h1>
            <span id="tituloCoes">COORDEENAÇÃO DE ESTÁGIO</span>

         </div>   

	</div>
	<div id="DivMenu">
		
		<ul id="listaMenu">
			
			<li>Empresa |</li>
			<li> Professor |  </li>
			<li> Curso |</li>
			<li> Estágio |</li>

		</ul>




	</div>
	<div id="DivCorpo">

		<label id="MsgInicial">*LOGIN OBRIGATORIO</label>

		<div id="DivLogin">

		<img src="img/login.png" id="imgLogin">
                <form action="Index.php" method="POST" id="formLogin">



			<label id="lbUsuario">Usuario</label><br>
			<input type="text" name="inpNomeAdm" id="inpNomeAdm" autofocus ><br><br>

			<label id="lbSenha">Senha</label><br>
			<input type="password" name="inpSenhaLogin" id="inpSenhaLogin" ><br><br>

                        <button name="btLogar" id="btLogar">Logar</button>
                        <button id="btCadAdm"><a href="cadAdm.php" class="ativa">Cadastrar</a></button>
                        
                        <a href="UpDelAdm.php" id="refEsqueci"> Opções do administrador</a>
                        
                        
			
                        
		</form>

		</div>

	</div>


</body>

</html>