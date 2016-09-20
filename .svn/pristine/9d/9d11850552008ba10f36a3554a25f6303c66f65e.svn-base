<?php
include($_SERVER["DOCUMENT_ROOT"]."/gazelavto/php/scripts/default.php");
localize($_GET["lang"], "services");
?>

<!DOCTYPE html>
<html lang=<?php echo '"'.LANG.'"'; ?>>
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
    <link rel="stylesheet" href="../../css/pages/services.css">

    <script type="text/javascript" src="../../js/general/default.js"></script>
</head>

<body>
<div class="container-fluid">
    <?php include("general/header.php"); ?>

<!--    add loc-->
    <div class="topic-title services"><?php echo local_topic_title; ?></div>

    <div class='text1'><?php echo local_text1; ?></div>

<!--    lists wrapper gray-->
    <div class='list-wrapper'>
        <div class='row service-row'>
            <a class='service-block col-xs-12 col-sm-12 col-md-6 col-lg-6' id='service-block1' href='article.php?id=repair_lorries'>
                <div class='service-block-wrapper'>
                    <div class='caption'><?php echo local_trucks_title; ?></div>
                    <img class='content' src='../../img/services/services_truck.png'><br>
<!--                    <a class='more' href='article.php?id=repair_lorries'>--><?php //echo local_more; ?><!--</a>-->
                </div>
            </a>
            <a class='service-block col-xs-12 col-sm-12 col-md-6 col-lg-6' id='service-block2' href='article.php?id=repair_cars'>
                <div class='service-block-wrapper'>
                    <div class='caption'><?php echo local_cars_title; ?></div>
                    <img class='content' src='../../img/services/car.png'><br>
<!--                    <a class='more' href='article.php?id=repair_cars'>--><?php //echo local_more; ?><!--</a>-->
                </div>
            </a>
        </div>
    </div>

    <div class="gray-list-wrapper">
        <div class='services-title'><?php echo local_list1_title; ?></div>
        <?php
        $xml_file = file_get_contents($_SERVER["DOCUMENT_ROOT"]."/Gazelavto/site/localizable/".LANG."/services.xml");
        $xml_data = new SimpleXMLElement($xml_file);
        ?>
        <ul class="list">
            <li><a href="article.php?id=article7"><span><?php echo $xml_data->xpath("/texts/list1/item1")[0]; ?></span></a></li>
            <li><a href="article.php?id=article5"><span><?php echo $xml_data->xpath("/texts/list1/item2")[0]; ?></span></a></li>
            <li><a href="article.php?id=article6"><span><?php echo $xml_data->xpath("/texts/list1/item3")[0]; ?></span></a></li>
            <li><span><?php echo $xml_data->xpath("/texts/list1/item4")[0]; ?></span></li>
            <li><span><?php echo $xml_data->xpath("/texts/list1/item5")[0]; ?></span></a></li>
            <li><span><?php echo $xml_data->xpath("/texts/list1/item6")[0]; ?></span></li>
            <li><span><?php echo $xml_data->xpath("/texts/list1/item7")[0]; ?></span></li>
            <li><span><?php echo $xml_data->xpath("/texts/list1/item8")[0]; ?></span></li>
        </ul>
    </div>
    <div class='text2'><?php echo local_text2; ?></div>

    <div class='text3_title services-title'><?php echo local_text3_title; ?></div>
    <div class='text3'><?php echo local_text3; ?></div>

    <?php include("general/footer.php"); ?>
</div>
</body>
</html>