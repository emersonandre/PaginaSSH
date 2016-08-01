<?php session_start();
    if((!isset ($_SESSION['id']) == true) and (!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['nivel_acesso']) == true))
    {
        header('location:index.html');
    }
    $id_user = $_SESSION['id'];
    $logado = $_SESSION['login'];
    $acesso = $_SESSION['nivel_acesso'];
?>
<script language="javascript" src="_javascript/funcoes.js">
    
</script>

    <?php

if($acesso=='1' or $acesso=='0'){
    // Inclui o arquivo que faz a conexão ao MySQL
    include("conexao.php");
    
    $nome = isset($_GET["tNome"])?$_GET["tNome"]:"[Não Informado]";
    $senha = isset($_GET["tSenha"])?$_GET["tSenha"]:"123";
    $cpf = isset($_GET["tCpf"])?$_GET["tCpf"]:"000.000.000-00";
    $sexo = isset($_GET["tSexo"])?$_GET["tSexo"]:"";
    $email = isset($_GET["tEmail"])?$_GET["tEmail"]:"";
    $whats = isset($_GET["tWhats"])?$_GET["tWhats"]:"Não";
    $fone1 = isset($_GET["tFone1"])?$_GET["tFone1"]:"";
    $fone2 = isset($_GET["tFone2"])?$_GET["tFone2"]:"";
    $logradouro = isset($_GET["tLogradouro"])?$_GET["tLogradouro"]:"Não informado";
    $numero = isset($_GET["tNumero"])?$_GET["tNumero"]:"";
    $estado = isset($_GET["tEstado"])?$_GET["tEstado"]:"";
    $cidade = isset($_GET["tCidade"])?$_GET["tCidade"]:"";
    $msn = isset($_GET["tMsn"])?$_GET["tMsn"]:"";
    
	$query = "INSERT INTO pessoas (nome,senha,cpf,sexo,whats,email,fone1,fone2,logradouro,numero,estado,cidade,msn) VALUES ('$nome','$senha','$cpf','$sexo','$whats','$email','$fone1','$fone2','$logradouro','$numero','$estado','$cidade','$msn')";


    // Executa a query
	$inserir = mysql_query($query);
	if ($inserir) {
		echo "Dados inseridos com sucesso! ";
        echo '<script type="text/javascript">redirect();</script>';// chama a função de retorno em javaScript que retorna para o painel
	} else {
		echo "Não foi possível inserir dados, tente novamente.";
		// Exibe dados sobre o erro:
		echo "Dados sobre o erro:" . mysql_error();
	}

  }else{
    echo "<script> alert('Sem Permissão Para Fazer estas Alteraçoes');location.href = 'painel.php'</script>";
}  
    ?>
