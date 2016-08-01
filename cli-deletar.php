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
    // Inclui o arquivo que faz a conexão ao MySQL
if($acesso=='1'){
    include("conexao.php");
    
    $id = isset($_GET["tCod"])?$_GET["tCod"]:"";
   
	$query = "DELETE FROM pessoas WHERE id='$id'";

    // Executa a query
	$delete = mysql_query($query);
	if ($delete) {
		echo "Cliente deletado com sucesso! ";
        echo '<script type="text/javascript">redirect();</script>';// chama a função de retorno em javaScript que retorna para o painel
        
	} else {
		echo "Não foi possível atualizar dados, tente novamente.";
		// Exibe dados sobre o erro:
		echo "Dados sobre o erro:" . mysql_error();
	}
}else{
    echo "<script> alert('Sem Permissão Para Fazer estas Alteraçoes');location.href = 'painel.php'</script>";
}
    
    ?>
