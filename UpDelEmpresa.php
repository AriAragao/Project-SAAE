<?php

    session_start();
    require_once '../classes/conexao.class.php';
    require_once '../classes/EmpresaBd.class.php';

    $conn = new conexao;
    $link = $conn->Conecta();

    
    $result_empresa = "SELECT * FROM empresa WHERE id = '14'";
    $resultado_empresa = mysqli_query($link, $result_empresa);
    $row_empresa = mysqli_fetch_assoc($resultado_empresa);

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
        if(isset($_POST['EditarEmp'])){
          
            $telE = $_POST['InpTelEmp'];
            $nomeE = $_POST['inpNomeEmp'];
            $respE= $_POST['InpRespEmp'];
            $id= $_POST['InpIdEmp'];
            
            $empresa->setNome($nomeE);
            $empresa->setResponsavel($respE);
            $empresa->setTel($telE);
            $empresa->update($id); ?>
            
    <script>
    
    alert("Alteração realizada com sucesso!");
    
    </script>
            
        <?php }else if(isset($_POST['ExcluirEmp'])){ ?>
        
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

                <label id="lbDelProf">Dados da Empresa</label>
            </div>
        <div id="divFormP">

            <div id="divOrgFormC">

             <form action=" " method="POST">



            
                <label id="lbNomeEmp">Empresa</label>
                <input type="text" name="inpNomeEmp" id="inpNomeEmp" value="<?php echo $row_empresa['nomeEmp']; ?>" > <br> <br>
                
                <label id="lbNomeEmp">Responsavel</label>
                <input type="text" name="InpRespEmp" id="InpRespEmp" value="<?php echo $row_empresa['respEmp'] ?>"> <br><br>

                 <label id="lbTelEmp">Telefone</label>
                <input type="text" name="InpTelEmp" id="InpTelEmp" value="<?php echo $row_empresa['telEmpr'] ?>" > 


                <label id="lbIdEmp">Id</label>
                <input type="text" name="InpIdEmp" id="InpIdEmp" value="<?php echo $row_empresa['id'] ?>" >

               
                
               
                <button id="ExcluirEmp" name="ExcluirEmp"> <a href="Excluir.php?from=empresa&id=<?php echo $row_empresa['id'] ?>&next=pgEmpresa" >Deletar </a></button> 
                <button id="EditarEmp" name="EditarEmp"> Atualizar</button>
                <button id="btVoltarEmp"><a href="pgEmpresa.php" class="ativa">Voltar</a></button>

              


             </form>

         </div>

        </div>
+
		

	</div>

	

</body>

</html>
