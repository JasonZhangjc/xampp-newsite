<?php 
    $title = 'Success';
    require_once 'includes/header.php'; 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
    require_once 'sendemail.php';

    if(isset($_POST['submit'])){
        // extract values from the $_POST array  
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['exampleInputEmail1'];
        $webpage = $_POST['webpage'];
        $phone = $_POST['phone'];
        $specialty = $_POST['specialty'];

        $orig_file = $_FILES["avatar"]["tmp_name"];
        $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
        $target_dir = 'uploads/';
        $destination = "$target_dir$phone.$ext";
        move_uploaded_file($orig_file, $destination);


        // Call function to insert and track if success or not
        $isSuccess = $crud -> insertAttendees($fname, $lname, $dob, $email, $webpage, $phone, $specialty, $destination);
        $specialtyName = $crud -> getSpecialtyById($specialty);

        if($isSuccess){
            SendEmail::SendMail($email, 'Welcome to IT Conference 2022', 'You have successfully registered for this year\'s IT Conference');
            // echo '<h1 class="text-center text-success">You Have Been Registered!<h1>';
            include 'includes/successmessage.php';
        } else {
            // echo '<h1 class="text-center text-danger">There was an error in processing!<h1>';
            include 'includes/errormessage.php';
        }
    }
?>

    <!-- <h1 class="text-center text-success">You Have Been Registered! </h1> -->
    <img src="<?php echo $destination; ?>" class="rounded-circle" style="width: 25%; height: 25%" />
    <!-- Can use $_GET to replace $_POST  -->
    <div class="card" style="width: 20rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <!-- <?php echo $_POST['specialty']?> -->
                <?php echo $specialtyName['name']; ?>
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