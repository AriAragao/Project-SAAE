<?php
       
    require_once './Class/Entidade/Curso.php';
    require_once './Class/DAO/CursoDao.php';
    
    $curso = new Curso();
    $cursoDao = new CursoDao();


   $idC = $_GET['id'];
    var_dump($curso->Selecionar($idC));
       
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
                <label id="lbCadCurso">Alterar Curso</label>
            </div>
            
            <div id="divFormP">
                <div id="divOrgFormP">
                    <form method="POST">

                <label id="lbNomeC">Id</label>
                <input type="text" name="inpIdC" id="inpIdC"  value="<?php echo $curso["curso_codigo"]; ?>"><br><br>


                <label id="lbNomeC">Nome</label>
                <input type="text" name="inpNomeC" id="inpNomeC" autofocus value="<?php echo $curso["curso_nome"]; ?>"><br><br>

                <label id="lbModC">Modalidade</label>
                <input type="text" name="InpModalC" id="InpModalC" value="<?php echo $curso["curso_modalidade"]; ?>">



               <input type="submit" name="btCadastrar" value="Cadastrar" id="btCadastrarC" >                        
               <button id="btVoltarC"><a href="pgCurso.php" class="ativa">Voltar</a></button>

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
    $curso->setCurso_nome($_POST["nome"]);
    $curso->setCurso_modalidade($_POST["modalidade"]);
   
        
    if ($cursoDao->Cadastrar($curso))
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