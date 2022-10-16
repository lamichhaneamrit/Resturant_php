<?php include 'header.php';

?>

<!-- /Navigation-->
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Edit About</li>
        </ol>
        <?php if (get("success")) : ?>
        <div>
            <?= App::message("success", "Record Updated Successfully!") ?>
        </div>
        <?php endif; ?>
        <div class="box_general padding_bottom">
            <div class="header_box version_2">
                <h2><i class="fa fa-user"></i>About Site</h2>
            </div>

            <div class="row">

                <div class="col-md-12 add_top_30">
                    <form action="save_site_about.php" method="post" enctype="multipart/form-data">
                        <?php
                        $result = ORM::for_table("site_about")
                            ->find_array(1);
                        ?>
                        <?php foreach ($result as $res) : ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Scrolling text</label>
                                    <textarea class="form-control" name="scrolling_text"
                                        id="body"><?php echo $res['scrolling_text']; ?></textarea>
                                    <script>
                                    CKEDITOR.replace('scrolling_text');
                                    </script>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Über Uns Text</label>
                                    <textarea class="form-control" name="full_about"
                                        id="body"><?php echo $res['full_about']; ?></textarea>
                                    <script>
                                    CKEDITOR.replace('full_about');
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Speisekarte Text</label>
                                    <textarea class="form-control" name="speisekarte"
                                        id="body"><?php echo $res['speisekarte']; ?></textarea>
                                    <script>
                                    CKEDITOR.replace('speisekarte');
                                    </script>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Gallery Text</label>
                                    <textarea class="form-control" name="market"
                                        id="body"><?php echo $res['market']; ?></textarea>
                                    <script>
                                    CKEDITOR.replace('market');
                                    </script>
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
    </div>
    <!-- /.container-fluid-->




    <?php

    include 'footer.php'; ?>