<?php include 'header.php'; ?>
<div class="content-area">
    <div class="row">
        <!-- Welcome Message -->

        <div class="row welcome-message">
            <div class="medium-8 small-12 columns">
                <h2>Speisekarte und bestellung</h2>
                <?php
                                $result = ORM::for_table("site_about")
                                        ->find_array(1);
                                ?>
                <?php foreach ($result as $res) : ?>


                <p> <?php echo $res['innovation']; ?></p>

                <?php endforeach; ?>

                <button class="primary button" value=" "> Speisekarte</button>
                <button class="primary button" value=" "> Online Bestellen</button>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>
    <!-- Welcom Message Ends -->
    <hr>

</div><!-- Row ends -->
</div>
<?php include 'footer.php'; ?>