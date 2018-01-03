<?php
       
    require_once './Class/Entidade/Estagiario.php';
    require_once './Class/DAO/EstagiarioDao.php';
    
    $est = new Estagiario();
    $estDao = new EstagiarioDao();
       
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <title>Estagiario</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>

    </head>

    <body>

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
                <label id="lbCadProf">Cadastrar Estagiario</label>
            </div>
            
            <div id="divFormP">
                <div id="divOrgFormP">
                    <form method="POST">
                        <label id="lbNomeEst">Nome</label>
                        <input type="text" name="nome"  id=" NomeEst"autofocus > 

                        <label id="lbMatricula">Matricula</label>
						<input type="text" name="matricula" id="matricula"> <br><br>

						<label id="lbCpfUs">data de nascimento</label>
						<input type="text" name="nascimento" > <br><br>

						<label id="lbCpfUs">CPF</label>
						<input type="text" name="cpf" > <br><br>

						<label id="lbCpfUs">PIS</label>
						<input type="text" name="pis" > <br><br>

						<label id="lbCpfUs">email</label>
						<input type="text" name="email" > <br><br>

						<label id="lbCpfUs">Telefone</label>
						<input type="text" name="tel" > <br><br>

						<label id="lbCpfUs">Endereço</label>
						<input type="text" name="end" > <br><br>


                        <input type="submit" name="btCadastrar" value="Cadastrar" id="btCadastrar" >

                        <button id="btVoltarProf"><a href="pgEstagiario.php" >Voltar</a></button>
                    </form>
                </div>
                <div style="text-align: center">
                    <br>
                    <p id="resultadoCadastro"></p>
                </div>
            </div>
        </div>
    </body>
</html>

<?php

if (isset($_POST["btCadastrar"]))
{

    $est->setEst_matricula($_POST["matricula"]);
    $est->setEst_cpf($_POST["cpf"]);
    $est->setEst_nome($_POST["nome"]);
    $est->setEst_nasc($_POST["nascimento"]);
    $est->setEst_cpf($_POST["cpf"]);
    $est->setEst_pis($_POST["pis"]);
    $est->setEst_email($_POST["email"]);
    $est->setEst_tel($_POST["tel"]);
    $est->setEst_end($_POST["end"]);


        
    if ($EstDao->Cadastrar($est))
    {
?>    
        <script type = "text/javascript">
                    document.getElementById("resultadoCadastro").innerHTML = "Cadastrado com sucesso.";
                    document.getElementById("resultadoCadastro").style.color = "green";
        </script>
<?php
    } else 
    {
?>
        <script type = "text/javascript">
                    document.getElementById("resultadoCadastro").innerHTML = "Erro ao cadastrar.";
                    document.getElementById("resultadoCadastro").style.color = "red";
        </script>
<?php        
    }
}