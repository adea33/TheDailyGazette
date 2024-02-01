<?php 
    class user{

       
        private $email;
        private $password;
        private $confirmpassword;
        private $firstname;
        private $lastname;
        private $cardnumber;
        private $cvc;
        private $muaji;
        private $viti;
        private $roli;

        public function __construct($email, $password, $confirmpassword, $firstname, $lastname ,$cardnumber ,$cvc ,$muaji, $viti){
            $this->email=$email;
            $this->password=$password;
            $this->confirmpassword=$confirmpassword;
            $this->firstname=$firstname;
            $this->lastname=$lastname;
            $this->cardnumber=$cardnumber;
            $this->cvc=$cvc;
            $this->muaji=$muaji;
            $this->viti=$viti;

    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        $this->password=$password;
    }
    public function getConfirmPassword(){
        return $this->confirmpassword;
    }
    public function setConfirmPassword($confirmpassword){
        $this->confirmpassword=$confirmpassword;
    }
    public function getFirstName(){
        return $this->firstname;
    }
    public function setFirstName($firstname){
        $this->firstname=$firstname;
    }
    public function getLastName(){
        return $this->lastname;
    }
    public function setLastName($lastname){
        $this->lastname=$lastname;
    }
    public function getCardNumber(){
        return $this->cardnumber;
    }
    public function setCardNumber($cardnumber){
        $this->cardnumber=$cardnumber;
    }
    public function getCVC(){
        return $this->cvc;
    }
    public function setCVC($cvc){
        $this->cvc=$cvc;
    }
    public function getMuaji(){
        return $this->muaji;
    }
    public function setMuaji($muaji){
        $this->muaji=$muaji;
    }
    public function getViti(){
        return $this->viti;
    }
    public function setViti($viti){
        $this->viti=$viti;
    }
    public function getRoli(){
        return $this->roli;
    }




    }


?>