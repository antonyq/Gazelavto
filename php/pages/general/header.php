<?php localize($_GET["lang"], "header"); ?>

<div class="header">
    <div class="header-top row">
        <div class="header-address col-lg-4 col-xs-12">
            <?php echo local_company_name ?>
            <?php echo local_city; ?>
            <?php echo local_street; ?>
        </div>
        <a class="col-lg-4 col-xs-12" href="index.php">
            <div class="logo-wrapper">
                <img src="../../img/general/logo4.png">
                <div class="logo"></div>
            </div>
        </a>
        <div class="header-contacts col-lg-4 col-xs-12">
            <div class="contacts-phones">
                <ul>
                    <li><?php echo local_phone1; ?></li> <br>
                    <li><?php echo local_phone2; ?></li> <br>
                </ul>
            </div>
            <div class="lang col-lg-1 col-xs-12"><span>UA / RU</span></div>
        </div>
    </div>
    <div class="header-bottom topic-title row">
        <a class="menu-item col-xs-12 col-sm-12 col-md-2 col-lg-2" href="index.php"><?php echo local_menu_main; ?></a>
        <ul class="menu-item services col-xs-12 col-sm-12 col-md-2 col-lg-2 ">
            <?php echo local_menu_services; ?>
            <li><a href='article.php?id=repair_lorries'><?php echo local_lorries; ?></a></li>
            <li><a href='article.php?id=repair_cars'><?php echo local_cars; ?></a></li>
        </ul>
        <a class="menu-item col-xs-12 col-sm-12 col-md-2 col-lg-2" href="jobs.php"><?php echo local_menu_jobs; ?></a>
        <ul class="menu-item prices col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <a href="price.php"><?php echo local_menu_price; ?></a>
            <?php
            $xml_file = file_get_contents("../../localizable/".LANG."/price.xml");
            $xml_data = new SimpleXMLElement($xml_file);
            foreach($xml_data->xpath("/texts/tables")[0]->children() as $price_item){
                if (strstr($price_item->getName(), "table")){
                    $xml_name = explode("table_", $price_item->getName())[1];
                    $name = $xml_data->xpath("/texts/tables/table_".$xml_name."/table_name")[0];
                    echo "<li><a href='price.php?item=".$xml_name."'>".$name."</a></li>";
                }
            }
            ?>
        </ul>
        <a class="menu-item col-xs-12 col-sm-12 col-md-1 col-lg-1" href="blog.php"><?php echo local_menu_blog; ?></a>
        <a class="menu-item col-xs-12 col-sm-12 col-md-2 col-lg-2" href="contacts.php"><?php echo local_menu_contacts; ?></a>
    </div>
</div>