<?php include "includes/header.php"; ?>

<?php if (!$session ->is_signed_in()){redirect("login.php") ; } ?>

<?php

$photos = Photo::find_all();

?>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

    <?php include "includes/top-navigation.php"; ?>
    <?php include "includes/side-navigation.php"; ?>

</nav>

<div id="page-wrapper">
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Photos
                </h1>

                <div class="container">
                    <div class="row">
                        <div class="col-md-11">
                            <table class="table table-responsive table-bordered">
                                <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Id</th>
                                    <th>File Name</th>
                                    <th>Title</th>
                                    <th>Size</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach ($photos as $photo) : ?>
                                <tr>
                                    <td>
                                        <img src="<?php echo $photo ->picture_path(); ?>" alt="" width="100" height="70" class="img-responsive">
                                        <div class="pictures_link">
                                            <a href="">View</a>
                                            <a href="">Edit</a>
                                            <a href="delete_photo.php?id=<?php echo $photo ->photo_id ?>">Delete</a>
                                        </div>
                                    </td>
                                    <td><?php echo $photo ->photo_id; ?></td>
                                    <td><?php echo $photo ->filename; ?></td>
                                    <td><?php echo $photo ->title; ?></td>
                                    <td><?php echo $photo ->size; ?></td>
                                </tr>
                                <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<?php include "includes/footer.php"; ?>