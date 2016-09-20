<?php localize($_GET["lang"], "footer"); ?>

<div class="footer container-fluid">
    <div class="footer-top row">
        <div class="wrapper footer-contacts col-lg-4 col-xs-12">
            <div class="wrapper footer-top-wrapper">
                <div class="title"><?php echo local_contacts_title; ?></div>
                <div class="footer-address">
                    <?php echo local_city; ?>
                    <?php echo local_street; ?>
                </div>
                <div class="map-link"><a href="https://www.google.com/maps/d/viewer?mid=1nGezbrzd0cfHOLo32pqNEnMq2Jw"><?php echo local_map; ?></a></div>
                <div class="footer-phones">
                    <ul>
                        <li><?php echo local_phone1; ?></li> <br>
                        <li><?php echo local_phone2; ?></li>
                    </ul>
                </div>
                <div class="footer-email">
                    <span>email: <a href="https://www.ukr.net"><?php echo local_email; ?></a></span>
                </div>
            </div>
        </div>
        <div class="footer-services col-lg-4 col-xs-12">
            <div class="wrapper footer-top-wrapper footer-services-wrapper">
                <div class="title"><?php echo local_services; ?></div>
                <div class="footer-lorries"><a href="article.php?id=repair_lorries"><?php echo local_lorries; ?></a></div>
                <div class="footer-cars"><a href="article.php?id=repair_cars"><?php echo local_cars; ?></a></div>
            </div>
        </div>
        <div class="footer-jobs col-lg-4 col-xs-12">
            <div class="wrapper footer-top-wrapper">
                <div class="title"><?php echo local_jobs; ?></div>
                <div class="footer-job"><a href="article.php?id=article2"><?php echo local_jobs1; ?></a></div>
                <div class="footer-job"><a href="article.php?id=article4"><?php echo local_jobs2; ?></a></div>
                <div class="footer-job"><a href="article.php?id=article3"><?php echo local_jobs3; ?></a></div>
                <div class="footer-job"><a href="article.php?id=article5"><?php echo local_jobs4; ?></a></div>
                <div class="footer-job"><a href="article.php?id=article6"><?php echo local_jobs5; ?></a></div>
                <div class="footer-job"><a href="jobs.php"><?php echo local_jobs6; ?></a></div>
            </div>
        </div>
    </div>
    <div class="footer-bottom row">
<!--        <div class="footer-copyright col-xs-12 col-lg-6">-->
<!--            <div class="wrapper left-bottom-wrapper">--><?php //echo local_copyright; ?><!--</div>-->
<!--        </div>-->
        <div class="footer-info col-xs-12 col-lg-12">
            <div class="wrapper right-bottom-wrapper"><?php echo local_info; ?></div>
        </div>
    </div>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-80780321-1', 'auto');
        ga('send', 'pageview');
    </script>
</div>