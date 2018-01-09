<?php

    session_start();
       
    require_once './Class/Entidade/Administrador.php';
    require_once './Class/DAO/AdministradorDao.php';
    
    $adm = new Administrador();
    $admDao = new AdministradorDao();

    if (isset($_SESSION["logado"]))
    {
        if ($_SESSION["logado"] !== "admMestre")
        {
            header("Location: index.php?error=acessInvalid");
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <title>Administrador</title>
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
                <label id="lbCadProf">Cadastrar Administrador</label>
            </div>
            
            <div id="divFormP">
                <div id="divOrgFormP">
                    <form method="POST">
                        <label id="lbNomeUs">Nome</label>
                        <input type="text" name="nome" id="inpNomeProf" autofocus > <br><br>
                        <label id="lbCpfUs">Mestre</label>
                        <input type="radio" name="mestre" value="S" id="InpIdProf" > Sim
                        <input type="radio" name="mestre" value="N" id="InpIdProf" > Não <br><br>
                        <label id="lbSenhaUs">Senha</label>
                        <input type="text" name="senha" id="inpEmailProf" placeholder="Máximo 8 digitos">
                        <input type="submit" name="btCadastrar" value="Cadastrar" id="btCadastrarProf">                        
                        <button id="btVoltarProf"><a href="#">Ir para Sistema</a></button>
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
    $adm->setAdm_usuario($_POST["nome"]);
    $adm->setAdm_senha($_POST["senha"]);
    $adm->setAdm_mestre($_POST["mestre"]);
        
    if ($admDao->Cadastrar($adm))
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