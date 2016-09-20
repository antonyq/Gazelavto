<?php
include($_SERVER["DOCUMENT_ROOT"]."/gazelavto/php/scripts/default.php");
localize($_GET["lang"], "price");
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
    <link rel="stylesheet" href="../../css/pages/price.css">

    <script type="text/javascript" src="../../js/general/default.js"></script>
</head>

<body>
<div class="container-fluid">
    <?php
    include("general/header.php");
    echo "<div class='price-title topic-title'>".local_price_title."</div>";

    echo "<div class='price-text'>".local_price_text."</div>";

    $xml_file = file_get_contents($_SERVER["DOCUMENT_ROOT"]."/gazelavto/localizable/".LANG."/price.xml");
    $xml_data = new SimpleXMLElement($xml_file);

    foreach($xml_data->xpath("/texts/tables")[0]->children() as $table){
        if (!is_null($_GET["item"])){
            preg_match("/(cars|lorries)/", $_GET["item"], $getItem);
            if ($table->getName() == "table_".$getItem[0]){
                echo "<table class='table table-bordered'>";
                foreach($table->children() as $section){
                    if ($section->getName() == 'table_name') {
                        echo "<caption>".$section."</caption>";
                        echo "<tr><td><i>".$xml_data->xpath("/texts/table_item_name")[0]."</i></td><td><i>".$xml_data->xpath("/texts/table_item_value")[0]."</i></td></tr>";
                    } elseif ($section->getName() == 'section'){
                        foreach($section->children() as $item){
                            if ($item->getName() == 'subtitle') echo "<tr><td><b>".$item."</b></td></tr>";
                            elseif ($item->getName() == 'record'){
                                foreach($item->children() as $kvp){
                                    if ($kvp->getName() == 'name') echo "<tr><td>".$kvp."</td>";
                                    elseif ($kvp->getName() == 'price') echo "<td>".$kvp."</td></tr>";
                                }
                            }
                        }
                    }
                }
                break;
            }
        } else {
            echo "<table class='table table-bordered'>";
            foreach($table->children() as $section){
                if ($section->getName() == 'table_name') {
                    echo "<caption>".$section."</caption>";
                    echo "<tr><td><i>".$xml_data->xpath("/texts/table_item_name")[0]."</i></td><td><i>".$xml_data->xpath("/texts/table_item_value")[0]."</i></td></tr>";
                } elseif ($section->getName() == 'section'){
                    foreach($section->children() as $item){
                        if ($item->getName() == 'subtitle') echo "<tr><td><b>".$item."</b></td></tr>";
                        elseif ($item->getName() == 'record'){
                            foreach($item->children() as $kvp){
                                if ($kvp->getName() == 'name') echo "<tr><td>".$kvp."</td>";
                                elseif ($kvp->getName() == 'price') echo "<td>".$kvp."</td></tr>";
                            }
                        }
                    }
                }
            }
        }
    }
    echo "</table><br>";

    include("general/footer.php");
    ?>
</div>
</body>
</html>