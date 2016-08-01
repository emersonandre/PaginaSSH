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
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname = "localhost";
$database = "pagina_ssh";
$username = "master";
$password = "145819";
$conecta = mysql_connect($hostname, $username, $password) or
 die('Erro ao conectar ao Banco de Dados!');
$db = mysql_select_db($database)
      or die('Erro ao selecionar o Banco de Dados!');
?>


