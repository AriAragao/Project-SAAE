<?php
       
    require_once './Class/Entidade/Empresa.php';
    require_once './Class/DAO/EmpresaDao.php';
    
    $emp = new Empresa();
    $empDao = new EmpresaDao();
       
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <title>Empresa</title>
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
               <label id="lbCadProf">Cadastrar Empresa</label>
            </div>
            
            <div id="divFormP">
                <div id="divOrgFormP">
                    <form method="POST">
                    <label id="lbNomeEmp">Empresa</label>
                    <input type="text" name="inpNomeEmp" id="inpNomeEmp"  > <br> <br>
                
                    <label id="lbNomeEmp">Responsavel</label>
                    <input type="text" name="InpRespEmp" id="InpRespEmp"> <br><br>

                    <label id="lbTelEmp">Telefone</label>
                    <input type="text" name="InpTelEmp" id="InpTelEmp" >  <br><br>

                     <label id="lbNomeEmp">Email </label>
                    <input type="Email" name="InpRespEmail" id="InpRespEmp" required="Email do responsavel"> <br><br>

                     <label id="lbNomeEmp">Telefone </label>
                    <input type="text" name="InpRespTel" id="InpRespEmp" required="Telefone do responsavel"> <br><br>

   

                   <input type="submit" name="btCadastrarEmp" value="Cadastrar" id="btCadastrarEmp" >
                   <button id="btVoltarEmp"><a href="pgEmpresa.php" class="ativa">Voltar</a></button>

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

if (isset($_POST["btCadastrarEmp"]))
{
    $emp->setEmp_nome($_POST["inpNomeEmp"]);
    $emp->setEmp_responsavel($_POST["InpRespEmp"]);
    $emp->setEmp_tel($_POST["InpTelEmp"]);
    $emp->setEmp_tel($_POST["InpRespEmail"]);
    $emp->setEmp_tel($_POST["InpRespTel"]);

    if ($empDao->Cadastrar($emp))
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