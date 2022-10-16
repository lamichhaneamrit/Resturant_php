<?php include 'header.php';?>
   <div class="content-area">
	    	<div class="row">
            	<!-- Welcome Message -->
		
                    	<div class="row welcome-message">
            <div class="medium-8 small-12 columns">
    	    	<h2>Herzlichen Willkommen Bei Haryana Tandoori Resturant</h2>
                <?php 
                                   $result = ORM::for_table("site_about")
                                   ->find_array(1);
                                    ?>
                                     <?php foreach ($result as $res):?>
                
                
                <p> <?php echo $res['full_about'];?></p>
                     
                                             <?php endforeach; ?>
                
        	</div>
            
        </div>	
                    <div class="clearfix"></div>
			   </div>	
    			<!-- Welcom Message Ends -->
                        <hr>
               <div class="home-module">	
            <div class="row">
                <div class="medium-4 small-12 columns">
                    <div class="icon-box">
                        <div class="icon-side float-left">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </div>
                        <div class="info-side float-left">
                            <p><strong>Support you Local</strong><br>
                            Wir sind seit 2008 hier in Oldenburg. Wir erhalten ständig Ihre Unterstützung von der örtlichen Behörde. Wir hoffen, dass es für immer so bleibt, und Sie werden uns Gelegenheit geben, Ihnen zu dienen und Sie glücklich zu machen.
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
               </div><!-- icon-box ends -->
               
               <div class="medium-4 small-12 columns">
                    <div class="icon-box">
                        <div class="icon-side float-left">
                            <i class="fa fa-industry" aria-hidden="true"></i>
                        </div>
                        <div class="info-side float-left">
                            <p><strong>Unserer Speisekarte</strong><br>
                            Wir bereiten frisches und authentisches indisches Essen zu. Sie können das Menü sehen und sofort mit der Bestellung beginnen. Sie konnen lieferen lassen oder direkt fur mitnehmen .Wir sind immer für Sie da
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
               </div><!-- icon-box ends -->
               
               <div class="medium-4 small-12 columns">
                    <div class="icon-box">
                        <div class="icon-side float-left">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="info-side float-left">
                            <p><strong>vegetarisch Essen </strong><br>
                            Mit dem Ziel der Umwelt und unserer Kunden bieten wir auch verschiedene Arten vegetarischer Lebensmittel an. Sie können es auf unserer speisekarte überprüfen und mit der Bestellung beginnen.
guten Appetit
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
               </div><!-- icon-box ends -->
               
            </div>
       </div><!-- icons-wrap -->           
	        </div><!-- Row ends -->
		</div>
<?php include 'footer.php'; ?>