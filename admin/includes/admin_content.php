<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Blank Page
                <small>Subheading</small>
            </h1>
            <?php
            // $user = new USER;
            // $user->username = "NEW USER";
            // $user->save();
            $user = PHOTO::find_by_id(1);
            echo $user->filename;

            // $user->username = "job";
            // $user->password = "123";
            // $user->first_name = "job";
            // $user->last_name = "job";
            // $user->create();

            // $user = USER::find_all_users_by_id(55);
            // $user->username = "FINAL";
            // $user->password = "123";
            // $user->first_name = "job";
            // $user->last_name = "job";

            // $user->update();
            // $users = USER::find_all();
            // foreach ($users as $user) {
            //     echo $user->username;
            // }

            // $photo = new PHOTO();

            // $photo->title = "NEW TITLE";
            // $photo->size = 20;
            // $photo->create();

            


            
            

            //$user->delete();
            ?>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>