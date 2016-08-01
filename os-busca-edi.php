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
	$busca_pessoa=mysql_query("SELECT * FROM pessoas where upper(nome) like '$nome%'");
	$linha=mysql_fetch_array($busca_pessoa);
	$id_pessoa=$linha['id'];

	$busca_ordem= mysql_query("SELECT * FROM ordens WHERE id_cli = $id_pessoa");
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
				<th>Id_cli</th>
				<th>Nome</th>
				<th>Marca</th>
				<th>modelo</th>
				<th>serie</th>
			</thead>
			<?php
			$i=1;
				while($row=mysql_fetch_array($busca_ordem)){
					echo"<tr>
						<td>".$i."</td>
						<td>".$row['id']."</td>
						<td>".$row['id_cli']."</td>
						<td>".$linha['nome']."</td>
						<td>".$row['marca']."</td>
						<td>".$row['modelo']."</td>
						<td>".$row['serie']."</td>
								
						<td align='center'>
							<a href='os-editar.php?id=".$row['id']."'> <img src='_imagens/editar.png'> </a>
							
						</td>
					</tr>";
					$i++;
				}
			?>
		</table>

	</body>
</html>