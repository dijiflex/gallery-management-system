

<?php include("includes/header.php"); ?>
<?php
if (!$session->is_signed_in()) {
//id user is not logged in he is readirected to the log in page
    header("Location: login.php");

} else {
    
}


?>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    
    <!-- Top Menu Items -->

    <?php include("includes/topnav.php"); ?>

    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

    <?php include("includes/side_nav.php"); ?>
    <!-- /.navbar-collapse -->
</nav>

<div id="page-wrapper">

    <?php include("includes/admin_content.php"); ?>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

<?php include("includes/footer.php");
