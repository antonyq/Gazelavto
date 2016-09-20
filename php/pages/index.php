<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/gazelavto/php/scripts/default.php");
localize($_GET["lang"], "index");
?>

<!DOCTYPE html>
<html lang=<?php echo '"'.$_GET["lang"].'"'; ?>>
<head>
    <?php echoMeta(local_meta_title, local_meta_description, local_meta_keywords); ?>

    <!-- external libs-->
    <script type="text/javascript" src="../../js/general/jquery-3.0.0.min.js"></script>

    <link rel="stylesheet" href="../../css/general/normalize.css">

    <link rel="stylesheet" href="../../css/general/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/general/bootstrap-theme.min.css">
    <script type="text/javascript" src="../../js/general/bootstrap.min.js"></script>

    <!-- internal scripts-->
    <link href="../../img/general/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" href="../../css/general/default.css">
    <link rel="stylesheet" href="../../css/pages/index.css">

    <script type="text/javascript" src="../../js/general/default.js"></script>
    <script type="text/javascript" src="../../js/general/index.js"></script>
</head>

    <body>
        <div class="container-fluid">
            <?php require_once("general/header.php"); ?>

            <div id="slider1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item active"><img src="../../img/slider/pictures/smart-car.jpg"></div>
                    <div class="item"><img src="../../img/slider/pictures/orange-lamborghini-gallardo.jpg"></div>
                    <div class="item"><img src="../../img/slider/pictures/gazel.jpg"></div>
                </div>

                <a class="left carousel-control" href="#slider1" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#slider1" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="services-content row">
                <div class="services-title topic-title col-xs-12 col-sm-12 col-md-12 col-lg-12"><h1><?php echo local_services_title; ?></h1></div>
                <div class="services-text"><?php echo local_cars_text; ?></div>
                <div class="services-buttons row">
                    <div class="services-button col-xs-12 col-sm-6 col-md-6 col-lg-6" id="services-button1"><div class="services-button-wrapper fadein"><a href="article.php?id=repair_lorries" class="title"><?php echo local_lorries_title; ?></a></div></div>
                    <div class="services-button col-xs-12 col-sm-6 col-md-6 col-lg-6" id="services-button2"><div class="services-button-wrapper fadein"><a href="article.php?id=repair_cars" class="title"><?php echo local_cars_title; ?></a></div></div>
                </div>
            </div>

            <div class="jobs row">
                <div class="jobs-title topic-title  col-xs-12 col-sm-12 col-md-6 col-lg-12"><h2><?php echo local_jobs_title; ?></h2></div>
                <a class="job col-xs-12 col-sm-6 col-md-6 col-lg-2" href="article.php?id=article2">
                    <div class="job-wrapper">
                        <img src="../../img/icons/engine_repair.png"> <br>
                        <?php echo local_job1; ?>
                    </div>
                </a>
                <a class="job col-xs-12 col-sm-6 col-md-6 col-lg-2" href="article.php?id=article3">
                    <div class="job-wrapper">
                        <img src="../../img/icons/engine_diagnos.png"> <br>
                        <?php echo local_job2; ?>
                    </div>
                </a>
                <a class="job col-xs-12 col-sm-6 col-md-6 col-lg-2" href="article.php?id=article4">
                    <div class="job-wrapper">
                        <img src="../../img/icons/chassis.png"> <br>
                        <?php echo local_job3; ?>
                    </div>
                </a>
                <a class="job col-xs-12 col-sm-6 col-md-6 col-lg-2" href="article.php?id=article5">
                    <div class="job-wrapper">
                        <img src="../../img/icons/reductor.png"> <br>
                        <?php echo local_job4; ?>
                    </div>
                </a>
                <a class="job col-xs-12 col-sm-6 col-md-6 col-lg-2"  href="article.php?id=article6">
                    <div class="job-wrapper">
                        <img src="../../img/icons/auto_electro.png"> <br>
                        <?php echo local_job5; ?>
                    </div>
                </a>
                <a class="job col-xs-12 col-sm-6 col-md-6 col-lg-2" href="jobs.php">
                    <div class="job-wrapper">
                        <img src="../../img/icons/settings-icon.png"> <br>
                        <?php echo local_job6; ?>
                    </div>
                </a>
            </div>

            <div class="advantages">
                <div class="advantages-title topic-title"><?php echo local_advantages_title; ?></div>
                <div class="row">
                    <div class="advantage-block col-xs-12 col-sm-6 col-md-6 col-lg-6" id="advantage-block1">
                        <div class="advantage-title"><ul><li><?php echo local_advantages_section1; ?></li></ul></div>
                        <ul class="advantages-list">
                            <li><?php echo local_advantages_section1_item1; ?></li>
                            <li><?php echo local_advantages_section1_item2; ?></li>
                        </ul>
                    </div>
                    <div class="advantage-block col-xs-12 col-sm-6 col-md-6 col-lg-6" id="advantage-block2">
                        <div class="advantage-title"><ul><li><?php echo local_advantages_section2; ?></li></ul></div>
                        <ul class="advantages-list">
                            <li><?php echo local_advantages_section2_item1; ?></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="advantage-block col-xs-12 col-sm-6 col-md-6 col-lg-6" id="advantage-block3">
                        <div class="advantage-title"><ul><li><?php echo local_advantages_section3; ?></li></ul></div>
                        <ul class="advantages-list">
                            <li><?php echo local_advantages_section3_item1; ?></li>
                        </ul>
                    </div>
                    <div class="advantage-block col-xs-12 col-sm-6 col-md-6 col-lg-6" id="advantage-block4">
                        <div class="advantage-title"><ul><li><?php echo local_advantages_section4; ?></li></ul></div>
                        <ul class="advantages-list">
                            <li><?php echo local_advantages_section4_item1; ?></li>
                            <li><?php echo local_advantages_section4_item2; ?></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="company">
                <div class="company-title topic-title"><?php echo local_about_company; ?></div>
                <div class="company-content row">
                    <div class="company-info col-xs-12 col-sm-12 col-md-9 col-lg-9">
                        <div class="company-text1"><?php echo local_company_text1; ?></div>
                        <div class="add-text">
                            <div class="company-text1_5"><?php echo local_company_text1_5; ?></div>
                            <div class="company-list">
                                <ul>
                                    <li><?php echo local_list_item1; ?></li>
                                    <li><?php echo local_list_item2; ?></li>
                                    <li><?php echo local_list_item3; ?></li>
                                    <li><?php echo local_list_item4; ?></li>
                                </ul>
                            </div>

                            <div class="company-text2"><?php echo local_company_text2; ?></div>
                        </div>
                        <div class="drop-down-button" id="expand"><?php echo local_expand; ?></div>
                        <div class="drop-down-button" id="cut-down"><?php echo local_cut_down; ?></div>
                    </div>
                    <div class="timetable col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="timetable-wrapper">
                            <div class="timetable-title"><?php echo local_timetable_title; ?></div>
                            <div class="timetable-time"><?php echo local_timetable_time; ?></div>
                            <div class="timetable-additional"><?php echo local_timetable_additional; ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider2-title topic-title"><?php echo local_slider_title; ?></div>
            <div id="slider2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="../../img/slider/logo/car_models_1.png" alt="model1">
                    </div>
                    <div class="item">
                        <img src="../../img/slider/logo/car_models_2.png" alt="model2">
                    </div>
                    <div class="item">
                        <img src="../../img/slider/logo/car_models_3.png" alt="model3">
                    </div>
                    <div class="item">
                        <img src="../../img/slider/logo/car_models_4.png" alt="model4">
                    </div>
                </div>

                <a class="left carousel-control" href="#slider2" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#slider2" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <?php require_once("general/footer.php"); ?>
        </div>
    </body>
</html>
