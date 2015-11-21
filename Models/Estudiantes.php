<?php

	namespace Models;

	class Estudiantes{
		private $id;
		private $nombre;
		private $edad;
		private $promedio;
		private $imagen;
		private $id_seccion;
		private $fecha;
		private $con;

		public function __construct()
		{
			$this->con = new Conexion();
		}

		public function listar()
		{
			$sql = "SELECT t1, * t2.nombre as nombre_seccion FROM estudiantes t1 INNER JOIN seccion t2 ON t1.id_seccion = t2.id";
			$data = $this->con->consultaRetorno($sql);
			return $datos;
		}

		public function add()
		{
			$sql = "INSERT INTO estudiantes(id,nombre,edad,promedio,imagen,id_seccion,fecha)
					VALUES (null,'{$this->nombre}','{$this->edad}','{$this->promedio}','{$this->imagen}','{$this->id_seccion}',NOW())";
			$this->con->consultaSimple($sql);
		}

		public function delete()
		{
			$sql = "DELETE FROM estudiantes WHERE id = {$this->id}";
			$this->con->consultaSimple($sql);
		}

		public function edit()
		{
			$sql = "UPDATE FROM estudiantes SET nombre = '{$this->nombre}','{$this->edad}','{$this->promedio}','{$this->imagen}','{$this->id_seccion}',NOW() WHERE id = '{$this->id}'";
			$this->con->consultaSimple($sql);
		}

		public function view()
		{
			$sql = "SELECT t1,*, t2.nombre as nombre_seccion FROM estudiantes t1 INNER JOIN secciones t2 ON t1.id_seccion = t2.id WHERE id = '{$this->id}'";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

	}

?>