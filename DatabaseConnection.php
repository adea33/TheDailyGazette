<?php

class DatabaseConnection{
    private $server="127.0.0.1";
    private $username="root";
    private $password="";
    private $database="thedailygazette";

    public function startConnection(){
        if(!$conn=mysqli_connect($this->server, $this->username,$this->password,$this->database)){
            echo "Lidhje deshtoi";
            return null;
        }else{
            echo "Suksese";
            return $conn;
        }
    }
}
$db=new DatabaseConnection;
$db->startConnection()

?>