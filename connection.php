<?php

class Database
{
    private $host="localhost";
	private $user="u217400509_shivam";
	private $pass="Rohan3059@";
	private $dbname="u217400509_typing";
    private $connection;

    function __construct()
    {
        $this->connection = $this->connect();
    }

    function connect()
    {
         $connection =mysqli_connect($this->host,$this->user,$this->pass,$this->dbname);
        mysqli_set_charset($connection,"utf8");
        return $connection;
    }
    function disconnect()
    {
        mysqli_close($this->connection);
    }
    function run_query($query)
    {
        return mysqli_query($this->connection , $query);
    }
}
?>