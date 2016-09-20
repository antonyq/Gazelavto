<?php
include($_SERVER["DOCUMENT_ROOT"]."/gazelavto/php/scripts/default.php");
if (is_null(strstr($_GET["id"], "lang"))) localize($_GET["lang"], $_GET["id"]);
else localize($_GET["lang"], explode("?lang", $_GET["id"])[0]);
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
    <link rel="stylesheet" href="../../css/pages/article.css">

    <script type="text/javascript" src="../../js/general/default.js"></script>
    <script type="text/javascript" src="../../js/repair.js"></script>
</head>

<body>
<div class="container-fluid">
    <?php
    include("general/header.php");

    echo "<h1>".local_title."</h1>";
    echo "<div class='article-text'>".local_text."</div>";


    include("general/footer.php");
    ?>
</div>
</body>
</html>