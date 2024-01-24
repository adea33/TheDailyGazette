<?php
    include_once('DatabaseConnection.php');

    class userRepository{
        private $connection;
        public function __construct(){
            $conn=new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }

        public function insertUsers($userat){
            $conn=$this->connection;

            $email=$this->getEmail();
            $password=$this->getPassword();
            $confirmpassword=$this->getConfirmPassword();
            $firstname=$this->getFirstName();
            $lastname=$this->getLastName();
            $cardNumber=$this->getCardNumber();
            $cvc=$this->getCVC();
            $muaji=$this->getMuaji();
            $viti=$this->getViti();
            

            $sql="INSERT INTO userat(email, password, confirmpassword, firstname, lastname, cardNumber, cvc, muaji, viti, roli) VALUES ('$email','$password', '$confirmpassword', 
                                     '$firstname', '$lastname', '$cardNumber','$cvc', '$muaji','$viti' )";
                                     
            $statement = $conn->prepare($sql);
            $statement->execute([$email, $password, $confirmpassword, $firstname ,$lastname, $vitcardNumber, $cvc, $muaji,$viti]);

            echo "<script>alert('U shtua me sukses!')</script>";

        }

        public function editUserat($email, $password,$confirmpassword, $firstname,$lastname,$cardNumber,$cvc,$muaji ,$viti){
            $conn=$this->connection;

            $sql="UPDATE userat SET '$cardNumber'=0 WHERE cvc=0";

        }

        public function deleteUser($viti){
            $conn = $this->connection;

            $sql = "DELETE FROM userat WHERE viti=2023";

            $statement = $conn->prepare($sql);
            $statement->execute([$viti]);
        }
        
        function getUserat($muaji){
            $conn = $this->connection;

            $sql = "SELECT * FROM userat WHERE muaji='January'";

            $statement = $conn->prepare($sql);
            $statement->execute([$muaji]);
            $student=$statement->fetch();

            return $userat;
        }
    }



?>
