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
// session_start inicia a sess�o session_start(); 
// as variáveis login e senha recebem os dados digitados na p�gina anterior

$nome = $_POST['usu_nome'];
$email = $_POST['usu_email'];
$user_sistema= $_POST['usu_usuario'];
$senha = $_POST['usu_senha'];
$senha2 =  $_POST['usu_senha2'];
$nivel = $_POST['usu_nivel'];

//variaveis de conexão;
if($acesso=='1'){
if($user_sistema != '' && $senha !='' &&  $nome != '' && $email !='' ){
	if ($senha == $senha2){
			$host = 'localhost';
			$usuario = 'master';
			$senhabd = '145819';
			$banco = 'pagina_ssh';

			//resolve conexão com o banco!
			$con = new mysqli($host, $usuario, $senhabd, $banco) or die ("Sem conexão com o servidor");
			if ($con->connect_errno) {
			    printf("Connect failed: %s\n", $con->connect_error);
			    exit();
			}else{

				$result = mysqli_query($con,"SELECT * FROM colaborador WHERE usuario = '$user_sistema' or email = '$email'");
				if ($result->num_rows > 0) { 
					echo "<script> alert('Usuario e/ou Email Ja Cadastrado');location.href = 'usuario-novo.html</script>";
				}else{
					$sql = "INSERT INTO colaborador(nome,email,usuario,senha,nv) VALUES('$nome','$email','$user_sistema','$senha','$nivel')";
					if (mysqli_query($con,$sql)) {
					    echo "<script> alert('Usuario Cadastrado Com Sucesso'); location.href = 'painel.php'; </script>";
					} else {
					    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
				}	
			}
	}
	echo "<script> alert('As Senhas não Coincidem, Tente Redigitar!'); </script>";
}else{
	echo "<script> alert('Preencha todos os campos para realizar o cadastro!'); location.href = 'new_user.html'; </script>";
}

}else{
	echo "<script> alert('Sem Permissão Para Fazer estas Alteraçoes');location.href = 'painel.php'</script>";
}
//}else {
//	echo "<script> alert('Por Favor Preencha todos os Dados Corretamente!'); location.href = 'new_user.html'; </script>";

//}

