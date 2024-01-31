<?php
include_once '../NewsRepository.php';

if (isset($_POST['delete'])) {
    $newsId = $_POST['news_id'];

    $newsRepo = new NewsRepository;
    $result = $newsRepo->deleteNews($newsId);

    if ($result) {
        header("Location:../Faqja%20e%20pare/The%20Daily%20Gazette.php");  //Redirect back to the news page
        exit();
    } else {
        // Error handling
        echo "Error deleting the article.";
    }
}
