<?php
       
    require_once './Class/Entidade/Professor.php';
    require_once './Class/DAO/ProfessorDao.php';
    
    $prof = new Professor();
    $profDao = new ProfessorDao();
       
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <title>Professor</title>
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
                 <label id="lbCadProf">Cadastrar professor</label>
            </div>
            
            <div id="divFormP">
                <div id="divOrgFormP">
                    <form method="POST">
                     <label id="lbNomeProf">Nome</label>
                    <input type="text" name="nome" id="inpNomeProf" autofocus >
                    
                    <label id="lbEmailProf">Email</label>
                    <input type="email" name="email" id="inpEmailProf">

                     <label id="lbCpfProf">CPF</label>
                    <input type="text" name="cpf" id="InpCpfProf" ><br><br>

                     <label id="lbTelProf">Tel</label>
                    <input type="text" name="tel" id="InpTelProf"> 

                    <label id="lbAreaEst">Area</label>
                    <input type="text" name="area" id="InpAreaProf" > 


               <input type="submit" name="btCadastrarProf" value="Cadastrar" id="btCadastrarProf" >

                <button id="btVoltarProf"><a href="pgProfessor.html" class="ativa">Voltar</a></button>

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

if (isset($_POST["btCadastrarProf"]))
{
    $prof->setProf_nome($_POST["nome"]);
    $prof->setProf_email($_POST["email"]);
    $prof->setProf_cpf($_POST["cpf"]);
    $prof->setProf_tel($_POST["tel"]);
    $prof->setProf_area($_POST["area"]);


        
    if ($profDao->Cadastrar($prof))
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