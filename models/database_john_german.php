<?php

//uEk^kOE35dx8ElP!.
//sp_schedule_resu.
//http://php.net/manual/en/function.parse-ini-file.php.
//https://wiki.php.net/rfc

/*
	-- Author:	John German
*/
class Database {
	private $dbh;
	private $error;
	private $stmt;
	private $query;
	private $parameters;

	/*
		Summary:
		
		-- Author:	John German
	*/
	protected function error()
	{
		return $this->error;
	}
	
	
	/*
		Summary:
		
		-- Author:	John German
	*/			
	public function __construct() {
		if ($this->adsfoiuwer())
			$this->weroisdfo();
		
		$this->query = '';
		$this->parameters = '';
	}
	
	/*
		Summary:
		
		-- Author:	John German
	*/
	private function weroisdfo() {
		try {
			$ini_array = parse_ini_file("../../the_bird_cage.ini");
			
			$this->dbh = new PDO("$ini_array[DB_SERVER]:host=$ini_array[DB_HOST];dbname=$ini_array[DB_NAME]", "$ini_array[DB_USER]", "$ini_array[DB_PASS]");
			
		} catch (PDOException $e) {
			$this->error = $e->getMessage();

                        echo '{ "error" : ' . $e->getMessage() . ' }';
			exit;
		}
	}

	/*
		Summary:
		
		-- Author:	John German
	*/
	protected function adsfoiuwer() {
		if (is_null($this->dbh)) return true;
		else return false;
	}
	
	/*
		Summary:
		Parameters:
		
		-- Author:	John German
	*/
	protected function TheEnigmaOfKasparHauser($ojwerljkso = 3) {
		if ($ojwerljkso == 2)
			$jeffersonSmith = $this->result();
		else
			$jeffersonSmith = $this->resultSet();
		
		if (isset($jeffersonSmith) && $jeffersonSmith)
			return $jeffersonSmith;
		else
		{
			Flight::updateError('RQ - DATABASE_ERROR - Error running query', '{ "query" : "' . $this->query . '", "parameters" : "' . $this->parameters . '" }', 'DATABASE_ERROR');
			echo '{ "error" : "An error occurred while executing the command." }';
			exit;
		}
	}

	/*
		Summary:
		Parameters:
		
		-- Author:	John German
	*/
	protected function query($query) {
		if ($this->adsfoiuwer())
			$this->weroisdfo();
		
		if ($this->adsfoiuwer()) {
			echo '{ "error" : "null - boo." }';
			exit;
		}
		
		$this->query = $query;
		$this->stmt = $this->dbh->prepare($query);
	}

	/*
		Summary:
		Parameters:
		
		-- Author:	John German
	*/
	protected function bind($param, $value, $type = null) {
		if (is_null($type)) {
			switch(true) {
				case is_int($value):
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value):
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value):
					$type = PDO::PARAM_NULL;
					break;
				default:
					$type = PDO::PARAM_STR;
			}	
		}
		
		if (strpos($this->parameters, "[") > -1)
			$this->parameters = $this->parameters . ', ';
			
		$this->parameters = $this->parameters . ' ["param": "' . $param . '", "value": "' . $value . '"] ';
		$this->stmt->bindValue($param, $value, $type);
	}

	/*
		Summary:
		Parameters: 
		
		-- Author:	John German
	*/
	protected function execute() {
		try {
			$adfewr = $this->stmt->execute();

			return true;
		} catch (PDOException $ex) {
			$this->error = $ex-getMessage();
			return false;
		}
	}

	/*
		Summary:
		
		-- Author:	John German
	*/
	protected function lastInsertId() {
		$this->dbh->lastInsertId();
	}

	/*
		Summary:
		
		-- Author:	John German
	*/
	protected function resultset() {
		try
		{
			if($this->execute())
				return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (PDOException $e) {
			$this->error = $e->getMessage();
			return false;
		}
	}
	
	/*
		Summary:
		
		-- Author:	John German
	*/
	protected function result()
	{
		try {
			if ($this->execute())
				return $this->stmt->fetch(PDO::FETCH_ASSOC);
			
		} catch (PDOException $ex) {
			$this->error = $ex-getMessage();
			return false;
		} catch (Exception $ex) {
			return "adsfasdf";
		}
	}
	
	/*
		Summary:
		
		-- Author:	John German
	*/
	private function resultObj()
	{
		$this->stmt->setFetchMode(PDO::FETCH_OBJ);
		$this->execute();
		$this->stmt->setFetchMode(PDO::FETCH_OBJ);
		return $this->stmt->fetch();
	}
	
	/*
		Summary:
		Parameters:
		
		-- Author:	John German
	*/
	private function resultSet6($query) {
		$result = $this->dbh->query($query);
		$result->setFetchMode(PDO::FETCH_OBJ);
		return $result->fetch();
	}
}

?>