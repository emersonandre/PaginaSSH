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
    <link rel="stylesheet" href="_css/painel.css" />
    <link rel="shortcut icon" href="_imagens/favicon.ico">
    <link rel="icon" href="_imagens/animated_favicon1.gif" type="image/gif" >

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
   <title>SSH INFORMÁTICA</title>
   <?php
        if($acesso == '1'){
            echo '<style>#divDiferente { visibility: visible; }</style>';
        } else {
            echo '<style>#divDiferente { visibility: hidden; }</style>';
        }
    ?>
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
    <script src="js/jquery.min.js"></script>
    <script type=text/javascript>
    $(function() {
        $("#a").keypress(function() {
            $("div#divDiferente").hide();
        });
    });
</script>
</head>
<body>
</head>
<script language="javascript" src="_javascript/funcoes.js">
    
</script>
<body>
<div id="interface">
    
    <header id="cabecalho">
            <hgroup>
                <h1>SSH Informática</h1>
                <h2>Honestidade e qualidade em nossos serviços.</h2>
            </hgroup>

      <img id="icone" src="_imagens/painel2.jpg"/>
        <nav id="menu">
            <h1>Menu Principal</h1>
                <ul type="disc">
                    <li onmouseover="mudaFoto('_imagens/cubo.png')" onmouseout="mudaFoto('_imagens/painel2.jpg')"><a href="index.html">Home</a></li>
                    <li onmouseover="mudaFoto('_imagens/empresa.png')" onmouseout="mudaFoto('_imagens/painel2.jpg')"><a href="empresa.html">Empresa</a></li>
                    <li onmouseover="mudaFoto('_imagens/servicos.png')" onmouseout="mudaFoto('_imagens/painel2.jpg')"><a href="servicos.html">Serviços</a></li>
                    <li onmouseover="mudaFoto('_imagens/suporte.png')" onmouseout="mudaFoto('_imagens/painel2.jpg')"><a href="suporte.html">Suporte</a></li>
                    <li onmouseover="mudaFoto('_imagens/contato.png')" onmouseout="mudaFoto('_imagens/painel2.jpg')"><a href="fale-conosco.html">Fale conosco</a></li>
                </ul>
        </nav>
    </header>
    <section id="corpo-full"> 
        <article id="noticia-principal">          
            <header id="cabecalho-artigo">
                <hgroup>
                    <h3> <a href="index.html">SSH </a> > <a href="painel.php">Painel</a> BEM-VINDO <?php echo $logado?><a href="logout.php" style="color:red;"> SAIR </a></h3> 
                </hgroup>
            </header>



    <fieldset id="painel"><legend>Escolha uma opção abaixo</legend>
       
        <fieldset id="clientes"><legend>Clientes</legend>
    		<ul id="album-fotos">
    		  <li id="foto-01"><a class="readmore" href="cliente-cadastro.php"></a><span>Novo</span></li>
    		  <li id="foto-02"><a class="readmore" href="cliente-editar.php?id=0"></a><span>Editar</span></li>
    		  <div id="divDiferente">
                 <li id="foto-03"><a class="readmore" href="cliente-delete.php?id=0"></a><span>Deletar</span></li>
              </div>
    		</ul>
    	</fieldset>

    	<fieldset id="os"><legend>Ordem de serviço</legend>
    		<ul id="album-fotos">
    			<li id="foto-04"><a class="readmore" href="os-nova.php?id=0"></a><span>Nova OS</span></li>
    			<div id="divDiferente">
                    <li id="foto-05"><a class="readmore" href="os-editar.php?id=0"></a><span>Editar OS</span></li>
    			    <li id="foto-06"><a class="readmore" href="os-delete.php?id=0"></a><span>Deletar OS</span></li>
                </div>
    		</ul>
    	</fieldset>
        <div id="divDiferente">
            <fieldset id="usuarios"><legend>Usuários do sistema</legend>
                <ul id="album-fotos">
                    <li id="foto-07"><a class="readmore" href="usuario-novo.html"></a><span>Novo</span></li>
                    <li id="foto-08"><a class="readmore" href="edit_usuario.php"></a><span>Editar</span></li>
                    <li id="foto-09"><a class="readmore" href="#"></a><span>Deletar</span></li>
                </ul>
            </fieldset>
        </div>



    </fieldset>
    
    

   <footer id="rodape">
        <p>Copyright 2016 - by Marcio Rogerio Rodrigues |
        <a href="https://www.facebook.com" ><img id="face" src="_imagens/facebook.png"/></a>   <a href="https://www.facebook.com"> Facebook </a>|
        <a href="https://www.twitter.com" ><img id="twitter" src="_imagens/twitter.png"/></a> <a href="http://www.twitter.com"> Twitter </a></p>
    </footer>
</div>
</body>

</html>