<?php
    class User  {
        protected $pdo;
        function __construct($pdo){
            $this->pdo = $pdo;
        }

        public function checkInput($variable){
            $variable = htmlspecialchars($variable);
            $variable = trim($variable);
            $variable = stripslashes($variable);
            return $variable;  
        }

        public function checkEmail($email){
            $stmt = $this->pdo->prepare("SELECT email FROM users WHERE email = :email");
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->execute();
            $count = $stmt->rowCount();
            if($count > 0){
                return true;
            }else{
                return false;
            }
        }

        public function checkUsername($username){
            $stmt = $this->pdo->prepare("SELECT username FROM users WHERE username = :username");
            $stmt->bindParam(":username", $username, PDO::PARAM_STR);
            $stmt->execute();
            $count = $stmt->rowCount();
            if($count > 0){
                return true;
            }else{
                return false;
            }
        }

        public function create($table, $fields=array()){
            $columns = implode(',', array_keys($fields));
            //first_name, last_name, mobile
            $values = ':'.implode(', :', array_keys($fields));
            //:first_name, :last_name, :mobile
        $sql = "INSERT INTO {$table} ({$columns}) VALUES ({$values})";
        
        if($stmt = $this->pdo->prepare($sql)){
            foreach($fields as $key => $data){
                $stmt->bindValue(':'.$key, $data);
            }
            $stmt->execute();
            return $this->pdo->lastInsertId();
          }

        }
    }
?>