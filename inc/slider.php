<section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header">
    <div class="slider-inner">

        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">

                <?php
                $getcat = $Slider_class->show();
                $i = 0;
                if ($getcat) {
                    while ($result = $getcat->fetch_assoc()) {
                        $i++;
                ?>
                        <div class="swiper-slide dark">
                            <div class="container">
                                <div class="slider-caption slider-caption-center">
                                    <h2 data-animate="fadeInUp"><?= $result['heading']; ?>
                                        <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200"><?= $result['subheading']; ?></p>
                                </div>
                            </div>
                            <div class="swiper-slide-bg" style="background-image: url('Admin/<?= $result['image']; ?>');"></div>
                        </div>
                <?php }
                } ?>

            </div>
            <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
            <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
        </div>

        <a href="#" data-scrollto="#content" data-offset="100" class="one-page-arrow dark"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

    </div>
</section>


<!-- Slider
		============================================= -->
<section id="slider" class="slider-element revslider-wrap">

    <div id="rev_slider_108_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="food-carousel80" style="margin:0px auto;background-color:#eef0f1;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
        <div id="rev_slider_108_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-325" data-transition="fade" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="include/rs-plugin/demos/assets/images/food1-150x100.jpg" data-rotate="0" data-saveperformance="off" data-title="The Healthy Bowl" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="include/rs-plugin/demos/assets/images/food1.jpg" alt="Image" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption FoodCarousel-Content   tp-resizeme" id="slide-325-layer-3" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['420']" data-height="['420']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:800;e:Power3.easeInOut;" data-transform_out="auto:auto;s:500;" data-start="bytrigger" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-end="bytrigger" data-lasttriggerstate="reset" style="z-index: 5; min-width: 420px; max-width: 420px; max-width: 420px; max-width: 420px; white-space: normal;"><span class="foodcarousel-headline">The Healthy Bowl</span><br />
                        1 Large Green Bell Pepper<br />
                        1 Small Onion<br />
                        2 Dragon Fruits<br />
                        1 Red Chili
                        <hr style="border-top: 1px solid #292e31;">
                        Chop everything up into small bits and put into a bowl. That was easy huh?<br />
                        Enjoy this special dish brought to you by <a href="#" target="_blank">Canvas</a>.
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption FoodCarousel-Button rev-btn " id="slide-325-layer-1" data-x="center" data-hoffset="" data-y="bottom" data-voffset="50" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);cursor:pointer;" data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="0" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"startlayer","layer":"slide-325-layer-3","delay":""},{"event":"click","action":"startlayer","layer":"slide-325-layer-5","delay":"200"},{"event":"click","action":"stoplayer","layer":"slide-325-layer-1","delay":""}]' data-responsive_offset="on" data-responsive="off" data-lasttriggerstate="reset" style="z-index: 6; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box; color: #444;"><i class="icon-file-alt" style="font-size: 21px; float: left;margin-top:0px;margin-right:10px;"></i> VIEW RECIPE
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption FoodCarousel-CloseButton rev-btn  tp-resizeme" id="slide-325-layer-5" data-x="441" data-y="110" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);cursor:pointer;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:800;e:Power3.easeInOut;" data-transform_out="auto:auto;s:500;" data-start="bytrigger" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"stoplayer","layer":"slide-325-layer-3","delay":""},{"event":"click","action":"stoplayer","layer":"slide-325-layer-5","delay":""},{"event":"click","action":"startlayer","layer":"slide-325-layer-1","delay":""}]' data-responsive_offset="on" data-end="bytrigger" data-lasttriggerstate="reset" style="z-index: 7; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box; color:#444"><i class="icon-remove"></i>
                    </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-326" data-transition="fade" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="include/rs-plugin/demos/assets/images/food6-150x100.jpg" data-rotate="0" data-saveperformance="off" data-title="Spicy Chili Soup" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="include/rs-plugin/demos/assets/images/food6.jpg" alt="Image" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption FoodCarousel-Content   tp-resizeme" id="slide-326-layer-3" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['420']" data-height="['420']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:800;e:Power3.easeInOut;" data-transform_out="auto:auto;s:500;" data-start="bytrigger" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-end="bytrigger" data-lasttriggerstate="reset" style="z-index: 5; min-width: 420px; max-width: 420px; max-width: 420px; max-width: 420px; white-space: normal;"><span class="foodcarousel-headline">Spicy Chili Soup</span><br />
                        2 Pieces of Baguette<br />
                        3 Large Tomatoes<br />
                        1 / 2 Cup of Mixed Herbs<br />
                        1 Red Chili
                        <hr style="border-top: 1px solid #292e31;">
                        Chop everything up into small bits and put into a bowl. That was easy huh?<br />
                        Enjoy this special dish brought to you by <a href="#" target="_blank">Canvas</a>.
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption FoodCarousel-Button rev-btn " id="slide-326-layer-1" data-x="center" data-hoffset="" data-y="bottom" data-voffset="50" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);cursor:pointer;" data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="0" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"startlayer","layer":"slide-326-layer-3","delay":""},{"event":"click","action":"startlayer","layer":"slide-326-layer-5","delay":"200"},{"event":"click","action":"stoplayer","layer":"slide-326-layer-1","delay":""}]' data-responsive_offset="on" data-responsive="off" data-lasttriggerstate="reset" style="z-index: 6; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box; color: #444;"><i class="icon-file-alt" style="font-size: 21px; float: left;margin-top:0px;margin-right:10px;"></i> VIEW RECIPE
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption FoodCarousel-CloseButton rev-btn  tp-resizeme" id="slide-326-layer-5" data-x="441" data-y="110" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);cursor:pointer;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:800;e:Power3.easeInOut;" data-transform_out="auto:auto;s:500;" data-start="bytrigger" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"stoplayer","layer":"slide-326-layer-3","delay":""},{"event":"click","action":"stoplayer","layer":"slide-326-layer-5","delay":""},{"event":"click","action":"startlayer","layer":"slide-326-layer-1","delay":""}]' data-responsive_offset="on" data-end="bytrigger" data-lasttriggerstate="reset" style="z-index: 7; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box; color:#444"><i class="icon-remove"></i>
                    </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-327" data-transition="fade" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="include/rs-plugin/demos/assets/images/food3-150x100.jpg" data-rotate="0" data-saveperformance="off" data-title="Classic Bolognese" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="include/rs-plugin/demos/assets/images/food3.jpg" alt="Image" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption FoodCarousel-Content   tp-resizeme" id="slide-327-layer-3" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['420']" data-height="['420']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:800;e:Power3.easeInOut;" data-transform_out="auto:auto;s:500;" data-start="bytrigger" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-end="bytrigger" data-lasttriggerstate="reset" style="z-index: 5; min-width: 420px; max-width: 420px; max-width: 420px; max-width: 420px; white-space: normal;"><span class="foodcarousel-headline">Classic Bolognese</span><br />
                        250g Spaghettis<br />
                        500g of Mixed Minced Beef<br />
                        3 Large Tomatoes
                        <hr style="border-top: 1px solid #292e31;">
                        Chop everything up into small bits and put into a bowl. That was easy huh?<br />
                        Enjoy this special dish brought to you by <a href="#" target="_blank">Canvas</a>.
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption FoodCarousel-Button rev-btn " id="slide-327-layer-1" data-x="center" data-hoffset="" data-y="bottom" data-voffset="50" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);cursor:pointer;" data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="0" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"startlayer","layer":"slide-327-layer-3","delay":""},{"event":"click","action":"startlayer","layer":"slide-327-layer-5","delay":"200"},{"event":"click","action":"stoplayer","layer":"slide-327-layer-1","delay":""}]' data-responsive_offset="on" data-responsive="off" data-lasttriggerstate="reset" style="z-index: 6; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box; color: #444;"><i class="icon-file-alt" style="font-size: 21px; float: left;margin-top:0px;margin-right:10px;"></i> VIEW RECIPE
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption FoodCarousel-CloseButton rev-btn  tp-resizeme" id="slide-327-layer-5" data-x="441" data-y="110" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);cursor:pointer;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:800;e:Power3.easeInOut;" data-transform_out="auto:auto;s:500;" data-start="bytrigger" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"stoplayer","layer":"slide-327-layer-3","delay":""},{"event":"click","action":"stoplayer","layer":"slide-327-layer-5","delay":""},{"event":"click","action":"startlayer","layer":"slide-327-layer-1","delay":""}]' data-responsive_offset="on" data-end="bytrigger" data-lasttriggerstate="reset" style="z-index: 7; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box; color:#444"><i class="icon-remove"></i>
                    </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-328" data-transition="fade" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="include/rs-plugin/demos/assets/images/food2-150x100.jpg" data-rotate="0" data-saveperformance="off" data-title="Cottage Cheese &amp; Chives" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="include/rs-plugin/demos/assets/images/food2.jpg" alt="Image" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption FoodCarousel-Content   tp-resizeme" id="slide-328-layer-3" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['420']" data-height="['420']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:800;e:Power3.easeInOut;" data-transform_out="auto:auto;s:500;" data-start="bytrigger" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-end="bytrigger" data-lasttriggerstate="reset" style="z-index: 5; min-width: 420px; max-width: 420px; max-width: 420px; max-width: 420px; white-space: normal;"><span class="foodcarousel-headline">Cottage Cheese & Chives</span><br />
                        15g Chives<br />
                        100g Cottage Cheese<br />
                        1 Bun
                        <hr style="border-top: 1px solid #292e31;">
                        Chop everything up into small bits and put into a bowl. That was easy huh?<br />
                        Enjoy this special dish brought to you by <a href="#" target="_blank">Canvas</a>.
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption FoodCarousel-Button rev-btn " id="slide-328-layer-1" data-x="center" data-hoffset="" data-y="bottom" data-voffset="50" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);cursor:pointer;" data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="0" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"startlayer","layer":"slide-328-layer-3","delay":""},{"event":"click","action":"startlayer","layer":"slide-328-layer-5","delay":"200"},{"event":"click","action":"stoplayer","layer":"slide-328-layer-1","delay":""}]' data-responsive_offset="on" data-responsive="off" data-lasttriggerstate="reset" style="z-index: 6; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box; color: #444;"><i class="icon-file-alt" style="font-size: 21px; float: left;margin-top:0px;margin-right:10px;"></i> VIEW RECIPE
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption FoodCarousel-CloseButton rev-btn  tp-resizeme" id="slide-328-layer-5" data-x="441" data-y="110" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);cursor:pointer;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:800;e:Power3.easeInOut;" data-transform_out="auto:auto;s:500;" data-start="bytrigger" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"stoplayer","layer":"slide-328-layer-3","delay":""},{"event":"click","action":"stoplayer","layer":"slide-328-layer-5","delay":""},{"event":"click","action":"startlayer","layer":"slide-328-layer-1","delay":""}]' data-responsive_offset="on" data-end="bytrigger" data-lasttriggerstate="reset" style="z-index: 7; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box; color:#444"><i class="icon-remove"></i>
                    </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-329" data-transition="fade" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="include/rs-plugin/demos/assets/images/food5-150x100.jpg" data-rotate="0" data-saveperformance="off" data-title="Colorful Salad" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="include/rs-plugin/demos/assets/images/food5.jpg" alt="Image" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption FoodCarousel-Content   tp-resizeme" id="slide-329-layer-3" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['420']" data-height="['420']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:800;e:Power3.easeInOut;" data-transform_out="auto:auto;s:500;" data-start="bytrigger" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-end="bytrigger" data-lasttriggerstate="reset" style="z-index: 5; min-width: 420px; max-width: 420px; max-width: 420px; max-width: 420px; white-space: normal;"><span class="foodcarousel-headline">Colorful Salad</span><br />
                        250g Mixed Salad<br />
                        50g Nuts<br />
                        100g Beetroot<br />
                        Your Favorite Dressing
                        <hr style="border-top: 1px solid #292e31;">
                        Chop everything up into small bits and put into a bowl. That was easy huh?<br />
                        Enjoy this special dish brought to you by <a href="#" target="_blank">Canvas</a>.
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption FoodCarousel-Button rev-btn " id="slide-329-layer-1" data-x="center" data-hoffset="" data-y="bottom" data-voffset="50" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);cursor:pointer;" data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="0" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"startlayer","layer":"slide-329-layer-3","delay":""},{"event":"click","action":"startlayer","layer":"slide-329-layer-5","delay":"200"},{"event":"click","action":"stoplayer","layer":"slide-329-layer-1","delay":""}]' data-responsive_offset="on" data-responsive="off" data-lasttriggerstate="reset" style="z-index: 6; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box; color: #444;"><i class="icon-file-alt" style="font-size: 21px; float: left;margin-top:0px;margin-right:10px;"></i> VIEW RECIPE
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption FoodCarousel-CloseButton rev-btn  tp-resizeme" id="slide-329-layer-5" data-x="441" data-y="110" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);cursor:pointer;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:800;e:Power3.easeInOut;" data-transform_out="auto:auto;s:500;" data-start="bytrigger" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"stoplayer","layer":"slide-329-layer-3","delay":""},{"event":"click","action":"stoplayer","layer":"slide-329-layer-5","delay":""},{"event":"click","action":"startlayer","layer":"slide-329-layer-1","delay":""}]' data-responsive_offset="on" data-end="bytrigger" data-lasttriggerstate="reset" style="z-index: 7; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box; color:#444"><i class="icon-remove"></i>
                    </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-330" data-transition="fade" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="include/rs-plugin/demos/assets/images/food4-150x100.jpg" data-rotate="0" data-saveperformance="off" data-title="Its Just Cornflakes" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="include/rs-plugin/demos/assets/images/food4.jpg" alt="Image" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption FoodCarousel-Content   tp-resizeme" id="slide-330-layer-3" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['420']" data-height="['420']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:800;e:Power3.easeInOut;" data-transform_out="auto:auto;s:500;" data-start="bytrigger" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-end="bytrigger" data-lasttriggerstate="reset" style="z-index: 5; min-width: 420px; max-width: 420px; max-width: 420px; max-width: 420px; white-space: normal;"><span class="foodcarousel-headline">It's Just Cornflakes</span><br />
                        150ml Milk<br />
                        50g Cornflakes<br />
                        That's it!
                        <hr style="border-top: 1px solid #292e31;">
                        Chop everything up into small bits and put into a bowl. That was easy huh?<br />
                        Enjoy this special dish brought to you by <a href="#" target="_blank">Canvas</a>.
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption FoodCarousel-Button rev-btn " id="slide-330-layer-1" data-x="center" data-hoffset="" data-y="bottom" data-voffset="50" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);cursor:pointer;" data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="0" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"startlayer","layer":"slide-330-layer-3","delay":""},{"event":"click","action":"startlayer","layer":"slide-330-layer-5","delay":"200"},{"event":"click","action":"stoplayer","layer":"slide-330-layer-1","delay":""}]' data-responsive_offset="on" data-responsive="off" data-lasttriggerstate="reset" style="z-index: 6; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box; color: #444;"><i class="icon-file-alt" style="font-size: 21px; float: left;margin-top:0px;margin-right:10px;"></i> VIEW RECIPE
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption FoodCarousel-CloseButton rev-btn  tp-resizeme" id="slide-330-layer-5" data-x="441" data-y="110" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);cursor:pointer;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:800;e:Power3.easeInOut;" data-transform_out="auto:auto;s:500;" data-start="bytrigger" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"stoplayer","layer":"slide-330-layer-3","delay":""},{"event":"click","action":"stoplayer","layer":"slide-330-layer-5","delay":""},{"event":"click","action":"startlayer","layer":"slide-330-layer-1","delay":""}]' data-responsive_offset="on" data-end="bytrigger" data-lasttriggerstate="reset" style="z-index: 7; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box; color:#444"><i class="icon-remove"></i>
                    </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-331" data-transition="fade" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="include/rs-plugin/demos/assets/images/muesli-150x100.jpg" data-rotate="0" data-saveperformance="off" data-title="Tasty Muesli" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="include/rs-plugin/demos/assets/images/muesli.jpg" alt="Image" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption FoodCarousel-Content   tp-resizeme" id="slide-331-layer-3" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['420']" data-height="['420']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:800;e:Power3.easeInOut;" data-transform_out="auto:auto;s:500;" data-start="bytrigger" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-end="bytrigger" data-lasttriggerstate="reset" style="z-index: 5; min-width: 420px; max-width: 420px; max-width: 420px; max-width: 420px; white-space: normal;"><span class="foodcarousel-headline">Tasty Muesli</span><br />
                        150ml Milk<br />
                        50g Granola<br />
                        50g Blueberries
                        <hr style="border-top: 1px solid #292e31;">
                        Chop everything up into small bits and put into a bowl. That was easy huh?<br />
                        Enjoy this special dish brought to you by <a href="#" target="_blank">Canvas</a>.
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption FoodCarousel-Button rev-btn " id="slide-331-layer-1" data-x="center" data-hoffset="" data-y="bottom" data-voffset="50" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);cursor:pointer;" data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="0" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"startlayer","layer":"slide-331-layer-3","delay":""},{"event":"click","action":"startlayer","layer":"slide-331-layer-5","delay":"200"},{"event":"click","action":"stoplayer","layer":"slide-331-layer-1","delay":""}]' data-responsive_offset="on" data-responsive="off" data-lasttriggerstate="reset" style="z-index: 6; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box; color: #444;"><i class="icon-file-alt" style="font-size: 21px; float: left;margin-top:0px;margin-right:10px;"></i> VIEW RECIPE
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption FoodCarousel-CloseButton rev-btn  tp-resizeme" id="slide-331-layer-5" data-x="441" data-y="110" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 1.00);cursor:pointer;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:800;e:Power3.easeInOut;" data-transform_out="auto:auto;s:500;" data-start="bytrigger" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"stoplayer","layer":"slide-331-layer-3","delay":""},{"event":"click","action":"stoplayer","layer":"slide-331-layer-5","delay":""},{"event":"click","action":"startlayer","layer":"slide-331-layer-1","delay":""}]' data-responsive_offset="on" data-end="bytrigger" data-lasttriggerstate="reset" style="z-index: 7; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box; color:#444"><i class="icon-remove"></i>
                    </div>
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div><!-- END REVOLUTION SLIDER -->
    </div>
</section><!-- #content end -->