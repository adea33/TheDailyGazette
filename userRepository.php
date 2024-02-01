<?php 
    include_once("DBC.php");
    include_once("user.php");
    class userRepository{
        private $connection;

        public function __construct(){
            $conn = new DBC;
            $this->connection = $conn->startConnection();
            

        }

        public function insertUser($user){
            $conn = $this->connection;
          
            $email = $user->getEmail();
            $password = $user->getPassword();
            $confirmpassword = $user->getConfirmPassword();
            $firstname = $user->getFirstName();
            $lastname=$user->getLastName();
            $cardnumber = $user->getCardNumber();
            $cvc = $user->getCVC();
            $muaji = $user->getMuaji();
            $viti=$user->getViti();

            $sql = "INSERT INTO user(email, password, confirmpassword, firstname,lastname,cardnumber,cvc,muaji, viti) VALUES (?,?,?,?,?,?,?,?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([$email, $password, $confirmpassword,$firstname, $lastname, $cardnumber, $cvc, $muaji, $viti]);

            echo "<script>alert('U shtua me sukses!')</script>";
        }
        public function getAllUsers(){
            $conn = $this->connection;

            $sql = "SELECT * FROM user";
            $statement = $conn->query($sql);

            $users = $statement->fetchAll();
            return $users;
        }
        public function editUser($id, $email, $password, $confirmpassword, $firstname,$lastname, $cardNumber, $cvc, $muaji, $viti){
            $conn = $this->connection;
            $sql = "UPDATE user SET email=?,password=?, confirmpassword=?, firstname=?,lastname=?,cardNumber=?,cvc=?,muaji=?, viti=? WHERE ID   =?";

            $statement = $conn->prepare($sql);
            $statement->execute($id, $email, $password, $confirmpassword, $firstname,$lastname, $cardNumber, $cvc, $muaji, $viti);

            echo "<script>alert('U ndryshua me sukses!')</script>";

        }
        function deleteUser($id){
            $conn = $this->connection;

            $sql = "DELETE FROM user WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
        }
        function getUserByID($id){
            $conn = $this->connection;

            $sql = "SELECT * FROM user WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
            $users=$statement->fetch();

            return $users;
        }

    }



?>