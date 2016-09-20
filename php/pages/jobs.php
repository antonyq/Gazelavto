<?php
include($_SERVER["DOCUMENT_ROOT"]."/gazelavto/php/scripts/default.php");
localize($_GET["lang"], "jobs");
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
    <link rel="stylesheet" href="../../css/pages/jobs.css">

    <script type="text/javascript" src="../../js/general/default.js"></script>
</head>

<body>
<div class="container-fluid">
    <?php
    include("general/header.php");

    echo "<div class='jobs-title'><h1>".local_jobs_title."</h1></div>";
    echo "<div class='text-header'>".local_text_header."</div>";

    $xml_file = file_get_contents($_SERVER["DOCUMENT_ROOT"]."/gazelavto/localizable/".LANG."/jobs.xml");
    $xml_data = new SimpleXMLElement($xml_file);
    $jobs = $xml_data->xpath("/texts/jobs")[0]->children();
    $jobs_count = count($jobs);

    echo "<div class='jobs'><div class='row'>";
    for($i=0; $i < $jobs_count; $i++){
        if (!($i % (int)($jobs_count / 3))) echo "</ul></div><div class='cell col-xs-12 col-sm-12 col-md-4 col-lg-4'><ul>";
        if ($i < 6) {
            echo "<li><a href='article.php?id=article".($i + 2)."'>".$jobs[$i]."</a></li>";
        } else {
            echo "<li><a href='article.php?id=article1'>".$jobs[$i]."</a></li>";
        }
    }
    echo "</ul></div></div></div>";

    echo "<div class='text-footer'>".local_text_footer."</div>";
    ?>

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

    <?php include("general/footer.php"); ?>
</div>
</body>
</html>