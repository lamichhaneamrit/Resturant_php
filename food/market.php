<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>

<body>

</body>

</html>
<?php include 'header.php';
?>

<div class="content-area">
    <div class="row">
        <!-- Welcome Message -->

        <div class="row welcome-message">
            <div class="medium-8 small-12 columns">
                <h2>Our Market</h2>
                <?php
                                $result = ORM::for_table("site_about")
                                        ->find_array(1);

                                ?>



                <?php foreach ($result as $res) : ?>


                <p> <?php echo $res['market']; ?></p>

                <?php endforeach; ?>



                <?php

                                require('../food/admin/image-gallery-script.php');
                                ?>

                <!DOCTYPE html>
                <html>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" type="text/css" href="css/style.css">

                <body>

                    <!--======image gallery ========-->
                    <br>
                    <div class="row">

                        <?php

                                                if (!empty($fetchImage)) {
                                                        $sn = 1;
                                                        foreach ($fetchImage as $img) {

                                                ?>

                        <div class="column">
                            <img src="uploads/
<?php
                                                                echo $img['image_name'];
?>
" style="width:100%" onclick="openModal(); currentSlide(
<?php
                                                                echo $sn;
?>
)" class="hover-shadow cursor">
                        </div>
                        <?php

                                                                $sn++;
                                                        }
                                                } else {
                                                        echo "No Image is saved in database";
                                                }
                                                ?>

                    </div>
                    <!--======image gallery ========-->


                    <div id="galleryModal" class="modal">
                        <span class="close cursor" onclick="closeModal()">&times;</span>

                        <!--======image gallery modal========-->
                        <div class="modal-content">

                            <?php

                                                        if (!empty($fetchImage)) {
                                                                $sn = 1;
                                                                foreach ($fetchImage as $img) {

                                                        ?>
                            <div class="gallerySlides">
                                <div class="numbertext"> / 4</div>
                                <img src="uploads/
<?php
                                                                        echo $img['image_name'];
?>
" style="width:100%">
                            </div>
                            <?php

                                                                        $sn++;
                                                                }
                                                        } else {
                                                                echo "No Image is saved in database";
                                                        }
                                                        ?>


                            <!--======image gallery model========-->

                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>

                            <div class="caption-container">
                                <p id="caption"></p>
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript" src="js/gallery-script.js"></script>

                </body>

                </html>