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
	
		<title>SSH INFORMÁTICA</title>
	</head>

<script language="javascript" src="_javascript/funcoes.js">
    
</script>

<body>

    <?php

 if($acesso=='1'){
    // Inclui o arquivo que faz a conexão ao MySQL
    include("conexao.php");
    
    $id = isset($_POST["tCod"])?$_POST["tCod"]:"";
   
	$query = "DELETE FROM ordens WHERE id='$id'";
  
    // Executa a query
	$delete = mysql_query($query);
	if ($delete) {
		echo "Ordem de serviço deletada com sucesso! ";
        echo '<script type="text/javascript">redirect();</script>';// chama a função de retorno em javaScript que retorna para o painel
        
	} else {
		echo "Não foi possível deletar a ordem, tente novamente.";
		// Exibe dados sobre o erro:
		echo "Dados sobre o erro:" . mysql_error();
	}
}else{
	echo "<script> alert('Sem Permissão Para Fazer estas Alteraçoes');location.href = 'painel.php'</script>";
}
    
    ?>
</body>
</html>
