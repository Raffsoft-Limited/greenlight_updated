<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo ucwords(str_replace('-', ' ', basename($_SERVER['SCRIPT_FILENAME'], '.php'))); ?></title>
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" >
    <link href="https://fonts.googleapis.com/css?family=Heebo:300,400" rel="stylesheet">
    <link rel="stylesheet" href="css/faq.css?sva" />
    <script src="js/faq.js"></script>
    <style type="text/css"> a{font-weight: bolder; } .br-20{border-radius: 20px; margin-right: 20px;} </style>
</head>

<body>

    <nav class="border-bottom">
        <div class="uk-container">
            <div data-uk-navbar>
                <!-- <div class="uk-navbar-left">
                    <a class="uk-navbar-item uk-logo" href="./#"><img src="images/logo.png" style="width: 180px"></a>
                </div> -->
                <div class="uk-navbar-center">
    
                    <div class="uk-navbar-item uk-visible@m">
                        <a href="./#" class="uk-button uk-button-primary br-20">Home</a>
                        <a href="./b/signin" class="uk-button uk-button-primary br-20">Sign In</a>
                        <a href="./b/signup" class="uk-button uk-button-primary br-20">Sign Up</a>
                        <a href="how-to-use-colabo" class="uk-button uk-button-primary br-20">How to use colabo</a>
                        <a href="contact-us" class="uk-button uk-button-primary br-20">Contact Us</a>
                    </div>
    
                    <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas" data-uk-navbar-toggle-icon data-uk-toggle></a>
                </div>
            </div>
        </div>
    </nav>