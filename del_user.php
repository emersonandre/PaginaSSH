<?php session_start();
    if((!isset ($_SESSION['id']) == true) and (!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['nivel_acesso']) == true))
    {
        header('location:index.html');
    }
    $id_user = $_SESSION['id'];
    $logado = $_SESSION['login'];
    $acesso = $_SESSION['nivel_acesso'];

//if($nv_user == '1'){
if($acesso=='1'){
	include("conexao.php");
    
    $id = isset($_GET["id"])?$_GET["id"]:"";
   
	$query = "DELETE FROM colaborador WHERE id = '$id'";
  
    // Executa a query
	$delete = mysql_query($query);
	if ($delete) {
		echo "<script> alert('Deletado Com Sucesso!'); location.href = 'edit_usuario.php'; </script>";
        
	} else {
		echo "Não foi possível atualizar dados, tente novamente.";
		// Exibe dados sobre o erro:
		echo "Dados sobre o erro:" . mysql_error();
	}

 }else{
	echo "<script> alert('Sem Permissão Para Fazer estas Alteraçoes');location.href = 'painel.php'</script>";
}
    ?>