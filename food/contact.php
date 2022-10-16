<?php include 'header.php';?>
 
        <!-- Content Area -->
	    <div class="content-area contact-page">
            <div class="row">
               <div class="medium-3 small-12 columns">
                    <?php 
                                   $result = ORM::for_table("site_settings")
                                   ->find_array(1);
                                    ?>
                                     <?php foreach ($result as $res):?> 
                    <img src="haryana_img/cover_2.jpg" alt="">
                    <br><br>
                    <h4>Unsere Anschrift</h4>
                    <p><?php echo $res['address'];?></p>
                    <p><?php echo $res['city'];?></p>
                    <h4>Kontakt</h4>
                    <p>Tel: <?php echo $res['site_phone'];?> <br> Tel: <?php echo $res['linkedin'];?> <br>Email: <a href="mailto:<?php echo $res['site_email'];?>"><?php echo $res['site_email'];?></a></p>
                    <br>
                    <h4>Follow Us</h4>
                    <div class="socialicons">
                        <a href="<?php echo $res['facebook'];?>"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/<?php echo $res['twitter'];?>"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google"></i></a>
                    </div>
                    <?php endforeach; ?>
               </div><!-- left bar ends here -->
               <div class="medium-9 small-12 columns">
               <div style="max-width:100%;overflow:hidden;color:red;width:500px;height:500px;"><div id="mymap-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=scheideweg+56-58&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="embedmap-code" href="https://www.embed-map.com" id="authmap-data">https://www.embed-map.com</a><style>#mymap-display .text-marker{}.map-generator{max-width: 100%; max-height: 100%; background: none;</style></div>
                    <!-- map ends here --><p>
                    Hier können Sie uns über unser Kontaktformular eine Nachricht zukommen lassen. Auch Ihre Reservierung können Sie auf diesem Wege vornehmen. Wir sind stets bemüht, Ihren Wünschen bestmöglich nachzukommen. Haben Sie einen Lieblingstisch? Finden Sie ein Gericht nicht auf unserer Karte? Möchten Sie eine Feier bei uns begehen? Zögern Sie nicht, uns Ihre Fragen und Wünsche zukommen zu lassen.

Auch für Anregungen sind wir immer offen.

Ihr Wohlbefinden ist unsere Aufgabe </p>
                    <div class="contact-form">
                        <h2>Kontakiern Sie an Uns:</h2>
                        <form method="POST" action="send_contact.php">
                            <div class="row">
                                <div class="medium-6 columns">
                                    <input name="name" type="text" placeholder="Name">
                                 </div>
                                 <div class="medium-6 columns">    
                                     <input name="email" type="text" placeholder="Email">
                                 </div>
                                <div class="medium-12 columns">
                                    <textarea name="message" placeholder="Your message" rows="6"></textarea>
                                    <button class="primary button" value="submit" type="submit">Submit Form</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- contact Form ends here. -->
               </div>
            </div>
        </div>
	    <!-- Content Area Ends -->
		
        <!-- Call to Action box -->
        <div class="call-to-action">
           <div class="row">
                <div class="medium-10 small-12 columns">
                    <h2><i class="fa fa-phone" aria-hidden="true"></i>Haben Sie noch fragen? <span>0441/96013838</span></h2>
                </div>
                <div class="medium-2 small-12 columns">
                    <a href="contact.php" class="button primary">Kontaktiern Sie an Uns</a>
                </div>
           </div><!-- row -->
         </div>
        <!-- Call to Action End -->
<?php include 'footer.php'; ?>