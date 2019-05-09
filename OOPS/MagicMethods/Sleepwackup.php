<?php
class Connection
{
    protected $link;
    private $dsn, $username, $password;
    
    public function __construct($dsn, $username, $password)
    {
        ECHO "<br>constr calling";
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
        $this->connect();
    }
    
    private function connect()
    {
        ECHO "<br>Connect calling";
        $this->link = new PDO($this->dsn, $this->username, $this->password);
    }
    
    public function __sleep()
    {
        ECHO "<br>__sleep calling";
        return array('dsn', 'username', 'password');
    }
    
    public function __wakeup()
    {
        ECHO "<br>__wakeup calling";
        $this->connect();
    }
}

$O = new Connection("mysql:host=localhost;dbname=masterdatabase1","root","");

?>