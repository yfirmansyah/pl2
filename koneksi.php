<?php
//class database (koneksi database)
class Database{

    //property
    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "learn_pl2";
    var $connection;

    //method koneksi kedalam database
    function Connect(){
        $this->connection=mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
        return $this->connection;
    }

}

?>