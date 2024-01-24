<?php 
class userat{
    private $email;
    private $password;
    private $confirmpassword;
    private $firstname;
    private $lastname;
    private $cardNumber;
    private $cvc;
    private $muaji;
    private $viti;

    public function __constuctor($e, $p, $cfrm, $first, $last ,$card ,$cvc ,$m, $v){
            $this->email=$e;
            $this->password=$p;
            $this->confirmpassword=$cfrm;
            $this->firstname=$first;
            $this->lastname=$last;
            $this->cardNumber=$card;
            $this->cvc=$cvc;
            $this->muaji=$m;
            $this->viti=$v;

    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($e){
        $this->email=$e;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setPassword(){
        $this->password=$p;
    }
    public function getConfirmPassword(){
        return $this->confirmpassword;
    }
    public function setConfirmPassword($cp){
        $this->confirmpassword=$cp;
    }
    public function getFirstName(){
        return $this->firstname;
    }
    public function setFirstName($f){
        $this->firstname=$f;
    }
    public function getLastName(){
        return $this->lastname;
    }
    public function setLastName($l){
        $this->lastname=$l;
    }
    public function getCradNumber(){
        return $this->cardNumber;
    }
    public function setCardNumber($cn){
        $this->cardnumber=$cn;
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
    public function setMuaji($m){
        $this->muaji=$m;
    }
    public function getViti(){
        return $this->viti;
    }
    public function setViti($v){
        $this->viti=$v;
    }
}
?>