<?php session_start();
	unset($_SESSION['id']); 
	unset($_SESSION['login']);
	unset($_SESSION['nivel_acesso']);
header('location:suporte.html');


