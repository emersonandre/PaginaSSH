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
$conecta = mysql_connect('localhost','root','')
		   or die('Erro ao conectar ao Banco de Dados!');
$db = mysql_select_db('am_admin')
      or die('Erro ao selecionar o Banco de Dados!');
?>