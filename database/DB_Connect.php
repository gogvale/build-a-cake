<?php
class DB_Connect
{
    protected $host;
    protected $dbname;
    protected $username;
    protected $password;

    private $dbh;
    public $table;

    function __construct($config_file = "/.config.php")
    {
        $config = require($config_file);
        $this->host = $config['host'];
        $this->dbname = $config['dbname'];
        $this->username = $config['username'];
        $this->password = $config['password'];
        $this->startDBConnection();
    }

    protected function startDBConnection()
    {
        $dsn = "mysql:dbname={$this->dbname};host={$this->host}";
        $user = $this->username;
        $password = $this->password;
        $this->dbh = new PDO($dsn, $user, $password);
    }
}