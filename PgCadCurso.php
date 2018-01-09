<<<<<<< master

<?php 

    //require_once '../classes/CursoBd.class.php';
 #require_once 'Class/AdmBd.class.php'; 
=======
<?php
       
    require_once './Class/Entidade/Curso.php';
    require_once './Class/DAO/CursoDao.php';
    
    $curso = new Curso();
    $cursoDao = new CursoDao();
       
>>>>>>> master
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <title>Administrador</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>

    </head>

<<<<<<< master
    <link rel="stylesheet" type="text/css" href="css/style.css"/>

</head>

<body>
    
    <div id="Divtopo">

        <img src="img/logoIf.png" id="logoIf">
        <span id="lbIfba">Instituto Federal da Bahia </span>
=======
    <body>
>>>>>>> master

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
                <label id="lbCadCurso">Cadastrar Curso</label>
            </div>
            
            <div id="divFormP">
                <div id="divOrgFormP">
                    <form method="POST">
                       <label id="lbNomeC">Nome</label>
                <input type="text" name="nome" id="inpNomeC" autofocus required><br><br>

                <label id="lbModC">Modalidade</label>
                <input type="text" name="modalidade" id="InpModalC" required>


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

<<<<<<< master
        

    </div>
    
</body>
=======
<?php
>>>>>>> master

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