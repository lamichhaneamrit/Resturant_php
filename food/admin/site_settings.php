<?php include 'header.php'; ?>

<!-- /Navigation-->
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">App Settings</li>
        </ol>
        <?php if (get("success")) : ?>
        <div>
            <?= App::message("success", "App Settings Updated Successfully!") ?>
        </div>
        <?php endif; ?>
        <div class="box_general padding_bottom">
            <div class="header_box version_2">
                <h2><i class="fa fa-user"></i>Update Site</h2>
            </div>
            <div class="row">
                <!--site setting //Address, email , phone , etc -->
                <div class="col-md-8 add_top_30">
                    <form action="save_settings.php" method="post" enctype="multipart/form-data">
                        <?php
                        $result = ORM::for_table("site_settings")
                            ->find_array(1);
                        ?>
                        <?php foreach ($result as $res) : ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Site Name</label>
                                    <input type="text" name="site_name" class="form-control"
                                        value="<?php echo $res['site_name']; ?>">
                                </div>
                            </div>
                            <!--TITLE -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Site Title</label>
                                    <input type="text" name="site_title" class="form-control"
                                        value="<?php echo $res['site_title']; ?>">
                                </div>
                            </div>
                        </div>
                        <!--keywords -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Site Keywords</label>
                                    <input type="text" name="site_keyword" class="form-control"
                                        value="<?php echo $res['site_keyword']; ?>">
                                </div>
                            </div>
                            <!--description -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Site Description</label>
                                    <input type="text" name="site_desc" class="form-control"
                                        value="<?php echo $res['site_desc']; ?>">
                                </div>
                            </div>
                        </div>
                        <!-- Google Analytics 
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Google Analytic Code</label>
										<textarea class="form-control" name='google_code'><?php //echo $res['google_code']; 
                                                                                            ?></textarea>
									</div>
								</div>
							</div>
-->
                        <!-- Site Email Address -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Site's Email</label>
                                    <input type="text" name="site_email" class="form-control"
                                        value="<?php echo $res['site_email']; ?>">
                                </div>
                            </div>

                            <!-- Site phone -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone 1</label>
                                    <input type="text" name="site_phone" class="form-control"
                                        value="<?php echo $res['site_phone']; ?>">
                                </div>
                            </div>
                        </div>
                        <!-- Site Social_Medias -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Phone 2</label>
                                    <input type="text" name="linkedin" class="form-control"
                                        value="<?php echo $res['linkedin']; ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Facebook Username</label>
                                    <input type="text" name="facebook" class="form-control"
                                        value="<?php echo $res['facebook']; ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Twitter Username</label>
                                    <input type="text" name="twitter" class="form-control"
                                        value="<?php echo $res['twitter']; ?>">
                                </div>
                            </div>

                        </div>
                        <!-- Address -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address 1</label>
                                    <textarea class="form-control" name='address'
                                        placeholder="Company Address"><?php echo $res['address']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Address 2</label>
                                    <input type="text" name="city" class="form-control"
                                        value="<?php echo $res['city']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" name="country" class="form-control"
                                        value="<?php echo $res['country']; ?>">
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <div class="row">
                            <div class="offset-md-3 col-md-9">
                                <button type="submit" class="btn_1 medium">Submit</button>
                            </div>
                        </div>
                        <!-- /row-->
                    </form>
                </div>
            </div>
        </div>
        <!-- /box_general-->

        <!-- /.container-fluid-->



        <!--Images upload Script-->

        <head>
            <title>upload images</title>

            <style type="text/css">
            .close-icon {
                border-radius: 50%;
                position: absolute;
                right: 5px;
                top: -10px;
                padding: 5px 8px;
            }

            .form-image-upload {
                background: #e8e8e8 none repeat scroll 0 0;
                padding: 25px;
                margin-bottom: 40px;
            }

            .thumbnail img {
                height: 200px !important;
                width: 200px !important;
            }

            .wrapper {
                margin-top: 50px;
            }
            </style>
        </head>



        <div class="">
            <div class="wrapper">
                <h3 class="text-center">upload images </h3>
                <form action="./imageUpload.php" class="form-image-upload" method="POST" enctype="multipart/form-data">

                    <?php if (!empty($_SESSION['error'])) { ?>
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            <li><?php echo $_SESSION['error']; ?></li>
                        </ul>
                    </div>
                    <?php unset($_SESSION['error']);
                    } ?>

                    <?php if (!empty($_SESSION['success'])) { ?>

                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong><?php echo $_SESSION['success']; ?></strong>

                    </div>

                    <?php unset($_SESSION['success']);
                    } ?>

                    <div class="row pt-5">
                        <div class="col-md-5">
                            <strong>Title:</strong>
                            <input type="text" name="title" class="form-control" placeholder="Title">
                        </div>
                        <div class="col-md-5">
                            <strong>Image:</strong>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <br />
                            <button type="submit" class="btn btn-success">Upload</button>
                        </div>
                    </div>

                </form>
                <div class="row">
                    <div class='list-group gallery'>
                        <?php
                        //require('../connect.php');
                        $tableName = 'image_gallery';
                        $sql = "SELECT * FROM $tableName";
                        $images = mysqli_query($conn, $sql);

                        //$images = $conn->query($sql);;
                        while ($image = $images->fetch_assoc()) {
                        ?>

                        <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                            <div class=icon-box>
                                <a class="thumbnail fancybox" rel="ligthbox"
                                    href="uploads/<?php echo $image['image'] ?>">

                                    <img class="img-responsive" alt="" src="uploads/<?php echo $image['image'] ?>" />
                                    <div class='text-center'>

                                        <small class='text-muted'><?php echo $image['title'] ?></small>
                                    </div>
                                    <br>
                            </div>

                            </a>
                            <form action="./imageDelete.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $image['id'] ?>">
                                <button type="submit" class="close-icon btn btn-danger"><i
                                        class="glyphicon glyphicon-remove"></i></button>
                            </form>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
</script>

</html>
<?php include 'footer.php'; ?>