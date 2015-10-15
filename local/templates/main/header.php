<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 14.10.2015
 * Time: 21:27
 */?>
<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die(); ?> <?IncludeTemplateLangFile(__FILE__);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="<?=LANGUAGE_ID?>">
<head profile="http://gmpg.org/xfn/11">
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/jquery.js", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/_include/css/jquery.cycle.css", true);?>
    <?$APPLICATION->ShowPanel();?>
    <!--  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="keywords" content="Novux" />
      <meta name="description" content="Novux" />
      <meta name="author" content="Bogdan Rosu - http://www.spinform.ro" />
      <meta name="copyright" content="&copy; 2010 Bogdan Rosu. All rights reserved." />-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <!-- Load Jquery -->
    <script src="<?=SITE_TEMPLATE_PATH;?>/_include/js/jquery.js" type="text/javascript"></script>
    <!-- End Load -->

    <!-- for IE6 i'm sorry but there is too much wrong with it, needs warning at least, you can disable it by delething this load. -->
    <script src="<?=SITE_TEMPLATE_PATH;?>/_include/js/jquery.badBrowser.js" type="text/javascript" charset="utf-8"></script>
    <!-- End Load -->

    <!-- ALL jQuery Tools. No jQuery library -->
    <script src="<?=SITE_TEMPLATE_PATH;?>/_include/js/jquery.tools.js" type="text/javascript"></script>
    <!-- End Load -->

    <!-- Load Jquery Easing -->
    <script src="<?=SITE_TEMPLATE_PATH;?>/_include/js/jquery.easing.js" type="text/javascript"></script>
    <script src="<?=SITE_TEMPLATE_PATH;?>/_include/js/jquery.css-transform.js" type="text/javascript"></script>
    <script src="<?=SITE_TEMPLATE_PATH;?>/_include/js/jquery.css-rotate-scale.js" type="text/javascript"></script>
    <!-- End Load -->

    <!-- Load Jquery Cycle and adiacent CSS File -->
    <script src="<?=SITE_TEMPLATE_PATH;?>/_include/js/jquery.cycle.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH;?>/_include/css/jquery.cycle.css" type="text/css" media="screen" />
    <!-- End Load -->

    <!-- Load Cufon and Adiacent Font Files, and apply Cufon on used Styles -->
    <script src="<?=SITE_TEMPLATE_PATH;?>/_include/js/cufon.js" type="text/javascript"></script>
    <script src="<?=SITE_TEMPLATE_PATH;?>/_include/js/Museo_400-Museo_italic_400.font.js" type="text/javascript"></script>
    <!-- End Load -->

    <!-- Load Pretty Photo -->
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH;?>/_include/css/prettyPhoto.css" type="text/css" media="screen" />
    <script src="<?=SITE_TEMPLATE_PATH;?>/_include/js/jquery.prettyPhoto.js" type="text/javascript"></script>
    <script type="text/javascript">
        /* pretty photo responds on rel='prettyPhoto' */
        jQuery(document).ready(function() { $("a[rel^='prettyPhoto']").prettyPhoto();   });
    </script>
    <!-- End Load -->

    <!-- Load Superfish Drowpdown Menu, and run it -->
    <script src="<?=SITE_TEMPLATE_PATH;?>/_include/js/jquery.hoverInt.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?=SITE_TEMPLATE_PATH;?>/_include/js/jquery.bgiframe.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?=SITE_TEMPLATE_PATH;?>/_include/js/superfish.js" type="text/javascript" charset="utf-8"></script>
    <!-- End Load -->

    <!-- Load Jquery Roundabout, and adiacent JS & CSS file -->
    <script src="<?=SITE_TEMPLATE_PATH;?>/_include/js/jquery.roundabout.js" type="text/javascript"></script>
    <script src="<?=SITE_TEMPLATE_PATH;?>/_include/js/jquery.roundabout-shapes-1.1.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH;?>/_include/css/jquery.roundabout.css" type="text/css" media="screen" />
    <!-- End Load -->

    <!-- Load SWFObject, used for video embedding -->
    <script src="<?=SITE_TEMPLATE_PATH;?>/_include/js/swfobject.js" type="text/javascript" charset="utf-8"></script>
    <!-- End Load -->

    <!-- Load Quicksand -->
    <script src="<?=SITE_TEMPLATE_PATH;?>/_include/js/jquery.quicksand.js" type="text/javascript" charset="utf-8"></script>
    <!-- End Load -->

    <!-- Load some small custom scripts -->
    <script src="<?=SITE_TEMPLATE_PATH;?>/_include/js/custom.js" type="text/javascript"></script>
    <!-- End Load -->

    <!-- Load PNG Fix older IE Versions -->
    <!--[if lt IE 7]>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH;?>/_include/js/pngfix.js"></script>
    <script type="text/javascript">DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!-- End Load -->

    <!-- Load Main Stylesheet -->
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH;?>/_include/css/style.css" type="text/css" media="screen" />
    <!-- End Load -->

    <!-- Load Alternate Stylesheets, can be disabled if not used -->
    <link rel="alternate stylesheet" type="text/css" media="screen" title="orange" href="<?=SITE_TEMPLATE_PATH;?>/_include/css/style-orange.css" />
    <link rel="alternate stylesheet" type="text/css" media="screen" title="dirtyblue" href="<?=SITE_TEMPLATE_PATH;?>/_include/css/style-dirtyblue.css" />
    <link rel="alternate stylesheet" type="text/css" media="screen" title="redish" href="<?=SITE_TEMPLATE_PATH;?>/_include/css/style-redish.css" />
    <link rel="alternate stylesheet" type="text/css" media="screen" title="green" href="<?=SITE_TEMPLATE_PATH;?>/_include/css/style-green.css" />
    <link rel="alternate stylesheet" type="text/css" media="screen" title="pink" href="<?=SITE_TEMPLATE_PATH;?>/_include/css/style-pink.css" />
    <script src="<?=SITE_TEMPLATE_PATH;?>/_include/js/styleswitch.js" type="text/javascript" charset="utf-8"></script>
    <!-- End Load -->

    <!-- Load Main Enhancements Stylesheet border radius, transparency and such things -->
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH;?>/_include/css/style-enhance.css" type="text/css" media="screen" />
    <!-- End Load -->

    <!-- Load IE Stylesheet -->
    <!--[if IE]>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH;?>/_include/css/ie.css" type="text/css" media="screen" />
    <![endif]-->
    <!-- End Load -->

    <!-- Load IE6 Stylesheet -->
    <!--[if IE 6]>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH;?>/_include/css/ie6.css" type="text/css" media="screen" />
    <![endif]-->
    <!-- End Load -->

</head>
<body>

<!-- start top and main menu -->
<div class="main-menu">
    <div class="ornament">
        <div class="containit">
            <?$APPLICATION->IncludeComponent( "bitrix:main.include", "", Array(     "COMPONENT_TEMPLATE" => ".default",     "AREA_FILE_SHOW" => "file",     "AREA_FILE_SUFFIX" => "inc",     "EDIT_TEMPLATE" => "",     "PATH" => "include_areas/logo.php"     ));?>
            <!--  <div class="logo"><a href="index.html"><?if(!CSite::InDir('/')):?><a href="/"><?endif;?><img src="<?=SITE_TEMPLATE_PATH;?>/_include/images/logo.png" alt="Novux" /><?if(!CSite::InDir('/')):?></a><?endif;?></div>
       --> <div class="menu">
                <!-- navigation start -->
                <div id="navigation">

                    <ul class="sf-menu">
                        <li class="current"><a href="index-roundabout.html" class="applyfont">Home</a>
                            <ul>
                                <li><a href="../../../../../Desktop/1С-Битрикс/html-template/index-cycle.html">Home Normal</a></li>
                                <li><a href="../../../../../Desktop/1С-Битрикс/html-template/index-roundabout-autoplay.html">Home Roundabout Autoplay</a></li>
                                <li><a href="index-roundabout.html">Home Roundabout</a></li>
                                <li><a href="../../../../../Desktop/1С-Битрикс/html-template/index-nivo-slider.html">Home Nivo Slider</a></li>
                                <li class="last roundbottom"><a href="../../../../../Desktop/1С-Битрикс/html-template/index-feature-carousel.html">Home Feature Carousel</a></li>
                            </ul>
                        </li>
                        <li><a href="../../../../../Desktop/1С-Битрикс/html-template/gallery-grid.html" class="applyfont">Gallery</a>
                            <ul>
                                <li><a href="../../../../../Desktop/1С-Битрикс/html-template/gallery-grid.html">Gallery Grid Filterable</a></li>
                                <li><a href="../../../../../Desktop/1С-Битрикс/html-template/gallery-list.html">Gallery List</a></li>
                                <li><a href="../../../../../Desktop/1С-Битрикс/html-template/gallery-grid-sidebar.html">Gallery Grid Sidebar</a></li>
                                <li><a href="../../../../../Desktop/1С-Битрикс/html-template/blank.html">Another Page</a><ul>
                                        <li class="roundtop"><a href="../../../../../Desktop/1С-Битрикс/html-template/blank.html">Risus malesuada mi</a></li>
                                        <li><a href="../../../../../Desktop/1С-Битрикс/html-template/blank.html">Fusce tincidunt nisl nec</a></li>
                                        <li><a href="../../../../../Desktop/1С-Битрикс/html-template/blank.html">Curabitur plac orci mi stincidunt</a></li>
                                        <li class="last roundbottom"><a href="../../../../../Desktop/1С-Битрикс/html-template/blank.html">Nec lorem mattis</a></li>
                                    </ul>
                                </li>
                                <li class="last roundbottom"><a href="../../../../../Desktop/1С-Битрикс/html-template/blank.html">Page With Stuff On It</a></li>
                            </ul>
                        </li>
                        <li><a href="../../../../../Desktop/1С-Битрикс/html-template/faq.html" class="applyfont">FAQ</a></li>
                        <li><a href="../../../../../Desktop/1С-Битрикс/html-template/services-wide.html" class="applyfont">Services</a>
                            <ul>
                                <li><a href="../../../../../Desktop/1С-Битрикс/html-template/services-sidebar.html">Services Sidebar</a></li>
                                <li><a href="../../../../../Desktop/1С-Битрикс/html-template/services-wide.html">Services Wide Big Icons</a></li>
                                <li class="last roundbottom"><a href="../../../../../Desktop/1С-Битрикс/html-template/services-wide-small.html">Services Wide Small Icons</a></li>
                            </ul>
                        </li>
                        <li><a href="../../../../../Desktop/1С-Битрикс/html-template/blog-grid.html" class="applyfont">Blog</a>
                            <ul>
                                <li><a href="../../../../../Desktop/1С-Битрикс/html-template/blog-grid.html">Blog Style Grid</a></li>
                                <li><a href="../../../../../Desktop/1С-Битрикс/html-template/blog-grid-noimage.html">Blog Style Grid No Image</a></li>
                                <li><a href="../../../../../Desktop/1С-Битрикс/html-template/blog-list.html">Blog Style List</a></li>
                                <li class="last roundbottom"><a href="../../../../../Desktop/1С-Битрикс/html-template/blog-list-noimage.html">Blog Style List No Image</a></li>
                            </ul>

                        </li>
                        <li class="last"><a href="../../../../../Desktop/1С-Битрикс/html-template/contact-half.html" class="applyfont">Contact</a>
                            <ul>
                                <li><a href="../../../../../Desktop/1С-Битрикс/html-template/contact-half.html">Contact Style Halfed</a></li>
                                <li class="last roundbottom"><a href="../../../../../Desktop/1С-Битрикс/html-template/contact-wide.html">Contact Style Wide</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
                <!-- navigation end -->
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>

<!-- end top and main menu -->
<!-- start header alternate -->
<div class="header-alt">

    <div class="slide slide-roundabout bg1">
        <div class="containit ornament-right">
            <div class="roundaboutshadow">
                <h1 class="mb4">You can have a Bigger single  Roundabout here.</h1>
                <p class="mb20">Amazingly this IS compatible with all modern and current Browsers.</p>
                <!-- roundabout images targets, prettyphoto opens on click of the middle item -->

                <script type="text/javascript" charset="utf-8">
                    function roundaboutimage1(){  $.prettyPhoto.open('<?=SITE_TEMPLATE_PATH;?>/_include/images/showcase/showcase1.jpg', 'title', 'Some Brilliant Project'); }
                    function roundaboutimage2(){  $.prettyPhoto.open('<?=SITE_TEMPLATE_PATH;?>/_include/images/showcase/showcase2.jpg', 'title', 'Another One'); }
                    function roundaboutimage3(){  $.prettyPhoto.open('<?=SITE_TEMPLATE_PATH;?>/_include/images/showcase/showcase3.jpg', 'title', 'This is Insane'); }
                    function roundaboutimage4(){  $.prettyPhoto.open('<?=SITE_TEMPLATE_PATH;?>/_include/images/showcase/showcase4.jpg', 'title', 'Another Comment'); }
                    function roundaboutimage5(){  $.prettyPhoto.open('<?=SITE_TEMPLATE_PATH;?>/_include/images/showcase/showcase5.jpg', 'title', 'This roundabout Rules'); }
                    function roundaboutimage6(){  $.prettyPhoto.open('<?=SITE_TEMPLATE_PATH;?>/_include/images/showcase/showcase6.jpg', 'title', 'Awsome Commment'); }
                    function roundaboutimage7(){  $.prettyPhoto.open('<?=SITE_TEMPLATE_PATH;?>/_include/images/showcase/showcase7.jpg', 'title', 'And Another One'); }
                </script>
                <!-- the actual roundabout -->
                <ul id="roundabout">
                    <li id="roundaboutimage1"><a href="javascript:roundaboutimage1();"><img src="<?=SITE_TEMPLATE_PATH;?>/_include/images/showcase/roundabout/showcase1.jpg" alt="" /></a></li>
                    <li id="roundaboutimage2"><a href="javascript:roundaboutimage2();"><img src="<?=SITE_TEMPLATE_PATH;?>/_include/images/showcase/roundabout/showcase2.jpg" alt="" /></a></li>
                    <li id="roundaboutimage3"><a href="javascript:roundaboutimage3();"><img src="<?=SITE_TEMPLATE_PATH;?>/_include/images/showcase/roundabout/showcase3.jpg" alt="" /></a></li>
                    <li id="roundaboutimage4"><a href="javascript:roundaboutimage4();"><img src="<?=SITE_TEMPLATE_PATH;?>/_include/images/showcase/roundabout/showcase4.jpg" alt="" /></a></li>
                    <li id="roundaboutimage5"><a href="javascript:roundaboutimage5();"><img src="<?=SITE_TEMPLATE_PATH;?>/_include/images/showcase/roundabout/showcase1.jpg" alt="" /></a></li>
                    <li id="roundaboutimage6"><a href="javascript:roundaboutimage6();"><img src="<?=SITE_TEMPLATE_PATH;?>/_include/images/showcase/roundabout/showcase2.jpg" alt="" /></a></li>
                    <li id="roundaboutimage7"><a href="javascript:roundaboutimage7();"><img src="<?=SITE_TEMPLATE_PATH;?>/_include/images/showcase/roundabout/showcase3.jpg" alt="" /></a></li>
                </ul>
                <div id="filler"><!--  --></div>
            </div>
            <!-- start the roundabout with descriptions -->
            <script type="text/javascript">
                //<![CDATA[
                var descs = {
                    roundaboutimage1: 'Some text about the item <a href="#">a link</a> here. ',
                    roundaboutimage2: 'He has the look of a wise, fierce warrior.',
                    roundaboutimage3: 'Attention all mice: you&rsquo;ve been warned.',
                    roundaboutimage4: 'Some text about the item <a href="#">a link</a> here.',
                    roundaboutimage5: 'Introducing: the INCREDIBLE ROUNDABOUT!',
                    roundaboutimage6: 'Attention all mice: you&rsquo;ve been warned.',
                    roundaboutimage7: 'Yes you can have Video here if you want.'
                };
                // settings for first button, for each roundabout image one setting
                var linkone = {
                    roundaboutimage1: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
                    roundaboutimage2: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
                    roundaboutimage3: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
                    roundaboutimage4: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
                    roundaboutimage5: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
                    roundaboutimage6: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
                    roundaboutimage7: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>'
                };
                // settings for second button, for each roundabout image one setting
                var linktwo = {
                    roundaboutimage1: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Purchase This Now</span></a>',
                    roundaboutimage2: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Get it at Themeforest</span></a>',
                    roundaboutimage3: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Purchase This Now</span></a>',
                    roundaboutimage4: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Get it at Themeforest</span></a>',
                    roundaboutimage5: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Do Something Now</span></a>',
                    roundaboutimage6: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Purchase This Now</span></a>',
                    roundaboutimage7: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Cufon Buttons are Sexy</span></a>'
                };
                // what happens on focus and on blur
                $('#roundabout li').focus(function() {
                    var useLinkone = (typeof linkone[$(this).attr('id')] != 'undefined') ? linkone[$(this).attr('id')] : '';
                    $('#roundaboutlinkone').html(useLinkone).fadeIn(200);
                    var useLinktwo = (typeof linktwo[$(this).attr('id')] != 'undefined') ? linktwo[$(this).attr('id')] : '';
                    $('#roundaboutlinktwo').html(useLinktwo).fadeIn(200);
                    var useText = (typeof descs[$(this).attr('id')] != 'undefined') ? descs[$(this).attr('id')] : '';
                    $('#roundaboutdescription').html(useText).fadeIn(200);
                    Cufon.replace('#roundaboutdescription, #roundaboutlinkone,  #roundaboutlinktwo', { hover: true, textShadow: '1px 1px 0 #ffffff', fontFamily: 'Museo' });
                }).blur(function() {
                    $('#roundaboutlinkone').fadeOut(200);
                    $('#roundaboutlinktwo').fadeOut(200);
                    $('#roundaboutdescription').fadeOut(200);
                });

                $(document).ready(function() {
                    var interval;
                    $('#roundabout')
                        .roundabout({
                            shape: 'lazySusan',
                            easing: 'swing',
                            minOpacity: 1, // 1 fully visible, 0 invisible
                            minScale: 0.5, // tiny!
                            duration: 400,
                            btnNext: '#roundaboutnext',
                            btnPrev: '#roundaboutprevious',
                            clickToFocus: true
                        });
                });
                function startAutoPlay() {
                    return setInterval(function() {
                        $('#roundabout').roundabout_animateToNextChild();
                    }, 3000);
                }
                //]]>
            </script>
        </div>

    </div>

</div>
<!-- end header alternate-->

<!-- start main content -->
<div class="main-content pt-alt">
    <div class="containit">

        <!-- start display roundabout description and links -->
        <div class="boxed-harder clearfix roundaboutdescription roundabout-desclinkbox">
            <div class="fl roundabout-arrows">

                <img src="<?=SITE_TEMPLATE_PATH;?>/_include/images/arrow-next-smaller.png" alt="" />
            </div>
            <div class="fl roundabout-desc"><h1 id="roundaboutdescription"></h1></div>
            <div class="fr roundabout-link clearfix"><div id="roundaboutlinkone" class="fl"></div><div id="roundaboutlinktwo" class="fl"></div></div>
        </div>
        <!-- end display roundabout description and links -->
