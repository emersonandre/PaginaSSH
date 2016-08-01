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
include ('conexao.php');
	
	$nome = isset($_GET["tNome"])?$_GET["tNome"]:"";
	$sql=mysql_query("SELECT * FROM pessoas where upper(nome) like '$nome%'");
?>

<!DOCTYPE HTML>
<html lang = "pt-br">
	<head>
	    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Tabela</title>

	</head>
	</<body>
	<h2 align="center">Tabela</h2>
		<table align="center" border="1" cellpadding="0" cellspacing="0" width="700">
			<thead>
				<th>Nº</th>
				<th>ID</th>
				<th>Nome</th>
				<th>CPF</th>
				<th>Email</th>
				<th>Deletar</th>
			</thead>
			<?php
			$i=1;
				while($row=mysql_fetch_array($sql)){
					echo"<tr>
						<td>".$i."</td>
						<td>".$row['id']."</td>
						<td>".$row['nome']."</td>
						<td>".$row['cpf']."</td>
						<td>".$row['email']."</td>
						<td align='center'>
							<a href='cliente-delete.php?id=".$row['id']."'> <img src='_imagens/delete.png'>  </a>
					</tr>";
					$i++;
				}
			?>
		</table>

	</body>
</html>