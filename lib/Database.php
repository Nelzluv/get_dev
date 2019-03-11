<?php
	Class Database {
		private $host = db_host;
		private $user = db_user;
		private $password = db_password;
		private $db_name = db_name;

		private $dbh, $stmt, $error;

		//Constructor to initialize DB
		public function connect(){
			$dsn ="mysql:host=".$this->host.";dbname=".$this->db_name;
			$options = [
				PDO::ATTR_PERSISTENT => true,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			];

			//PDO Instance
			try {
				$this->dbh = new PDO($dsn, $this->user, $this->password, $options);
			} catch (PDOException $e){
				$this->error = $e->getMessage();
			}

			return $this->dbh;
		}
	}