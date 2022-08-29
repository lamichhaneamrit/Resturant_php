<?php include 'header.php'; ?>

<section id='header-left-col'>

    <marquee class='marquee_1' direction='left' ,width='50px' ,height='10px' ,font-weight='500' , font-color='blue' ;>
        <strong>
            <?php
            $result = ORM::for_table("site_about")
                ->find_array(1);
            ?>
            <?php foreach ($result as $res) : ?>
            <p> <?php echo $res['scrolling_text']; ?></p>

            <?php endforeach; ?>
            <a href='contact.php'>Reservierungen möglich.</a>
        </strong>
    </marquee>

</section>
<!-- Main Banner -->
<div class="main-banner">
    <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1">
        <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
        <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" data-version="5.0.7">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-16" data-transition="zoomout" data-slotamount="default"
                    data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"
                    data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7"
                    data-saveperformance="off">
                    <!-- MAIN IMAGE -->
                    <img src="haryana_img/cover.jpg" alt="First Slide" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" />
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-shape tp-shapewrapper layer1 tp-resizeme rs-parallaxlevel-0"
                        id="slide-16-layer-3" data-x="['center','center','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="normal"
                        data-transform_idle="o:1;" data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="s:300;s:300;" data-start="1000" data-basealign="slide"
                        data-responsive_offset="on">
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption Newspaper-Title-Centered layer2 tp-resizeme rs-parallaxlevel-0"
                        id="slide-16-layer-1" data-x="['center','center','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['0','0','0','1']" data-fontsize="['50','50','50','30']"
                        data-lineheight="['55','55','55','35']" data-width="['721','721','721','420']"
                        data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;"
                        data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">Frisch
                        und Qüalität
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption Newspaper-Subtitle layer3 tp-resizeme rs-parallaxlevel-0"
                        id="slide-16-layer-2" data-x="['center','center','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['-82','-82','-82','-58']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;"
                        data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption Newspaper-Button layer4 rev-btn rs-parallaxlevel-0" id="slide-16-layer-4"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['92','92','92','76']"
                        data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                        data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                        data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                        data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                        data-transform_out="y:50px;opacity:0;s:1000;s:1000;" data-start="1000" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-responsive="off"><a href="about.php">Mehr
                            erfahren</a>
                    </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-17" data-transition="fadetotopfadefrombottom" data-slotamount="default"
                    data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500"
                    data-rotate="0" data-saveperformance="off">
                    <!-- MAIN IMAGE -->
                    <img src="haryana_img/cover_2.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-shape tp-shapewrapper layer1 tp-resizeme rs-parallaxlevel-0"
                        id="slide-17-layer-3" data-x="['center','center','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="normal"
                        data-transform_idle="o:1;" data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="s:300;s:300;" data-start="1000" data-basealign="slide"
                        data-responsive_offset="on">
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption Newspaper-Title-Centered layer2 tp-resizeme rs-parallaxlevel-0"
                        id="slide-17-layer-1" data-x="['center','center','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['0','0','0','1']" data-fontsize="['50','50','50','30']"
                        data-lineheight="['55','55','55','35']" data-width="['721','721','721','420']"
                        data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;"
                        data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">Wir sind
                        immer für Sie.
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption Newspaper-Subtitle layer3 tp-resizeme rs-parallaxlevel-0"
                        id="slide-17-layer-2" data-x="['center','center','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['-82','-82','-82','-58']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;"
                        data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption Newspaper-Button layer4 rev-btn rs-parallaxlevel-0" id="slide-17-layer-4"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['92','92','92','76']"
                        data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                        data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                        data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                        data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                        data-transform_out="y:50px;opacity:0;s:1000;s:1000;" data-start="1000" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-responsive="off"><a href="about.php">Jetz
                            Sofort Bestellen</a>
                    </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-18" data-transition="zoomin" data-slotamount="7" data-easein="Power4.easeInOut"
                    data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0" data-saveperformance="off">
                    <!-- MAIN IMAGE -->
                    <img src="haryana_img/cover_3.jpg" alt="" data-bgposition="center center" data-kenburns="on"
                        data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120"
                        data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0"
                        data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-shape tp-shapewrapper layer1 tp-resizeme rs-parallaxlevel-0"
                        id="slide-18-layer-3" data-x="['center','center','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="normal"
                        data-transform_idle="o:1;" data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="s:300;s:300;" data-start="1000" data-basealign="slide"
                        data-responsive_offset="on">
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption Newspaper-Title-Centered layer2 tp-resizeme rs-parallaxlevel-0"
                        id="slide-18-layer-1" data-x="['center','center','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['0','0','0','1']" data-fontsize="['50','50','50','30']"
                        data-lineheight="['55','55','55','35']" data-width="['721','721','721','420']"
                        data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;"
                        data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">Support
                        Your Local
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption Newspaper-Subtitle layer3 tp-resizeme rs-parallaxlevel-0"
                        id="slide-18-layer-2" data-x="['center','center','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['-82','-82','-82','-58']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;" data-mask_in="x:0px;y:0px;" data-mask_out="x:0;y:0;"
                        data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption Newspaper-Button layer4 rev-btn rs-parallaxlevel-0" id="slide-18-layer-4"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['92','92','92','76']"
                        data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                        data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                        data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                        data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                        data-transform_out="y:50px;opacity:0;s:1000;s:1000;" data-start="1000" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-responsive="off"><a
                            href="about.php">Bestellen</a>
                    </div>
                </li>

            </ul>
            <div class="tp-static-layers"></div>
            <div class="tp-bannertimer"></div>
        </div>
    </div><!-- END REVOLUTION SLIDER -->
</div>
<!-- Main Banner End -->

<!-- Welcome Message -->
<div class="row welcome-message">
    <div class="medium-6 small-12 columns">
        <h2>Herzlichen Willkommen Bei Haryana Tandoori Resturant</h2>
        <p>Namaste und Herzlich Willkommen in unserem Restaurant Haryana in Oldenburg.


            Im Scheideweg bieten wir Ihnen leckere Speisen aus Indien. Schauen Sie sich auf unseren Seiten schon einmal
            an, was Sie bei uns erwartet.



            Bei Fragen nutzen Sie unser Kontaktformular oder rufen Sie uns einfach an. Wir freuen uns auf Ihren Besuch.
            Sie haben möglichkeiten für den Essen hier mitzunehmen oder lieferung lassen*</p>
        <button class="primary button" value=" "> Speisekarte</button>
        <button class="primary button" value=" "> Online Bestellen</button>

    </div>

    <div class="medium-6 small-12 columns">
        <div class="row">
            <div class="medium-6 small-12 columns">
                <div class="highlight-box">
                    <i class="fa fa-food" aria-hidden="true"></i>
                    <h2>Unserer <span>Haüptgerichten</span></h2>
                    <div class="tx-div"></div>
                    <p>Alle Haüptgerichten sind mit BasmatiReis und Salat Servieret.</p>
                    <h2>Wir sind täglich von 17:00 bis 22:00 für sie da geöffenet</h2>
                </div>
            </div>
            <div class="medium-6 small-12 columns">
                <div class="highlight-box">
                    <i class="fa fa-food" aria-hidden="true"></i>
                    <h2>Sauberkeiten <span>frisch</span></h2>
                    <div class="tx-div"></div>
                    <p>Wir liefern sichere, kostengünstige, frische und qualitativ hochwertige Produkte, die das
                        Wohlbefinden der Verbraucher und die Integrität unserer Kunden schützen.</p>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Welcom Message Ends -->

<!-- information Boxes -->
<div class="home-module">
    <div class="row">
        <div class="medium-4 small-12 columns">
            <div class="icon-box">
                <div class="icon-side float-left">
                    <i class="fa fa-globe" aria-hidden="true"></i>
                </div>
                <div class="info-side float-left">
                    <p><strong>Support you Local</strong><br>
                        Wir sind seit 2008 hier in Oldenburg. Wir erhalten ständig Ihre Unterstützung von der örtlichen
                        Behörde. Wir hoffen, dass es für immer so bleibt, und Sie werden uns Gelegenheit geben, Ihnen zu
                        dienen und Sie glücklich zu machen.
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
                        Wir bereiten frisches und authentisches indisches Essen zu. Sie können das Menü sehen und sofort
                        mit der Bestellung beginnen. Sie konnen lieferen lassen oder direkt fur mitnehmen .Wir sind
                        immer für Sie da
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
                    <p><strong>Vegetarish Essen </strong><br>
                        Mit dem Ziel der Umwelt und unserer Kunden bieten wir auch verschiedene Arten vegetarischer
                        Lebensmittel an. Sie können es auf unserer speisekarte überprüfen und mit der Bestellung
                        beginnen.
                        guten Appetit
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div><!-- icon-box ends -->

    </div>
</div>
<!-- Information Boxes Ends -->
<div class="row">
    <div class="section-title">
        <h2><span>Unsere berühmten Gerichte</span></h2>
    </div>
    <div class="medium-3 small-12 columns">
        <div class="icon-box">
            <div class="float-left">
                <img src="haryana_img/haryana-salat.jpg" style="width: 100%; height: auto;" alt="imge">
            </div>
            <div class="">
                <p><strong>Haryana Salat</strong><br>
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div><!-- icon-box ends -->

    <div class="medium-3 small-12 columns">
        <div class="icon-box">
            <div class="float-left">
                <img src="haryana_img/paperdam.jfif" style="width: 100%; height: auto;" alt="imge">
            </div>
            <div class="">
                <p><strong>Paperdam </strong><br>
                </p>
            </div>
            <div class="clearfix"></div>

        </div>

    </div>
    <div class="medium-3 small-12 columns">
        <div class="icon-box">
            <div class="float-left">
                <img src="haryana_img/chicken_biryani.jfif" style="width: 100%; height: auto;" alt="imge">
            </div>
            <div class="">
                <p><strong>Chicken Biryani</strong><br>
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="medium-3 small-12 columns">
        <div class="icon-box">
            <div class="float-left">
                <img src="haryana_img/Naan.jfif" style="width: 100%; height: auto;" alt="imge">
            </div>
            <div class="">
                <p><strong>Naan </strong><br>
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="medium-3 small-12 columns">
        <div class="icon-box">
            <div class="float-left">
                <img src="haryana_img/saag paneer.jfif" style="width: 100%; height: auto;" alt="imge">
            </div>
            <div class="">
                <p><strong>saag paneer </strong><br>
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- Meet your Team Sect -->

<!-- Reason Section Start -->
<div class="home-module"></div>
<div class="row reason-section">
    <div class="section-title">
        <h2><span>Warum Bei Uns?</span></h2>
    </div><!-- title ends -->

    <div class="medium-15 small-12 columns">
        <ul class="accordion" data-accordion>
            <li class="accordion-item is-active" data-accordion-item>
                <a href="#" class="accordion-title">Authentic</a>
                <div class="accordion-content" data-tab-content>
                    Das Essen, das wir hier anbieten, ist alles authentisch, da es von unserem Koch hergestellt wird,
                    der etwas ganz Besonderes ist und viel Erfahrung in dieser Angelegenheit hat. Wir importieren die
                    Gewürze meistens direkt aus Indien, die meistens als Integrienten verwendet werden (natürlich wurde
                    die Qualität getestet)
                </div>
            </li>

            <li class="accordion-item" data-accordion-item>
                <a href="#" class="accordion-title">Zufriedene Gäste</a>
                <div class="accordion-content" data-tab-content>
                    Seit unseren Eröffnungstagen in Oldenburg können wir Tausende zufriedener Gäste gewinnen. Wir
                    möchten uns auch bei unseren treuen Gästen bedanken, die uns in unseren Höhen und Tiefen geholfen
                    haben.
                </div>
            </li>

            <li class="accordion-item" data-accordion-item>
                <a href="#" class="accordion-title">Qualität & Lebensmittelsicherheit</a>
                <div class="accordion-content" data-tab-content>
                    Unser Plan zur Qualitätssicherung und Lebensmittelsicherheit ist eine sich ständig
                    weiterentwickelnde vorbeugungsbasierte Kombination aus Produktstandards, Fachpersonal, strengen
                    Bewertungsprogrammen und nachvollziehbarer, organisierter Kommunikation in der gesamten Lieferkette.
                </div>
            </li>
            <li class="accordion-item" data-accordion-item>
                <a href="#" class="accordion-title">Nachhaltigkeit</a>
                <div class="accordion-content" data-tab-content>
                    Nachhaltigkeit ist ein gutes Geschäft. Wir konzentrieren uns auf die schnelle Lieferung und die
                    Wiederverwendung von Ressourcen für ein effizientes Transportsystem. Nachhaltigkeit spart Marketing-
                    und Betriebskosten und verbessert gleichzeitig die Chancen für zukünftige Generationen.
                </div>
            </li>

        </ul> <!-- reasons accordion ends -->
    </div> <!-- left column ends -->

    <!-- right column ends -->
</div>
<!-- Reason Section End -->

<!-- Visit our Store End -->


<!-- Call to Action box -->
<div class="call-to-action">
    <div class="row">
        <div class="medium-10 small-12 columns">
            <h2><i class="fa fa-phone" aria-hidden="true"></i> Wenn Sie Fragen haben, rufen Sie uns an
                <span>0441/96013838</span>
            </h2>
        </div>
        <div class="medium-2 small-12 columns">
            <a href="contact.php" class="button primary">Contact Us</a>
        </div>
    </div><!-- row -->
</div>
<!-- Call to Action End -->
<?php include 'footer.php'; ?>