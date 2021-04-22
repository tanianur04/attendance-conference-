<?php 
    $title = 'View Record';
    require_once 'includes/header.php';
    //require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
    if (!isset($_GET['id'])){
        include 'includes/errormessage.php';

    } else{
        $id = $_GET['id'];
        $result = $crud->getAttendeeDetails($id);
    
?> 
<div class="container-md">
<div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $result['firstname'] . ' ' .  $result['lastname']?></h5>
            <h6 class = "card-subtitle mb-2 text-muted">
                <?php echo $result['name'];?>
            </h6>
            <p class="card-text">
                Date of Birth: <?php echo $result['dateofbirth']; ?>
            </p>
            <p class="card-text">
                Email: <?php echo $result['email']; ?>
            </p>
            <p class="card-text">
                Contact: <?php echo $result['contactnumber']; ?>
            </p>
            
       </div>
</div>
</div>
<br/>
<div class = "container-md">
        <a href="viewrecords.php?" class="btn btn-info">Back to list</a>
        <a href="edit.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-warning">Edit</a>
        <a onclick="return confirm('Are you sure?');" href="delete.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-danger">Delete</a>
    <?php } ?>
</div>
<br>
<br>
<br>
<?php require_once 'includes/footer.php';?> 