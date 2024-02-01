<?php 
class Contact{
    private $comment;
    private $email;
    public function __construct($comment, $email){
            $this->comment=$comment;
            $this->email=$email;
    }

    public function getComment(){
        return $this->comment;
    }
    public function setComment($comment){
        $this->comment=$comment;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email=$email;
    }
}
?>