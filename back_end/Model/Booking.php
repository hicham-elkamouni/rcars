<?php

class Booking
{

    // db stuff
    private $conn;
    private $table = 'booking';

    // users properties
    public $client_id_fk;
    public $vehicle_id_fk;

    public $booking_id;
    
    public function __construct($db)
    {
        $this->conn = $db;
    }

    // insert booking 100% successfully
    public function insertIntoBooking()
    {

        $query = "INSERT INTO booking 
        (client_id_fk, vehicle_id_fk)
        VALUES 
        (:client_id_fk, :vehicle_id_fk) ";
        
        // prepare the query
        $stmt = $this->conn->prepare($query);

        // Bind data
        $stmt->bindParam(':client_id_fk', $this->client_id_fk);
        $stmt->bindParam(':vehicle_id_fk', $this->vehicle_id_fk);

        if ($stmt->execute()) {
            return true;
        }

        // print error if something goes wrong
        printf("Error %s.\n", $stmt->error);
        return false;
    }

    public function getAllBookings(){

        // $query = 'SELECT * FROM vehicles, booking where client_id_fk = :client_id_fk' ;
        $query = 'SELECT * FROM vehicles, booking where booking.client_id_fk = :client_id_fk AND booking.vehicle_id_fk = vehicles.id';
        // prepare statement
        $stmt = $this->conn->prepare($query);
        // bind data 
        $stmt->bindParam(':client_id_fk', $this->client_id_fk);
        // execute statement
        $stmt->execute();
        return $stmt;
    }

    public function deleteBooking()
    {

        $query = "DELETE FROM booking WHERE booking_id = :booking_id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':booking_id', $this->booking_id);

        if ($stmt->execute()) {
            return true;
        }
        // print error if something goes wrong
        printf("Error %s.\n", $stmt->error);
        return false;
    }

    // get one user informations
    public function read()
    {
        $query = 'SELECT * FROM vehicles' ;
        // prepare statement
        $stmt = $this->conn->prepare($query);
        // execute statement
        $stmt->execute();
        return $stmt;
    }

    

    public function getAppointements()
    {
        $query = "SELECT * from appointements, timeslots where userId_fk = :userId_fk and appointements.timeslot_id_fk = timeslots.timeslot_id";
        // prepare the query
        $stmt = $this->conn->prepare($query);
        // bind the id
        $stmt->bindParam(':userId_fk', $this->userId_fk);
        // execute statement
        $stmt->execute();

        return $stmt;
    }

    


}
