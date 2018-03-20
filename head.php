<?php
@session_start();
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>PICKEM</title>
    <meta name="description" content="The HTML5 Herald">
   <!--SOCIAL TAGS -->
   <!--FB-->
   <meta name="author" content="SitePoint">
   <meta property="og:title" content="European Travel Destinations">
   <meta property="og:description" content="Offering tour packages for individuals or groups.">
   <meta property="og:image" content="http://euro-travel-example.com/thumbnail.jpg">
   <meta property="og:url" content="http://euro-travel-example.com/index.htm">
   <!-- TWITTER -->
   <meta name="twitter:title" content="European Travel Destinations ">
   <meta name="twitter:description" content=" Offering tour packages for individuals or groups.">
   <meta name="twitter:image" content=" http://euro-travel-example.com/thumbnail.jpg">
   <meta name="twitter:card" content="summary_large_image">
   <!--/ END SOCIAL TAGS -->
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <!-- Optional theme -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
   <link rel="stylesheet" href="../css/style.css">
    <!--   JAVASCRIPT   -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
    <script src="https://npmcdn.com/bootstrap@4.0.0-alpha.5/dist/js/bootstrap.min.js"></script>
    <?PHP
    require_once($_SERVER['DOCUMENT_ROOT'] . '/config/db.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/config/config.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/app/class/Users.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/app/functions.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/app/navbarTop.php');
    require_once ('class/functions.php');
    require_once('navbarTop.php');
    require_once('../css/appstyle.php');
    /*require_once($_SERVER['DOCUMENT_ROOT'] . '/src/footer.php')*/
    ?>
</head>
<body>