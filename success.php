<?php 
      $title = 'Success';
      require_once 'includes/header.php'; 
?>

    <h1 class="text-center text-success">You Have Been Registered! </h1>

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