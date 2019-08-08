<?php include("includes/header.php");
if (!$session->is_signed_in()) {
    //id user is not logged in he is readirected to the log in page
    header("Location: login.php");
} else {
}

$photos = PHOTO::find_all();
print_r($photos);

//exit();

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
        <a class="navbar-brand" href="index.php">SB Admin</a>
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
                    PHOTOS
                    <small>Subheading</small>
                </h1>
                <div class="col-md-12">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Id</th>
                                <th>File Name</th>
                                <th>Tittle</th>
                                <th>size</th>
                                <th>Comments</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($photos as $photo): ?>

                            <tr>
                                <td><img class="admin-photo-thumbnail"
                                        src="<?php echo $photo->picture_path(); ?>"
                                        alt="">

                                    <div class="action_links">
                                        <a
                                            href="delete_photo.php?id=<?php echo $photo->id ?>">
                                            Delete</a>
                                        <a
                                            href="edit_photo.php?id=<?php echo $photo->id; ?>">Edit</a>
                                        <a
                                            href="../photo.php?id=<?php echo $photo->id; ?>">View</a>
                                        <a href="admins.php?id=10"> thi i</a>

                                    </div>

                                </td>
                                <td><?php echo $photo->id; ?>
                                </td>
                                <td><?php echo $photo->filename; ?>
                                </td>
                                <td><?php echo $photo->title; ?>
                                </td>
                                <td><?php echo $photo->size; ?>
                                </td>
                                <td>

                                    <a
                                        href="comment_photo.php?id=<?php echo $photo->id; ?>">

                                        <?php

            $comments = Comment::find_the_comments($photo->id);


            echo count($comments);


            ?>

                                    </a>

                                </td>

                            </tr>


                            <?php endforeach; ?>




                        </tbody>
                    </table>
                    <!--End of Table-->


                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>


</div>
<!-- /#page-wrapper -->

<?php include("includes/footer.php");
