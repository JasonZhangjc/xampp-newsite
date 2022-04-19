<?php
    require_once 'db/conn.php';

    // Get valuese from post operation
    if(isset($_POST['submit'])){
        // extract values from the $_POST array  
        $id = $_POST['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['exampleInputEmail1'];
        $webpage = $_POST['webpage'];
        $phone = $_POST['phone'];
        $specialty = $_POST['specialty'];
        
        // Call crud function
        $result = $crud -> editAttendee($id, $fname, $lname, $dob, $email, $webpage, $phone, $specialty);

        // Redirect to index.php
        if ($result) {
            header("Location: viewrecords.php");
        } else {
            // echo 'error';
            include 'includes/errormessage.php';
        }

    } else {
        // echo 'error';
        include 'includes/errormessage.php';
    }
?>