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
    include("conexao.php");
    

     
    $id_cli = isset($_GET["tId_cli"])?$_GET["tId_cli"]:"";      
    $estadoEqui = isset($_GET["tEstadoEqui"])?$_GET["tEstadoEqui"]:"";
    $serie = isset($_GET["tSerie"])?$_GET["tSerie"]:"";
    $marca = isset($_GET["tMarca"])?$_GET["tMarca"]:"";
    $modelo = isset($_GET["tModelo"])?$_GET["tModelo"]:"";
    $msn = isset($_GET["tMsn"])?$_GET["tMsn"]:"";


    $query = "INSERT INTO ordens (id_cli,serie,marca,estado_equi,modelo,mens) VALUES ('$id_cli','$serie','$marca','$estadoEqui','$modelo','$msn')";


    // Executa a query
    $inserir = mysql_query($query);
    if ($inserir) {
        echo "Dados inseridos com sucesso! ";
        echo '<script type="text/javascript">redirect();</script>';// chama a função de retorno em javaScript que retorna para o painel
    } else {
        echo "Não foi possível inserir dados, tente novamente.";
        // Exibe dados sobre o erro:
        echo "Dados sobre o erro:" . mysql_error();
    }


    
    ?>



