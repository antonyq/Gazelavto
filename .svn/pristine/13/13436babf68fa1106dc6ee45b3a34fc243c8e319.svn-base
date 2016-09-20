<?php
function localize($lang, $page){
    if (!is_null($lang)) define("LANG", $lang);
    elseif (!defined("LANG")) define("LANG", "ru");

    $xml_file = file_get_contents($_SERVER["DOCUMENT_ROOT"]."/gazelavto/localizable/".LANG."/".$page.".xml");
    $xml_data = new SimpleXMLElement($xml_file);

    foreach($xml_data->children() as $text){
        if (!startsWith($text->getName(), "meta")) define("local_".$text->getName(), "<span>".$text."</span>");
        else define("local_".$text->getName(), $text);
    }
}

function echoMeta($title, $description, $keywords){
    echo "<title>".$title."</title>";
    echo "<meta name='description' content='".$description."'/>";
    echo "<meta name='keywords' content='".$keywords."'/>";
    echo "<meta charset=utf-8>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
}

function startsWith($haystack, $needle) {
    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== false;
}

function endsWith($haystack, $needle) {
    return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== false);
}
?>