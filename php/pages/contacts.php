<?php
include($_SERVER["DOCUMENT_ROOT"]."/gazelavto/php/scripts/default.php");
localize($_GET["lang"], "contacts");
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
    <link rel="stylesheet" href="../../css/pages/contacts.css">

    <script type="text/javascript" src="../../js/general/default.js"></script>
</head>

<body>
<div class="container-fluid">
    <?php
    include("general/header.php");
    localize($_GET["lang"], "contacts");
    ?>

    <div class="contacts-wrapper row">
        <div class="img-wrapper col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <img class="map-image" src="../../img/map/map.png"> <br>
            <a href="https://www.google.com/maps/d/viewer?mid=1nGezbrzd0cfHOLo32pqNEnMq2Jw" target="_blank"><?php echo local_look_map; ?></a>
        </div>
        <div class="texts col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <div class="timetable">
                <div class="timetable-title"><?php echo local_timetable_title; ?></div>
                <div class="timetable-time"><?php echo local_timetable_time; ?></div>
                <div class="timetable-additional"><?php echo local_timetable_additional; ?></div>
            </div>

            <form class="contact-form">
                <div class="row">
                    <div class="description col-xs-12 col-sm-12 col-md-12 col-lg-6"><?php echo local_name; ?></div>
                    <input class="col-xs-12 col-sm-12 col-md-6 col-lg-6" required name="feedback_name">
                </div>
                <div class="row">
                    <div class="description col-xs-12 col-sm-12 col-md-12 col-lg-6"><?php echo local_mail; ?></div>
                    <input class="col-xs-12 col-sm-12 col-md-6 col-lg-6" name="feedback_mail">
                </div>
                <div class="row">
                    <div class="description col-xs-12 col-sm-12 col-md-12 col-lg-6"><?php echo local_phone; ?></div>
                    <input class="col-xs-12 col-sm-12 col-md-6 col-lg-6" required name="feedback_phone">
                </div>
                <div class="row">
                    <div class="description col-xs-12 col-sm-12 col-md-12 col-lg-6"><?php echo local_message; ?></div>
                    <textarea class="col-xs-12 col-sm-12 col-md-6 col-lg-6" required name="feedback_message"></textarea> <br>
                    <div class="submit"><?php echo local_submit; ?></div>
                </div>
            </form>

            <script>
                window.onload = function () {
                    document.getElementsByClassName('submit')[0].addEventListener('click', function () {
                        var http = new XMLHttpRequest();
                        var form = document.getElementsByClassName('contact-form')[0];
                        var formData = [
                            form.feedback_name.value,
                            form.feedback_mail.value,
                            form.feedback_phone.value,
                            form.feedback_message.value
                        ];
                        for(form of formData){
                            if (hasPHPInsights(form)){
                                alert("Incorrect data input");
                                throw new Error();
                            }
                        }
                        event.preventDefault();
                        http.open("POST", "../scripts/feedback.php", true);
                        http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        http.send("fb-name=" + formData[0] +
                            "&fb-mail=" + formData[1] +
                            "&fb-phone=" + formData[2] +
                            "&fb-message=" + formData[3]);
                        http.onerror = alert('Извините, данные не были переданы');
                    }, false);
                }
            </script>
        </div>
    </div>

    <?php include("general/footer.php"); ?>
</div>
</body>
</html>