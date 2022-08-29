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
                                    <label>Welcome Address</label>
                                    <textarea class="form-control" name="short_about"
                                        id="body"><?php echo $res['short_about']; ?></textarea>
                                    <script>
                                    CKEDITOR.replace('short_about');
                                    </script>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>About Us Page</label>
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
                                    <label>Innovation</label>
                                    <textarea class="form-control" name="innovation"
                                        id="body"><?php echo $res['innovation']; ?></textarea>
                                    <script>
                                    CKEDITOR.replace('innovation');
                                    </script>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Market</label>
                                    <textarea class="form-control" name="market"
                                        id="body"><?php echo $res['market']; ?></textarea>
                                    <script>
                                    CKEDITOR.replace('market');
                                    </script>
                                </div>
                            </div>

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
    <!-- Image Upload -->

    <body>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="image_gallery[]" multiple>
            <input type="submit" value="Upload Now" name="submit">
        </form>
    </body>

    <?php




    $tableName = 'gallery'; // Enter your table Name;


    // upload image on submit
    if (isset($_POST['submit'])) {
        echo upload_image($tableName);
    }

    function upload_image($tableName)
    {

        $uploadTo = "uploads/";
        $allowedImageType = array('jpg', 'png', 'jpeg', 'gif');
        $imageName = array_filter($_FILES['image_gallery']['name']);
        $imageTempName = $_FILES["image_gallery"]["tmp_name"];

        $tableName = trim($tableName);

        if (empty($imageName)) {
            $error = "Please Select Images..";
            return $error;
        } else if (empty($tableName)) {
            $error = "You must declare table name";
            return $error;
        } else {
            $error = $savedImageBasename = '';
            foreach ($imageName as $index => $file) {

                $imageBasename = basename($imageName[$index]);
                $imagePath = $uploadTo . $imageBasename;
                $imageType = pathinfo($imagePath, PATHINFO_EXTENSION);

                if (in_array($imageType, $allowedImageType)) {

                    // Upload image to server 
                    if (move_uploaded_file($imageTempName[$index], $imagePath)) {

                        // Store image into database table
                        $savedImageBasename .= "('" . $imageBasename . "'),";
                    } else {
                        $error = 'File Not uploaded ! try again';
                    }
                } else {
                    $error .= $_FILES['file_name']['name'][$index] . ' - file extensions not allowed<br> ';
                }
            }
            save_image($savedImageBasename, $tableName);
        }
        return $error;
    }
    // File upload configuration 
    function save_image($savedImageBasename, $tableName)
    {

        global $db;
        if (!empty($savedImageBasename)) {
            $value = trim($savedImageBasename, ',');
            $saveImage = "INSERT INTO " . $tableName . " (image_name) VALUES" . $value;
            $exec = $db->query($saveImage);
            if ($exec) {
                echo "Images are uploaded successfully";
            } else {
                echo  "Error: " .  $saveImage . "<br>" . $db->error;
            }
        }
    }



    include 'footer.php'; ?>