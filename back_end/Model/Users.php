<?php

class Users
{
    // db stuff
    private $conn;
    private $table = 'users';

    // users properties
    public $u_id;
    public $role;
    public $email;
    public $password;

    // client properties
    public $c_id;
    public $firstName;
    public $lastName;
    public $gender;
    public $birthdate;
    public $cin;
    public $phoneNumber;
    public $address;
    public $job;
    public $picture;

    // constructor with db
    public function __construct($db)
    {
        $this->conn = $db;
    }


    // get users informations 
    public function read()
    {
        // $query = 'SELECT * FROM' . $this->table;
        $query = ' SELECT * FROM ' . $this->table . ';';
        // prepare statement
        $stmt = $this->conn->prepare($query);
        // execute statement
        $stmt->execute();
        return $stmt;
    }

    // get one user informations
    public function read_single()
    {
        $query = 'SELECT * FROM users  where userId=:userId ';
        // prepare statement
        $stmt = $this->conn->prepare($query);
        // bind user id
        $stmt->bindParam(':userId', $this->userId);
        // execute statement
        $stmt->execute();
        return $stmt;
    }

    // create a user
    public function create()
    {
        $query = " INSERT INTO users (role, email, password) VALUES ('client' , :email, :password)";

        // Clean data
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->password = htmlspecialchars(strip_tags($this->password));

        // Prepare query
        $stmt = $this->conn->prepare($query);

        // Bind data
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);
        
        if ($stmt->execute()) {
            return true;
        }
        
        //get the last id from visitor table
        $query1 = 'SELECT id FROM users ORDER BY users.id DESC LIMIT 1';
        $stmt = $this->conn->prepare($query1);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $last_id = $row['id'];


        $query2 = " INSERT INTO users (firstName, lastName, birthdate, cin, gender, job, phoneNumber, address, user_id) 
        VALUES (:firstName, :lastName, :birthdate, :cin, :gender, :job, :phoneNumber, :address, ".$last_id.")";

        // clean client informations
        $this->firstName = htmlspecialchars(strip_tags($this->firstName));
        $this->lastName = htmlspecialchars(strip_tags($this->lastName));
        $this->birthdate = htmlspecialchars(strip_tags($this->birthdate));
        $this->cin = htmlspecialchars(strip_tags($this->cin));
        $this->gender = htmlspecialchars(strip_tags($this->gender));
        $this->job = htmlspecialchars(strip_tags($this->job));
        $this->phoneNumber = htmlspecialchars(strip_tags($this->phoneNumber));
        $this->address = htmlspecialchars(strip_tags($this->address));

        $stmt = $this->conn->prepare($query2);

        // bind data
        $stmt->bindParam(':firstName', $this->firstName);
        $stmt->bindParam(':lastName', $this->lastName);
        $stmt->bindParam(':birthdate', $this->birthdate);
        $stmt->bindParam(':cin', $this->cin);
        $stmt->bindParam(':gender', $this->gender);
        $stmt->bindParam(':job', $this->job);
        $stmt->bindParam(':phoneNumber', $this->phoneNumber);
        $stmt->bindParam(':address', $this->address);

        // print error if something goes wrong
        printf("Error %s.\n", $stmt->error);
        return false;
    }

    public function checkUserExistence()
    {
        $query = "SELECT * FROM users WHERE Reference = :Reference";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':Reference', $this->Reference);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result;
    }
}
