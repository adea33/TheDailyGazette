<?php
    include_once('DatabaseConnectionNews.php');
    
    class NewsRepository{
        private $connection;
        public function __construct(){
            $conn=new DatabaseConnectionNews;
            $this->connection = $conn->startConnection();
        }

        public function insertNews($news){
            include_once('News.php');
            $conn=$this->connection;

            $title = $news->getTitle();
            $text = $news->getText();
            $img = $news->getImg(); 
            $category = $news->getCategory();
            $name = $news->getName();
            $lastName=$news->getLastName();
            $date=$news->getDate();
            

            $sql = "INSERT INTO news (title, text, img, category, name, lastName, date) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $statement = $conn->prepare($sql);

            
            $statement->bind_param("sssssss", $title, $text, $img, $category, $name, $lastName, $date);

            
            $statement->execute();

            echo "<script>alert('U shtua me sukses!')</script>";

        }
        public function editNews($title, $text,$img, $category, $name,$lastName,$date){
            $conn=$this->connection;

            //$sql="UPDATE userat SET '$cardNumber'=0 WHERE cvc=0";

        }

        public function deleteNews($newsId){
            $sql = "DELETE FROM news WHERE id = ?";
            $statement = $this->connection->prepare($sql);
    
            if (!$statement) {
                return false;
            }
    
            $statement->bind_param("i", $newsId);
    
            if ($statement->execute()) {
                // News deleted successfully
                return true;
            } else {
                return false;
            }
        }


        
        public function getAllNews() {
            $conn = $this->connection;
            $sql = "SELECT * FROM news"; 
            $result = $conn->query($sql);
    
            $newsList = [];
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $newsList[] = $row;
                }
            }
            return $newsList;
        }
    }



?>