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
    <link rel="stylesheet" href="_css/painel.css" />
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
    $busca= mysql_query("SELECT * FROM pessoas WHERE id = $tid");
    $row=mysql_fetch_array($busca);

    
    $nome=$row['nome'];
    $senha=$row['senha'];
    $cpf=$row['cpf'];
    $email=$row['email'];
    $sexo=$row['sexo'];
    $fone1=$row['fone1'];
    $fone2=$row['fone2'];
    $whats=$row['whats'];
    $logradouro=$row['logradouro'];
    $numero=$row['numero'];
    $estado=$row['estado'];
    $cidade=$row['cidade'];
    $msn=$row['msn'];


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

      <img id="icone" src="_imagens/del-user.png"/>
        <nav id="menu">
            <h1>Menu Principal</h1>
                <ul type="disc">
                    <li onmouseover="mudaFoto('_imagens/cubo.png')" onmouseout="mudaFoto('_imagens/del-user.png')"><a href="index.html">Home</a></li>
                    <li onmouseover="mudaFoto('_imagens/empresa.png')" onmouseout="mudaFoto('_imagens/del-user.png')"><a href="empresa.html">Empresa</a></li>
                    <li onmouseover="mudaFoto('_imagens/servicos.png')" onmouseout="mudaFoto('_imagens/del-user.png')"><a href="servicos.html">Serviços</a></li>
                    <li onmouseover="mudaFoto('_imagens/suporte.png')" onmouseout="mudaFoto('_imagens/del-user.png')"><a href="suporte.html">Suporte</a></li>
                    <li onmouseover="mudaFoto('_imagens/contato.png')" onmouseout="mudaFoto('_imagens/del-user.png')"><a href="fale-conosco.html">Fale conosco</a></li>
                </ul>
        </nav>
    </header>

    <section id="corpo-full">

        <article id="noticia-principal">
            <header id="cabecalho-artigo">
                <hgroup>
                    <h3>SSH > <a href="painel.php">Painel </a> > <a href="cliente-delete.php?id=0">Deletar cliente</a></h3>                 
                </hgroup>
            </header>

<form action="" method="GET" name="fContato" target="" id="fContato" onSubmit="">
    <fieldset id="usuario"><legend>Identificação do Cliente</legend>
         <p><label for="cCod">Código:</label><input type="text" readonly="readonly" name="tCod" id="cCod" size="8" maxlength="8" value="<?php echo "$tid"; ?>"/></p>
         <p><label for="cNome">Nome:</label><input type="text" name="tNome" id="cNome" size="20" maxlength="50" placeholder="Nome completo" value="<?php echo "$nome"; ?>"/><input name="tBuscar" type="submit" id="tBuscar" value="Buscar.." onClick="cli_deletar(1);"></p>
         <p><label for="cCpf">CPF:</label><input type="text" name="tCpf" id="cCpf" size="15" maxlength="15" placeholder="Ex: 000.000.000-00" value="<?php echo "$cpf"; ?>"/></p>
         <p><label for="cEmail">E-mail:</label><input type="email" name="tEmail" id="cEmail" size="30" maxlength="50" placeholder="Ex: usuario@dominio.com.br" value="<?php echo "$email"; ?>"//></p>
</fieldset>    

    <ul id="album-fotos2">
        <p><input name="tDeletar" type="submit" id="tDeletar" value="Deletar" onClick="cli_deletar(0);"></p>
    </ul>
    
</form>
   <footer id="rodape">
        <p>Copyright 2016 - by Marcio Rogerio Rodrigues |
        <a href="https://www.facebook.com" ><img id="face" src="_imagens/facebook.png"/></a>   <a href="https://www.facebook.com"> Facebook </a>|
        <a href="https://www.twitter.com" ><img id="twitter" src="_imagens/twitter.png"/></a> <a href="http://www.twitter.com"> Twitter </a></p>
    </footer>
   
</div>
</body>

</html>

