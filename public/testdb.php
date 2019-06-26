<?php

// $localhost_cleardb_url = "mysql://b8991fd1eabdd4:6e4547ca@us-cdbr-iron-east-02.cleardb.net/heroku_f019ad04541efac?reconnect=true";

// if(!getenv("CLEARDB_DATABASE_URL")) {
// putenv("CLEARDB_DATABASE_URL = $localhost_cleardb_url");

$dao = new Dao();
    
echo $dao->getConnectionStatus();



class Dao
{
	/**
	 * Creates and returns a PDO connection using the database connection
	 * url specified in the CLEARDB_DATABASE_URL environment variable.
	 */
	private function getConnection()
	{
		//$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

		$host = 'us-cdbr-iron-east-02.cleardb.net';
		$db   = 'heroku_f019ad04541efac';
		$user = 'b8991fd1eabdd4';
		$pass = '6e4547ca';

		$conn = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);

		// Turn on exceptions for debugging. Comment this out for
		// production or make sure to use try-catch statements.
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $conn; 
	}
	/**
	 * Returns the database connection status string.
	 */
	public function getConnectionStatus()
	{
		$conn = $this->getConnection();
		return $conn->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
	}
}
    
?>
