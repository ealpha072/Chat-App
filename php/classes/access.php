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
           $sql1 = 'INSERT INTO '.$this->tablename. ' 
                SET(firstname=:fname, 
                    lastname=:lname, 
                    email=:email, 
                    photo=:photo, 
                    password=:password
                )';
            $sql2 = 'SELECT email FROM '.$this->tablename.' ';

            $stmt1 = $this->conn->conn->prepare($sql1);
            $stmt2 = $this->conn->conn->prepare($sql2);
            $stmt2->execute();

            $results = $stmt2->fetchAll(PDO::FETCH_ASSOC);

            $this->firstname = htmlspecialchars(strip_tags($this->firstname));
            $this->lastname = htmlspecialchars(strip_tags($this->lastname));
            $this->photo = $this->photo;
            $this->email = htmlspecialchars(strip_tags($this->email));
            $this->password = $this->password;

            //bind params;
            $stmt1->bindParam(':fname', $this->firstname);
            $stmt1->bindParam(':lname', $this->lastname);
            $stmt1->bindParam(':email', $this->email);
            $stmt1->bindParam(':photo', $this->photo);
            $stmt1->bindParam(':password', $this->password);

            if($stmt1->execute()){
                return true;
            }else{
                return false;
            }
       }
   }

?>