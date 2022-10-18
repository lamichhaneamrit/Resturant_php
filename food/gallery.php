<?php
include('header.php');
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/style.css">

<body>
    <div class="row welcome-message">
        <div class="medium-8 small-12 columns">
            <h2>Unserer Gallery </h2>
            <hr>
            <?php
            $result = ORM::for_table("site_about")
                ->find_array(1);
            ?>
            <?php foreach ($result as $res) : ?>
            <p> <?php echo $res['market']; ?></p>
            <?php endforeach; ?>
        </div>
    </div>
    <!--======image gallery ========-->
    <br>
    <div class="row">
        <h3>Ünser Besonders Moments </h3>
        </hr>
        <?php
        $fetchImage = ORM::for_table("gallery")
            ->find_array(1);


        if (!empty($fetchImage)) {
            $sn = 1;
            foreach ($fetchImage as $img) {
        ?>
        <div class="column">
            <img src="admin/uploads/gallery/" <?php
                                                        echo $img['image_name'];
                                                        ?> " style=" width:100%" onclick="openModal(); currentSlide(
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
                <h2>Unser Bekante Essen</h2>

                <div class="numbertext"> / 4</div>
                <img src="admin/uploads/gallery/" <?php
                                                            echo $img['image_name'];
                                                            ?> " style=" width:100%">
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
<?php include 'footer.php'; ?>
</div>





</html>