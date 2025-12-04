<!doctype html>
<html dir="<?php if (isset($_GET['dir'])) echo $_GET['dir']; ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <!-- Flag Icons CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/vendors/select2/select2.min.css" />

    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="assets/vendors/flatpickr/flatpickr.min.css">

    <!-- Noty CSS -->
    <link rel="stylesheet" href="assets/vendors/noty/noty.css">
    <link rel="stylesheet" href="assets/vendors/noty/nest.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css">


    <?php

    if (isset($_GET['dir']) && $_GET['dir'] == 'rtl') {
        echo '<link rel="stylesheet" href="assets/css/style-font1-rtl.min.css">';
    } else {
        echo '<link rel="stylesheet" href="assets/css/style-font1-ltr.min.css">';
    }

    ?>

    <?php

    // if (isset($_GET['dir']) && $_GET['dir'] == 'rtl') {
    //     echo '<link rel="stylesheet" href="assets/css/style-font2-rtl.min.css">';
    // } else {
    //     echo '<link rel="stylesheet" href="assets/css/style-font2-ltr.min.css">';
    // }

    ?>

    <link rel="icon" type="image/x-icon" href="assets/images/icons-svg/logo.svg">

    <title> Saudi contractors authority </title>

</head>

<body class="">