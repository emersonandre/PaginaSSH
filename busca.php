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
 // Inclui o arquivo que faz a conexão ao MySQL
include("conexao.php");
	
	$id = isset($_GET["tId"])?$_GET["tId"]:"";
	$busca= mysql_query("SELECT * FROM pessoas WHERE id=$id");
	$row = mysql_fetch_array($busca);
?>

<form action="salvaralteracao.php" method="post">
Nome:<br> <input type="text" name="nome" value="<?php echo $row['nome']; ?>"><br>
CPF:<br> <input type="text" name="cpf" value="<?php echo $row['cpf']; ?>"><br>

<input type="Submit" value="Salvar">

</form>