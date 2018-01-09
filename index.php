<?php
    
    session_start();

    $_SESSION["logado"] = "invalid";

    require_once './Class/Entidade/Administrador.php';
    require_once './Class/DAO/AdministradorDao.php';
    
    $adm = new Administrador();
    $admDao = new AdministradorDao();


    if (isset($_POST["btLogar"]))
    {
        $adm->setAdm_usuario($_POST["usuario"]);
        $adm->setAdm_senha($_POST["senha"]);
        
        $permissao = $admDao->Selecionar($adm);
        
        if ($permissao === "S")
        {
            $_SESSION["logado"] = "admMestre";
            header("Location: CadAdm.php");
            exit;
            
        } else if ($permissao === "N")
        {
            $_SESSION["logado"] = "adm";
            header("Location: PgCadCurso.php");
            exit;
            
        } else
        {
            ?>

                <script type="text/javascript">
                     alert("Usuário e/ou senha em branco ou inválido.");
                </script>

            <?php
        }
    }

    if (isset($_GET["error"]))
    {
        ?>

            <script type="text/javascript">
                     alert("Você não tem permissao para acessar cadastro de administrador");
            </script>

        <?php
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <title>Login</title>
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

                <span id="titulo">IFBA</span>
                <h1 id="tituloCompleto" >Instituto Federal da Bahia</h1>
                <span id="tituloCoes">COORDEENAÇÃO DE ESTÁGIO</span>
            </div>   
        </div>

        <!-- MENU -->
        <div id="DivMenu">

            <ul id="listaMenu">

                <li>Empresa | </li>
                <li> Professor | </li>
                <li> Curso | </li>
                <li> Estágio | </li>

            </ul>

        </div>

        <!-- CORPO -->
        <div id="DivCorpo">

            <label id="MsgInicial">*LOGIN OBRIGATORIO</label>

            <div id="DivLogin">

                <img src="img/login.png" id="imgLogin">
                <form action="index.php" method="POST" id="formLogin" name="formLogin">

                    <label id="lbUsuario">Usuario</label><br>
                    <input type="text" name="usuario" id="inpNomeAdm" autofocus ><br><br>

                    <label id="lbSenha">Senha</label><br>
                    <input type="password" name="senha" id="inpSenhaLogin" ><br><br>

                    <input type="submit" name="btLogar" value="Login" id="btLogar">
                    
                    <!--<a href="UpDelAdm.php" id="refEsqueci"> Opções do administrador</a>-->
                </form>
            </div>
        </div>
    </body>
</html>
