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
        $query = " INSERT INTO users (role, email, password) VALUES (:role , :email, 'client')";

        // Clean data
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->password = htmlspecialchars(strip_tags($this->password));

        // Prepare query
        $stmt = $this->conn->prepare($query);

        // Bind data
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);

        /* $stmt->bindParam(':userPassword', $this->userPassword); */


        if ($stmt->execute()) {
            return true;
        }

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
