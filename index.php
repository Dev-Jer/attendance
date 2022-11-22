<?php 
$title = 'Success';

require_once 'includes/header.php';
require_once 'db/conn.php';
$results = $crud->getSpecialties();
?>

    <h1 class="text-center">Registration for IT Conference</h1>
    
    <form method="post" action="success.php">
        
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input required type="text" class="form-control" id="firstname" 
            aria-describedby="firstname" name="firstname">            
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input required type="text" class="form-control" id="lastname" 
            aria-describedby="lastname" name="lastname">            
        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input required type="text" class="form-control" id="dob" 
            aria-describedby="dob" name="dob">            
        </div>

        <div class="mb-3">
            <label for="specialty" class="form-label">Area of Specialization</label>
            <select class="form-select" aria-label="specialty" name="specialty">  
                              
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                    <option value="<?php echo $r['specialty_id']?>"> <?php echo $r['name']; ?></option>
                <?php }?>

            </select>
                       
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input required type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Contact Number</label>
            <input required type="text" class="form-control" id="phone" aria-describedby="phoneHelp" name="phone">
            <div id="phoneHelp" class="form-text">We'll never share your contact with anyone else.</div>
        </div>  

        <div class="input-group mb-3">
            <input type="file" accept="image/*" class="form-control" id="avatar">
            <label class="input-group-text" for="avatar">Upload</label>
        </div>

        <div id="avatar" class="form-text text-success">File upload is optional.</div>
        <br/>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<?php 
require_once 'includes/footer.php';
?>

    