<?php session_start();
    if((!isset ($_SESSION['id']) == true) and (!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['nivel_acesso']) == true))
    {
        header('location:index.html');
    }
    $id_user = $_SESSION['id'];
    $logado = $_SESSION['login'];
    $acesso = $_SESSION['nivel_acesso'];
?>


<?php
if($acesso=='1'){
	include("conexao.php");


		$usu_id = isset($_GET["edit_cod"])?$_GET["edit_cod"]:"";
	    $usu_nome = isset($_GET["nome"])?$_GET["nome"]:"";
	    $usu_email = isset($_GET["email"])?$_GET["email"]:"";
	    $usu_senha = isset($_GET["senha"])?$_GET["senha"]:"";
	    $usu_nv = isset($_GET["nivel"])?$_GET["nivel"]:"";

		//consulta datas;  
		//select que recebe os parametros da funcao
	$sql = "UPDATE colaborador SET nome= '$usu_nome' ,email= '$usu_email' ,senha= '$usu_senha', nv= '$usu_nv' WHERE id='$usu_id'";
	$inserir = mysql_query($sql);

	if ($inserir) {
        echo "<script> alert('Alterado Com Sucesso!'); location.href = 'edit_usuario.php'; </script>";// chama a função de retorno em javaScript que retorna para o painel
        
	} else {
		echo "Não foi possível atualizar dados, tente novamente.";
		// Exibe dados sobre o erro:
		echo "Dados sobre o erro:" . mysql_error();
	}
}else{
	echo "<script> alert('Sem Permissão Para Fazer estas Alteraçoes');location.href = 'painel.php'</script>";
}
    
?>