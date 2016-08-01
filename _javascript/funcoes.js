
	function mudaFoto(foto){
		document.getElementById("icone").src = foto;
	}


  function Enviar(opc){//para usar 2 botoes Form editar CLIENTE
      if(opc == 1)
      {
    document.fContato.action = "cli-busca-edi.php";
    document.fContato.target = "";
    document.fContato.submit();
      }
      if(opc == 0)
      {
    document.fContato.action = "cli-update.php";
    document.fContato.target = "";
    document.fContato.submit();
      }
      if(opc == 2)
      {
    document.fContato.action = "edit_busca_user.php";
    document.fContato.target = "";
    document.fContato.submit();
      }
      if(opc == 3)
      {
    document.fContato.action = "edit_upduser.php";
    document.fContato.target = "";
    document.fContato.submit();
      }
  }

    function cli_deletar(opc){//para usar 2 botoes Form DELETAR CLIENTE
      if(opc == 1)
      {
    document.fContato.action = "cli-busca-del.php";
    document.fContato.target = "";
    document.fContato.submit();
      }
      if(opc == 0)
      {
    document.fContato.action = "cli-deletar.php";
    document.fContato.target = "";
    document.fContato.submit();
      }
  }

    

    function nova_os(opc){//para usar 2 botoes Form cadastrar OS
      if(opc == 0)
      {
    document.fContato.action = "os-busca-nova.php";
    document.fContato.target = "";
    document.fContato.submit();
      }
      if(opc == 1)
      {
    document.fContato.action = "os-salvar.php";
    document.fContato.target = "";
    document.fContato.submit();
      }
  }

    function editar_os(opc){//para usar 2 botoes Form editar OS
      if(opc == 0)
      {
    document.fContato.action = "os-busca-edi.php";
    document.fContato.target = "";
    document.fContato.submit();
      }
      if(opc == 1)
      {
    document.fContato.action = "os-update.php";
    document.fContato.target = "";
    document.fContato.submit();
      }
  }

    function del_os(opc){//para usar 2 botoes Form Deletar OS
      if(opc == 0)
      {
    document.fContato.action = "os-busca-del.php";
    document.fContato.target = "";
    document.fContato.submit();
      }
      if(opc == 1)
      {
    document.fContato.action = "os-del.php";
    document.fContato.target = "";
    document.fContato.submit();
      }
  }




  //Retorna para o Painel  
  function redirect(){
    setInterval(function(){
    window.location.href = 'painel.php';
    }, 2000);
  }
