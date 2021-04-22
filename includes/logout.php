<?php
include_once 'includes/session.php'?>
<?php 
    session_destroy();
    heaeder('Location: index.php');
?>