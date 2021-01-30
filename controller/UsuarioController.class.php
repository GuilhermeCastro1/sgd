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
		$uC->editarUsuario($id, $nome, $sobrenome, $dt_nasc, $func, $telefone, $email, $usuario, $senha, $c_foto);
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
	public function editarUsuario($id, $nome, $sobrenome, $dt_nasc, $func, $telefone, $email, $usuario, $senha, $c_foto){
		
		$this->id = $id;
		$this->nome = $nome; 
		$this->sobrenome = $sobrenome;
		$this->dt_nasc = $dt_nasc;
		$this->func = $func;
		$this->telefone = $telefone;
		$this->email = $email;
		$this->usuario = $usuario;
		$this->senha = $senha;
		$this->c_foto = $c_foto;

		$pdo = new Conexao();
		
		$user = new Usuarios($pdo);
		$user->edit($this->id, $this->nome, $this->sobrenome, $this->dt_nasc, $this->func, $this->telefone, $this->email, $this->usuario, $this->senha, $this->c_foto);

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