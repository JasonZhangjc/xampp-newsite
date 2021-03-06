<?php 
      $title = 'Index';
      require_once 'includes/header.php'; 
      require_once 'db/conn.php';

      $results = $crud -> getSpecialties();

?>
      <!-- 
            - First name
            - Last name
            - Date of Birth (Use DatePicker)
            - Specialty (Database, Network, Software, Web, AI, Game, Cloud, Research ...)
            - Email Address
            - Personal Webpage
            - Contact Number
       -->

      <h1 class="text-center">Registration for ITHub</h1>
      
      <!-- Can use method="get" to replace method="post" -->
      <form method="post" enctype="multipart/form-data" action="success.php">
            <div class="mb-3">
                  <label for="firstname" class="form-label">First Name</label>
                  <input required type="text" class="form-control" id="firstname" name="firstname">
            </div>
            <div class="mb-3">
                  <label for="lastname" class="form-label">Last Name</label>
                  <input required type="text" class="form-control" id="lastname" name="lastname">
            </div>
            <div class="mb-3">
                  <label for="dob" class="form-label">Date of Birth</label>
                  <input required type="text" class="form-control" id="dob" name="dob">
            </div>
            <div class="mb-3">
                  <label for="specialty" class="form-label">Area of Expertise</label>
                  <input class="form-control" list="datalistOptions" id="specialty" name="specialty" placeholder="Type to search...">
                  <datalist id="datalistOptions">
                        <!-- The following is inefficient -->
                        <!-- <option value="1">Database</option>
                        <option value="3">Network</option>
                        <option value="5">Software</option>
                        <option value="6">Web</option>
                        <option value="9">AI</option>
                        <option value="10">Game</option>
                        <option value="13">Cloud</option>
                        <option value="14">Research</option> -->
                        <?php while($r = $results -> fetch(PDO::FETCH_ASSOC)) { ?>
                              <option value = "<?php echo $r['specialty_id']?>"><?php echo $r['name'] ?></option>
                        <?php } ?>
                  </datalist>
            </div>
            <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input required type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                  <label for="webpage" class="form-label">Personal Webpage</label>
                  <input type="text" class="form-control" id="webpage" name="webpage">
            </div>
            <div class="mb-3">
                  <label for="phone" class="form-label">Contact Number</label>
                  <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
                  <div id="phoneHelp" class="form-text">We'll never share your phone number with anyone else.</div>
            </div>
            <br/>
            <div class="custom-file">
                  <label for="avatar" class="form-label">Upload Image (Optional)</label>
                  <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar" >
                  <!-- <label class="custom-file-label" for="avatar">Choose File</label> -->
                  <div id="avatar" class="form-text text-danger">File Upload is Optional</div>
            </div>
            
            <br>
            <button type="submit" name="submit" class="btn btn-primary" style="height:60px; width:1298px">Submit</button>
      </form>
<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>

    