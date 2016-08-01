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
    <title>SSH INFORMÁTICA</title>
</head>

<script language="javascript" src="_javascript/funcoes.js">
    
</script>
<body>
<?php
 include("conexao.php");
if($acesso=='1'){
 //busca as ordens de serviços

    $tId = isset($_GET["id"])?$_GET["id"]:"";

    $busca= mysql_query("SELECT * FROM ordens WHERE id = $tId");
    $row=mysql_fetch_array($busca);
    $EstadoEqui=$row['estado_equi'];
    $serie=$row['serie'];
    $marca=$row['marca'];
    $modelo=$row['modelo'];
    $msn=$row['mens'];
    $id_pessoa = $row['id_cli'];

//busca nome dos clientes pela tabela PESSOAS
    
if ($tId){ 
    $busca_pessoa= mysql_query("SELECT * FROM pessoas WHERE id = $id_pessoa");
    $linha=mysql_fetch_array($busca_pessoa);
    $nome=$linha['nome'];

    }else{
        $nome='';
    }
}else{
    echo "<script> alert('Sem Permissão Para Fazer estas Alteraçoes');location.href = 'painel.php'</script>";
}
?>


<div id="interface">
    <header id="cabecalho">
            <hgroup>
                <h1>SSH Informática</h1>
                <h2>Honestidade e qualidade em nossos serviços.</h2>
            </hgroup>
      <img id="icone" src="_imagens/del-os.png"/>
        <nav id="menu">
            <h1>Menu Principal</h1>
                <ul type="disc">
                    <li onmouseover="mudaFoto('_imagens/cubo.png')" onmouseout="mudaFoto('_imagens/del-os.png')"><a href="index.html">Home</a></li>
                    <li onmouseover="mudaFoto('_imagens/empresa.png')" onmouseout="mudaFoto('_imagens/del-os.png')"><a href="empresa.html">Empresa</a></li>
                    <li onmouseover="mudaFoto('_imagens/servicos.png')" onmouseout="mudaFoto('_imagens/del-os.png')"><a href="servicos.html">Serviços</a></li>
                    <li onmouseover="mudaFoto('_imagens/suporte.png')" onmouseout="mudaFoto('_imagens/del-os.png')"><a href="suporte.html">Suporte</a></li>
                    <li onmouseover="mudaFoto('_imagens/contato.png')" onmouseout="mudaFoto('_imagens/del-os.png')"><a href="fale-conosco.html">Fale conosco</a></li>
                </ul>
        </nav>
    </header>

    <section id="corpo-full">
        <article id="noticia-principal">
            <header id="cabecalho-artigo">
                <hgroup>
                    <h3>SSH > <a href="painel.php">Painel </a> > <a href="os-delete.php?id=0">Deletar - Ordem de Serviço</a></h3>                 
                </hgroup>
            </header>


<form action="" method="POST" name="fContato" target="" id="fContato" onSubmit="">
        <fieldset id="cliente"><legend>Identificação do Cliente</legend>
                <input type="text" name="tId_cli" id="cId_cli" size="8" maxlength="8" value="<?php echo "$id_pessoa"; ?>" />
                <p><label for="cCod">Código OS:</label><input type="text" name="tCod" id="cCod" size="8" maxlength="8" readonly="readonly" value="<?php echo "$tId"; ?>" /></p>
                <p><label for="cNome">Nome:</label><input type="text" name="tNome" id="cNome" size="20" maxlength="50" placeholder="Nome completo" value="<?php echo "$nome"; ?>"/><input name="tBuscar" type="submit" id="tBuscar" value="Buscar.." onClick="del_os(0);"></p>
        </fieldset>
        <fieldset id="equipamento"><legend>Descrição do equipamento</legend>
                <p><label for="cEstadoEqui">Estado:</label><input type="text" name="tEstadoEqui" id="cEstadoEqui" size="35" maxlength="60" placeholder="Estado geral do Equipamento" value="<?php echo "$EstadoEqui"; ?>"/></p>
                <p><label for="cSerie">Nº Série:</label><input type="text" name="tSerie" id="cSerie" size="35" maxlength="60" placeholder="" value="<?php echo "$serie"; ?>"/></p>
                <p><label for="cMarca">Marca:</label><input type="text" name="tMarca" id="cMarca" size="35" maxlength="60" placeholder="Ex: Sansung, STI, Asus, Positivo" value="<?php echo "$marca"; ?>"/></p>
                <p><label for="cModelo">Modelo:</label><input type="text" name="tModelo" id="cModelo" size="35" maxlength="60" placeholder="Ex: E450, E1-5780" value="<?php echo "$modelo"; ?>"/></p>
        </fieldset>        
        <fieldset id="mensagem"><legend>Descrição do serviço</legend>
                <p><label for="CMsg">Mensagem:</label><textarea name="tMsn" id="cMsg" cols="45" rows="5" placeholder="Descrição"><?php echo "$msn"; ?></textarea></p>
        </fieldset>
       
        <ul id="album-fotos2">
            <input name="tDeletar" type="submit" id="tDeletar" value="Deletar" onClick="del_os(1);">
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

