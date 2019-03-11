<?php
	Class Location {
		private $db;

		public $name, $latitude, $longitude, $distance;

		public function __construct($database){
			$this->db = $database;
		}

		public function getLocation(){
			$query = 'SELECT * FROM locations where name LIKE :name';
			$name = "%$this->name%";
			$stmt = $this->db->prepare($query);
			$stmt->bindParam(":name", $name, PDO::PARAM_STR);
			$stmt->execute();

			//Store result of query in var
			return $stmt;

		}
	}