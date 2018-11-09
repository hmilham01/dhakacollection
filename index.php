<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/data.php"); ?>
        
<!DOCTYPE html>
<html>
    <head>
        <title> <?php echo $websiteTitle; ?> </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no"/>
        <style> <?php require_once($_SERVER['DOCUMENT_ROOT'] . "/subDirectories/index.css"); ?> </style>
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Bai+Jamjuree|Charmonman|Lobster|Niramit|Shadows+Into+Light" rel="stylesheet">
    </head>
    <body>
        <?php
            require_once("head.php");
            require_once("body.php");
            require_once("foot.php");
        ?>
    </body>
</html>