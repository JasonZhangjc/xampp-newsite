<?php
    // Object-oriented approach here
    class crud{
        private $db;

        // constructor to initialize private variable to database connection
        function __construct($conn)
        {
            $this -> db = $conn;

        }

        public function insert($fname, $lname, $dob, $email, $webpage, $phone, $specialty){
            try{
                $sql = "INSERT INTO attendee VALUES (:fname, :lname, :dob, :email, :webpage, :phone, :specialty)";
                $stmt = $this -> db -> prepare($sql);

                $stmt -> bindparam(':fname', $fname);
                $stmt -> bindparam(':lname', $lname);
                $stmt -> bindparam(':dob', $dob);
                $stmt -> bindparam(':email', $email);
                $stmt -> bindparam(':webpage', $webpage);
                $stmt -> bindparam(':phone', $phone);
                $stmt -> bindparam(':specialty', $specialty);

                $stmt -> execuute();
                return true;

            } catch(PDOException $e) {
                echo $e -> getMessage();
                return false;
            }
        }
    }
?>