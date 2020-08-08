<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

require_once 'scssphp/scss.inc.php';

use ScssPhp\ScssPhp\Compiler;

$scss = new Compiler();

$result = $scss->compile('@import"sass/2.scss"');

file_put_contents("css/2.css", $result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 2</title>
    <link href="./css/contact-form-style.css" rel="stylesheet" />
    <link href="./css/featherlight.min.css" rel="stylesheet" />
    <link href="./css/spsimpleportfolio.css" rel="stylesheet" />

    <script src="./js/jquery.min.js?1e174b993e3211aa87f92270aed62e25"></script>
    <script src="./js/jquery-noconflict.js?1e174b993e3211aa87f92270aed62e25"></script>

    <script src="./js/jquery.shuffle.modernizr.min.js"></script>
    <script src="./js/featherlight.min.js"></script>
    <script src="./js/spsimpleportfolio.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOswald:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="./css/2.css" />

    <style>
        #wrap-contact-form98 .sscf-popup,
        #wrap-contact-form98 .rf_submit {
            border-radius: 25px;
        }

        #wrap-contact-form98 .rf_submit {
            background: #c5a47e;
        }

        #wrap-contact-form98 .rf_submit:hover {
            background: #cc9f6b;
        }

        #wrap-contact-form98 .sscf-popup {
            background: #c5a47e;
        }

        #wrap-contact-form98 .sscf-popup:hover {
            background: #cc9f6b;
        }

        #wrap-contact-form98 .success {
            color: #cc9f6b !important;
        }
    </style>

</head>

<body>
    <?php include '2-content.php' ?>

    <!-- SCRIPTS -->


    <script src="/js/interface.js" type="text/javascript"></script>

</body>

</html>