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

        }

        public function deleteNews($newsId){
            $sql = "DELETE FROM news WHERE id = ?";
            $statement = $this->connection->prepare($sql);
    
            if (!$statement) {
                return false;
            }
    
            $statement->bind_param("i", $newsId);
    
            if ($statement->execute()) {
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