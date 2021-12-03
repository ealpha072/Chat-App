<?php 
   class Access{
       public $id;
       public $firstname;
       public $lastname;
       public $photo;
       public $email;
       public $password;

       public $tablename = 'users';

       private $conn;

       public function __construct($db)
       {
           $this->conn = $db;
       }


       public function register()
       {
            $signupErrors = Array();

            $sql1 = 'INSERT INTO '.$this->tablename. ' 
                SET firstname=:fname, 
                    lastname=:lname, 
                    email=:email, 
                    photo=:photo, 
                    password=:password
                ';
            $sql2 = 'SELECT email FROM '.$this->tablename. ' WHERE email=:email';

            $stmt1 = $this->conn->conn->prepare($sql1);
            $stmt2  = $this->conn->conn->prepare($sql2);

            $this->firstname = htmlspecialchars(strip_tags($this->firstname));
            $this->lastname = htmlspecialchars(strip_tags($this->lastname));
            $this->photo =  htmlspecialchars($this->photo);
            $this->email = htmlspecialchars(strip_tags($this->email));
            $this->password = $this->password;

            if( filter_var($this->email, FILTER_VALIDATE_EMAIL)){
               //if valid email, check existing
               $stmt2->bindParam(':email', $this->email);
               $stmt2->execute();
               $results = $stmt2->fetchAll(PDO::FETCH_ASSOC);
               if(count($results) > 0){
                    array_push($signupErrors, 'Email already exists');
               }
            }


            //bind params;
            if(count($signupErrors) === 0){
                $stmt1->bindParam(':fname', $this->firstname);
                $stmt1->bindParam(':lname', $this->lastname);
                $stmt1->bindParam(':email', $this->email);
                $stmt1->bindParam(':photo', $this->photo);
                $stmt1->bindParam(':password', $this->password);

                $stmt1->execute();
                return true;
            }else{
                var_dump($signupErrors);
                return false;
            }
        
       }
   }

?>