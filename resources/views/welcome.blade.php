<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>e-learning</title>

        <!-- favicon -->
        <link rel="shortcut icon" href="img/logos/favicon.png" />
        <link rel="apple-touch-icon" href="img/logos/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="img/logos/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="img/logos/apple-touch-icon-114x114.png" />

        <!-- plugins -->
        <link rel="stylesheet" href="css/plugins.css" />

        <!-- search css -->
        <link rel="stylesheet" href="search/search.css" />

        <!-- quform css -->
        <link rel="stylesheet" href="quform/css/base.css">

        <!-- core style css -->
        <link href="css/styles.css" rel="stylesheet" />

       @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
        <div id="app">
            <app/>
        </div>

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- popper js -->
        <script src="js/popper.min.js"></script>

        <!-- bootstrap -->
        <script src="js/bootstrap.min.js"></script>

        <!-- core.min.js -->
        <script src="js/core.min.js"></script>

        <!-- search -->
        <script src="search/search.js"></script>

        <!-- custom scripts -->
        <script src="js/main.js"></script>

        <!-- form plugins js -->
        <script src="quform/js/plugins.js"></script>

        <!-- form scripts js -->
        <script src="quform/js/scripts.js"></script>

        <!-- all js include end -->
    </body>
</html>
