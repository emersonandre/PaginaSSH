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



<script language="javascript" src="_javascript/funcoes.js">

</script>

</head>
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

<form action="" method="POST" name="fContato" target="" id="fContato" onSubmit="">

    <fieldset id="usuario"><legend>Identificação do Cliente</legend>
         <p><label for="cCod">Código:</label><input type="text" name="tCod" id="cCod" size="8" maxlength="8" disabled value="<?php echo "$tid"; ?>"/></p>
         <p><label for="cNome">Nome:</label><input type="text" name="tNome" id="cNome" size="20" maxlength="50" placeholder="Nome completo" value="<?php echo "$nome"; ?>"/> </p>
        
         
         <p><label for="cSenha">Senha:</label><input type="password" name="tSenha" id="cSenha" size="10" maxlength="8" placeholder="Senha 8 digitos" value="<?php echo "$senha"; ?>" /></p>
         <p><label for="cCpf">CPF:</label><input type="text" name="tCpf" id="cCpf" size="15" maxlength="15" placeholder="Ex: 000.000.000-00" value="<?php echo "$cpf"; ?>"/></p>
         <p><label for="cEmail">E-mail:</label><input type="email" name="tEmail" id="cEmail" size="30" maxlength="50" placeholder="Ex: usuario@dominio.com.br" value="<?php echo "$email"; ?>"//></p>

         <fieldset id="sexo"><legend>Sexo</legend>
                <input type="radio" name="tSexo" id="cMasc" value="m" /><label for="cMasc">Masculino</label><br/>
                <input type="radio" name="tSexo" id="cFem" value="f" /><label for="cFem">Feminino</label>         
         </fieldset>
         
         <p><label for="cFone1">Fone 1:</label><input type="text" name="tFone1" id="cFone1" size="30" maxlength="50" placeholder="Ex: (49)8888-88888" value="<?php echo "$fone1"; ?>"/></p>
         <p><label for="cFone2">Fone 2:</label><input type="text" name="tFone2" id="cFone2" size="30" maxlength="50" placeholder="Ex: (49)8888-88888" value="<?php echo "$fone2"; ?>"/></p>
         
         <fieldset id="Whats"><legend>Whats</legend>
            <input type="radio" name="tWhats" id="cWhatsSim" value="w1" /><label for="cWhatsSim">Sim</label><br/>
            <input type="radio" name="tWhats" id="cWhatsNao" value="w2" /><label for="cWhatsNao">Não</label>
         </fieldset>
    </fieldset>

    <fieldset id="endereco"><legend>Endereço do Usuário</legend>
        <p><label for="cLogradouro">Logradouro:</label><input type="text" name="tLogradouro" id="cLogradouro" size="30" maxlength="50" placeholder="Rua, AV, Trav, ...." value="<?php echo "$logradouro"; ?>"/></p>
        <p><label for="cNumero">Número:</label><input type="number" name="tNumero" id="cNumero" min="0" max="99999" value="<?php echo "$numero"; ?>"/></p>
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

        <p><label for="cCidade">Cidade:</label><input type="text" name="tCidade" id="cCidade" size="20" maxlength="50" placeholder="Ex: Florianópolis" value="<?php echo "$cidade"; ?>"/></p>
    </fieldset>
    <fieldset id="mensagem"><legend>Observações</legend>
         <p><label for="CMsg">Obs:</label><textarea name="tMsn" id="cMsg" cols="45" rows="5" placeholder="Descrição" ><?php echo "$msn"; ?></textarea></p>
    </fieldset>

 <p>
<input name="visualizar" type="submit" id="visualizar" value="Visualizar" onClick="Enviar(1);">
<input name="enviar" type="submit" id="enviar" value="Enviar" onClick="Enviar(0);" >    
</p>
</form>
</body>
</html>


