<?php 

require '../autoload.php';

if (isset($_GET['acao']) && !empty($_GET['acao'])) {
	$acao = $_GET['acao'];
	$uC = new UsuarioController();
}else{
	$acao = "";
}

switch($acao){
	case 'deslogar':
		$uC->deslogar();
	break;
	case 'editar':
		//if (isset($_GET['nome']) && !empty($_GET['nome'])){

			//$nome = addslashes($_GET['nome']);
			//$sobrenome = addslashes($_GET['sobrenome']);
			//$telefone = addslashes($_GET['telefone']);
			//$email = addslashes($_GET['email']);
			//$senha = addslashes($_GET['senha']);
			//$c_foto = addslashes($_GET['c_foto']);
		
			$uC->editarUsuario($nome, $sobrenome, $telefone, $email, $senha); //$c_foto);

			//header("Location: ../view/profile.php?msg=Usuario editado com sucesso!&nome=".$nome);
			
	break;
	default:
	break;
}

class UsuarioController{
	private $pdo;
	private $user;
	private $id;
	private $nome;
	private $sobrenome;
	private $dt_nasc;
	private $func;
	private $telefone;
	private $email;
	private $usuario;
	private $senha;
	private $c_foto;

	public function __construct(){

		$this->pdo = new Conexao();
		$this->user = new Usuarios($this->pdo);
	}
	public function logar($u, $s){

		$this->usuario = $u;
		$this->senha = $s;

		if($this->user->validaLogin($this->usuario, $this->senha)){
			  //header("Location:../view/dashboard.php");
			  header("Location:../view/acessos.php");
    	}else{
      		header("Location:../view/login.php");
    	}
	}
	public function deslogar(){

     	$this->user->deslogar();
     	header("Location: ../view/login.php");

		exit;

	}
	public function editarUsuario($nome, $sobrenome, $telefone, $email, $senha){
		
		$this->nome = $nome; 
		$this->sobrenome = $sobrenome;
		$this->telefone = $telefone;
		$this->email = $email;
		$this->senha = $senha;
		//$this->c_foto = $c_foto;

		$pdo = new Conexao();
		
		$user = new Usuarios($pdo);
		$user->editUsuario($this->nome, $this->sobrenome,$this->telefone, $this->email, $this->senha);

		return true;

	}



	public function retornaId(){
		$this->user->getId();
	}
	public function listaUsuarios($pStatus){
		return $this->user->getUsuarios($pStatus);
	}
	public function listaUsuario($id){
		return $this->user->getUsuario($id);
	}

	public function retornaApelido($id){
		return $this->user->returnApelido($id);
	}
}

?>