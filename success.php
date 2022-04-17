<?php 
    $title = 'Success';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';

    if(isset($_POST['submit'])){
        // extract values from the $_POST array  
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['exampleInputEmail1'];
        $webpage = $_POST['webpage'];
        $phone = $_POST['phone'];
        $specialty = $_POST['specialty'];
        // Call function to insert and track if success or not
        $isSuccess = $crud -> insert($fname, $lname, $dob, $email, $webpage, $phone, $specialty);

        if($isSuccess){
            echo '<h1 class="text-center text-success">You Have Been Registered!<h1>';
        } else {
            echo '<h1 class="text-center text-danger">There was an error in processing!<h1>';
        }
    }
?>

    <!-- <h1 class="text-center text-success">You Have Been Registered! </h1> -->

    <!-- Can use $_GET to replace $_POST  -->
    <div class="card" style="width: 20rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php echo $_POST['specialty']?>
            </h6>
            <p class="card-text">
                Date of Birth: <?php echo $_POST['dob']?>
            </p>
            <p class="card-text">
                Email Address: <?php echo $_POST['exampleInputEmail1']?>
            </p>
            <p class="card-text">
                Personal Webpage: <?php echo $_POST['webpage']?>
            </p>
            <p class="card-text">
                Contact Number: <?php echo $_POST['phone']?>
            </p>

            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>

    <!-- <?php
        echo $_GET['firstname'];
        echo $_GET['lastname'];
        echo $_GET['dob'];
        echo $_GET['specialty'];
        echo $_GET['exampleInputEmail1'];
        echo $_GET['webpage'];
        echo $_GET['phone'];
    ?> -->

<br>
<br>
<br>
<br>
<br>

<?php require_once 'includes/footer.php'; ?>