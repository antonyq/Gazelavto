<?php
include($_SERVER["DOCUMENT_ROOT"]."/gazelavto/php/scripts/default.php");
localize($_GET["lang"], "blog");
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
    <link rel="stylesheet" href="../../css/pages/blog.css">

    <script type="text/javascript" src="../../js/general/default.js"></script>
    <script type="text/javascript" src="../../js/blog.js"></script>
</head>

<body>
<div class="container-fluid">
    <?php
    include("general/header.php");
    localize(LANG, "blog");

    $xml_articles = glob("../../localizable/".LANG."/article*.xml");
    echo "<div class='row'><div class='articles col-xs-12 col-sm-12 col-md-10 col-lg-10'>";
    foreach($xml_articles as $xml_article){
        $xml_file = file_get_contents($xml_article);
        $xml_data = new SimpleXMLElement($xml_file);
        echo "<div class='article'>";
        echo "<div class='article-title'><a href='article.php?id=article".$xml_data->xpath("/texts/id")[0]."'>".$xml_data->xpath("/texts/title")[0]."</a></div>";
        echo "<div class='article-text'><img src='../../img/article/icon".$xml_data->xpath("/texts/id")[0].".png'>".$xml_data->xpath("/texts/text")[0]."</div>";
        echo "<div class='more'><a href='article.php?id=article".$xml_data->xpath("/texts/id")[0]."'>".local_more."</a></div>";
        echo "</div>";
    }
    echo "</div>";
    echo "<div class='tags-area col-xs-12 col-sm-12 col-md-2 col-lg-2'>";

    echo"</div></div>";

    include("general/footer.php");
    ?>
</div>
</body>
</html>