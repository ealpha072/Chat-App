<?php 
   class Access{
       public $id;

       public $unique_id;
       public $firstname;
       public $lastname;
       public $photo;
       public $tmpName;
       public $email;
       public $password;
       public $status;

       public $tablename = 'users';

       private $conn;

       public function __construct($db)
       {
           $this->conn = $db;
       }

       public function register()
       {

            $signupErrors = array();
            $sql1 = 'INSERT INTO '.$this->tablename. ' 
                SET 
                    unique_id=:id,
                    firstname=:fname, 
                    lastname=:lname, 
                    email=:email, 
                    photo=:photo, 
                    password=:password,
                    status=:status
                ';
            $sql2 = 'SELECT email FROM '.$this->tablename. ' WHERE email=:email';

            $stmt1 = $this->conn->conn->prepare($sql1);
            $stmt2  = $this->conn->conn->prepare($sql2);

            $this->firstname = htmlspecialchars(strip_tags($this->firstname));
            $this->lastname = htmlspecialchars(strip_tags($this->lastname));
            $this->photo =  htmlspecialchars($this->photo);
            $this->tmpName = htmlspecialchars($this->tmpName);
            $this->email = htmlspecialchars(strip_tags($this->email));
            $this->password = $this->password;

            if( filter_var($this->email, FILTER_VALIDATE_EMAIL)){
               //if valid email, check existing
               $stmt2->bindParam(':email', $this->email);
               $stmt2->execute();
               $results = $stmt2->fetchAll(PDO::FETCH_ASSOC);
               if(count($results) > 0){
                    $signupErrors['emailExists'] = 'Email already exists';
               }
            }

            if(($this->photo)){
                $allowedTypes = ['jpeg', 'jpg', 'png'];
                $targetDir = '../images/';
                $targetfile = $targetDir . basename($this->photo);
                $extension = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

                if(!in_array($extension, $allowedTypes)){
                    $signupErrors['imageError']  = 'Image type not allowed';
                }else{
                    //process image
                    move_uploaded_file($this->tmpName, $targetfile);
                }
            }

            //bind params;
            if(count($signupErrors) === 0){
                $online_status = 'Active now';
                $randomId = rand(time(), 10000000);
                $this->unique_id = $randomId;
                $this->status = $online_status;
    
                $stmt1->bindParam(':id', $this->unique_id);
                $stmt1->bindParam(':fname', $this->firstname);
                $stmt1->bindParam(':lname', $this->lastname);
                $stmt1->bindParam(':email', $this->email);
                $stmt1->bindParam(':photo', $this->photo);
                $stmt1->bindParam(':password', $this->password);
                $stmt1->bindParam(':status', $this->status);

                if($stmt1->execute()){
                    $sql3 = 'SELECT * FROM '.$this->tablename . ' WHERE email=:email';
                    $stmt3 = $this->conn->conn->prepare($sql3);

                    $stmt3->bindParam('email', $this->email);
                    $stmt3->execute();
                    
                    $userDetails = $stmt3->fetchAll(PDO::FETCH_ASSOC);
                    $_SESSION['unique_id'] = $userDetails[0]['unique_id'];
                    return true;
                }
            }else{
                return $signupErrors;
            }
        
       }

       public function login()
       {
           $login_errors = [];
           $sql = 'SELECT * FROM '.$this->tablename. ' WHERE email=:email AND password=:pass LIMIT 0,1';
           $stmt = $this->conn->conn->prepare($sql);

           $this->email = htmlspecialchars(strip_tags($this->email));
           $this->password = $this->password;

           $stmt->bindParam(':email', $this->email);
           $stmt->bindParam(':pass', $this->password);

           $stmt->execute();
           $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
           if(count($results) === 1){
               $_SESSION['unique_id'] = $results[0]['unique_id'];
               return true;
           }else{
                $login_errors['wrongcred'] = 'Wrong password or username';
                return $login_errors;
           }
       }
   }

   class User {
        public $unique_id;
        public $firstname;
        public $lastname;
        public $photo;
        public $tmpName;
        public $email;
        public $password;
        public $status;
        public $tablename = 'users';


        private $conn;

        public function __construct($db)
        {
            $this->conn = $db;
        }

        public function getAllusers(){
            $sql = 'SELECT * FROM '.$this->tablename. ' ';
            $stmt = $this->conn->conn->prepare($sql);
            $stmt->execute();
            return $stmt;
        }

        public function getUser(){
            $sql = 'SELECT * FROM '.$this->tablename. ' WHERE unique_id=:id';

            $stmt = $this->conn->conn->prepare($sql);

            $this->unique_id = $this->unique_id;

            $stmt->bindParam(':id', $this->unique_id);

            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }





       
   }

?>