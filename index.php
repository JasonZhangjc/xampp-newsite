<?php 
      $title = 'Index';
      require_once 'includes/header.php'; 
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

      <form>
            <div class="mb-3">
                  <label for="firstname" class="form-label">First Name</label>
                  <input type="text" class="form-control" id="firstname">
            </div>
            <div class="mb-3">
                  <label for="lastname" class="form-label">Last Name</label>
                  <input type="text" class="form-control" id="lastname">
            </div>
            <div class="mb-3">
                  <label for="dob" class="form-label">Date of Birth</label>
                  <input type="text" class="form-control" id="dob">
            </div>
            <div class="mb-3">
                  <label for="specialty" class="form-label">Area of Expertise</label>
                  <input class="form-control" list="datalistOptions" id="specialty" placeholder="Type to search...">
                  <datalist id="datalistOptions">
                        <option value="Database">
                        <option value="Network">
                        <option value="Software">
                        <option value="Web">
                        <option value="AI">
                        <option value="Game">
                        <option value="Cloud">
                        <option value="Research">
                  </datalist>
            </div>
            <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                  <label for="webpage" class="form-label">Personal Webpage</label>
                  <input type="text" class="form-control" id="webpage">
            </div>
            <div class="mb-3">
                  <label for="phone" class="form-label">Contact Number</label>
                  <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp">
                  <div id="phoneHelp" class="form-text">We'll never share your phone number with anyone else.</div>
            </div>
            
            <br>
            <button type="submit" class="btn btn-primary" style="height:60px; width:1298px">Submit</button>
      </form>
<br>
<br>
<br>
<br>
<br>

<?php require_once 'includes/footer.php'; ?>

    