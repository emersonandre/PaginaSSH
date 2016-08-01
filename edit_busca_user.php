<?php
include ('conexao.php');
	
	$nome = isset($_POST["edit_nome"])?$_POST["edit_nome"]:"";
	$sql=mysql_query("SELECT * FROM colaborador where upper(nome) like '$nome%'");
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
				<th>Email</th>
				<th>Usuario</th>
				<th>NivelAcesso</th>
				<th>Editar</th>
			</thead>
			<?php
			$i=1;
				while($row=mysql_fetch_array($sql)){
					echo"<tr>
						<td>".$i."</td>
						<td>".$row['id']."</td>
						<td>".$row['nome']."</td>
						<td>".$row['email']."</td>
						<td>".$row['usuario']."</td>
						<td>".$row['nv']."</td>
						<td align='center'>
							<a href='edit_usuario.php?id=".$row['id']."'> <img src='_imagens/editar.png'> </a>	
						</td>
						<td align='center'>
							<a href='del_user.php?id=".$row['id']."' onClick = 'aoClicarExcluir($(this).getElementById()); '><img src='_imagens/delete.png'></a>	
						</td>
					</tr>";
					$i++;
				}
			?>
		</table>
	<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
    <script src="js/jquery.min.js"></script>
    <script type=text/javascript> 
		function aoClicarExcluir(id){
                $.ajax({
                    type:'post',
                    url: 'del_user.php',
                    data: {'id':id},
                    success: function(){
                        alert("Excluido com Sucesso!");

                    }

                });
            }
    </script>
	</body>
</html>