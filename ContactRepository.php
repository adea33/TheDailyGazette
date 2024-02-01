<?php
    include_once('DatabaseConnectionNews.php');
    
    class ContactRepository{
        private $connection;
        public function __construct(){
            $conn=new DatabaseConnectionNews;
            $this->connection = $conn->startConnection();
        }
        public function insertComment($contact){
            include_once('Contact.php');
            $conn=$this->connection;

            $comment = $contact->getComment();
            $email = $contact->getEmail();
            

            $sql = "INSERT INTO contact (comment, email) VALUES (?, ?)";
            $statement = $conn->prepare($sql);

            
            $statement->bind_param("ss", $comment, $email);

            
            $statement->execute();

            echo "<script>alert('Your comment has been submitted!')</script>";

        }

        public function getAllComments(){
            $conn = $this->connection;
            
            // SQL query to select all columns from the 'contact' table
            $sql = "SELECT * FROM contact";
            
            // Prepare the SQL statement
            $statement = $conn->prepare($sql);
            
            // Execute the prepared statement
            $statement->execute();
            
            // Get the result of the query
            $result = $statement->get_result();
            
            // Initialize an array to hold all comments
            $comments = [];
            
            // Fetch each row and add it to the $comments array
            while ($row = $result->fetch_assoc()) {
                $comments[] = $row;
            }
            
            // Free result set
            $result->free_result();
            
            // Close the statement
            $statement->close();
            
            return $comments;
        }
    }
?>