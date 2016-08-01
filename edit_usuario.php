<?php session_start();
    if((!isset ($_SESSION['id']) == true) and (!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['nivel_acesso']) == true))
    {
        header('location:index.html');
    }
    $id_user = $_SESSION['id'];
    $logado = $_SESSION['login'];
    $acesso = $_SESSION['nivel_acesso'];
?>

<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="_css/estilo.css" />
    <link rel="stylesheet" href="_css/form.css" />
    <link rel="stylesheet" href="_css/painel.css">
    <link rel="shortcut icon" href="_imagens/favicon.ico">
    <link rel="icon" href="_imagens/animated_favicon1.gif" type="image/gif" >
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
   <title>SSH INFORMÁTICA</title>
</head>
<script language="javascript" src="_javascript/funcoes.js">


</script>  

<body>
<?php
 include("conexao.php");
    

    $com = isset($_GET["com"])?$_GET["com"]:"";
    $tid = isset($_GET["id"])?$_GET["id"]:"";
    $busca= mysql_query("SELECT * FROM colaborador WHERE id = $tid");
    $row=mysql_fetch_array($busca);

    
    $nome=$row['nome'];
    $email=$row['email'];
    $usuario=$row['usuario'];
    $senha=$row['senha'];
    $nv=$row['nv'];


    if($com=='atualizar'){
     //   $nome=$_POST['tNome'];

    }
?>

<div id="interface">
    
    <header id="cabecalho">
            <hgroup>
                <h1>SSH Informática</h1>
                <h2>Honestidade e qualidade em nossos serviços.</h2>
            </hgroup>

      <img id="icone" src="_imagens/edi-user.png"/>
        <nav id="menu">
            <h1>Menu Principal</h1>
                <ul type="disc">
                    <li onmouseover="mudaFoto('_imagens/cubo.png')" onmouseout="mudaFoto('_imagens/edi-user.png')"><a href="index.html">Home</a></li>
                    <li onmouseover="mudaFoto('_imagens/empresa.png')" onmouseout="mudaFoto('_imagens/edi-user.png')"><a href="empresa.html">Empresa</a></li>
                    <li onmouseover="mudaFoto('_imagens/servicos.png')" onmouseout="mudaFoto('_imagens/edi-user.png')"><a href="servicos.html">Serviços</a></li>
                    <li onmouseover="mudaFoto('_imagens/suporte.png')" onmouseout="mudaFoto('_imagens/edi-user.png')"><a href="suporte.html">Suporte</a></li>
                    <li onmouseover="mudaFoto('_imagens/contato.png')" onmouseout="mudaFoto('_imagens/edi-user.png')"><a href="fale-conosco.html">Fale conosco</a></li>
                </ul>
        </nav>
    </header>

    <section id="corpo-full">

        <article id="noticia-principal">
            <header id="cabecalho-artigo">
                <hgroup>
                    <h3>SSH > <a href="painel.php">Painel </a> > <a href="cliente-editar.php?id=0">Editar cliente</a></h3>
                              
                </hgroup>
            </header>

<form action="" method="GET" name="fContato" target="" id="fContato" onSubmit="">

    <fieldset id="usuario"><legend>Identificação do Cliente</legend>
        <p><label for="edit_cod">Código:</label><input type="text" readonly="readonly" name="edit_cod" id="edit_cod" size="5" maxlength="8" 
                value="<?php echo "$tid"; ?>"/>
        </p>
        <p><label for="edit_nome">Nome:</label><input type="text" name="nome" id="edit_nome" size="30" maxlength="50" 
                value="<?php echo "$nome"; ?>"/><input  name="tBuscar" type="submit" id="tBuscar" value="Buscar.." onClick="Enviar(2);">
        </p>
        <p><label for="edit_email">email:</label><input type="email" name="email" id="edit_email" size="30" maxlength="50"
                value="<?php echo "$email"; ?>" />
        </p>
        <p><label for="edit_usuario">Usuario:</label><input disabled type="text" name="usuario" id="edit_usuario" size="30" maxlength="50"
                value="<?php echo "$usuario"; ?>" />
        </p>
        <p><label for="edit_senha">senha:</label><input type="password" name="senha" id="edit_senha" size="30" maxlength="10"
                value="<?php echo "$senha"; ?>"/>
        </p>
        <p><label for="edit_nivel">nivel Acesso:</label><input type="numeric" name="nivel" id="edit_nivel" size="10" maxlength="1"
                value="<?php echo "$nv"; ?>"//>
        </p>
    </fieldset>
   

             <ul id="album-fotos2">
            <p><input type="image" name="Atualizar" id="foto-10" value="Atualizar" src="_imagens/atualizar.png" onClick="Enviar(3);"></p>   
            </ul>
</form>

   <footer id="rodape">
        <p>Copyright 2016 - by Marcio Rogerio Rodrigues |
        <a href="https://www.facebook.com" ><img id="face" src="_imagens/facebook.png"/></a>   <a href="https://www.facebook.com"> Facebook </a>|
        <a href="https://www.twitter.com" ><img id="twitter" src="_imagens/twitter.png"/></a> <a href="http://www.twitter.com"> Twitter </a></p>
    </footer>
</div>

<script type="text/javascript">
   
</script>




</body>

</html>



<!--
        <ul id="album-fotos2">
            <li id="foto-10"><?php //echo"<tr><a href='cliente-editar.php?com=atualizar&id=$tid'><img src='_imagens/transp.png'/></a></tr>";?> </li><!--Botão atualizar-->
      <!--  </ul> -->
