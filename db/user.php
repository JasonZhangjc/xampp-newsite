<?php
    class user {
        // private database object
        private $db;

        // constructor to initialize private variable 
        // to the database connection
        function __construct($conn)
        {
            $this -> db = $conn;
        }

        public function insertUser($username, $password){
            // if this username is used, return false
            // otherwise, create a user with this username
            try{
                $result = $this -> getUserbyUsername($username);
                if ($result['num'] > 0) {
                    return false;
                } else {
                    // md5 is an encryption function
                    $new_password = md5($password.$username);
                    $sql = "INSERT INTO `users` (username, password) VALUES (:username, :password)";
                    $stmt = $this -> db -> prepare($sql);
                    $stmt -> bindparam(':username', $username);
                    $stmt -> bindparam(':password', $new_password);
                    $stmt -> execute();
                    return true;
                }
            } catch(PDOException $e) {
                echo $e -> getMessage();
                return false;
            }
        }

        public function getUser($username, $password){
            try {
                $sql = "SELECT * FROM `users` where username = :username AND password = :password;";
                $stmt = $this -> db -> prepare($sql);
                $stmt -> bindparam(':username', $username);
                $stmt -> bindparam(':password', $password);
                $stmt -> execute();
                $result = $stmt -> fetch();
                return $result;
            } catch (PDOException $e) {
                echo $e -> getMessage();
                return false;
            }
        }

        public function getUserbyUsername($username) {
            try {
                $sql = "SELECT count(*) as num from `users` where username = :username;";
                $stmt = $this -> db -> prepare($sql);
                $stmt -> bindparam(':username', $username);
                $stmt -> execute();
                $result = $stmt -> fetch();
                return $result;
            } catch (PDOException $e) {
                echo $e -> getMessage();
                return false;
            }
        }

    }

?>