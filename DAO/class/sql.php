<?php

	class Sql extends PDO
	{
		private $conn;

		public function __construct()
		{
			$this->conn = new PDO("mysql:host=localhost;dbname=pdo", "root", ""); 
		}


		public function setParams($statment, $params = array())
		{
			foreach ($params as $key => $value)
			{
				$statment->bindParam($key, $value);
			}
		}

		private function setParam($statment, $key, $value)
		{
			$statment->bindParam($key, $value);
		}

		public function query($rawQuery, $params = array())
		{
			$stmt = $this->conn->prepare($rawQuery);

			$this->setParams($stmt, $params);

			$stmt->execute();

			return $stmt;
		}

		public function select($rawQuery, $params = array()):array
		{
			$stmt = $this->query($rawQuery, $params);
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
	}

?>