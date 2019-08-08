<?php include("includes/init.php"); ?>
<?php
if (!$session->is_signed_in()) {
    //id user is not logged in he is readirected to the log in page
    header("Location: login.php");
} else {
}

if (empty($_GET['id'])) {
    redirect("../photos.php");

} 

$photo = Photo::find_by_id($_GET['id']);
if ($photo) {
    $photo->delete_photo();
    
}
else {
    redirect("photos.php");
}