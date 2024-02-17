<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{!! !empty('$meta_title') ? $meta_title : 'Personal Portfolio' !!}</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Template CSS -->
    <link href="css/preloader.min.css" rel="stylesheet">
    <link href="css/circle.css" rel="stylesheet">
    <link href="css/fm.revealator.jquery.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Skin CSS -->
    <link href="css/skins/yellow.css" rel="stylesheet">

    <!-- Live Style Switcher -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="css/skins/blue.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="css/skins/yellow.css" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="css/skins/blueviolet.css" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="css/skins/goldenrod.css" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="css/skins/magenta.css" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="css/skins/purple.css" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="css/skins/red.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="css/skins/yellowgreen.css" />
    <link rel="stylesheet" type="text/css" href="css/styleswitcher.css" />

    <!-- Modernizr JS -->
    <script src="js/modernizr.custom.js"></script>
</head>
<body class="{!! !empty($className) ? $className : '' !!}">

    @include('layouts._sidebar')

    @yield('content')

    <!-- jQuery -->
    <script src="js/jquery-3.5.0.min.js"></script>
    <!-- Style Switcher -->
    <script src="js/styleswitcher.js"></script>
    <!-- Preloader -->
    <script src="js/preloader.min.js"></script>
    <!-- Revealator -->
    <script src="js/fm.revealator.jquery.min.js"></script>
    <!-- Images Loaded -->
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <!-- Masonry -->
    <script src="js/masonry.pkgd.min.js"></script>
    <!-- Classie -->
    <script src="js/classie.js"></script>
    <!-- Grid Gallery -->
    <script src="js/cbpGridGallery.js"></script>
    <!-- Hoverdir -->
    <script src="js/jquery.hoverdir.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.js"></script>
    <!-- Custom JS -->
    <script src="js/custom.js"></script>

</body>
</html>
