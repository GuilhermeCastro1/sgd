<?php 

class Usuarios{

	private $pdo;
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

	public function __construct($pdo, $id = '', $usuario = '', $senha = '', $email = '', $apelido = '',  $nome = ''){
		$this->pdo = $pdo;
		$this->id = $id;
		$this->usuario = $usuario;
		$this->senha = $senha;
		$this->email = $email;
		$this->apelido = $apelido;
		$this->nome = $nome;
	}

	public function getId(){
		return $this->id;
	}

	public function setUsuario($usuario){
		$this->usuario = $usuario;
	}

	public function getSenha(){
		return $this->senha;
	}
	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function getEmail(){
		return $this->email;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	public function getApelido(){
		return $this->apelido;
	}
	public function setApelido($apelido){
		$this->apelido = $apelido;
	}

	public function getNome(){
		return $this->nome;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}


	public function getUsuarios($pStatus){

		$sql = "SELECT * FROM usuarios $pStatus";
		$sql = $this->pdo->prepare($sql);
		$sql->execute();

		$array = array();

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();

			return $array;
		}

		return $array;
	}
	
	public function getUsuario($i){
		//$sql = "SELECT * FROM usuarios WHERE id = $i and status != 'inativo'";
		$sql = "SELECT * FROM usuarios WHERE id = $i";
		$sql = $this->pdo->prepare($sql);
		$sql->execute();

		$array = array();

		if($sql->rowCount() > 0){
			$array = $sql->fetch();

			return $array;
		}

		return $array;
	}

	public function validaLogin($a, $b){
		$array = array();
		$user = $a;
		$pass = $b;
		$sql = "SELECT * FROM usuarios WHERE usuario = :user AND senha = :pass AND status != 0";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(":user", $user);
		$sql->bindValue(":pass", $pass);
		$sql->execute();

		if($sql->rowCount() > 0){
			$array = $sql->fetch();
			session_start();
			$_SESSION['logon'] = $array['apelido'];
			$_SESSION['logon_email'] = $array['email'];
			$_SESSION['logon_nome'] = $array['nome'];
			$_SESSION['id'] = $array['id'];
			return true;
		}else{
			return false;
		}
	}

	public function deslogar(){
		
		$sessao = session_start();
		session_unset();

		return true;
	}

	public function returnApelido($i){
		//$sql = "SELECT * FROM usuarios WHERE id = $i and status != 'inativo'";
		$sql = "SELECT apelido FROM usuarios WHERE id = $i";
		$sql = $this->pdo->prepare($sql);
		$sql->execute();

		//$array = array();

		if($sql->rowCount() > 0){
			$apelido = $sql->fetch();

			return $apelido;
		}

		return $apelido;
	}

	public function edit($id, $nome, $sobrenome, $dt_nasc, $func, $telefone, $email, $usuario, $senha, $c_foto){

		$this->id 			= $id;
		$this->nome 		= $nome;
		$this->sobrenome 	= $sobrenome;
		$this->dt_nasc 		= $dt_nasc;
		$this->func 		= $func;
		$this->telefone 	= $telefone;
		$this->email  		= $email;
		$this->usuario  	= $usuario;
		$this->senha 		= $senha;
		$this->c_foto 		= $c_foto;

		$sql = "UPDATE usuarios SET nome = '$this->nome', sobrenome = '$this->sobrenome', dt_nasc = '$this->dt_nasc', func = '$this->func', telefone = '$this->telefone', email = '$this->email', usuario = '$this->usuario', senha = '$this->senha', c_foto = '$this->c_foto' WHERE id = '$this->id'";

		$sql = $this->pdo->prepare($sql);
		$sql->execute();

		return true;
	}
}

?>