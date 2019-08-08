<?php include("includes/header.php");

if (!$session->is_signed_in()) {
    //id user is not logged in he is readirected to the log in page
    header("Location: login.php");
} else {
}
?>

<?php
$message  = "";
if (isset($_POST['submit'])) {
  echo "this si working";


  
// if (isset($_FILES['file'])) {
    $photo = new Photo();
    $photo->title = $_POST['title'];
    $photo->set_file($_FILES['file_upload']);

    if ($photo->save()) {
        $message = "Photo uploaded sucessfully";
    } else {
        $message = join("<br>", $photo->errors);
    }
}
 ?>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">SB Admin</a>
    </div>
    <!-- Top Menu Items -->

    <?php include("includes/topnav.php"); ?>

    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

    <?php include("includes/side_nav.php"); ?>
    <!-- /.navbar-collapse -->
</nav>

<div id="page-wrapper">
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    UPLOAD
                    <small>Subheading</small>
                </h1>


                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Blank Page
                    </li>
                </ol>
            </div>
            <div class="col-md-6">
            <?php echo $message   ?>
                <form action="upload.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">

                        <input type="text" name="title" class="form-control">

                    </div>

                    <div class="form-group">

                        <input type="file" name="file_upload">

                    </div>

                    <input type="submit" name="submit">

                </form>
            </div>
        </div>
        <!-- /.row -->

    </div>


</div>
<!-- /#page-wrapper -->

<?php include("includes/footer.php");
