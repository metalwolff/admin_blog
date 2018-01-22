<?php 

include 'config/class.conexion.php';
/**
* 
*/
class Blog 
{

	protected $titulo;
	protected $subtitulo;
	protected $contenido;
	protected $encabezado;
	protected $portada;
	protected $id;
	
	public function __construct($titulo, $subtitulo, $contenido, $encabezado, $portada, $id = '')
	{

		$db = new Conexion();

		$this->titulo = $db->real_escape_string($titulo);
		$this->subtitulo= $db->real_escape_string($subtitulo);
		$this->contenido=$db->real_escape_string($contenido);
		$this->encabezado=$db->real_escape_string($encabezado);
		$this->portada=$db->real_escape_string($portada);
		$this->id=$db->real_escape_string($id);
	}

	static function ningunDato(){
		return new self("", "", "", "", "", "");
	}

	static function soloId($id){
		return new self("", "", "", "", "", $id);
	}


	public function insert(){
		$db = new Conexion();

		$sql = "INSERT INTO `blog`( `titulo`, `subtitulo`, `contenido`, `encabezado`, `portada`) 
		VALUES ('$this->titulo', '$this->subtitulo', '$this->contenido', '$this->encabezado', '$this->portada')";
		
		$db->query($sql) ? header("location: index.php?res=insertado") : header("location: index.php?res=error");
	}

	public function update(){
		$db = new Conexion();

		$sql = "UPDATE `blog` SET `titulo`= '$this->titulo',`subtitulo`= '$this->subtitulo',`contenido`='$this->contenido',`encabezado`='$this->encabezado',`portada`='$this->portada' WHERE `id` = $this->id";
		
		//echo "sql = ", $sql;
		$db->query($sql) ? header("location: index.php?res=editado") : header("location: index.php?res=error");
	}

	public function delete(){
		$db = new Conexion();

		$sql = "DELETE FROM `blog` WHERE `id` = $this->id";
		$db->query($sql) ? header("location: index.php?res=eliminado") : header("location: index.php?res=error");
	}

	public function selectId(){

		$db = new Conexion();
		$sql = "SELECT * FROM `blog` WHERE `id` = $this->id";
		$result = $db->query($sql);
		
		return $result;
	}
	public function select(){
		$db = new Conexion();
		$sql = "SELECT * FROM `blog`";
		$result = $db->query($sql);
		
		return $result;
	}


}
 ?>