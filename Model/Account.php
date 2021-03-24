<?php 
require "../db.php";
class Account {
        public $name;
        public $email;
        public $phone;

        public function __construct($name, $email,$phone)
        {
                $this->name  = $name;
                $this->email  = $email;
                $this->phone  = $phone;
        
        }
        public function save(){
                global $con;
                $sql = "INSERT INTO user(Name, Email, Phone) VALUES ('$this->name',' $this->email','$this->phone')";
                $result = $con->query($sql);
                if($result == true){
                        return true;
                }
                return false;
                
            }
            
}

?>
