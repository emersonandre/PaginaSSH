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
<div id="interface">
    
    <header id="cabecalho">
            <hgroup>
                <h1>SSH Informática</h1>
                <h2>Honestidade e qualidade em nossos serviços.</h2>
            </hgroup>

      <img id="icone" src="_imagens/add-user.png"/>
        <nav id="menu">
            <h1>Menu Principal</h1>
                <ul type="disc">
                    <li onmouseover="mudaFoto('_imagens/cubo.png')" onmouseout="mudaFoto('_imagens/add-user.png')"><a href="index.html">Home</a></li>
                    <li onmouseover="mudaFoto('_imagens/empresa.png')" onmouseout="mudaFoto('_imagens/add-user.png')"><a href="empresa.html">Empresa</a></li>
                    <li onmouseover="mudaFoto('_imagens/servicos.png')" onmouseout="mudaFoto('_imagens/add-user.png')"><a href="servicos.html">Serviços</a></li>
                    <li onmouseover="mudaFoto('_imagens/suporte.png')" onmouseout="mudaFoto('_imagens/add-user.png')"><a href="suporte.html">Suporte</a></li>
                    <li onmouseover="mudaFoto('_imagens/contato.png')" onmouseout="mudaFoto('_imagens/add-user.png')"><a href="fale-conosco.html">Fale conosco</a></li>
                </ul>
        </nav>
    </header>

    <section id="corpo-full">

        <article id="noticia-principal">
            <header id="cabecalho-artigo">
                <hgroup>
                     <h3>SSH > <a href="painel.php">Painel </a> > <a href="cliente-cadastro.html">Novo cliente</a></h3>                 
                </hgroup>
            </header>


<form method="get" id="fContato" action="cli-salvar.php">
    <fieldset id="usuario"><legend>Identificação do Cliente</legend>
         <p><label for="cCod">Código:</label><input type="text" name="tCod" id="cCod" size="8" maxlength="8" disabled />
         <p><label for="cNome">Nome:</label><input type="text" name="tNome" id="cNome" size="20" maxlength="50" placeholder="Nome completo" /></p>
         <p><label for="cSenha">Senha:</label><input type="password" name="tSenha" id="cSenha" size="10" maxlength="8" placeholder="Senha 8 digitos" /></p>
         <p><label for="cCpf">CPF:</label><input type="text" name="tCpf" id="cCpf" size="15" maxlength="15" placeholder="Ex: 000.000.000-00" /></p>
         <p><label for="cEmail">E-mail:</label><input type="email" name="tEmail" id="cEmail" size="30" maxlength="50" placeholder="Ex: usuario@dominio.com.br"/></p>
         
         <fieldset id="sexo"><legend>Sexo</legend>
                <input type="radio" name="tSexo" id="cMasc" value="m" /><label for="cMasc">Masculino</label><br/>
                <input type="radio" name="tSexo" id="cFem" value="f" /><label for="cFem">Feminino</label>         
         </fieldset>
         <p><label for="cFone1">Fone 1:</label><input type="text" name="tFone1" id="cFone1" size="30" maxlength="50" placeholder="Ex: (49)8888-88888"/></p>
         <p><label for="cFone2">Fone 2:</label><input type="text" name="tFone2" id="cFone2" size="30" maxlength="50" placeholder="Ex: (49)8888-88888"/></p>
         <fieldset id="Whats"><legend>Whats</legend>
            <input type="radio" name="tWhats" id="cWhatsSim" value="Sim" /><label for="cWhatsSim">Sim</label><br/>
            <input type="radio" name="tWhats" id="cWhatsNao" value="Não" /><label for="cWhatsNao">Não</label>
         </fieldset>
    </fieldset>
    <fieldset id="endereco"><legend>Endereço do Usuário</legend>
        <p><label for="cLogradouro">Logradouro:</label><input type="text" name="tLogradouro" id="cLogradouro" size="30" maxlength="50" placeholder="Rua, AV, Trav, ...."/></p>
        <p><label for="cNumero">Número:</label><input type="number" name="tNumero" id="cNumero" min="0" max="99999"/></p>
        <p><label for="cEstado">Estado:</label>
            <select name="tEstado" id="cEstado">
            <option>Acre (AC)</option>
            <option>Alagoas (AL)</option>
            <option>Amapá (AP)</option>
            <option>Amazonas (AM)</option>
            <option>Bahia (BA)</option>
            <option>Ceará (CE)</option>
            <option>Distrito Federal (DF)</option>
            <option>Espírito Santo (ES)</option>
            <option>Goiás (GO)</option>
            <option>Maranhão (MA)</option>
            <option>Mato Grosso (MT)</option>
            <option>Mato Grosso do Sul (MS)</option>
            <option>Minas Gerais (MG)</option>
            <option>Pará (PA)</option>
            <option>Paraíba (PB)</option>
            <option>Paraná (PR)</option>
            <option>Pernambuco (PE)</option>
            <option>Piauí (PI)</option>
            <option>Rio de Janeiro (RJ)</option>
            <option>Rio Grande do Norte (RN)</option>
            <option>Rio Grande do Sul (RS)</option>
            <option>Rondônia (RO)</option>
            <option>Roraima (RR)</option>
            <option selected>Santa Catarina (SC)</option>
            <option>São Paulo (SP)</option>
            <option>Sergipe (SE)</option>
            <option>Tocantins (TO)</option>
        </select></p>
        <p><label for="cCidade">Cidade:</label><input type="text" name="tCidade" id="cCidade" size="20" maxlength="50" placeholder="Ex: Florianópolis"/></p>
    </fieldset>
    <fieldset id="mensagem"><legend>Observações</legend>
         <p><label for="CMsg">Obs:</label><textarea name="tMsn" id="cMsg" cols="45" rows="5" placeholder="Descrição"></textarea></p>
    </fieldset>


    
    <input id="bEnviar" type="image" type="submit" name="tEnviar" src="_imagens/botao-enviar.png">

  

</form>

   <footer id="rodape">
        <p>Copyright 2016 - by Marcio Rogerio Rodrigues |
        <a href="https://www.facebook.com" ><img id="face" src="_imagens/facebook.png"/></a>   <a href="https://www.facebook.com"> Facebook </a>|
        <a href="https://www.twitter.com" ><img id="twitter" src="_imagens/twitter.png"/></a> <a href="http://www.twitter.com"> Twitter </a></p>
    </footer>
</div>
</body>

</html>