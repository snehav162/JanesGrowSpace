<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <!--  <script src="https://use.fontawesome.com/6a71565c22.js"></script>-->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/big.css" />
    <link rel="stylesheet" href="css/form.css" />

    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Special+Elite'>
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Ubuntu'>
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Libre+Baskerville'>
    <style>
        h1, h2, h3, p, td, tr, th {
            font-family: 'Ubuntu', sans-serif;
        }

        input:required, input:optional, textarea:optional, label {
            font-family: 'Special Elite', sans-serif;
        }
    </style>
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
    <header>
        <h1><a href="index.php"><i class="logo fa fa-home"></i> Dan Jack | Web Examples &amp; Research Articles</a></h1>
        <nav id="cssmenu">
            <ul>
                <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> WEB120 Portal</span></a></li>
                <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> Home</span></a></li>
                <li><a href="flexbox.php"><span>Flexbox</span></a></li>
                <li><a href="galleries.php"><span>Galleries</span></a></li>
                <!--        Drop down nav-->
                <li><a href="google.php"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
                    <ul>
                        <li><a href="calendar.php"><span>Calendar</span></a></li>
                        <li><a href="map.php"><span>Map</span></a></li>
                        <li><a href="youtube.php"><span>YouTube</span></a></li>
                    </ul>
                </li>
                <!--        End drop down -->
                <li><a href="shoppingcarts.php"><span>Shopping Carts</span></a></li>
                <li><a href="siteapp.php"><span>Site vs App</span></a></li>
                <li><a href="webcam.php"><span>Web Cam</span></a></li>
            </ul>
        </nav>
    </header>
    <!--  end header file here -->