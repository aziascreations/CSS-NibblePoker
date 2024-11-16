<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <!--<meta name="viewport" content="width=device-width"/>-->
    <meta name="author" content="Herwin Bozet">
    <meta name="robots" content="index, follow">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="alternate icon" href="/favicon.ico">
    <link rel="stylesheet" href="/css/nibblepoker.min.css">
    <link rel="stylesheet" href="/css/debugger.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
          crossorigin="anonymous"
          referrerpolicy="no-referrer" />
    <title>NibblePoker's CSS Theme</title>
    <meta name="description" content="...">
    <meta property="og:title" content="NibblePoker"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://css.nibblepoker.com/"/>
    <meta property="og:image" content="???"/>
    <meta property="og:image:type" content="image/png"/>
    <meta property="og:description" content="..."/>
</head>

<body class="layout-generic">

<!-- Sidebar -->
<?php include("./parts/sidebar.php"); ?>

<header class="w-full p-m pl-s">
    <h1 class="t-size-17 t-w-500">
        <i class="fa-brands fa-css3-alt mr-s"></i>NibbleCSS Documentation
    </h1>
</header>

<main id="main" class="b br-0 p-m rl-m">
    <!-- PHP Utils -->
    <?php
        $root_path = __DIR__;

        // Source: https://stackoverflow.com/a/2510459
        function formatBytes($bytes, $precision = 2): string {
            $units = array('B', 'KiB', 'MiB', 'GiB', 'TiB');

            $bytes = max($bytes, 0);
            $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
            $pow = min($pow, count($units) - 1);

            $bytes /= pow(1024, $pow);

            return round($bytes, $precision) . " " . $units[$pow];
        }
    ?>

    <!-- Introduction -->
    <?php include("./parts/intro.php"); ?>

    <!-- Text > Weights -->
    <?php include("./parts/text_weights.php"); ?>

    <!-- Text > Styles -->
    <?php include("./parts/text_styles.php"); ?>

    <!-- Text > Alignment -->
    <?php include("./parts/text_alignment.php"); ?>

    <!-- Text > Modifiers -->
    <?php include("./parts/text_modifiers.php"); ?>

    <!-- Text > Links -->
    <?php include("./parts/text_links.php"); ?>

    <!-- Text > Misc -->
    <?php include("./parts/text_misc.php"); ?>

    <!-- Spacing -->
    <?php include("./parts/spacing.php"); ?>

    <!-- Rounding -->
    <?php include("./parts/rounding.php"); ?>

    <!-- Lists -->
    <?php include("./parts/lists.php"); ?>

    <!-- Grids -->
    <?php include("./parts/grids.php"); ?>

    <!-- Tables -->
    <?php include("./parts/tables.php"); ?>

    <!-- Horizontal Rulers -->
    <?php include("./parts/horizontal_rulers.php"); ?>

    <!-- Buttons -->
    <?php include("./parts/buttons.php"); ?>
</main>

<footer class="d-flex flex-align-center w-full p-s py-xs">
    <button id="sidebar-toggle-footer" class="p-xs border r-s t-size-10"
            aria-label="Open and close the navigation sidebar.">
        <i class="fa fa-bars px-xxs" aria-hidden="true"></i>
    </button>
    <p class="flex-fill t-center t-size-10 t-w-500 t-half-muted">
        <a class="a-hidden" href="https://nibblepoker.lu/privacy/">Privacy policy</a>
    </p>
    <a href="/">
        <img id="logo-footer" alt="Website's logo" draggable="false"
             src="https://nibblepoker.lu/resources/NibblePoker/images/logos/v2_full_unshaded_original.svg">
    </a>
</footer>

<script src="/js/sidebar.js"></script>
<script src="/js/text-direction-switch.js"></script>
</body>
</html>
